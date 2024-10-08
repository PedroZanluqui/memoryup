require('dotenv').config({ path: './config/.env' });
const cors = require('cors');


const express = require('express');
const { GoogleGenerativeAI } = require("@google/generative-ai");

const app = express();
const port = 3000;

app.use(cors());

// Servir arquivos estáticos da pasta "public"
app.use(express.static('public'));

// Adicionar middleware para analisar JSON
app.use(express.json());

const schema = {
    type: "object",
    properties: {
      status: {
        type: "string",
        enum: ["sucesso", "erro"]
      },
      dados: {
        type: "object",
        properties: {
          planoDeRevisao: {
            type: "object",
            properties: {
              resumo: { type: "string" },
              termosChave: {
                type: "array",
                items: {
                  type: "object",
                  properties: {
                    termo: { type: "string" },
                    definicao: { type: "string" }
                  },
                  required: ["termo", "definicao"]
                }
              },
              exercicios: {
                type: "array",
                items: {
                  type: "object",
                  properties: {
                    pergunta: { type: "string" },
                    opcoes: {
                      type: "array",
                      items: { type: "string" }
                    },
                    respostaCorreta: { type: "string" },
                    explicacao: { type: "string" }
                  },
                  required: ["pergunta", "opcoes", "respostaCorreta", "explicacao"]
                }
              }
            },
            required: ["resumo", "termosChave", "exercicios"]
          },
          mensagem: { type: "string" }
        },
        required: ["planoDeRevisao"]
      }
    },
    required: ["status", "dados"]
  }

// Inicializar o modelo usando a chave da API do .env
const genAI = new GoogleGenerativeAI(process.env.API_KEY);
const model = genAI.getGenerativeModel({
  model: "gemini-1.5-flash",
  systemInstruction: "Você é um assistente para estudantes, especializado em organizar rotinas de estudo.",
  generationConfig: {
    responseMimeType: "application/json",
    responseSchema: schema,
  },
});

app.get('/', (req, res) => {
    res.send('Bem-vindo ao servidor Node.js!');
    console.log('Server aberto');
  });

app.post('/generate-text', async (req, res) => {
  try {
    const { prompt } = req.body; // Obter o prompt do corpo da requisição
    const result = await model.generateContent(prompt);
    const response = await result.response;
    const text = await response.text();
    console.log(text);
    res.json({ text });
  } catch (error) {
    console.error('Erro ao gerar texto:', error);
    res.status(500).send("Erro ao gerar texto.");
  }
});

app.listen(port, () => {
  console.log(`Servidor rodando em http://localhost:${port}`);
});
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

// Inicializar o modelo usando a chave da API do .env
const genAI = new GoogleGenerativeAI(process.env.API_KEY);
const model = genAI.getGenerativeModel({ model: "gemini-1.5-flash" });

// Modificar o endpoint para aceitar requisições POST

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
    
    res.json({ text });
  } catch (error) {
    console.error('Erro ao gerar texto:', error);
    res.status(500).send("Erro ao gerar texto.");
  }
});

app.listen(port, () => {
  console.log(`Servidor rodando em http://localhost:${port}`);
});
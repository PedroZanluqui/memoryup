let response_result; //declara as variáveis de escopo global
let jsonData;
let reponse_error;
let prompt;
let selected_category;

console.log("JavaScript script.js foi aberto!\n");

document.getElementById('generateButton').addEventListener("click", async (event)=>{
        event.preventDefault();
        prompt = document.getElementById("reviewTitle").value;
        selected_category = document.getElementById("selectedCategory").value;
        console.log("Processo de requisição iniciado!");

        if(selected_category != ""){
            try {
                const response = await fetch('http://localhost:3000/generate-text', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ prompt })
                });
                if (!response.ok) {
                    throw new Error('Erro na requisição');
                    response_result = 0;
                }
                console.log("Requisição feita.\n");
                const rawData = await response.json();
                jsonData = JSON.parse(rawData.text);
                response_result = 1;
                console.log("Sucesso na requisição!\n");
            } catch (error) {
                console.error('Erro na requisição:' + error + "\n");
                reponse_error = error;
                response_result = 0;
            }
        } else{
            result = 0;
            console.error('Nenhuma categoria selecionada.');
        }

    console.log(response_result);

    if(response_result == 1){
        console.log("Entrou no condicional do AJAX");

        const summary = jsonData.dados.planoDeRevisao.resumo;

        const keyword1 = jsonData.dados.planoDeRevisao.termosChave[0].termo;
        const meaning1 = jsonData.dados.planoDeRevisao.termosChave[0].definicao;

        const keyword2 = jsonData.dados.planoDeRevisao.termosChave[1].termo;
        const meaning2 = jsonData.dados.planoDeRevisao.termosChave[1].definicao;

        const keyword3 = jsonData.dados.planoDeRevisao.termosChave[2].termo;
        const meaning3 = jsonData.dados.planoDeRevisao.termosChave[2].definicao;

        const keyword4 = jsonData.dados.planoDeRevisao.termosChave[3].termo;
        const meaning4 = jsonData.dados.planoDeRevisao.termosChave[3].definicao;

        const question1 = jsonData.dados.planoDeRevisao.exercicios[0].pergunta;
        const choices1 = jsonData.dados.planoDeRevisao.exercicios[0].opcoes;
        const answer1 = jsonData.dados.planoDeRevisao.exercicios[0].respostaCorreta;
        const solution1 = jsonData.dados.planoDeRevisao.exercicios[0].explicacao;
        
        const question2 = jsonData.dados.planoDeRevisao.exercicios[1].pergunta;
        const choices2 = jsonData.dados.planoDeRevisao.exercicios[1].opcoes;
        const answer2 = jsonData.dados.planoDeRevisao.exercicios[1].respostaCorreta;
        const solution2 = jsonData.dados.planoDeRevisao.exercicios[1].explicacao;
        
        const question3 = jsonData.dados.planoDeRevisao.exercicios[2].pergunta;
        const choices3 = jsonData.dados.planoDeRevisao.exercicios[2].opcoes;
        const answer3 = jsonData.dados.planoDeRevisao.exercicios[2].respostaCorreta;
        const solution3 = jsonData.dados.planoDeRevisao.exercicios[2].explicacao;

        const feedback = jsonData.dados.mensagem;

        response_result = 0;
        
        $(document).ready(function() {
            $.ajax({
                url: "addReview.php",
                method: "POST",
                data: { "selected_category_id": selected_category,
                        "review_title": prompt,
                    
                        "summary": summary,

                        "keyword1": keyword1,
                        "meaning1": meaning1,

                        "keyword2": keyword2,
                        "meaning2": meaning2,

                        "keyword3": keyword3,
                        "meaning3": meaning3,

                        "keyword4": keyword4,
                        "meaning4": meaning4,
                    
                        "question1": question1,
                        "choices1": choices1,
                        "answer1": answer1,
                        "solution1": solution1,
                    
                        "question2": question2,
                        "choices2": choices2,
                        "answer2": answer2,
                        "solution2": solution2,
                    
                        "question3": question3,
                        "choices3": choices3,
                        "answer3": answer3,
                        "solution3": solution3,
                    
                        "feedback": feedback}
            })
            .done(function(response) {
                console.log("Resposta do servidor:", response);
            })
            .fail(function(jqXHR, textStatus, errorThrown) {
                console.error("Erro na requisição:", textStatus, errorThrown);
            });
        });
    } else{
        console.log("Não entrou no condicional do AJAX");
    }
});
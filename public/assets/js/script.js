console.log("Abriu o script!");
document.getElementById('generateButton').addEventListener('click', async (event) => {
    event.preventDefault();
    const prompt = "Revolução Francesa foi o ciclo revolucionário que aconteceu na França entre 1789 e 1799 e que marcou o fim do absolutismo nesse país. Essa revolução, além de seu caráter burguês, teve uma grande participação popular e atingiu um alto grau de radicalismo, uma vez que a situação do povo francês era precária em virtude da crise que o país enfrentava Essa revolução foi um marco na história da humanidade, porque inaugurou um processo que levou à universalização dos direitos sociais e das liberdades individuais a partir da Declaração dos Direitos do Homem e do Cidadão. Também abriu caminho para a consolidação de um sistema republicano pautado pela representatividade popular, hoje chamado de democracia";
    console.log("Entrou no evento!");

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
        }
        console.log("chegou a requisição!");
        const rawData = await response.json();
        const JSONobject = JSON.parse(rawData.text);
        console.log(JSONobject.dados.planoDeRevisao.resumo);
    } catch (error) {
        console.error('Erro:', error);
    }
});
console.log("Abriu o script!");
document.getElementById('generateButton').addEventListener('click', async (event) => {
    event.preventDefault();
    const prompt = "teste";
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

        const data = await response.json();
        console.log("Chegou a resposta da IA! ", data.text);
    } catch (error) {
        console.error('Erro:', error);
    }
});
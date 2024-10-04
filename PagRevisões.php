<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/LogoICO.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/PagRevisões.css">
    <title>Memory UP</title>
</head>
<body>
    <nav>
        <ul id="menuh">
            <li>
                <img src="./assets/img/Logo.svg" alt="Logo do Memory UP" class="logo">
                <a href="index.php" class="ancora">Home</a>
                <a href="Suporte.php" class="ancora">Suporte</a>
                <a href="PagRevisões.php"><button class="revisao">Planejar Revisões</button></a>
                <a href="Revisar.php"><button class="revisar">Revisar</button></a>
                <a href="PagUser.php"><img src="./assets/img/Avatar_Usuario.svg" alt="imagem do usuário" class="user"></a>
            </li>
        </ul>
    </nav>

    <main>
        <div class="classeQueNaoFunciona" style="margin: 0 10rem;">
            <div class="text-pagRevisao">
                <h2>Planejar Revisão</h2>

                <div class="input-categoria">
                    <form id="form-categoria">
                    <p>Criar nova categoria:</p><input type="text"><button type="submit" class="button-categoria" form="form-categoria">+</button>
                    </form>
                </div>

                <div class="input-categoria">
                    <form id="form-categoria">
                    <p>Selecione a categoria:</p><select id="estado" name="estado"> <option value="Portugues">Português</option> <option value="Matematica">Matemática</option> <option value="Geografia">Geografia</option> </select>
                    </form>
                </div>
            </div>
        </div>

    <div class="main-Upload-Planejamento">
            <section class="section-material-estudos"  style="background-color: white;">
                <div class="nav-of-section-material-estudos">
                    <section class="toggles-of-material-estudos">
                        <button class="button-toggle" id="adicionar-material">Adicionar Material</button>
                        <button class="button-toggle" id="recentes">Recentes</button>
                    </section>
                </div>
                <hr>
                <br>
                <div class="file-area">
                  <label for="file-input" class="label-input">Selecione ou jogue aqui<br> seus arquivos</label>
                  <input type="file" id="file-input">
                </div>
            </section>

        <div class="Planejamento">
            <h2>Tópico: <input type="text" ></h2>

            <h2>Dias disponíveis para estudo:</h2>
            <input type="number" class="qtd-dias-planejamento" placeholder="Qtd. Dias" style="width: 20rem; display: flex; flex-direction: column; justify-content: center; align-items: center;">

        </div>
        <img src="./assets/img/img-revisoes.svg" alt="Garoto escrevendo em um livro">

    </div>
    <div class="div-button-enviar-revisoes">
        <form id="button-revisoes">
            <button type="submit" form="button-revisoes">Planejar Revisões</button>
        </form>
    </div>
    </main>

    <footer>
        <img src="./assets/img/footer.svg" alt="" class="imgFooter">

        <div class="footer">
            <img src="./assets/img/Logo.svg" alt="Logo do Memory UP" class="logoFooter">
        
            <ul class="textFooter">
                <li>
                    <a href="index.php"  class="">Home</a>
                    <br>
                    <a href="Suporte.php"  class="">Suporte</a>
                    <br>
                    <a href="PagRevisões.php"  class="">Planejar Revisão</a>
                    <br>
                    <a href="Revisar.php"  class="">Revisar</a>
                </li>
            </ul>
            <p class="copy">Criado e desenvolvido pelo time Devs212</p>
        </div>
        
    </footer>
</body>
</html>
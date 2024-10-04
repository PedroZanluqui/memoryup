<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/LogoICO.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/PaginaUsuario.css">
    <title>Minha página</title>
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
        <div class="Cronograma" style=" display: flex; flex-direction: column; align-items: center; justify-content: center;">
            <h2 class="Title_Cronograma">Cronograma Semanal</h2>

            <div class="card_para_cronograma">
                <section class="cards_cronograma"  >
                    <h2>D</h2>
                    <p id="Card_cronograma_domingo">Oração <br>Subordinadas</p>
                </section>

                <section class="cards_cronograma"  >
                    <h2>S</h2>
                    <p id="Card_cronograma_segunda">Verbos <br>Advérbios</p>
                </section>

                <section class="cards_cronograma"  >
                    <h2>T</h2>
                    <p id="Card_cronograma_terca">Adjetivos</p>
                </section>

                <section class="cards_cronograma">
                    <h2>Q</h2>
                    <p id="Card_cronograma_quarta"></p>
                </section>

                <section class="cards_cronograma"  >
                    <h2>Q</h2>
                    <p id="Card_cronograma_quinta">Substantivos</p>
                </section>

                <section class="cards_cronograma"  >
                    <h2>S</h2>
                    <p id="Card_cronograma_sexta">Locuções <br> Adverbiais</p>
                </section>

                <section class="cards_cronograma"  >
                    <h2>S</h2>
                    <p id="Card_cronograma_sabado">Oração <br>Subordinadas</p>
                </section>
            </div>
        </div>

    
        <div class="main-content">
            <aside class="aside_categoria">
                <div class="Biblioteca_Categorias">
                    <h2>Biblioteca das Categorias</h2>
                </div>
                <div class="Categorias_estudo">
                    <section class="Categoria_Gramatica">
                        <div class="text-container">
                            <h2 style="color: var(--main--purpletext--solidcolor)">Gramática</h2>
                            <p>Verbos &nbsp;&nbsp; Uso de crase</p>
                        </div>
                        <img src="./assets/img/play.svg" alt="botao de play">
                    </section>
    
                    <section class="Categoria_Gramatica">
                        <div class="text-container">
                            <h2 style="color: var(--main--purpletext--solidcolor)">Literatura</h2>
                            <p>Quinhentismo &nbsp;Barroco &nbsp;Arcadismo &nbsp;Romantismo</p>
                        </div>
                        <img src="./assets/img/play.svg" alt="botao de play">
                    </section>
    
                    <section class="Categoria_Gramatica">
                        <div class="text-container">
                            <h2 style="color: var(--main--purpletext--solidcolor)">Inglês</h2>
                            <p>Tópico 1 &nbsp;&nbsp;Tópico 2</p>
                        </div>
                        <img src="./assets/img/play.svg" alt="botao de play">
                    </section>
                </div>
            </aside>
    
            <section class="Revisao_Prevista">
                <div class="previsao_title">
                    <h2>Revisão Prevista</h2>
                </div>
                <div class="revisoes_previs">
                    <section class="revisao-hoje">
                        <p>HOJE</p>
                        <hr>
                        <div class="btn_rev1">
                            <button class="btn_revisar" type="submit">Verbos</button>
                        </div>
                        <div class="btn_rev2">
                            <button class="btn_revisar" type="submit">Advérbios</button>
                        </div>
                    </section>

                    <section class="revisao-atraso">
                        <p>EM ATRASO</p>
                        <hr>
                        <div class="btn_rev3">
                            <button class="btn_revisar" type="submit">Orações<br> subordinadas</button>
                        </div>
                    </section>
                </div>

                <h2 style="margin-top: 6rem;">Estatísticas Diárias</h2>

                <div class="revisoes_previs">
                    <section class="revisao-hoje">
                        <h2 style="text-align: center;">PROGRESSO</h2>
                        <hr>
                        <div class="btn_rev1">
                            <img src="./assets/img/Progresso.svg" alt="meio circulo que mostra o progresso do seu estudo" style="margin-top: 3rem;">
                        </div>
                    </section>

                    <section class="revisao-atraso">
                        <h2 style="text-align: center;">OFENSIVA</h2>
                        <hr>
                        <div class="btn_rev3">
                            <img src="./assets/img/Ofensiva Diária.svg" alt="uma muda de planta que é sobre a sua ofensiva nos estudos" style="margin-top: 3rem;">
                        </div>
                    </section>
                </div>
            </section>
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
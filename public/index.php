<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/LogoICO.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <title>Memory UP</title>
</head>

<?php session_start(); $_SESSION['user_id'] = 0; ?>

<body onload="endLoader()">
    <div class="loader" id="loader"></div>
    <nav id="nav_content" style="display: none">
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

    <main id="main_content" style="display: none">
        <div id="textoPrincipal">
            <h1>Mude sua forma de estudar!</h1>
            <p class="P_principal">Faça o upload de materiais didático e gere planejamentos personalizados com resumos
                para otimizar seu<br> aprendizado, com base na curva do esquecimento.</p>
            <div class="botoesPrincipais">
                <a href="#curvaEsquecimento" target="_self"><button class="curva">O que é a Curva do
                        Esquecimento?</button></a>
               <a href="#pricing-section" target="_self"> <button class="testar">Testar Agora</button></a>
            </div>
        </div>

        <div class="Cards">
            <img src="./assets/img/amico.svg" alt="mulher pensando">
            <section class="card">
                <div class="card-front">
                    <p class="P_card">O que é<br>Memory UP?</p>
                </div>
                <div class="card-back">
                    <p>Somos uma solução multiplataforma para o problema da Curva do Esquecimento.
                        Nós cuidamos de tudo! Basta fazer o upload dos materiais (vídeos, documentos ou áudios) e
                        planejamos as revisões do que foi estudado. Quem faz isso é a inteligência artificial, que cria
                        resumos, flashcards e questões, tudo de acordo com a necessidade do usuário.</p>
                </div>
            </section>
        </div>

        <div class="curvaEsquecimento" id="curvaEsquecimento">
            <h2>O que é a curva do esquecimento?</h2>
            <p class="conceito">É um conceito que descreve <span class="span">como esquecemos informações<br> ao longo
                    do tempo</span> se não as revisarmos.<br>
                No entanto, <span class="span">revisando essas informações periodicamente,<br> podemos reforçar nossa
                    memória.</span></p>
            <img src="./assets/img/Gráfico.svg" alt="Grafico de tempo decorrido da aprendizagem" class="Grafico">
        </div>

        <div class="div-of-frame-on-landing-page">
            <section class="section-of-frame-on-landing-page">
                <h1>Importância<br> da Revisão<br> do Conteúdo</h1>

                <div class="list-of-frame-on-landing-page">
                    <ul>
                        <li><span>Reforço da Memória:<span class="span-of-list-frame">Consolida informações na memória de longo prazo.</span></span></li>
                        <li><span>Redução do Esquecimento: <span class="span-of-list-frame">Combate a perda natural de informações.</span></span></li>
                        <li><span>Aumento da Compreensão: <span class="span-of-list-frame">Melhora a compreensão e corrige lacunas.</span></span></li>
                        <li><span>Melhoria do Desempenho: <span class="span-of-list-frame">Resulta em melhor desempenho em avaliações.</span></span></li>
                        <li><span>Confiança nos Estudos: <span class="span-of-list-frame">Aumenta a confiança e a preparação.</span></span></li>
                    </ul>
                </div>
            </section>
        </div>

        <div class="pricing-section" id="pricing-section">
            <h2>Planos:</h2>
            <div class="pricing-cards">
        
                <!-- Card Básico -->
                <div class="pricing-card basic">
                    <h3>R$0,00/mês</h3>
                    <h4>Básico</h4>
                    <p>Seu começo perfeito para aprender mais</p>
                    <ul>
                        <li>3 categorias na biblioteca</li>
                        <li>5 criações de revisão por semana</li>
                        <li>Limite de envio de 3500 caracteres</li>
                        <li>Acesso apenas às revisões diárias</li>
                    </ul>
                    <button>ASSINAR</button>
                </div>
        
                <!-- Card Plus -->
                <div class="pricing-card plus">
                    <h3>R$12,70/mês</h3>
                    <h4>Plus</h4>
                    <p>Um salto no seu aprendizado agora</p>
                    <ul>
                        <li>Categorias ilimitadas</li>
                        <li>14 criações de revisão por semana</li>
                        <li>Limite de envio de 6000 caracteres</li>
                        <li>Acesso completo a todas as revisões</li>
                    </ul>
                    <button>ASSINAR</button>
                </div>
        
                <!-- Card Premium -->
                <div class="pricing-card premium">
                    <span class="most-popular">MAIS POPULAR</span>
                    <h3><span class="premium-price">R$14,70</span>/mês</h3>
                    <h4 class="">Premium</h4>
                    <p>Acesso total às revisões de ponta</p>
                    <ul>
                        <li>Categorias ilimitadas e acesso completo às revisões</li>
                        <li>30 criações de revisão por semana</li>
                        <li>Limite de envio de 9000 caracteres</li>
                        <li>Acesso à biblioteca de questões</li>
                    </ul>
                    <button>ASSINAR</button>
                </div>
        
                <!-- Card Anjo -->
                <div class="pricing-card anjo">
                    <h3>R$28,70/mês</h3>
                    <h4>Anjo</h4>
                    <p>Invista, transforme vidas</p>
                    <ul>
                        <li>Todos os benefícios Premium</li>
                        <li>Colabore com um estudante de baixa renda</li>
                    </ul>
                    <button>ASSINAR</button>
                </div>
            </div>
        </div>
        
    </main>

    <footer id="footer_content" style="display: none">
    <img src="./assets/img/footer.svg" alt="" class="imgFooter">
    <div class="footer">
        <img src="./assets/img/Logo.svg" alt="Logo do Memory UP" class="logoFooter">
        <ul class="textFooter">
            <li><a href="index.php" class="">Home</a></li>
            <li><a href="Suporte.php" class="">Suporte</a></li>
            <li><a href="PagRevisões.php" class="">Planejar Revisão</a></li>
            <li><a href="Revisar.php" class="">Revisar</a></li>
        </ul>
        <p class="copy">Criado e desenvolvido pelo time Devs212</p>
    </div>
</footer>

    <script src="assets/js/script.js"></script>
</body>

</html>
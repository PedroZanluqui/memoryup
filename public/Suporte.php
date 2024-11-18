<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/LogoICO.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/suporte.css">
    <title>Memory UP</title>
</head>
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
        <div class="contatos">
            <section class="FrameContatos">
                <h2 class="TitleContato">Informações de Contato</h2>
        
                <p class="textContato">Preencha o formulário e nossa equipe<br> entrará em contato com você em até<br> 24 horas.</p>
        
                <div class="cardContato">
                    <div class="contact-item">
                        <img src="./assets/img/Vector.svg" alt="Telefone" class="ImgContato"> 
                        <p class="TextFrame">(XX) XXXXX-XXXX</p> 
                    </div>
                    <div class="contact-item">
                        <img src="./assets/img/email.svg" alt="Email" class="ImgContato">
                        <p class="TextFrame">contato.memoryup@gmail.com</p>
                    </div>
                    <div class="contact-item">
                        <img src="./assets/img/cidade.svg" alt="Cidade" class="ImgContato">
                        <p class="TextFrame">Novo Horizonte - São Paulo</p>
                    </div>
                </div>
            </section>

            <section class="FormContatos">
                <h2 class="h1_Ajuda_Contatos">Como podemos ajudar?</h2>

                <form id="my-form">
                    <div class="wrap">
                        <div class="div_forms">
                             <p class="TextForms">Primeiro Nome</p>
                            <input  class="input-field" type="text">
                        </div> 
                      
                         <div class="div_forms">
                             <p class="TextForms">Sobrenome</p>
                             <input  class="input-field" type="text">
                         </div>                               
                    </div>

                    <div class="wrap">
                        <div class="div_forms">
                             <p class="TextForms">Email</p>
                            <input  class="input-field" type="text">
                        </div> 
                      
                         <div class="div_forms">
                             <p class="TextForms">Telefone</p>
                             <input  class="input-field" type="number">
                         </div>                               
                    </div>

                    <div class="div_forms">
                        <p class="TextForms">Mensagem</p>
                        <input placeholder="Escreva sua mensagem!" class="input-field-sms" type="text">
                    </div>  
                </form>
                <div class="div_btn_enviar">
                    <button type="submit" form="my-form" class="btn_forms">Enviar Mensagem</button>
                </div>
            </section>
        </div>
        
    </main>

    <footer id="footer_content" style="display: none">
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
    <script src="assets/js/script.js"></script>

</body>
</html>
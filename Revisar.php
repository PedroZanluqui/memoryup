<!DOCTYPE html>
<html lang="pt-BR   ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/LogoICO.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/PaginaRevisar.css">
    <title>Revisão</title>
</head>
<body>
    <?php 
        session_start();
        $_SESSION['user_id']= 0;
        $user_id = $_SESSION['user_id'];
        require_once('connection/connection.php');

        $get_review_table = mysqli_query($connection, "SELECT * FROM review WHERE user_id = $user_id");

        $get_review = mysqli_fetch_assoc($get_review_table);
    ?>

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
        <div class="ResumeArea" style=" display: flex; flex-direction: row; align-items: center; justify-content: center; font-size: 2rem; margin-left: 5rem; gap: 1rem; padding: 5rem; margin-bottom: 12rem;">
            <div class="textContainer">
                <h2>Resumo</h2>
                <form id="revisar-form">
                    <textarea name="summary" id="Resumo"><?php echo $get_review['summary']; ?></textarea>
                </form>
                <div style="display: flex; align-items: center; justify-content: flex-end;">
                 <button class="btn_revisar" type="submit" form="revisar-form">Editar Texto</button>
                 <img src="./assets/img/pencil.svg" alt="">
                </div>
            </div>
            <img src="./assets/img/book.svg" alt="Menina com lapis gigante escrevendo em um livro também gigante">
        </div>

        <div class="flashcards">
            <h2>Flashcards</h2>

            <div class="CardsFlash">
                <section class="card2">
                    <div class="card2-front">
                        <p class="P_card2"><?php echo $get_review['keyword1'] ?></p>
                    </div>
                    <div class="card2-back">
                        <p><?php echo $get_review['meaning1'] ?></p>
                    </div>
                </section>

                <section class="card2">
                    <div class="card2-front">
                        <p class="P_card2"><?php echo $get_review['keyword2'] ?></p>
                    </div>
                    <div class="card2-back">
                        <p><?php echo $get_review['meaning2'] ?></p>
                    </div>
                </section>
            </div>

            <div class="CardsFlash">
                <section class="card2">
                    <div class="card2-front">
                        <p class="P_card2"><?php echo $get_review['keyword3'] ?></p>
                    </div>
                    <div class="card2-back">
                        <p><?php echo $get_review['meaning3'] ?></p>
                    </div>
                </section>

                <section class="card2">
                    <div class="card2-front">
                        <p class="P_card2"><?php echo $get_review['keyword4'] ?></p>
                    </div>
                    <div class="card2-back">
                        <p><?php echo $get_review['meaning4'] ?></p>
                    </div>
                </section>
            </div>
        </div>

        <div class="quiz-container">

            <div class="question">
                <p>1. <?php echo $get_review['question1'] ?></p>
                <div class="options">
                    <button>A) Rachel de Queiroz</button>
                    <button>B) Jorge Amado</button>
                    <button>C) José Américo de Almeida</button>
                    <button>D) Carlos Drummond de Andrade</button>
                </div>
            </div>

            <div class="question">
                <p>2. <?php echo $get_review['question2'] ?></p>
                <p><?php echo $get_review['choices2'] ?></p>
                <div class="options">
                    <button>A</button>
                    <button>B</button>
                    <button>C</button>
                    <button>D</button>
                </div>
            </div>
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
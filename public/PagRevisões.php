<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/LogoICO.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/PagRevisões.css">
    <title>Memory UP</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<?php
    session_start();
    $user_id = $_SESSION['user_id'];

    if(!isset($_SESSION['generate_response']))
        $_SESSION['generate_response'] = 0;

    require_once("./connection/connection.php");

    $result_category_list = mysqli_query($connection, "SELECT title, category_id FROM category WHERE user_id = $user_id");
    if (!$result_category_list) {
        die("Query failed: " . mysqli_error($connection));
        file_put_contents('debugPhp.log', "ERRO - Busca na tabela de categorias falhou: " . mysqli_error($connection), FILE_APPEND);
    }
?>

<script>
    console.log("PagRevisões.php foi aberta!");
    let generate_response = <?php echo $_SESSION['generate_response'] ?>;
</script>

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
                    <form id="form-categoria" method="POST" action="addCategory.php">
                    <p>Criar nova categoria:</p><input type="text" name="title"><button id="add-category-button" type="submit" class="button-categoria" form="form-categoria">+</button>
                    </form>
                </div>
            </div>
        </div>

        <br><br><br>

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
                <form class="input-categoria">
                        <label class="Planejamento-label">Selecione a categoria:</label>
                            <select id="selectedCategory" name="selected-category">
                                <option value="" disabled selected >Selecione a categoria abaixo</option>
                                <<?php while ($data = mysqli_fetch_assoc($result_category_list)) { ?>
                                        <option value = "<?php echo $data['category_id']; ?>"> <?php echo $data['title']; ?></option>";
                                <?php } ?>
                            </select>
                            <br><br><br><br><br><br><br><br>
                    <label for="review-title" class="Planejamento-label">Tópico da Revisão:</label>
                    <input class="Planejamento-input" placeholder="Digite aqui o tema estudado" type="text" name="review-title" id="reviewTitle" required> <!-- input do usuário que será enviado para a API -->
                    <br><br><br><br><br><br><br><br>
                    <label class="Planejamento-label">Dias disponíveis para estudo:</label>
                    <input type="number" class="qtd-dias-planejamento" placeholder="Qtd. Dias">
                    <br><br><br><br><br><br><br><br>
                    <button class="button-enviar-revisoes" type="submit" id="generateButton" name="generate-review">Planejar Revisões</button>
                </form>
            </div>
            <img src="./assets/img/img-revisoes.svg" alt="Garoto escrevendo em um livro" class="img-fix">
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
    <script src="assets/js/script.js" type="module"></script>
</body>
</html>
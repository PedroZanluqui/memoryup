<?php
    session_start();
    $user_id = $_SESSION['user_id'];
    require_once("./connection/connection.php");
    
    if (isset($_POST['title'])) { // checa se a variável foi definida (impede a inicialização automática do PHP)
        $title = ucwords(trim($_POST['title']));
        if($title != ""){
            // checa se o nome de categoria já existe para o usuário que fez login
            $query = "SELECT COUNT(*) as count FROM category WHERE user_id = $user_id AND title = '$title'";
            $result = mysqli_query($connection, $query);

            if ($result) {
                $row = mysqli_fetch_assoc($result);
                $repetitions = $row['count'];
                
                if ($repetitions > 0) {
                    $_SESSION['message'] = "O nome de categoria já existe!";
                } else {
                    $query_insert = "INSERT INTO category (user_id, title) VALUES ($user_id, '$title')";
                    $result_category_insert = mysqli_query($connection, $query_insert);
                    
                    if (!$result_category_insert) {
                        $_SESSION['message'] = "Erro ao adicionar categoria: " . mysqli_error($connection);
                    } else {
                        $_SESSION['message'] = "Categoria adicionada com sucesso!";
                    }
                }
            } else {
                $_SESSION['message'] = "Erro ao executar query: " . mysqli_error($connection);
            }
            unset($_POST['title']);
        } else{
            $_SESSION['message'] = "Digite um título para a categoria!";
        }
    } else{
        $_SESSION['message'] = "Digite um título para a categoria!";
    }  
    header('Location: PagRevisões.php');
?>
<script>
    alert("Resultado: <?php echo $_SESSION['message'] ?>");
</script>

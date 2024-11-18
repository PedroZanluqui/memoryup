<?php
    session_start();
    $user_id = $_SESSION['user_id'];
    require_once("./connection/connection.php");

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    file_put_contents('debugPhp.log', "X Script addCategory.php aberto;\n", FILE_APPEND);
        
    $selected_category_id = $_POST['selected_category_id'];
    $review_title = mysqli_real_escape_string($connection, ucwords(strtolower(trim($_POST['review_title']))));
    $feedback = mysqli_real_escape_string($connection, $_POST['feedback']);
    $summary = mysqli_real_escape_string($connection, $_POST['summary']);
    $keyword1 = mysqli_real_escape_string($connection, $_POST['keyword1']);
    $meaning1 = mysqli_real_escape_string($connection, $_POST['meaning1']);
    $keyword2 = mysqli_real_escape_string($connection, $_POST['keyword2']);
    $meaning2 = mysqli_real_escape_string($connection, $_POST['meaning2']);
    $keyword3 = mysqli_real_escape_string($connection, $_POST['keyword3']);
    $meaning3 = mysqli_real_escape_string($connection, $_POST['meaning3']);
    $keyword4 = mysqli_real_escape_string($connection, $_POST['keyword4']);
    $meaning4 = mysqli_real_escape_string($connection, $_POST['meaning4']);
    $question1 = mysqli_real_escape_string($connection, $_POST['question1']);
    $option1_A = mysqli_real_escape_string($connection, $_POST['choices1'][0]);
    $option1_B = mysqli_real_escape_string($connection, $_POST['choices1'][1]);
    $option1_C = mysqli_real_escape_string($connection, $_POST['choices1'][2]);
    $option1_D = mysqli_real_escape_string($connection, $_POST['choices1'][3]);
    $option1_E = mysqli_real_escape_string($connection, $_POST['choices1'][4]);
    $answer1 = mysqli_real_escape_string($connection, $_POST['answer1']);
    $solution1 = mysqli_real_escape_string($connection, $_POST['solution1']);
    $question2 = mysqli_real_escape_string($connection, $_POST['question2']);
    $option2_A = mysqli_real_escape_string($connection, $_POST['choices2'][0]);
    $option2_B = mysqli_real_escape_string($connection, $_POST['choices2'][1]);
    $option2_C = mysqli_real_escape_string($connection, $_POST['choices2'][2]);
    $option2_D = mysqli_real_escape_string($connection, $_POST['choices2'][3]);
    $option2_E = mysqli_real_escape_string($connection, $_POST['choices2'][4]);
    $answer2 = mysqli_real_escape_string($connection, $_POST['answer2']);
    $solution2 = mysqli_real_escape_string($connection, $_POST['solution2']);
    $question3 = mysqli_real_escape_string($connection, $_POST['question3']);
    $option3_A = mysqli_real_escape_string($connection, $_POST['choices3'][0]);
    $option3_B = mysqli_real_escape_string($connection, $_POST['choices3'][1]);
    $option3_C = mysqli_real_escape_string($connection, $_POST['choices3'][2]);
    $option3_D = mysqli_real_escape_string($connection, $_POST['choices3'][3]);
    $option3_E = mysqli_real_escape_string($connection, $_POST['choices3'][4]);
    $answer3 = mysqli_real_escape_string($connection, $_POST['answer3']);
    $solution3 = mysqli_real_escape_string($connection, $_POST['solution3']);
    
    file_put_contents('debugPhp.log', "_ Variáveis:\n> categoria: " . $selected_category_id ."\n> Título: " . $review_title . "\n> Resumo: " . $summary . "\n", FILE_APPEND); //informa as variáveis transmitidas pelo POST ajax

    $query = "INSERT INTO `review`
            (`review_id`, `user_id`, `title`, `category_id`, `summary`, `keyword1`, `meaning1`, `keyword2`, `meaning2`, `keyword3`, `meaning3`, `keyword4`, `meaning4`, `question1`, `option1_A`, `option1_B`, `option1_C`,`option1_D`,`option1_E`, `answer1`, `solution1`, `question2`, `option2_A`, `option2_B`, `option2_C`,`option2_D`,`option2_E`, `answer2`, `solution2`, `question3`, `option3_A`, `option3_B`, `option3_C`,`option3_D`,`option3_E`, `answer3`, `solution3`, `feedback`) 
            VALUES (NULL, $user_id, '$review_title', $selected_category_id, '$summary', '$keyword1', '$meaning1', '$keyword2', '$meaning2', '$keyword3', '$meaning3', '$keyword4', '$meaning4', '$question1', '$option1_A', '$option1_B', '$option1_C', '$option1_D', '$option1_E', '$answer1', '$solution1', '$question2', '$option2_A', '$option2_B', '$option2_C', '$option2_D', '$option2_E', '$answer2', '$solution2', '$question3', '$option3_A', '$option3_B', '$option3_C', '$option3_D', '$option3_E', '$answer3', '$solution3', '$feedback')";

    $result_add_review = mysqli_query($connection, $query);

    if($result_add_review){
        file_put_contents('debugPhp.log', "_ QUERY SUCCESS: Revisão inserida no BD.\n", FILE_APPEND);

        $new_review_id = mysqli_fetch_assoc(mysqli_query($connection, "SELECT review_id FROM `review` WHERE user_id = $user_id AND title='$review_title' AND category_id=$selected_category_id"));
        $_SESSION['review_id'] = $new_review_id['review_id'];

        file_put_contents('debugPhp.log', "sessão[novo_id_revisao]: " . $_SESSION['review_id'] . "\n", FILE_APPEND);

    } else{
        file_put_contents('debugPhp.log', "_ QUERY ERROR: " . mysqli_error($connection) . "\n", FILE_APPEND);
    }

    file_put_contents('debugPhp.log', "_ Script addCategory.php fechado.\n\n", FILE_APPEND);
?>
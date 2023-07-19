<?php
require_once('connect.php');
$num_per_page = 3;

if(isset($_GET['page']))
{
    $page = $_GET['page'];
}
else
{
    $page = 1;
}

$start_from = ($page - 1) * $num_per_page;
$result = mysqli_query($connect, "SELECT * FROM forms limit $start_from, $num_per_page");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Обратная связь</title>
</head>
<body>
    <div class="container col-md-10">
        <?php
        $total = mysqli_num_rows($result);
        $total_pages = ceil($total / $num_per_page);
        echo "<ul class='pagination'>";
        for($i = 1; $i <= $total; $i++)
        {
            echo "<li class='page-item'>";
            echo "<a href='comments.php?page=".$i."' class='page-link'>".$i."</a>";
            echo "</li>";
        }
        echo "</ul>";
        if(mysqli_num_rows($result) == 0)
        {
            echo "Записи отсутствуют";
        } else {
            while($comments = mysqli_fetch_assoc($result))
            {
                echo '<div class="comment card">';
                echo 'Имя: '.$comments['user_name'].'<br>';
                echo 'Фамилия: '.$comments['user_surname'].'<br>';
                echo 'Email: '.$comments['user_email'].'<br>';
                echo 'Сообщение: '.$comments['user_text'].'<br>';
                echo 'Файл: '.'<img src="'.$comments['user_file'].'" alt="">'.'<br>';
                echo 'Пол: '.$comments['user_gender'].'<br>';
                echo '</div>';
            }
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>
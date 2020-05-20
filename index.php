<?php
// include
include_once __DIR__ . "/src/partials/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css"
        integrity="sha384-v8BU367qNbs/aIZIxuivaU55N5GPF89WBerHoGA4QTcbUjYiLQtKdrfXnqAcXyTv" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/css/main.css">
</head>

<body>
    <div class="card">
        <?php
foreach ($database as $val) {?>
        <div class="title">
            <?php echo $val["title"]; ?>
        </div>
        <div class="artist">
            <?php echo $val["artist"]; ?>
        </div>
        <div class="year">
            <?php echo $val["year"]; ?>
        </div>
        <div class="img">
            <img src='<?php echo $val["img"]; ?>' alt="cover">
        </div>

        <?php }?>
    </div>


    ?>

    <!-- Jquery -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <!-- Handlebars -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
    <script src="js/index.js"></script>
</body>

</html>
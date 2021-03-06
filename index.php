<?php
// include
include_once __DIR__ . "/src/partials/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi php project</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css"
        integrity="sha384-v8BU367qNbs/aIZIxuivaU55N5GPF89WBerHoGA4QTcbUjYiLQtKdrfXnqAcXyTv" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/css/main.css">
</head>

<body>
    <div class="container">
        <?php
foreach ($database as $val) {?>
        <div class="card">
            <div class="img">
                <img src='<?php echo $val["img"]; ?>' alt="cover">
            </div>
            <div class="title">
                <?php echo $val["title"]; ?>
            </div>
            <div class="artist">
                <?php echo $val["artist"]; ?>
            </div>
            <div class="year">
                <?php echo $val["year"]; ?>
            </div>

        </div>
        <?php }?>
    </div>

    <script src="dist/js/main.js"></script>
</body>

</html>
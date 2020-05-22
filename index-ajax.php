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
    </div>

    <select name="" id="" class="filter">
        <option value="Queen">Queen</option>
        <option value="Iron Maiden">Iron Maiden</option>
    </select>


    <!-- Template handlebars -->
    <script id="disk-template" type="text/x-handlebars-template">
        <div class="card">
            <div class="title"><img src={{ img }} alt="cover"></div>
            <div class="title"> {{ title }} </div>
            <div class="artist"> {{ artist }} </div>
            <div class="year"> {{ year }} </div>
        </div>
    </script>

    <!-- Handlebars -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
    <script src="dist/js/main.js"></script>
</body>

</html>
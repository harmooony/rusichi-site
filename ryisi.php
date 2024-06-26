<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Русичи</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="header_wrapper">
                <div class="header_logo">
                    <a href="index.html">
                        <img src="images/logo_1-01.svg" class="logo">
                    </a>
                    <div class="dropdown">
                        <button onclick="dropdown()" class="dropbtn">Команды</button>
                        <div id="myDropdown" class="dropdown-content">
                          <a href="bears.php">Медведи</a>
                          <a href="ryisi.php">Рыси</a>
                          <a href="barsi.php">Барсы</a>
                          <a href="eagles.php">Орлы</a>
                        </div>
                      </div>
                </div>
                <div class="header_menu">
                    <a href="admin.php">
                        <img src="images/profile_test.png" class="profile_photo">
                    </a>
                </div>
            </div>
        </div>
    </header>
    <img src="images/gerb_left.png" class="left_gerb">
    <img src="images/gerb_right.png" class="right_gerb">

    <div class="container">
        <div class="rate_main">
            <h1 class="lr">Рыси</h1>
            <img src="images/ryis.png" class="team_icon">
            <h2 class="rr">Рейтинг:</h2>
        </div>
    </div>

    <div class="container">
        <div class="team_grid">
            <div class="ryisi_legend">
                <h1 class="start">Легенда графика</h1>
                <h1 class="legend_txt">Разведчики - оливковый</h1>
                <h1 class="legend_txt">Спасатели - оранжевый</h1>
                <h1 class="legend_txt">Защитники - хаки</h1>
                <h1 class="legend_txt">Богатыри - синий</h1>
                <h1 class="legend_txt">Мероприятия - красный</h1>
                <h1 class="legend_txt">Чистота - белый</h1>
                <h1 class="legend_txt">Поведение - фиолетовый</h1>
            </div>
            <!-- <тут график> -->

            </div>
        </div>
    </div>
    <div class="container">
        <div class="rating_output">
            <!-- Сюда выводить имена челов и рейтинг циклом -->
            <h1 class="rate_name">Имя</h1>
            <h1 class="rate_num">Рейтинг:</h1>
        </div>
    </div>

    <script src="script.js"></script>
    <script></script>
</body>
</html>
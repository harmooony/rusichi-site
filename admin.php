<?php
include ("connect.php");

if ($_COOKIE["isAdmin"] == "false") {
    header("Location: ./");
}
?>

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
                            <a href="eagles.php">Ястребы</a>
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

    <main>
        <div class="container">
            <div class="profile_grid">
                <div class="left_grid">
                    <div class="left_grid_element">
                        <img src="images/profile_test.png" class="big_profile_pic">
                        <h1 class="left_grid_content">Admin</h1>
                    </div>
                </div>
                <div class="right_grid">
                    <form action="add_point.php" class="form_container">
                        <h1>Команда или курсант?</h1>
                        <input type="text" placeholder="Курсант" id="change_komu" class="adm_inp" list="choose"
                            onchange="change_komu()">
                        <datalist id="choose">
                            <option>Курсант</option>
                            <option>Команда</option>
                        </datalist>
                        <h1>Название команды/Логин курсанта</h1>
                        <input type="text" id="zolupa" placeholder="Логин" class="adm_inp">
                        <h1>Наименование критерия</h1>
                        <input type="text" placeholder="Разведчик" class="adm_inp" list="kriterii">
                        <datalist id="kriterii">
                            <option>Разведчики</option>
                            <option>Спасатели</option>
                            <option>Защитники</option>
                            <option>Богатыри</option>
                            <option>Мероприятия</option>
                            <option>Чистота</option>
                            <option>Поведение</option>
                        </datalist>
                        <h1>Начисление баллов</h1>
                        <input type="number" placeholder="+1" class="adm_inp">
                        <input type="submit" class="confirm_points" value="Начислить"></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <form action="registration.php" class="create_add_container">
                <h1>Логин</h1>
                <input type="text" id="login" name="login" placeholder="cursant123" class="adm_inp">
                <h1>Пароль</h1>
                <input type="text" id="password" name="password" placeholder="password123" class="adm_inp">

                <input type="submit" onclick="add_acc()" value="Создать" class="confirm_create">
            </form>
        </div>
        <div class="container">
            <form action="add_team.php" class="create_add_container">
                <h1>Логин</h1>
                <input type="text" name="login" placeholder="cursant123" class="adm_inp">
                <h1>Команда</h1>
                <input type="text" name="team" placeholder="Медведи" class="adm_inp" list="teams">
                <datalist id="teams">
                    <option>Медведи</option>
                    <option>Рыси</option>
                    <option>Барсы</option>
                    <option>Ястребы</option>
                </datalist>
                <input type="submit" value="Добавить" class="confirm_create">
            </form>
        </div>
    </main>

    <script src="script.js"></script>
    <script>
        function change_komu() {
            var inp = document.getElementById('change_komu');
            if (inp.value == "Курсант") {
                inp.name = 'kursant';
            } else if (inp.value == "Команда") {
                inp.name = 'komanda';
            }
            console.log(123 + document.getElementById('change_komu').name);
        }

    </script>
</body>

</html>
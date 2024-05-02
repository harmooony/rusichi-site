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
            <h1 class="lr">Барсы</h1>
            <img src="images/bars.png" class="bars_icon">
            <h2 id="rating_chart" class="rr">Рейтинг:</h2>
        </div>
    </div>

    <div class="container">
        <div class="team_grid">
            <div class="bars_legend">
                <h1 class="start">Легенда графика</h1>
                <h1 class="legend_txt">Разведчики - оливковый</h1>
                <h1 class="legend_txt">Спасатели - оранжевый</h1>
                <h1 class="legend_txt">Защитники - хаки</h1>
                <h1 class="legend_txt">Богатыри - синий</h1>
                <h1 class="legend_txt">Мероприятия - красный</h1>
                <h1 class="legend_txt">Чистота - белый</h1>
                <h1 class="legend_txt">Поведение - фиолетовый</h1>
            </div>
            <div style="display: flex; align-items: center; margin-left: 20px; margin-right: 20px">
                <canvas width="100%" height="70%" id="mychart"></canvas>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <?php
    include ("connect.php");

    $query = mysqli_query($mysqli, "SELECT * FROM груп_рейтинг WHERE id_группы = 2");
    $row = mysqli_fetch_assoc($query);
    $data[0] = $row['Разведчики'];
    $data[1] = $row['Спасатели'];
    $data[2] = $row['Защитники'];
    $data[3] = $row['Богатыри'];
    $data[4] = $row['Мероприятия'];
    $data[5] = $row['Чистота'];
    $data[6] = $row['Поведение'];

    $jsonData = json_encode($data);
    ?>

    <script>
        var chartData = <?php echo $jsonData; ?>;

        var ctx = document.getElementById('mychart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Разведчики', 'Спасатели', 'Защитники', 'Богатыри', 'Мероприятия', 'Чистота', 'Поведение'],
                datasets: [{
                    label: 'График',
                    data: chartData,
                    backgroundColor: ['olive', 'orange', 'darkgreen', 'blue', 'red', 'white', 'purple'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });


        var total = 0;
        for (let i = 0; i < 7; i++) {
            total += parseInt(chartData[i]);
            console.log(chartData[i]);
        }
        document.getElementById('rating_chart').innerHTML = "Рейтинг: " + total / 7;
    </script>
</body>


</html>
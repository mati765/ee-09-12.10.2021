<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mój kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
<?php
        if(isset($_POST['wydarzenie'])) {
            //wysłano wydarzenie do dodania
            $db = new mysqli('localhost', 'root', '', 'egzamin6');
            $wydarzenie = $_POST['wydarzenie'];
            $sql = "UPDATE zadania SET wpis = '$wydarzenie' WHERE dataZadania = '2020-07-13'";
            $db->query($sql);
            $db->close();
        }
    ?>
    <header>
    <div class ='banner'>
        <img src ="logol1.png" alt ="Mój kalendarz">
    </div>
    <div class='banner2'>
        <h1>KALENDARZ</h1>
        <?php
        $db = mysqli_connect ('localhost','root','', 'egzammin5');
        mysqli_query($db,"SELECT `miesiac`,`rok` FROM `zadania`");
        ?>
    </div>
    <div class='glowny'>
        <?php
        mysqli_query($db,"SELECT `dataZadania`,`wpis` FROM `zadania`");
        ?>
    </div>
    </header>
    <main>
    <footer>
    <form action="kalendarz.php" method="post">
        <input type="text" name="dodaj wpis">
        <button>DODAJ</button>
    </form>
        <p>Stronę wykonał:MS</p>
    </footer>

    </main>
</body>
</html>
<?php 
    session_start(); 
    date_default_timezone_set("UTC");
    $_SESSION['page'] = 'index';
?>
<html>
    <head>
        <link rel="stylesheet" href="style/main.css">
    </head>
    <body>
        <div class="content">
            <?php 
                include("elements/menu.html.php"); 
            ?>
            <div class="display">
                <?php 
                    echo '<h1>'.date('l', time()).'</h1>'.'<br>'.date('d/m/Y', time());
                ?>
            </div>
        </div>
        <footer>
            <p>Spectacles.LTD &copy <?php $year=getdate(date('U')); echo "$year[year]" ?></p>
        </footer>
    </body>
</html>
<?php session_start() ?>
<html>
    <head>
        <link rel="stylesheet" href="../../style/main.css">
    </head>
    <body>
        <div class="content">
            <?php 
                $_SESSION['page'] = basename(__FILE__);
                include("../../elements/menu.html.php"); 
            ?>
            <div class="display">
                <h2 style="text-align : center;">🚧 Under Construction 🚧</h2>
            </div>
        </div>
        <footer>
            <p>Spectacles.LTD &copy <?php $year=getdate(date('U')); echo "$year[year]" ?></p>
        </footer>
    </body>
</html>
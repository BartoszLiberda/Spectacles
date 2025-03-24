<?php session_start() ?>
<html>
    <head>
        <link rel="stylesheet" href="../../style/main.css">
        <link rel="stylesheet" href="../../style/receiptOfSpectacles.css">
    </head>
    <body>
        <div class="content">
            <?php 
                $_SESSION['page'] = basename(__FILE__);
                include("../../elements/menu.html.php"); 
            ?>
            <div class="display">
                <h1>Reciept Of Spectacles</h1>
                <table class="receipt">
                    <tr>
                        <th>Date</th>
                        <th>Lenses</th>
                        <th>Coating</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>sample</td>
                        <td>sample</td>
                        <td>sample</td>
                        <td>sample</td>
                    </tr>
                </table>
            </div>
        </div>
        <footer>
            <p>Spectacles.LTD &copy <?php $year=getdate(date('U')); echo "$year[year]" ?></p>
        </footer>
    </body>
</html>
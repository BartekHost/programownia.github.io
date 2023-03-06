<!DOCTYPE html>
    <html>
        <head>
            <title>Template 1</title>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="w3.css">
            <link rel="stylesheet" href="font/css/font-awesome.css">
        </head>
        <body class="w3-theme-l5">
            <div class="w3-panel" id="contact">
                <h1>System komentarzy</h1>
                <hr>
                <div class="w3-row-padding w3-panel">
                    <form class="w3-panel w3-margin" action="add_comment.php" method="post">
                        <p>Wystaw komentarz</p>
                        <input type="text" class="w3-input w3-margin" name="user" placeholder="Name">
                        <input type="text" class="w3-input w3-margin" name="comment" placeholder="Comment">
                        <input type="submit" class="w3-input w3-margin w3-button w3-quarter" value="Dodaj komentarz">
                    </form>
                </div>
            </div>
            <div class="w3-panel" id="komentarz">
                <h1>Tutaj będą komentarze</h1>
                <hr>
                <?php
                    echo "<ul class='w3-ul'>";
                    $con = mysqli_connect('localhost','root','','comments');
                    $zap = mysqli_query($con,'SELECT * FROM komentarze ORDER BY id DESC');
                    while($array = mysqli_fetch_array($zap)){
                        echo "<li><i class='fa fa-user-circle-o w3-margin w3-large' aria-hidden='true'></i>$array[0]</br><i class='fa fa-envelope w3-margin w3-large' aria-hidden='true'></i>$array[1]</li>";
                    }
                    mysqli_close($con);
                    echo "</ul>";
                ?>
            </div>
            <div class="w3-container w3-theme-d5 w3-padding">
                <div class="w3-panel"><i class="fa fa-globe w3-margin" aria-hidden="true"></i>All rights reserved. Powered by Some Person.</div>
            </div>
        </body>
    </html>
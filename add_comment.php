<?php
    $con = mysqli_connect('localhost','root','','comments');
    $user = $_POST['user'];
    $comment = $_POST['comment'];
    $add = "INSERT INTO komentarze (user, comment) VALUES ('$user', '$comment')";
    $zap = mysqli_query($con, $add);
        if($zap === true){
            echo("Dodano komentarz.");
        }
        else{
            echo("Błąd w dodawaniu komentarza.");
        }
    mysqli_close($con);
?>
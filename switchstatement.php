<?php
    $title = "Switch Statements";
    include 'includes/header.php' ?>
    
    <h1> Switch Statements </h1>
    <?php
        $grade = 'B';

        switch($grade){
            case 'A':
                echo '<h2 style="color: green"> You Are A Superstar!</h2>';
                break;
            case 'B':
                echo '<h2 style="color: blue"> YOU DID WELL!</h2>';
                break;
            default:
            echo '<h2 style="color: red"> YOU Have Failed...!</h2>';


        }


    ?>  
<?php require 'includes/footer.php' ?>
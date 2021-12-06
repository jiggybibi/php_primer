<?php
    $title = "String Manipulation";
    include 'includes/header.php' ?>

    <h1> PHP String Manipulation</h1>
    <?php
    //string concatenation of strings
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with rock";
        $name = "marlon mcIntosh";
        echo $phrase1 . ", named Tiffany, ". $phrase2;
        echo '<br/>';
        echo '<hr/>';
        //string transformation
        echo 'Uppercase first letter: ' . ucfirst($name). '<br/>';
        echo 'Uppercase first letter of each word: ' . ucwords($name). '<br/>';
        echo 'Upper case: '. strtoupper($name). '<br/>';
        echo 'lower case: '. strtolower("THIS WAS ALL LOWER CASE"). '<br/>';
        echo '<hr/>';
        echo 'Repeat String: ' . str_repeat('a',10) . '<br/>';
        echo 'Repeat String - Nested Function: ' . strtoupper(str_repeat('a',10)) . '<br/>';
        echo 'Get a Substring: ' . substr($name, 3, 6). '<br/>';

        echo 'Get position of string: ' . strpos($name, 'I'). '<br/>';
    //Returns Null
    // echo 'Get position of string: ' . strpos($combine. 'z'). '<br/>';
        echo 'Find Character "M": ' . strchr($name, 'M'). '<br/>';
        echo 'Find Character "r": ' . strchr($name, 'r'). '<br/>';
        echo 'Find Character "s": ' . strchr($name, 's '). '<br/>';
        echo 'Find Character "c": ' . strchr($name, 'c'). '<br/>';

        echo 'Find Length of String: ' . strlen($name) . '<br/>';

        echo 'Without Trim: ' . "A" . "B C D " . "E" . '<br/>';
        echo 'Trim spaces on both sides: '. "A" . trim(" B C D") . "E" . '<br/>';
        echo 'Trim spaces to the left: '. "A" . ltrim(" B C D") . "E" . '<br/>';
        echo 'Trim spaces to the right: '. "A" . rtrim(" B C D") . "E" . '<br/>';

        echo ' Replace string with another: '. str_replace("stand", "sit", $phrase2 ) . '<br/>';


        
    ?>



<?php require 'includes/footer.php' ?>

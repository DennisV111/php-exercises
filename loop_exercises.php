<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        <?php include 'loop_exercises.styles.css'; ?>
    </style>
</head>
<body>
    
    <h1>Loop Exercises</h1>
    <hr>

    <?php

    // opdracht 1

    echo '<h2>Opdracht 1</h2>';

    for ( $i = 1; $i<10; $i++ ) {
        echo $i . '-';
    }
    echo '10<br>';

    // opdracht 2

    echo '<h2>Opdracht 2</h2>';

    $sum = 0;
    for ( $i = 0; $i <=30; $i++) {
        $sum +=$i;
    }
    echo 'Sum = ' . $sum;

    // opdracht 3

    echo '<h2>Opdracht 3</h2>';

    for ( $i = 1; $i <= 5; $i++) {
        for ( $j = 1; $j <= $i; $j++) {
            echo '*';
        }
        echo '<br>';
    }

    // opdracht 4

    echo '<h2>Opdracht 4</h2>';

    $rows = 6;
    for ( $i = 1; $i <= ( 2 * $rows ); $i++) {
        for ( $j = 1; $j <= min( $i , ( ( 2 * $rows + 1 )-$i) ); $j++) {
            echo '*';
        }
        echo '<br>';
    }

    // opdracht 5

    echo '<h2>Opdracht 5</h2>';

    echo '<table>';
    for ( $i = 0; $i < 8; $i++ ) {
        echo '<tr>';
        for ( $j = 0; $j < 8; $j++ ) { 
            echo '<td class = '; 
            if ( ($i + $j) % 2 ) { 
                echo ' wit-vak';
            };
            echo '></td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    
    ?>

</body>
</html>
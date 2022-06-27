<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        <?php include 'function_exercises.styles.css'; ?>
    </style>
</head>
<body>
    
    <h1>Function Exercises</h1>
    <hr>

    <?php
    
    // opdracht 1

    echo '<h2>Opdracht 1</h2>';

    function isPrime( $number ) {
        if ( $number > 1 ) {
            for ( $i = 2; $i < $number; $i++ ) {
                if ( $number % $i == 0 ) {
                    return false;
                }
            }
            return true; 
        }
        return false;
    }

    //tabel met de priemgetallen van 1 tm 100

    echo '<table class=primenumbers>';
    echo '<caption>Prime number between 1 to 100</caption>';
    for ( $i = 1; $i <= 10; $i++ ) {
        echo '<tr>';
        for ( $j = 1; $j <= 10; $j++) {
            echo '<td class = "primenumberel';
            if (isPrime( 10 * ($i - 1) + $j )) {
                echo ' primes';
            }
            echo '">';
            echo 10 * ($i - 1) + $j ;
            echo '</td>';
        }
        echo '</tr>';
    }

    echo '</table>';

    // opdracht 2

    echo '<h2>Opdracht 2</h2>';

    //input a string

    ?>
    <form action="">
        <p>
        <label for="some-string">Enter a string:</label>
        <input type="text" id="some-string" name="someString" placeholder="string">
        <button>Submit</button>
    </p>
    </form> <?php
    $someString = htmlspecialchars($_GET['someString']);
    
    //function to reverse a String

    function reverseSomeString ($someString) {
        $reversedString = '';
        for ( $i=1; $i <= strlen($someString); $i++ ) {
            $reversedString .= $someString[strlen($someString)-$i];
        }
        return $reversedString;
    }
    
    echo 'De string ' . $someString . " achterstevoren is: " . reverseSomeString($someString) . '<br>'; 

    // opdracht 3

    echo '<h2>Opdracht 3</h2>';

    //functie die controleert of een string alleen uit kleine letters bestaat

    function isLowercase($someString) {
        for ( $i = 0; $i < strlen($someString); $i++ ) {
            $checkCharacter = $someString[$i];
            if ( !($checkCharacter == 'a' || 
                    $checkCharacter == 'b' ||
                    $checkCharacter == 'c' ||
                    $checkCharacter == 'd' ||
                    $checkCharacter == 'e' ||
                    $checkCharacter == 'f' ||
                    $checkCharacter == 'g' ||
                    $checkCharacter == 'h' ||
                    $checkCharacter == 'i' ||
                    $checkCharacter == 'j' ||
                    $checkCharacter == 'k' ||
                    $checkCharacter == 'l' ||
                    $checkCharacter == 'm' ||
                    $checkCharacter == 'n' ||
                    $checkCharacter == 'o' ||
                    $checkCharacter == 'p' ||
                    $checkCharacter == 'q' ||
                    $checkCharacter == 'r' ||
                    $checkCharacter == 's' ||
                    $checkCharacter == 't' ||
                    $checkCharacter == 'u' ||
                    $checkCharacter == 'v' ||
                    $checkCharacter == 'w' ||
                    $checkCharacter == 'x' ||
                    $checkCharacter == 'y' ||
                    $checkCharacter == 'z' ||
                    $checkCharacter == ' '
                    )) {
                return false;
            }
        }
        return true;
    }

    // functie die de lengte van een string bepaald
    // lijkt dezelfde output te geven als de built-in functie strlen()

    function giveStringLength($someString) {
        $length = 0;
        $i = 0;
        
        while ( $someString[$i] ) {
            $length++;
            $i++;
        }
        return $length;
    }

    //output

    echo 'De string ' . $someString . ' bestaat ';
    echo ( isLowerCase($someString) ) ? 'wel' : 'niet';
    echo ' helemaal uit kleine letters.<br>';

    echo '<br>';
 
    echo 'De lengte ( in bytes ) van de string ' . $someString . ' is ';
    echo giveStringLength($someString) . '.<br>';

    // opdracht 4

    echo '<h2>Opdracht 4</h2>';
    
    $array = [2, 234, 0, 13254, 13, -45, 6, 88, 1231, 5, 6, -122, 12, 8, 8];

    //dit array gaan we zowel sorteren met bubblesort als met quicksort
    //we gebruiken pass by reference in de sorteerfuncties
    
    //bubblesort

    function bubbleSort( &$array ) {
        $N = count($array);
        for ( $i=1; $i <= $N-1; $i++  ) {
            for ( $j=1; $j <= $N - $i ; $j++) {
                if ( $array[$j-1] > $array[$j] ) {
                    $temp = $array[$j-1];
                    $array[$j-1] = $array[$j];
                    $array[$j] = $temp;
                }
            }
        }
    }
    
    $arrayBubble = $array;
    bubbleSort($arrayBubble);

    //quicksort

    function partitie( &$array , $l , $r ) {
        $i = $l - 1;
        $pivot = $array[$r]; // we kiezen hier altijd het laatste element als pivot (niet altijd beste keuze)
        for ( $j = $l; $j <= $r - 1; $j++ ) {
            if ( $array[$j] < $pivot ) {
                $i++;
                $temp = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $temp;
            }
        }
        $temp = $array[$i+1];
        $array[$i+1] = $pivot;
        $array[$r] = $temp;
        return $i+1;
    }
    
    function quickSort( &$array , $L , $R ) {
        if ( $L < $R ) {
            $q = partitie( $array, $L, $R);
            quickSort( $array , $L , $q - 1 );
            quickSort( $array , $q + 1, $R );
        }
    }

    $arrayQS = $array;
    quickSort($arrayQS , 0 , count($arrayQS) - 1 );

   //tabulating the sort results
   
   ?><table>
        <caption>
            Results of sorting an array
        </caption>
        <tr>
            <th>Array Index</td>
            <th>Unsorted Array</td>
            <th>Bubble Sorted Array</td>
            <th>Quick Sorted Array</td>
        </tr>
        <?php
            for ($i=0; $i<count($array); $i++ ) {
                echo '<tr>';
                echo '<td class="index">' . $i . '</td>';
                echo '<td>' . $array[$i] . '</td>';
                echo '<td>' . $arrayBubble[$i] . '</td>';
                echo '<td>' . $arrayQS[$i] . '</td>';
                echo '</tr>';
            }    
        ?>
    </table><?php

    // opdracht 5

    echo '<h2>Opdracht 5</h2>';

    ?>
    <form action="">
        <p>
        <label for="naam">Enter your name:</label>
        <input type="text" id="naam" name="naam" placeholder="name">
        <label for="leeftijd">Enter your age:</label>
        <input type="number" id="leeftijd" name="leeftijd" placeholder="age">
        <button>Submit</button>
    </p>
    </form> <?php
    $naam = htmlspecialchars($_GET['naam']); 
    $leeftijd = htmlspecialchars($_GET['leeftijd']);

    function eligibleToVote ( $naam, $leeftijd ) {
        if ($naam && $leeftijd) {
            echo '<p class="vote">';
            echo $naam . ', je bent '; 
            echo ($leeftijd >= 18) ? 'wel' : 'niet';
            echo ' oud genoeg om te stemmen.';
            echo ($leeftijd >= 18) ? '' : '<br>De stem grens is 18 jaar.';
            echo '</p><br>';
        }
    }
    eligibleToVote($naam, $leeftijd);

    ?>

</body>
</html>
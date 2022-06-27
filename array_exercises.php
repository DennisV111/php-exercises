<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        <?php include 'array_exercises.styles.css'; ?>
    </style>
</head>
<body>
    
    <h1>Array Exercises</h1>
    <hr>

    <?php

    // opdracht 1

    echo '<h2>Opdracht 1</h2>';

    $color = ['white','green','red','blue','black'];

    echo '<p>';
    echo 'The memory of that scene for me is like a frame of film forever frozen at that moment: 
        the ' . $color[2] .' carpet, the ' . $color[1] .' lawn, the ' . $color[0] . ' house, 
        the leaden sky. The new president and his first lady. - Richard M. Nixon';
    echo '</p>';

    // opdracht 2

    echo '<h2>Opdracht 2</h2>';

    $colors = ['white','green','red'];
    $temp = $colors[0];
    $colors[0]=$colors[1];
    $colors[1]=$colors[2];
    $colors[2]=$temp;
    echo '<ul>';
    for ($i=0; $i< count($colors); $i++) {
        echo '<li>' . $colors[$i] . '</li>';
    }
    echo '</ul>';

    // opdracht 3

    echo '<h2>Opdracht 3</h2>';

    $ceu = ["Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", 
    "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia "=>"Ljubljana", 
    "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", 
    "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", 
    "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", 
    "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw"];    

    asort($ceu);

    echo '<p class="capitals">';
    foreach ($ceu as $country => $capital ) {
        echo 'The capital of ' . $country . ' is ' . $capital . '.<br>';
    }
    echo '</p>';

    // opdracht 4

    echo '<h2>Opdracht 4</h2>';

    $temperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 
    68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

    echo 'List of recorded temperatures: ';
    for ( $i=0; $i< count($temperatures)-1; $i ++) {
        echo $temperatures[$i] . ', ';
    }
    echo $temperatures[count($temperatures)-1] . '.<br><br>';


    $amount = 7;

    $average = array_sum($temperatures) / count($temperatures);
    
    sort($temperatures);

    //output

    echo 'The average temperature is: ' . round($average, 1) . '.<br>';
    echo 'List of seven lowest temperatures: ';
    for ( $i=0; $i< $amount-1; $i ++) {
        echo $temperatures[$i] . ', ';
    }
    echo $temperatures[$amount-1] . '.<br>';

    echo 'List of seven highest temperatures: ';
    for ( $i=count($temperatures)-1; $i> count($temperatures)-$amount; $i--) {
        echo $temperatures[$i] . ', ';
    }
    echo $temperatures[count($temperatures)-1-$amount] . '.<br>';

    // opdracht 5

    echo '<h2>Opdracht 5</h2>';

    $weeklyTemps = [
        "Maandag" => [ 
        	"Groningen" => 25,
         	"Assen" => 12,
        	"Emmen" => 19
        ],
        "Dinsdag" => [ 
    	    "Groningen" => 26,
            "Assen" => 28,
            "Emmen" => 19
        ],
     "  Woensdag" => [ 
    	    "Groningen" => 16,
            "Assen" => 30,
            "Emmen" => 35
        ]
    ];
    
    foreach ($weeklyTemps as $day => $data) {
        echo 'De hoogste temperatuur op ' . $day . ' was ';
        $city = array_search( max($data) , $data);
        echo $data[$city] . ' &#8451 in ' . $city . '.<br>'; 
    }

    ?>    

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        <?php include 'class_exercises.styles.css'; ?>
    </style>
</head>
<body>
    
    <h1>Basic Class Exercises</h1>
    <hr>

    <?php

    // opdracht 1

    echo '<h2>Opdracht 1</h2>'; 

    class MyClass {
        static function displayMessage() {
            echo 'MyClass class has been initialized!';
        }
    }
    MyClass::displayMessage();

    // opdracht 2

    echo '<h2>Opdracht 2</h2>'; 

    class IntroMessage {
        static function displayIntro($name) {
            echo 'Hello all, I am ' . $name . '.';
        }
    }
    IntroMessage::displayIntro('Dennis');

    // opdracht 3

    echo '<h2>Opdracht 3</h2>'; 
   
    class Calculator {
        
        //properties
        private $num1;
        private $num2;

        //constructor
        public function __construct($num1, $num2) {
            $this->num1 = $num1;
            $this->num2 = $num2;
        }
        
        //methods
        public function add() {
            return $this->num1 + $this->num2;
        }
        function multiply() {
            return $this->num1 * $this->num2;
        }
        function divide() {
            return $this->num1 / $this->num2;
        }

    }
    $x = 55;
    $y = 11;
    
    $mycalc = new Calculator( $x, $y);

    echo 'We created a calculator with the numbers x = ' . $x . ' and y = ' . $y . '.<br>';
    echo 'The sum of x and y is: ' . $mycalc->add() . '.<br>';
    echo 'The product of x and y is: ' . $mycalc->multiply() . '.<br>';
    echo 'The division of x by y is: ' . $mycalc->divide() . '.<br>';

    ?>

</body>
</html>
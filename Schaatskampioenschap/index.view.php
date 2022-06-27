<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        <?php include 'index.styles.css'; ?>
    </style>
</head>
<body>
    
    <h1>Uitvoer</h1>

    <table>
        <caption>
            Uitslag van de schaatswedstrijd
        </caption>
        <tr>
            <th>Schaatser</th>
            <th>Puntentotaal</th>
        </tr>
        <?php
        foreach ($uitslag as $deelnemer => $punten) {
            echo '<tr>';
            echo '<td>' . $deelnemer . '</td>';
            echo '<td>' . $punten . '</td>';
            echo '</tr>';
        }
        ?>
        <tr>

        </tr>
    </table>

    <?php 

       echo '<p class = "winnaar">De winnaar is: ' . array_keys($uitslag)[0] . '</p>';
       
    ?>

</body>
</html>
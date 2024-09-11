<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asgn02 Inheritance</title>
</head>

<body>
    <h1>Inheritance Examples</h1>

    <?php
    include 'Bird.php';

    //$bird = new Bird;
    echo "<p>The generic song of any bird is \"" . Bird::$song . "\".</p>";


    echo "<p>The song of the " . YellowBelliedFlyCatcher::$name . " on breeding grounds is \"" . YellowBelliedFlyCatcher::$song . "\".</p>";


    echo "<p>The " . YellowBelliedFlyCatcher::$name . " " . YellowBelliedFlyCatcher::canFly() . ".</p>";

    echo "<p>The " . Kiwi::$name . " " . Kiwi::canFly() . ".</p>";


    // Display instance counts before creating instances
    echo "<hr/>";
    echo "<h2>Static examples<h2/>";
    echo "<h3>Before using the create method</h3><br/>";
    echo "Bird instances: " . Bird::$instanceCount . "<br/>";
    echo "<br/>";
    echo "YellowBelliedFlyCatcher instances: " . YellowBelliedFlyCatcher::$instanceCount . "<br/>";
    echo "<br/>";
    echo "Kiwi instances: " . Kiwi::$instanceCount . "<br/>";
    echo "<hr/>";

    //Create new Bird
    $bird = Bird::create();
    $flyCatcher = YellowBelliedFlyCatcher::create();
    $kiwi = Kiwi::create();

    //Displays new instance count after using create()
    echo "<h3>After using the create method</h3> ";
    echo "Bird instances: " . Bird::$instanceCount . "<br/>";
    echo "<br/>";
    echo "YellowBelliedFlyCatcher instances: " . YellowBelliedFlyCatcher::$instanceCount . "<br/>";
    echo "<br/>";
    echo "Kiwi instances: " . Kiwi::$instanceCount . "<br/>";


    ?>
</body>

</html>
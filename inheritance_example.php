<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inheritance Example</title>
    </head>
    <body>
        <?php
            class Fruit {
                public $name;
                public $color;
                public $taste;
                public function __construct($name, $color, $taste) {
                    $this->name = $name;
                    $this->color = $color;
                    $this->taste = $taste;
                }
                public function str() {
                    echo "Name: {$this->name}<br />";
                    echo "Color: {$this->color}<br />";
                    echo "Taste: {$this->taste}<br />"; 
                }
                public function message() {
                    echo "Fruit is delicious!<br />"; 
                }
            }
            class Berry extends Fruit {
                public function message() {
                    echo "Berries are super yummy!<br />"; 
                }
            }
            $orange = new Fruit("Orange", "orange", "yummy");
            $orange->str();
            $orange->message();
            echo "<br /><hr /><br />";
            $strawberry = new Berry("Strawberry", "red", "delicious");
            $strawberry->str();
            $strawberry->message();
        ?>
    </body>
</html>

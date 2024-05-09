<?php

$films = [];

class Producion
{
    public $title;
    public $vote;
    public $language;

    function __construct($_title, $_vote, $_language)
    {
        $this->title = $_title;
        $this->vote = $_vote;
        $this->language = $_language;
    }
}

$harry_potter = new Producion('Harry Potter', 9, 'English');
$films[] = $harry_potter;

$kill_bill = new Producion('Kill Bill', 9.5, 'English');
$films[] = $kill_bill;

$il_gladiatore = new Producion('Il Gladiatore', 7, 'Italiano');
$films[] = $il_gladiatore;

$avengers = new Producion('Avengers', 8.5, 'English');
$films[] = $avengers;


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <?php
                foreach ($films as $film) {
                ?>
                    <p><?php echo $film->title ?> </p>
                    <p><?php echo $film->vote ?> </p>
                    <p><?php echo $film->language ?> </p>

                <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>
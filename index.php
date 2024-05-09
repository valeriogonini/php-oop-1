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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Film</th>
                <th scope="col">Voto</th>
                <th scope="col">Lingua</th>
            </tr>
        </thead>
        <?php
        foreach ($films as $film) {
        ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $film->title ?></th>
                    <td><?php echo $film->vote ?></td>
                    <td><?php echo $film->language ?></td>
                </tr>

            </tbody>
        <?php
        }
        ?>
    </table>
</body>

</html>
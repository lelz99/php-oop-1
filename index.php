<?php
class Movies
{
    public $name;
    public $genre;
    public $time;
    public $boxoffice;

    public function __construct($name, $genre, $time, $boxoffice)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->time = $time;
        $this->boxoffice = $boxoffice;
    }

    public function getDescriptionMovie(Movies $movie)
    {
        return "$movie->name il suo genere è $movie->genre e dura $movie->time.";
    }
}

$movie1 = new Movies('Ritorno al Futuro', 'Fantascienza', '1h 56m', '367M');
$movie2 = new Movies('Casinò', 'Noir', '2h 58m', '631M');

echo $movie1->getDescriptionMovie($movie1);
echo $movie2->getDescriptionMovie($movie2);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>
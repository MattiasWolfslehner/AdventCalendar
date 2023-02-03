<?php
$door_values = array(
        array('./images/astronaut.png',1),
        array('./images/beach_sphere.png',2),
        array('./images/burning_bush.png',3),
        array('./images/butterfly.jpg',4),
        array('./images/camp.png','',5),
        array('./images/explosion.png',6),
        array('./images/forest_night.png',7),
        array('./images/fudgyvmp.png','',8),
        array('./images/galaxytree.png',9),
        array('./images/galaxytree2.png',10),
        array('./images/mandelbrot1.jpg',11),
        array('./images/mountain_heart.png',12),
        array('./images/mountain_sight.png',13),
        array('./images/Nightly_fisher.png',14),
        array('./images/northern_lights.png',15),
        array('./images/northern_lights2.png',16),
        array('./images/nova.png',17),
        array('./images/NulledVector_garden_of_Eden.jpg',18),
        array('./images/moon_lake.png',19),
        array('./images/Rav_black_hole.png',20),
        array('./images/Roarianmountain_hikers.png',21),
        array('./images/street_landscape1.png',22),
        array('./images/sunset.jpg',23),
        array('./images/winter.png',24),


);

    $day = date("d");
    $month = date("m");
    if($_GET['door']<=$day && $month==12){
        // var_dump($GET);
        $door = json_encode($door_values[$_GET['door']-1]);
        echo $door;
    }else{
        echo "Very impatient ;)";
    }
?>
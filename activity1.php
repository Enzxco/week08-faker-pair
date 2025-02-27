<?php

require_once("vendor/autoload.php");

$faker = Faker\Factory::create('en_PH');

for ($i = 0; $i <= 5; $i++) {
    echo $faker->name . "\n";
    echo $faker->email . "\n";
    echo $faker->numerify('+63 9## ### ####') . "\n";
    echo $faker->address . ' ' . $faker->city . ' ' . $faker->state . "\n";
    echo $faker->date($format = 'Y-m-d', $max = '2001-12-31') . "\n";
    echo $faker->jobTitle . "\n";
}

?>
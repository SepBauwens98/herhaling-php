<?php

$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];
    print_r($klas) ;

$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];
    for ($i = 0; $i < count($klas); $i++)  {
            echo $klas[$i] .PHP_EOL."";
          }



$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];
    foreach ($klas as $mens)  {
           echo $mens .PHP_EOL."";
       }



$bucket_list = [];
  $hoeveelheid_activiteiten = readline("Hoeveel activiteiten wil je toevoegen aan je bucket list?");
    for ($i=0; $i < $hoeveelheid_activiteiten ; $i++) {
       $bucket_list[$i] = readline("Welke activiteiten wil je toevoegen aan je bucket list");
    }

      var_dump($bucket_list);

      foreach ($bucket_list as $a) {
        echo $a, PHP_EOL;
      }


?>

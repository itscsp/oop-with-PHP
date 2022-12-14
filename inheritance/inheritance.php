<?php

require_once 'PhysicalBook.php';

require_once 'DigitalBook.php';

$phycialBook = new Physicalbooks ('Shiva Trillogy', 'Amish',2000, 1);

print $phycialBook->getAuthor();
echo '</br>';
print $phycialBook->getPrice();
echo '</br>';
print $phycialBook->print();

echo '</br>';
echo '</br>';
echo '</br>';


// $digitalBook = new DigitalBook ('Shiva Trillogy', 'Amish',2000, 1);

// print $digitalBook->getAuthor();
// echo '</br>';
// print $digitalBook->getPrice();
// echo '</br>';
// print $digitalBook->print();
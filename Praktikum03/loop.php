<?php 

// Buat Loop
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

// buat Looping Pertama
echo "<h3>Looping Pertama</h3>";

for ($i = 2; $i <= 20; $i += 2) {
    echo $i . " - I Love PHP <br>";
}

// Buat Looping Kedua
echo "<h3>Looping Kedua</h3>";

for ($i = 20; $i >= 2; $i -= 2) {
    echo $i . " - I Love PHP <br>";
}

// Buat Array
$buah = ["Anggur", "Mangga", "Melon"];

foreach ($buah as $b) {
    echo $b . "<br>";
}


?>
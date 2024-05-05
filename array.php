<?php
// Membuat array dengan index "nama" dan "umur"
$data = array(
    array("nama" => "Leo", "umur" => 36),
    array("nama" => "Messi", "umur" => 36),
    array("nama" => "Criss", "umur" => 39),
    array("nama" => "Ronaldo", "umur" => 39),
    array("nama" => "Valen", "umur" => 45),
    array("nama" => "Ros", "umur" => 45),
    array("nama" => "Marc", "umur" => 31),
    array("nama" => "Marq", "umur" => 31),
    array("nama" => "Jon", "umur" => 26),
    array("nama" => "Chris", "umur" => 26),
    array("nama" => "Rafa", "umur" => 37),
    array("nama" => "Nada", "umur" => 37),
    array("nama" => "Le", "umur" => 39),
    array("nama" => "Bron", "umur" => 39),
    array("nama" => "La", "umur" => 30),
    array("nama" => "Joya", "umur" => 30)
);

// Konversi array menjadi JSON
$json_data = json_encode($data);

// Tampilkan JSON
echo $json_data;
?>
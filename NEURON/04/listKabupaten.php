<?php

$listData = [
    'Aceh' => ['Kabupaten Aceh Barat Daya', 'Kabupaten Aceh Barat', 'Kabupaten Aceh Besar', 'Kabupaten Aceh Jaya','Kabupaten Aceh Selatan', 'Kabupaten Aceh Singkil', 'Kabupaten Aceh Tamiang', 'Kabupaten Aceh Tengah', 'Kabupaten Aceh Tenggara', 'Kabupaten Aceh Timur', 'Kabupaten Aceh Utara'], 
    'Jawa Barat' => ['Kabupaten Bandung Barat', 'Kabupaten Bandung']
];
$selectedCity = $_POST['provinsi'];
?>

<select>
    <?php
        foreach ($listData[$selectedCity] as $city) {
            echo "<option value=".$city.">".$city."</option>";
        }
    ?>
</select>
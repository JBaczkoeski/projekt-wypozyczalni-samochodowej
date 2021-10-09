<?php
$sql="SELECT * FROM offers";
$results = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    $wyn = mysqli_insert_id($conn);
    echo($wyn);
}

$sql="SELECT * FROM `photos` WHERE offer_id='$wyn'";
$zdjecie = $conn->query($sql);
foreach($zdjecie as $key => $photo){   
}
$conn->close();
?>
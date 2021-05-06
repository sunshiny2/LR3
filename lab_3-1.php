<?php
$tek=$_GET["tek"];
$jsonString = file_get_contents("lab_3-1.json");
$rrow = json_decode($jsonString);
$counter=0;
foreach ($rrow->new as $number => $item) {
    $counter++;
    $tit = $item->tit;
    $text = $item->text;
    $img = $item->img;
    echo "<div style='width: 400px; background-color: #fee2ee;' >";
    echo '<h3>'.$tit.'</h3><p>'.$text.'</p><img src="'.$img.'" width=400px><br>';  
    echo "</div><br>";
    if($counter==$tek)break;
}
?>
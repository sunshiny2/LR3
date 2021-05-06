<?php
        $jsonString = file_get_contents("lab_3-2.json", JSON_UNESCAPED_UNICODE);
        $rrow = json_decode($jsonString);
        $counter=0;
        $count = count($rrow->review);
        foreach ($rrow->review as $number => $item) {
            $counter++;
            $name = $item->name;
            $email = $item->email;
            $text = $item->text;
            ?>
<html>
  <style>
    .container {   width: 75%;
              border: 2px solid #ccc;
              background-color: #eee;
              border-radius: 5px; /* скругление углов блока */
              padding: 16px; /* внутренние поля */
            };
  </style>
             <div class='container' >
            <?
            echo '<span style="font-weight: bold;">Имя: </span>'.$name.'<br><span style="font-weight: bold;">Почта: </span>'.$email.'<br><span style="font-weight: bold;">Отзыв: </span>'.$text.'<br>';  
            echo "</div><br>";
            if($counter==$count)break;
        }
?>
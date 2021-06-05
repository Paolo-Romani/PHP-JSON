<?php
    $fileJson = fopen("file.json","r") or die("impossibile aprire il file");
    $fileJson = file_get_contents("file.json");
    $macchina = json_decode($fileJson, true);
    echo "<h2>MACCHINA</h2>";
    foreach($macchina as $k=>$v){
        echo "<p>$k : $v</p>";
    }
?>
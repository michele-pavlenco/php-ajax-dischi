<?php
include __DIR__.'/database.php';

$filterArray = [];
if(isset($_GET['genre'])){
    $myGenre = $_GET['genre'];
    foreach($dischi as $disco){
        if($disco['genre'] == $myGenre){
            $filterArray[] = $disco;
        }
    }
}else {
    $filterArray = $dischi;
}
header('Content-Type: application/json');
echo json_encode($filterArray);
?>
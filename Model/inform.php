<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    function get_inform() {
        $inform = array();
        $inform[] = array(
            'Name' => $_POST['name'],
            'DateOfBirth' => $_POST['date'],
            'Gender' => $_POST['gender'],
        );
        return json_encode($inform);
    }
    $named = "inform";
    $file_name = $named . ".json";

    if(file_put_contents("$file_name", get_inform())) {
            echo $file_name . 'file created';
        }
        else {
            echo "Có lỗi xảy ra!!";
        }
    
    
}
?>

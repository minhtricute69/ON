<?php
$user_profile=array();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $inform = array();
        $inform[] = array(
            'Họ: ' => $_POST['first_name'],
            'Tên: ' =>$_POST['last_name']
            'Ngày sinh: ' => $_POST['date'],
            'Giới tính: ' => $_POST['gender'],
        );
        return json_encode($inform);
        echo $inform;
        $user_profile=md5($inform);
        echo "<br>";
        echo $user_profile;

    
    

}
?>

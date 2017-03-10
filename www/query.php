<?php
$db = new SQLite3('sample.db');

header('Content-Type: application/json');
if($_POST['act']=='login') {
    $result = $db->querySingle(sprintf("SELECT * FROM users WHERE email = '%s'",$_POST['email']),true);
    if(!empty($result)) {
        echo json_encode(array('response'=>'success','data'=>$result));
    }
    else {
        echo json_encode(array('response'=>'error','message'=>'No user found.'));
    }

}

?>

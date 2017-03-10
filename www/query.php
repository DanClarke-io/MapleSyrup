<?php
$db = new SQLite3('sample.db');

header('Content-Type: application/json');
if($_POST['act']=='login') {
    $result = $db->querySingle(sprintf("SELECT * FROM users WHERE email = '%s'",$_POST['email']),true);
    if(!empty($result)) {
        $result2 = $db->query(sprintf("SELECT * FROM subjects WHERE uid = %d",$result['id']));
        $rows = array();
        while($row = $result2->fetchArray()) {
            $rows[] = $row;
        }
        echo json_encode(array('response'=>'success','data'=>$rows));
    }
    else {
        echo json_encode(array('response'=>'error','message'=>'No user found.'));
    }
}
elseif($_POST['act']=='notes') {
    $result = $db->query(sprintf("SELECT title,id FROM notes WHERE sid = %d",$_POST['id']));
    if($result->fetchArray()) {
        $result->reset();
        $rows = array();
        while($row = $result->fetchArray()) {
            $rows[] = $row;
        }
        echo json_encode(array('response'=>'success','data'=>$rows));
    }
    else {
        echo json_encode(array('response'=>'error','message'=>'No notes found.'));
    }
}
elseif($_POST['act']=='note') {
    $result = $db->query(sprintf("SELECT title,id,explanation,source FROM notes WHERE id = %d",$_POST['id']));
    if($result->fetchArray()) {
        $result->reset();
        $rows = array();
        while($row = $result->fetchArray()) {
            $rows[] = $row;
        }
        echo json_encode(array('response'=>'success','data'=>$rows));
    }
    else {
        echo json_encode(array('response'=>'error','message'=>'No notes found.'));
    }
}
else {
    echo json_encode(array('response'=>'error','message'=>'Unrecognised command'));
}

?>

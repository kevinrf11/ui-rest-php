<?php
try {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/private/services/serviceEmployee.php';

    $object = new stdClass();
    $object->firstName = $_POST['firstName'];
    $object->lastName = $_POST['lastName'];
    $object->birthDate = $_POST['birthDate'];
    $object->gender = $_POST['gender'];
    $object->deptNo = $_POST['deptNo'];
    $object->title = $_POST['title'];
    $object->salary = $_POST['salary'];

    $service = new ServiceREST();
    $res = $service->insertEmp($object);
    return json_encode($res);
    //code...
} catch (Exception $e) {
    file_put_contents("AjaxErrors.txt",$e->getMessage(), FILE_APPEND);
    return false;
}


echo json_encode($data);
?>
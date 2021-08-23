<?php 
require_once $_SERVER["DOCUMENT_ROOT"].'/config.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/private/utility/classCurl.php';

class ServiceREST{
    public function getEmployees(){
        try {
            $curl = new CurlManager(REST_URL);
            $response = $curl->sendEmptyGetReq("getLast");
            $curl->__destruct();
            return json_decode($response);
        } catch (Exception $e) {
            file_put_contents("CurlErrors.txt",$e->getMessage(), FILE_APPEND);
            return false;
        }
       
    }
    public function getDetailsEmp($empNo){
        try {
            $curl = new CurlManager(REST_URL);
            $response = $curl->sendGetRequest($empNo,"getDataEmp");
            $curl->__destruct();
            return json_decode($response);
        } catch (Exception $e) {
            file_put_contents("CurlErrors.txt",$e->getMessage(), FILE_APPEND);
            return false;
        }
    }
    public function insertEmp($data){
        try {
            $curl = new CurlManager(REST_URL);
            $response = $curl->sendPostRequest($data,"newEmp");
            $curl->__destruct();
            return json_decode($response);
        } catch (Exception $e) {
            file_put_contents("CurlErrors.txt",$e->getMessage(), FILE_APPEND);
            return false;
        }
    }
}


?>
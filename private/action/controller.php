<?php
require_once './vendor/autoload.php';
require_once './private/services/serviceEmployee.php';

$loader = new \Twig\Loader\FilesystemLoader('./public/templates');
$twig = new \Twig\Environment($loader, [
    //'cache' => './public/cache',
    'cache' => false,
]);
$service = new ServiceREST();

echo $twig->render('header.html.twig');

try {
    $uri = $_SERVER["REQUEST_URI"];
    $splitUri = explode("/",$uri);
    $action = explode("?", $splitUri[1]);
 
    switch ($action[0]) {
        case '':
            echo $twig->render('home.html.twig');
            break;
        case 'list':
            $listEmp = $service->getEmployees();
            echo $twig->render('listEmp.html.twig',["list"=>$listEmp]);
            break;
        case 'details':
            $empNo = $splitUri[2];
            if (empty($empNo)) {
                echo $twig->render('404.html.twig',["message"=>"Employee number is empty"]);
            }
            else{
                $details = $service->getDetailsEmp(array("empNo"=>$empNo));
                echo $twig->render('details.html.twig',["details"=>$details]);
            }
            break;
        case 'create':
            echo $twig->render('createForm.html.twig');
            break;
        default:
            echo $twig->render('404.html.twig',["message"=>"Page not found"]);
            break;
    }
 } catch (Exception $e) {
    echo "Controller error";
    file_put_contents("Ctrlerrors.txt",$e->getMessage(), FILE_APPEND);
 }

echo $twig->render('footer.html.twig');
?>
<?php

require_once "../Model/Dias.php";

$dia1 = new Dias(1, date('Y-m-d H:i:s'));

if (isset($_REQUEST['form1'])) {

    $dia1->insertDay1($_REQUEST['1'], $_REQUEST['2'], $_REQUEST['3'], $_REQUEST['4'], $_REQUEST['5'], $_REQUEST['6'], $_REQUEST['7']);

} else {
    
    include '../View/formulario1.php';
}

// header("location: index.php");

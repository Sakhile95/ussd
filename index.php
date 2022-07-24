<?php

    $sessionId = $_POST["sessionId"];
    $serviceCode = $_POST["serviceCode"];
    $phoneNumber = $_POST["phoneNumber"];
    $text = $_POST["text"];


    if($text == ""){

        $response = "CONWelcome to Eswatini Mobile e-Mali\nEnter your password:";


    }else if($text == "1995"){

        $response = "CONAccount holder: Sakhile Mkhonta\n1. Transfer money\n2. Request money\n3. Check account balance";

    }else if($text == "1995*1"){

        $response = "ENDPlease enter amount:";

    }else if($text == "1995*2"){

        $response = "ENDPlease enter amount:";

    }else if($text == "1995*3"){

        $balance = "5000";
        $response = "ENDBalance: ".$balance;

    }

    header('Content-type; text/plain');
    echo $response;

?>
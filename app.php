<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

if(isset($_GET['user']) && isset($_GET['password'])){



       if($_GET['user'] === "Amira" && $_GET['password'] === 1212){


        $array = [
            "name" => "Amira" ,
            "age" => 39
        ];
    
        
        $jsonArray = json_encode($array);
        
        
        print_r($jsonArray );


       }else{

        
        $error = [
            "message" => "You are not allowed"
        ];
    
    
        $jsonError = json_encode($error['message']);
        print_r($jsonError);
       }


}else{
    $error2 = [
        "message" => "You are not allowed"
    ];


    $jsonError2 = json_encode($error2);
    print_r($jsonError2);
};


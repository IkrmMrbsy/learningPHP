<?php
//Dengan Null Coalescing Operator//
$data1 = [
    "action" => "buat"
];

$action1 = $data1["action"] ?? "Nothing";
echo $action1;

//Tanpa Null Coalescing Operator//
$data = [
    "action" => "create"
];

if(isset($data["action"])){
    $action = $data["action"];
}else{
    $action = "nothing";
}

echo $action;
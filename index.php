<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="key">
</form>

<?php

$key = $_POST['key'];
$data = file_get_contents('string.json');


function foo ($key, $data) {
    $pass = 1234;
    if($key == $pass){
        $json = json_decode($data);
        foreach ($json as $key => $value) {
//            "{$key} => {$value}";
            foreach ($value as $item) {
//                print_r($item);
                foreach ($item as $subitem => $sub) {
                 print_r("{$subitem} = {$sub}<br>");
                }
            }
        }
    }
}

$func = 'foo';
$func($key, $data);

?>
</body>
</html>
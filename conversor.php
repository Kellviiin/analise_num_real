<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $num = $_POST["numero"];
    $num_formt = str_ireplace(',','.', $num);
    if(str_contains($num_formt,'.')){
        $array = explode('.', $num_formt);
        $valor_inteiro = "Parte inteira: ".$array[0];
        $valor_decimal = 'Parte decimal: '.'0,'.$array[1];
        
        
        
    }
?>

<p><?php print_r($valor_inteiro) ?></p>
<p><?php print_r($valor_decimal); ?></p>
</body>
</html>
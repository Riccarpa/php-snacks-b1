<!-- SNACK 1
Creare una funzione che restituisce un array con 15 numeri casuali, tenendo conto
 che l’array non dovrà contenere lo stesso numero più di una volta. Stampare i numeri in pagina. -->

 <?php
 
 function random_numbers(){
    $random_numbers=[];
    while(count($random_numbers)<=14){
        $random_number = rand(1,15);
        
        if(!in_array($random_number, $random_numbers)){
            
            $random_numbers[] = $random_number;
        }
    }
    return $random_numbers;
 };

 $random_15= random_numbers();
    
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <ul>
        <?php foreach($random_15 as $number){ ?>
            <li><?php echo $number ?></li>
        <?php } ?>
    </ul>


</body>
</html>

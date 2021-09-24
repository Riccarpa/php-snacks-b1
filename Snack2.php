<!-- SNACK 2
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici (senza, materia, solo numeri). 
Creare una funzione che calcoli la media voto di un alunno.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php 

$alunni=[
    [
        'nome'=>'pippo',
        'cognome'=>'manlio',
        'voti'=>[6,7,8,9]
    ],
    [
        'nome'=>'maria',
        'cognome'=>'pepe',
        'voti'=>[6,6,8,9]
    ],
    [
        'nome'=>'luca',
        'cognome'=>'franco',
        'voti'=>[6,7,8,10]
    ],
];

function get_media($alunni){
    foreach($alunni as $alunno){

        $voti_sum = 0;

        foreach($alunno['voti'] as $voto){

            $voti_sum += $voto;
        }

        $media = $voti_sum / count($alunno['voti']);

        
        return $media;
    }
}

$media = get_media($alunni);
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
        <?php foreach($alunni as $alunno){ ?>
            <li><?php echo $alunno['nome'] . ' ' . $alunno['cognome'] .' '. $media  ?> </li>
        <?php } ?>

    </ul>
</body>
</html>
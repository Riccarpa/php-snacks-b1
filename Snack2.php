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

foreach($alunni as $alunno){

    $voti_sum = 0;

    foreach($alunno['voti'] as $voto){

        $voti_sum += $voto;
    }

    $media = $voti_sum / count($alunno['voti']);

    var_dump($media);
}

?>
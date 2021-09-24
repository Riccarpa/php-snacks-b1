<!-- BONUS SNACK
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
-che name sia più lungo di 3 caratteri,
-che mail contenga un punto e una chiocciola
- che age sia un numero.
-Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
SUPER BONUS: Personalizzare l'avviso di accesso negato con la motivazione. es: ("Accesso negato: mail non valida") -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form >
        <input type="text" name="name" value="marco">
        <input type="text" name="email"value="ddd@mail.com">
        <input type="text" name="age"value="44">
        <button>accedi</button>
    </form>
    <?php
    if(empty($_GET['name']) && empty($_GET['email']) && empty($_GET['age'])){echo 'inserisci i tuoi dati';} 
    else if(strlen($_GET['name'])<=3){echo 'nome errato';}
    else if(!is_numeric($_GET['age'])){ echo 'inserisci un numero valido';}
    else if (!strpos($_GET['email'],'@')){ echo 'inserisci un email valida'; }
    else {echo 'benvenuto';}
    
    
    
    ?>
</body>
</html>
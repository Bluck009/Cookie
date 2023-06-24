<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body>
    <h1>Page test cookie with git test 1</h1>

    <h2>Cookie compteur test #1</h2>
    <?php
    $testCookie = 1;
    
    if (!isset($_COOKIE['Salutation'])){
        setcookie('Salutation', $testCookie, time() + (60 * 60), null, null, false, false); // 1h
        echo 'Bienvenue pour votre première visite';
    }
    else  {
        $testCookie += $_COOKIE['Salutation'];
        setcookie('Salutation', $testCookie, time() + (60*60), null, null, false, false); // 1h
        echo 'le nombre de visite est : ' . $testCookie; 
    }
    ?>
    <h2>Cookie compteur test #2</h2>
    <?php
    $temp = 1;    
    if(isset($_COOKIE['Salut'])){
        $temp += $_COOKIE['Salut'];        
    }
    setcookie('Salut', $temp, time() + (60*60), null, null, false, false); //1h
    echo 'nombre visite : '. $temp;
    ?> 
</body>

</html>
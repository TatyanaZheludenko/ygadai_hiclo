<?php
    header('Coutent-type: text/html; charset=utf-8');
    $message = "Угадайте число в диапазоне  от 0 до 60!"; 


if (isset($_POST["ugadat"])) { 
    $chislo = $_POST["chislo"]; 
   
    $hidden_chislo = $_POST["hidden_chislo"]; 
     
   
    if ($chislo < $_POST["hidden_chislo"]) { 

        $quotes[] = 'Загаданное число немножко больше';
        $quotes[] = 'Я загадал цифру больше твоей!';
        $quotes[] = 'Даю тебе ещё одну попытку, цифра больше!';
        $quotes[] = 'Возможно, твои ошибки - это то, что нужно Миру. Число больше';
        $quotes[] = 'Думаю, ты справишься. Цифра немного больше';
    srand ((double) microtime() * 1000000);
    $random_number = rand(0,count($quotes)-1);
    echo ($quotes[$random_number]);
        $message = "Загаданное число немножко больше $chislo"; 
    } 
    
    elseif ($chislo > $_POST["hidden_chislo"]) { 
        
        $quotes[] = 'Загаданное число немножко меньше';
        $quotes[] = 'Даю тебе ещё одну попытку, цифра меньше!';
        $quotes[] = 'Возможно, твои ошибки - это то, что нужно Миру. Число меньше';
        $quotes[] = 'Думаю, ты справишься. Цифра немного меньше';
        $quotes[] = 'Фу-фу-фу. Назови цифру поменьше!';
    srand ((double) microtime() * 1000000);
    $random_number = rand(0,count($quotes)-1);
    echo ($quotes[$random_number]);  
         $message = "Загаданное число немножко меньше $chislo"; 
        

    } elseif ($chislo == $_POST["hidden_chislo"]) { 

        $message = "<h1>Ура! Вы победили!</h1> 
        <br> <h2>Загаданно новое число!</h2>";
        $hidden_chislo = rand(0, 60); 
    }
} else { 
    $chislo = 0; 
    $hidden_chislo = rand(0, 60); 
}

?>

<html>
    <head>
        <title>Игра Угадай число</title>
    </head>
</html>
    <body bgcolor="#FF8293">
        <h2><?php echo $message; ?></h2>
            <form method="post">

                 <input type="text" value="<?php echo $chislo ?>" name="chislo" /> 
 
                 <input type="submit" name="ugadat" value="Угадать" /><br/>
 
                <input type="hidden" name="hidden_chislo" value="<?php echo $hidden_chislo ?>" />

            </form>
    </body>
</html>


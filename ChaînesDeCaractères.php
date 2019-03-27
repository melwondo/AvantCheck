<?php
    $message1 = "0@sn9sirppa@#?ia'jgtvryko1";
    $message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
    $message3 = "aopi?sgnirts@#?sedhtg+p9l!";
    
    $tailleun = strlen($message1);
    $tailledeux = strlen($message2);
    $tailletrois = strlen($message3);
    
    echo $tailleun;
    echo '<br>';
    echo $tailledeux;
    echo '<br>';
    echo $tailletrois;
    echo '<br>';
    
    
    $chiffre1 = strlen($message1) / 2;
    echo $chiffre1;
    
    echo '<br>';
    
    $chiffre2 = strlen($message2) / 2;
    echo $chiffre2;
    
    echo '<br>';
    
    $chiffre3 = strlen($message3)/ 2;
    echo $chiffre3;
    
    echo '<br>';
    
    $code1 = substr($message1, 5, $chiffre1);
    echo $code1;
    
    echo '<br>';
    
    $code2 = substr($message2, 5, $chiffre2);
    echo $code2;
    
    echo '<br>';
    
    $code3 = substr($message3, 5, $chiffre3);
    echo $code3;
    
   echo '<br>';
   echo '<br>';
   
   $code1 = str_replace("@#?",' ',$code1);
   
   echo '<br>';
   
   $code2 = str_replace("@#?",' ',$code2);
    
    echo '<br>';
    
   $code3 = str_replace("@#?",' ',$code3);
    
    
    echo '<br>';
    $code1 = strrev($code1);
    
    $code2 = strrev($code2);
    
    $code3 = strrev($code3);
    
    echo $code1. ' ' .$code2. ' ' .$code3;
    
        
?>

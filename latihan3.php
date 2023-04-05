<?php
    $usr="";
    $pass="";
    $eusr="";
    $epass="";
    if (isset($_POST["txUSER"])){
        $usr= $_POST["txUSER"];
        $pass=$_POST["pass"];

        if ($usr==""){
            $eusr ="<div style='color:red;forn-size:10px;'>filed usr masih kosong </div> ";
        }
        
        if ($pass==""){
            $epass ="<div style='color:red;forn-size:10px;'>filed pass masih kosong </div> ";
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>from method request</title>
</head>
<body>
    <form method ="post" action="latihan3.php">
        <div>
            user name
            <input type="text" name="txUSER" >
            <?=$eusr;?>
        </div>
        <div>
            password
            <input type="text" name="pass">
            <?=$epass;?>
        </div>
        <div>
            <button>login</button>
        </div>
    </form>
    <div>
        isi form kelas <br>
        1.user name : <?=$usr?><br>
        2.password : <?=$pass?>
    </div>
</body>
</html>
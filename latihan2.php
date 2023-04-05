<?php
    $usr="";
    $pass="";
    if (isset($_post["txUSER"])){
        $usr= $_post["txUSER"];
        $pass=$_post["pass"];
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>from method post</title>
</head>
<body>
    <form method ="post" action="latihan2.php">
        <div>
            user name
            <input type="text" name="txUSER">
        </div>
        <div>
            password
            <input type="text" name="pass">
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
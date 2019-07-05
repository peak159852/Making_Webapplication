<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Page Title</title>
</head>
<body>
    <?php
        $password = $_GET['password'];
        if($password == "1111"){
            echo "안녕하세요";
        } else {
            echo "뉘신지?";
        }
    ?>  
</body>
</html>
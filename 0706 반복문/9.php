<!Doctype html>
<html>
<head>
    <meta charset = "utf-8">
</head>
<body>
    <h1>javascript</h1>
    <ul>
    <script>
       i = 0;
       while(i < 10){
           document.write("<li>hello world </li>");
           i = i + 1 ;
       }
    </script>
    </ul>
    <h1>PHP</h1>
    <ul>
    <?php
        $i = 0;
        while($i < 10){
            echo "<li>hello world </li>";
            $i = $i + 1;
        }
    ?>
    </ul>
</body>
</html>
<!Doctype html>
<html>
<head>
    <meta charset = "utf-8">
</head>
<body>
    <h1>javascript</h1>
    <ul>
    <script>
       list = new Array("one","two","three");
       i = 0;
       while(i < list.length){
           document.write("<li>" + list[i] + "</li>");
           i = i + 1;
       }
    </script>
    </ul>
    <h1>PHP</h1>
    <ul>
    <?php
       $list = array("one","two","three"); 
       $i = 0;
       while($i < count($list)){
           echo "<li>".$list[$i]."</li>";
           $i = $i + 1;
       }
    ?>
    </ul>
</body>
</html>
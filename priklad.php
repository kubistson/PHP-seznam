<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'seznam.php';
        $seznam = new seznam("ol"); // zadpíšeme typ seznamu ( èíslovaný )
        $seznam->pridat_polozku("radka1"); // zapíšeme data do seznamu
        $seznam->pridat_polozku("radka2");
        $seznam->pridat_polozku("radkaX");
        echo $seznam; // vypíšeme seznam
        
        $seznam = new seznam("ul"); // zadáme typ seznamu ( odrážkovaný )
        $seznam->pridat_polozku("radka1");// zadáme data do seznamu
        $seznam->pridat_polozku("radka2");
        $seznam->pridat_polozku("radkaX");
        echo $seznam; // vypíšeme seznam
        ?>
    </body>
</html>

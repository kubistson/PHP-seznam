<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'seznam.php';
        $seznam = new seznam("ol"); // zadp�eme typ seznamu ( ��slovan� )
        $seznam->pridat_polozku("radka1"); // zap�eme data do seznamu
        $seznam->pridat_polozku("radka2");
        $seznam->pridat_polozku("radkaX");
        echo $seznam; // vyp�eme seznam
        
        $seznam = new seznam("ul"); // zad�me typ seznamu ( odr�kovan� )
        $seznam->pridat_polozku("radka1");// zad�me data do seznamu
        $seznam->pridat_polozku("radka2");
        $seznam->pridat_polozku("radkaX");
        echo $seznam; // vyp�eme seznam
        ?>
    </body>
</html>

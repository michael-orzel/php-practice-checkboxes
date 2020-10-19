<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <form action="site.php" method="post">
            Select the ArcSys games that you enjoy: <br> <br>
            GGXrd: <input type="checkbox" name="arcsys[]" value="GGXrd"> <br>
            DBFZ: <input type="checkbox" name="arcsys[]" value="DBFZ"> <br>
            GBVS: <input type="checkbox" name="arcsys[]" value="GBVS"> <br>
            P4U: <input type="checkbox" name="arcsys[]" value="P4U"> <br>
            BBCF: <input type="checkbox" name="arcsys[]" value="BBCF"> <br>
            BBTag: <input type="checkbox" name="arcsys[]" value="BBTag"> <br>
            <input type="submit">
        </form>

        <?php
            $arcsys = $_POST["arcsys"];

            for($i = 0; $i < count($arcsys); $i++)
            {
                echo "$arcsys[$i] <br>";
            }
            
        ?>
    </body>
</html>

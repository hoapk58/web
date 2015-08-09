<html>
    <head>
        <title>Foreach Loop</title>

    </head>
        
    <body>
        <?php
            $names = array('Demon Warlock', 'Minh Man', 'Mr. Nav', 'Clackken Smith', 68, 95);
            foreach ($names as $name) {
                echo $name ."<br/>";
            }
            
            foreach ($names as $key => $value) {
                echo $key . " " . $value . "<br/>";
            }
        ?>

    </body>
</html>
<html>
    <head>
        <title>Logical Operator</title>
    </head>
        
    <body>
        <?php 
            $img = "izwebz.exe";
            $l = strlen($img);
            $allowed = array('jpg', 'png', 'gif');
            $split = explode('.', $img);
            $ext = end($split); // jpg
            if(($l < 1) || in_array($ext,$allowed)) {
                echo "your image is ready for upload";
            } else {
                echo "Your image is not either the valid type or over the size limit.";
            }
            
        ?>
    </body>
</html>
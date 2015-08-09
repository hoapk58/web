<html>
    <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>PHP Calendar</title>
    </head>
        
    <body>
    <?php
        if(isset($_POST['submit'])) {
            // Xu ly form 
            //if($_POST['gender'] == 'nu') {
                //echo "Chao chi!";
            //}elseif($_POST['gender'] == 'nam') {
                //echo "Chao anh!";
                echo ($_POST['gender']=='nu') ? "chao chi" : "chao anh";
            } 

    ?>

    <form action="" method="post">
        <select name="gender">
            <option>Giới tính</option>
            <option value="nu">Nữ</option>
            <option value="nam">Nam</option>
        </select>
        <input type="submit" name="submit" value="Submit" />
    </form>
        
    </body>
</html>
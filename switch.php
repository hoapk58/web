<html>
    <head>
        <title>Switch</title>
    </head>
        
    <body>
        <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Forum</a></li>
        <?php 
            $user_level = 0;
            switch ($user_level) {
                case 1:
                echo "<li><a href=''>User Profile</a></li>";
                break;
                
                case 2:
                echo "<li><a href=''>Edit Profile</a></li>";
                break;
                
                case 3:
                echo "<li><a href=''>Delete Profile</a></li>";
                break;
                
                default:
                echo "<li><a href=''>Register</a></li>";
                break;
            }
            
        ?>
        <li><a href="">Services</a></li>
        <li><a href="">Contact Us</a></li>
        </ul>
    </body>
</html>
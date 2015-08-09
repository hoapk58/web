<html>
    <head>
        <title>For Loop</title>
        <style>
         ul li {display: inline; margin: 0 5px;}
        </style>
    </head>
        
    <body>
            <ul class="pagination">
                <?php
                    for($i=1; $i <= 8; $i++) {
                        echo "<li><a href='{$i}'>{$i}</a></li>";
                    }
                    
                ?>
                
            </ul>
    </body>
</html>
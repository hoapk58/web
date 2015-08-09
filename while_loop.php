<html>
    <head>
        <title>While Loop</title>
        <style type="text/css">
         ul li {display: inline; margin: 0 5px;}
        </style>
    </head>
        
    <body>
            <ul class="pagination">
                <?php
                    $count = 0;
                    while($count <= 10) {
                        if($count == 7) {
                            echo "...";
                        } else {
                        echo "<li><a href='{$count}'>{$count}</a></li>";
                        }
                        $count++;
                    }// End While loop
                ?>  
            </ul>
    </body>
</html>
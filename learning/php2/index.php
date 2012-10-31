<!doctype html>

<html>
    <head></head>
    <body>

        <?php

            $page = $_GET['page'];
            if($page == 'index' || empty($page)){
                include 'content/index.php';
            }
            else if($page == 'about'){
                include 'content/about.php';
            } 
            else {
                include 'content/404.php';
            }

        ?>
        
    </body>
</html>
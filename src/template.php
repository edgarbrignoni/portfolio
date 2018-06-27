<!DOCTYPE html>
<html>
    <head>
        <?php require('head.php'); ?>
    </head>
    <body>
        <?php 
            require('navbar.php');
            
            require($pageToDisplay.'.php');
            
            require('footer.php'); 
        ?>
    </body>
</html>
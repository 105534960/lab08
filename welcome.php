<!DOCTYPE html>
<html lang='en'>
    <?php
        include 'footer.inc'; 
        session_start();
        if(isset($_SESSION['user']))
        {
            echo "Welcome," . $_SESSION['user'];
        }
        else
        {
            header('Location: login.html');
        }
        include 'header.inc';    
    ?>
</html>
<?php
require('db.php');
session_start();

if(isset($_POST['btn12'])){
    if($_POST['btn12']==0){
            echo $_POST['btn12'];

    }
    else{
        echo "0";
    }
}

?>



<html>
    <body>
    <form method="post" action="try">
        
        <button type="submit" value="1" name="btn12">123</button>
        </form>
    
    </body>
</html>
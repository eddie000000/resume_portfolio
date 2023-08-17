<?php
    require "header.php";
    require "userinterface.php";
?>
<main>
    <?php
        if(isset($_SESSION['userID'])){
            echo '<p>you are logged in!</p>';
        }
        else
        {

        }
    ?>
</main>
<?php

?>
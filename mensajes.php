<?php
    function errorMsg(){
   
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
        echo '<span aria-hidden="true">&times;</span>';
        echo '<span class="sr-only">Close</span>';
        echo '</button>';
        //var_dump($_SESSION);
        echo $_SESSION['feedback']['error'];
        unset($_SESSION['feedback']['error']);

        echo '</div>';
    
    }
    function succesMsg ($msg) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
        echo '<span aria-hidden="true">&times;</span>';
        echo '<span class="sr-only">Close</span>';
        echo '</button>';

        echo $msg;
        $_SESSION['feedback']['succes'] = FALSE;

        echo '</div>';
    }


?>
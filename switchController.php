<?php 

function switchMaster(){
//var_dump($_SESSION);
    switch($_SESSION['from']){
        case "login":
        if ($_SESSION['feedback']['succes'] === TRUE){
            succesMsg("Bienvenido " . $_SESSION['user']['name']);
        }
        else{
            //var_dump($_SESSION);
            ?>
            <script>$('#loginModal').modal('show')</script>
            <?php          
        }
        break;
        case "register":
        if ($_SESSION['feedback']['succes'] === TRUE){
        /* ?>
            <script>$('#loginModal').modal('show')</script>
        <?php */
        
        }
        else{
            
        ?>
            <script>$('#registerModal').modal('show')</script>
        <?php 
        } 
        break;
    }
    $_SESSION['from'] = "";
    
}

?>
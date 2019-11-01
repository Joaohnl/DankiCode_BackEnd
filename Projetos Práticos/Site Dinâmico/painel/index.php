<?php 
    include '../config.php';

    if(Painel::logado()) {
        include 'main.php';
    } else {
        include 'login.php';
    }

?>



<base 
    baseurl="<?php echo INCLUDE_PATH; ?>"
    baseurlPAINEL="<?php echo INCLUDE_PATH_PAINEL; ?>" />

<script src="<?php echo INCLUDE_PATH?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH?>js/constants.js"></script>
<script src="<?php echo INCLUDE_PATH?>js/formPainel.js"></script>
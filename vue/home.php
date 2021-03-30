<?php require_once(dirname(__DIR__).'/vue/frontend/head.php');?>

<!-- Si aucun utilisateur n'est connecté, on affiche ce qui suit -->
<?php if ($_SESSION["user"] == false) { ?>
    <?php require_once(dirname(__DIR__).'/vue/frontend/login.php');?>
<!-- Si 'user' est connecté, on affiche ce qui suit -->
<?php } 
else if ($_SESSION["user"]['role'] == 1) { ?>
     <?php require_once(dirname(__DIR__).'/vue/frontend/todoList.php');?>       
<!-- Si admin est connecté, on affiche ce qui suit -->
<?php } 
else if ($_SESSION['user']['role'] == 2) { ?>
    <?php require_once(dirname(__DIR__).'/vue/admin/admin.php');?>     
<?php } ?>

<?php require_once(dirname(__DIR__).'/vue/frontend/foot.php');?>
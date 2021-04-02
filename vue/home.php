<?php require_once(dirname(__DIR__).'/vue/frontend/head.php');?>

<!--CSS-->
<link rel="stylesheet" href="../public/style/style.css">
    
    </head>
    
    <body>
    
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand text-warning" href="#">
                <h1>Todo-List</h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <div class="d-flex navbarClass justify-content-end align-items-center w-100">
                    <ul class="navbar-nav">
            
                        <!-- Si aucun utilisateur n'est connecté, on affiche ce qui suit -->
                        <?php if ($_SESSION["user"] == false) { ?>
                            <h3 class="text-white border-bottom">Bienvenue</h3>
                        <!-- Si 'user' est connecté, on affiche ce qui suit -->
                        <?php } else if ($_SESSION['role'] == 1 && $_SESSION["user"] == true) { ?>
                            <li>
                                <form action="../controller/logout.php" method="POST">
                                    <button class="btn btn-primary btn-green-nav" type="submit" name="deconnexion">Déconnexion</button>
                                </form>
                            </li>
                        <?php }?>
            
                    </ul>
                </div>    
            </div>
        </nav>

        <?php include '../controller/inscription.php'; ?>
        <?php include '../controller/login.php'; ?>

        <div class="container mt-5 w-50 text-center">
        <?php if(isset($_SESSION['flash'])):?>
          <?php if($_SESSION['flash'][0] == "Success"):?>
          <div class="alert alert-success" id="success"><?= $_SESSION['flash'][1] ?></div>
          <?php else:?>
          <div class="alert alert-danger" id="error"><?= $_SESSION['flash'][2] ?></div>
          <?php endif;?>
          <?php endif;?>
        </div>

        

<!-- Si aucun utilisateur n'est connecté, on affiche ce qui suit -->
<?php if ($_SESSION["user"] == false) { ?>
    <?php require_once(dirname(__DIR__).'/vue/frontend/login.php');?>
<!-- Si 'user' est connecté, on affiche ce qui suit -->
<?php } 
else if ($_SESSION['role'] == 1 && $_SESSION["user"] == true) { ?>
     <?php require_once(dirname(__DIR__).'/vue/frontend/todoList.php');?>       
<!-- Si admin est connecté, on affiche ce qui suit -->
<?php } 
else if ($_SESSION['role'] == 2 && $_SESSION["user"] == true) { ?>
    <?php require_once(dirname(__DIR__).'/vue/admin/admin.php');?>     
<?php } ?>

<?php require_once(dirname(__DIR__).'/vue/frontend/foot.php');?>
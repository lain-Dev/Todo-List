<!--Début Todo List-->
<div class="container-fluid mt-5" style="padding: 0px;">

     <!--Bouton utilisateur-->
     ?php if($_SESSION['particulierLoggedIn'] == true):?>

       
        <!-- Button trigger modal -->
        <div class="d-flex justify-content-center">
            <button type="button" class="btn bg-warning mb-3 font-weight-bold" data-toggle="modal" data-target="#exampleModal">
                Entrer la tâche !
            </button>
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Entrer votre Tâche à faire !</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">

                       
                    <?php 

                                @$jour=$_POST["jour"];
                                @$tache=$_POST["tache"];

                                @$erreur="";
                                if(isset($valider)){

                                if(empty($jour)) $erreur='<div class="alert alert-danger">selectionner un jour!</div>';
                                elseif(empty($tache)) $erreur='<div class="alert alert-danger">entrer une tache!</div>';
                                else{
                                    Include dirname(dirname(__DIR__)).'/controllers/ajoutTache.php';
                                }
                                }    
                                ?>

                                <!--Début Formulaire inscription-->
                                <?php
                                    if(isset($erreur)){
                                        echo $erreur;
                                    }
                            
                        ?>
                    
                        <form method="POST">

                            <!--texte texte a entrer-->
                            <div>
                                <label for="titre">Entrer la tache :</label>
                                <input type="text" class="form-control" placeholder="écrire la tache ici..." name="tache"
                                value="<?php if(isset($_POST['tache'])){
                            echo $_POST['tache'];
                        }?>">
                            </div>

                        
                            </div>
                                <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>

                                    <button type="submit" class="btn btn-primary" name="ajouer" formmethod="post">Ajouter</button>

                          
                                </div>
                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>
        <!--Fin modal-->
                   
        ?php endif ?>

    <div class="container"> 
     

        <div class="col mb-4" style="padding: 0px;">
            <div class="card">
                <div class="card-body bg-dark">
                    <ul class="list-group">
                        <li class="list-group-item active bg-dark  border-0 text-warning">Liste:</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
    </div>
</div>
<!--Fin TodoList-->
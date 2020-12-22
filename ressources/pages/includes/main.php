<!--Début Todo List-->
<div class="container mt-5">

    <!-- Button trigger modal -->
    <div class="d-flex justify-content-center">
        <button type="button" class="btn bg-warning mb-3" data-toggle="modal" data-target="#exampleModal">
            Entrer une tâche !
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
                    <form action="">

                        <!--choix Jour-->
                        <div class="mb-3">
                            <select class="form-control" id="star">
                                <option selected>select</option>
                                <option value="lundi">lundi</option>
                                <option value="mardi">mardi</option>
                                <option value="mercredi">mercredi</option>
                                <option value="jeudi">jeudi</option>
                                <option value="vendredi">vendredi</option>
                                <option value="samedi">samedi</option>
                                <option value="dimanche">dimanche</option>
                            </select>
                        </div>

                        <!--texte texte a entrer-->
                        <div>
                            <input type="text" class="form-control" placeholder="entrer tâche" id="myInput">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary" type="submit">Sauvegarder</button>
                </div>
            </div>
        </div>
    </div>

    <!--Fin modal-->

    <div class="row row-cols-1 row-cols-md-2">

        <div class="col mb-4">
            <div class="card">
                <div class="card-body bg-primary">

                    <ul class="list-group">
                        <li class="list-group-item active ">LUNDI</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col mb-4">
            <div class="card">
                <div class="card-body bg-secondary">
                    <ul class="list-group">
                        <li class="list-group-item active bg-secondary border-0">MARDI</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col mb-4">
            <div class="card">
                <div class="card-body bg-success">
                    <ul class="list-group">
                        <li class="list-group-item active bg-success border-0">MERCREDI</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col mb-4">
            <div class="card">
                <div class="card-body bg-danger">
                    <ul class="list-group">
                        <li class="list-group-item active bg-danger border-0">JEUDI</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col mb-4">
            <div class="card">
                <div class="card-body bg-warning">
                    <ul class="list-group">
                        <li class="list-group-item active bg-warning border-0">VENDREDI</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col mb-4">
            <div class="card">
                <div class="card-body bg-info">
                    <ul class="list-group">
                        <li class="list-group-item active bg-info border-0">SAMEDI</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="col mb-4">
        <div class="card">
            <div class="card-body bg-dark">
                <ul class="list-group">
                    <li class="list-group-item active bg-dark  border-0">DIMANCHE</li>
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
<!-- Button trigger modal -->
<div class="container mt-5">
    <button type="button" class="btn bg-dark text-white" data-toggle="modal" data-target="#exampleModalCenter">
    Ajouter tâche !
    </button>
</div>


<!-- Modal -->
<form action="">

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Entrer la tâche:</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <label for="exampleFormControlTextarea1"></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary">Ajouter</button>
        </div>
        </div>
    </div>
    </div>

</form>






<div class="container my-5" style="min-height: 79vh;">

    <ul class="list-group">
        <li class="list-group-item bg-dark text-warning">Ma liste de tâche</li>
        <li class="list-group-item d-flex justify-content-between m-0">
            <button type="button" class="list-group-item list-group-item-action p-0 border-0">Dapibus ac facilisis in</button>
            <button class="btn btn-danger btn-sm" type="submit" name="supprimerAffectation" style="margin: 0px;">X</button>
        </li>
        <li class="list-group-item d-flex justify-content-between m-0">
            <button type="button" class="list-group-item list-group-item-action p-0 border-0">Dapibus ac facilisis in</button>
            <button class="btn btn-danger btn-sm" type="submit" name="supprimerAffectation" style="margin: 0px;">X</button>
        </li>
        <li class="list-group-item d-flex justify-content-between m-0">
            <button type="button" class="list-group-item list-group-item-action p-0 border-0">Dapibus ac facilisis in</button>
            <button class="btn btn-danger btn-sm" type="submit" name="supprimerAffectation" style="margin: 0px;">X</button>
        </li>
    </ul>
</div>
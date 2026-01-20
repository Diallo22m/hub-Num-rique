

<div class="modal fade" id="modalAddFormation" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow">

            <div class="modal-header ">
                <h5 class="modal-title">Enregistrer une formation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form action="" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Titre<strong class="text-danger"> * </strong></label>
                            <input type="text" name="titre" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Date Début<strong class="text-danger"> * </strong></label>
                            <input type="date" name="date_debut" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Date Fin<strong class="text-danger"> * </strong></label>
                            <input type="date" name="date_fin" class="form-control" required>
                        </div>
                         <div class="col-md-6">
                            <label class="form-label">Formateur<strong class="text-danger"> * </strong></label>
                            <select name="specialite" class="form-select" required>
                                <option>Oury</option>
                                <option>Sylla</option>
                                <option>Diallo</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Description</label>
                            <textarea name="descrption" class="form-control" id=""></textarea>
                        </div>
                       
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>

        </div>
    </div>
</div>





<div class="modal fade" id="modalAddApprenant" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow">

            <div class="modal-header ">
                <h5 class="modal-title">Enregistrer un Apprenant</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form action="" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Nom<strong class="text-danger"> * </strong></label>
                            <input type="text" name="nom" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Prénom<strong class="text-danger"> * </strong></label>
                            <input type="text" name="prenom" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Téléphone<strong class="text-danger"> * </strong></label>
                            <input type="text" name="telephone" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Adresse<strong class="text-danger"> * </strong></label>
                            <input type="text" name="adresse" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Profession<strong class="text-danger"> * </strong></label>
                            <input type="text" name="profession" class="form-control">
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



<div class="modal fade" id="modalAddInscription" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow">

            {{-- Header --}}
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-pencil-square me-2"></i> Nouvelle inscription
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            {{-- Formulaire --}}
            <form action="" method="POST">
                @csrf

                <div class="modal-body">
                    <div class="row g-3">

                        {{-- Nom --}}
                        <div class="col-md-6">
                            <label class="form-label">
                                Nom <strong class="text-danger">*</strong>
                            </label>
                            <input type="text" name="nom" class="form-control" required>
                        </div>

                        {{-- Prénom --}}
                        <div class="col-md-6">
                            <label class="form-label">
                                Prénom <strong class="text-danger">*</strong>
                            </label>
                            <input type="text" name="prenom" class="form-control" required>
                        </div>

                        {{-- Téléphone --}}
                        <div class="col-md-6">
                            <label class="form-label">
                                Téléphone <strong class="text-danger">*</strong>
                            </label>
                            <input type="text" name="telephone" class="form-control" required>
                        </div>

                        {{-- Profession --}}
                        <div class="col-md-6">
                            <label class="form-label">
                                Profession <strong class="text-danger">*</strong>
                            </label>
                            <input type="text" name="profession" class="form-control" required>
                        </div>

                        {{-- Adresse --}}
                        <div class="col-md-6">
                            <label class="form-label">
                                Adresse <strong class="text-danger">*</strong>
                            </label>
                            <input type="text" name="adresse" class="form-control" required>
                        </div>

                        {{-- Formation --}}
                        <div class="col-md-6">
                            <label class="form-label">
                                Formation <strong class="text-danger">*</strong>
                            </label>
                            <select name="id_formation" class="form-select" required>
                                <option value="">-- Sélectionner une formation --</option>
                                <option value="1">Développement Web</option>
                                <option value="2">Design Graphique</option>
                            </select>
                        </div>

                    </div>
                </div>

                {{-- Footer --}}
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">
                        Annuler
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Enregistrer
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

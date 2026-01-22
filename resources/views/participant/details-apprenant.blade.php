<div class="modal fade"
     id="modalDetailsApprenant{{ $participant->id }}"
     tabindex="-1"
     aria-hidden="true">

    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow">

            <!-- Header -->
            <div class="modal-header  text-white" style="background-color:#c4b107;">
                <h5 class="modal-title">
                    <i class="bi bi-person-badge me-2"></i>
                    Détails de l'apprenant
                </h5>
                <button type="button"
                        class="btn-close btn-close-white" style="background-color:#fff;"
                        data-bs-dismiss="modal"></button>
            </div>

            <!-- Body -->
            <div class="modal-body">
                <div class="row g-3">

                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded">
                            <small class="text-muted">Nom</small>
                            <h6 class="fw-semibold mb-0">{{ $participant->nom }}</h6>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded">
                            <small class="text-muted">Prénom</small>
                            <h6 class="fw-semibold mb-0">{{ $participant->prenom }}</h6>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded">
                            <small class="text-muted">Téléphone</small>
                            <h6 class="fw-semibold mb-0">
                                <i class="bi bi-telephone me-1"></i>
                                {{ $participant->telephone }}
                            </h6>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded">
                            <small class="text-muted">Adresse</small>
                            <h6 class="fw-semibold mb-0">
                                <i class="bi bi-geo-alt me-1"></i>
                                {{ $participant->adresse }}
                            </h6>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="p-3 bg-light rounded">
                            <small class="text-muted">Profession</small>
                            <h6 class="fw-semibold mb-0">
                                <i class="bi bi-briefcase me-1"></i>
                                {{ $participant->profession }}
                            </h6>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Footer -->
            <div class="modal-footer">
                <button type="button"
                        class="btn btn-danger btn-sm"
                        data-bs-dismiss="modal">
                    Fermer
                </button>
            </div>

        </div>
    </div>
</div>

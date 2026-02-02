<div class="modal fade" id="modalDeleteParticipant{{ $participant->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow">

            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">
                    <i class="bi bi-exclamation-triangle me-2"></i>
                    Confirmation de suppression
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body text-center">
                <p class="mb-2">Voulez-vous vraiment supprimer cet apprenant ?</p>
                <h6 class="fw-bold text-danger">
                    {{ $participant->nom }} {{ $participant->prenom }}
                </h6>
                <small class="text-muted">Cette action est irréversible.</small>
            </div>

            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Annuler
                </button>

                <form action="{{ route('participant.destroy', $participant->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="bi bi-trash me-1"></i> Supprimer
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>

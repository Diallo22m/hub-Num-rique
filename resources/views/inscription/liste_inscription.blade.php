@extends('dashboard.layouts')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold text-uppercase mb-0">
        <i class="bi bi-pencil-square me-2"></i> Liste des inscrits
    </h4>

    {{-- Bouton ouvrir modal inscription --}}
    <button class="btn btn-primary btn-sm fs-5"
            data-bs-toggle="modal"
            data-bs-target="#modalAddInscription">
        <i class="bi bi-plus-circle me-1"></i> Nouvelle inscription
    </button>
</div>

{{-- Carte tableau --}}
<div class="card shadow-sm border-0">
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light text-uppercase small">
                    <tr>
                        <th>N°</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Téléphone</th>
                        <th>Formation</th>
                        <th>Date inscription</th>
                        <th>Statut</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    {{-- Données fictives --}}
                    <tr>
                        <td>1</td>
                        <td>Diallo</td>
                        <td>Amadou</td>
                        <td>622 00 00 01</td>
                        <td>Développement Web</td>
                        <td>12/01/2026</td>
                        <td>
                            <span class="badge bg-warning">En attente</span>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-outline-success me-1" title="Valider">
                                <i class="bi bi-check-circle"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-danger me-1" title="Rejeter">
                                <i class="bi bi-x-circle"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-primary" title="Voir">
                                <i class="bi bi-eye"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

{{-- Modal inscription --}}
@include('inscription.ajout_inscription')

@endsection

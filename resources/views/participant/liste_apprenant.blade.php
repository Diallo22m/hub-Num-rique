@extends('dashboard.layouts')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold text-uppercase mb-0">
        <i class="bi bi-person-badge   me-2"></i> Liste des Apprenants
    </h4>

    {{-- Bouton pour ouvrir le modal --}}
    <button class="btn btn-primary btn-sm fs-5"
            data-bs-toggle="modal"
            data-bs-target="#modalAddApprenant">
        <i class="bi bi-plus-circle me-1 "></i> Ajouter un apprenant
    </button>
</div>

{{-- Carte contenant le tableau --}}
<div class="card shadow-sm border-0">
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light text-uppercase small ">
                    <tr class="">
                        <th>N°</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Téléphone</th>
                        <th>Adresse</th>
                        <th>Profession</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    {{-- Données fictives --}}
                    @foreach ($participants as $key => $participant)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $participant->nom }}</td>
                            <td>{{ $participant->prenom }}</td>
                            <td>{{ $participant->telephone }}</td>
                            <td>{{ $participant->adresse }}</td>
                            <td>{{ $participant->profession }}</td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-eye"></i></button>
                                <button class="btn btn-sm btn-outline-warning me-1"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>

{{-- Inclusion du modal --}}
@include('participant.ajout-apprenant') 

@endsection

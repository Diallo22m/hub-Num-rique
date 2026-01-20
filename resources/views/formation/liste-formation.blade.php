@extends('dashboard.layouts')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold text-uppercase mb-0">
        <i class="bi bi-person-badge   me-2"></i> Liste des formations
    </h4>

    {{-- Bouton pour ouvrir le modal --}}
    <button class="btn btn-primary btn-sm fs-5"
            data-bs-toggle="modal"
            data-bs-target="#modalAddFormation">
        <i class="bi bi-plus-circle me-1 "></i> Ajouter une formation
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
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Date Début</th>
                        <th>Date Fin</th>
                        <th>Formateur</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    {{-- Données fictives --}}
                    <tr>
                        <td>1</td>
                        <td>Informatique</td>
                        <td>Pour les debutants</td>
                        <td>12/02/2025</td>
                        <td>01/032026</td>
                        <td>Mamadou Oury Diallo</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-outline-primary fs-5 me-1"><i class="bi bi-eye"></i></button>
                            <button class="btn btn-sm btn-outline-warning fs-5 me-1"><i class="bi bi-pencil-square"></i></button>
                            <button class="btn btn-sm btn-outline-danger fs-5"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

{{-- Inclusion du modal --}}
@include('formation.ajout-formation') 

@endsection

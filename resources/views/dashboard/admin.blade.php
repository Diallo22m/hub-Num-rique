@extends('dashboard.layouts')

@section('content')
<div class="row g-4">

    {{-- Formations --}}
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="stat-boxs stat-green">
            <div class="stat-icon">
                <i class="bi bi-journal-text"></i>
            </div>
            <div class="stat-info">
                <h5>Formations</h5>
                <h2>12</h2>
            </div>
        </div>
    </div>

    {{-- Formateurs --}}
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="stat stat-blue">
            <div class="stat-icon">
                <i class="bi bi-person-badge"></i>
            </div>
            <div class="stat-info">
                <h5>Formateurs</h5>
                <h2>5</h2>
            </div>
        </div>
    </div>

    {{-- Apprenants --}}
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="stat-bo stat-orange">
            <div class="stat-icon">
                <i class="bi bi-people"></i>
            </div>
            <div class="stat-info">
                <h5>Apprenants</h5>
                <h2>120</h2>
            </div>
        </div>
    </div>

    {{-- Inscriptions --}}
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="stat-box stat-purple">
            <div class="stat-icon">
                <i class="bi bi-pencil-square"></i>
            </div>
            <div class="stat-info">
                <h5>Inscriptions</h5>
                <h2>30</h2>
            </div>
        </div>
    </div>

</div>
@endsection

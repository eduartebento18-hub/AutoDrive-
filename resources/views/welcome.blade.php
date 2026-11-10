```blade
@extends('layouts.app')

@section('title', 'Bem-vindo ao AutoDrive Flamengo')

@section('content')

<div class="container py-5">
    <div class="card text-center mx-auto" style="max-width: 800px;">
        <div class="card-body py-5">

            <h1 class="display-4 fw-bold text-flamengo">
                🔴⚫ AutoDrive Flamengo
            </h1>

            <h2 class="h4 fw-bold mt-3">
                Sistema de Gestão de Veículos
            </h2>

            <p class="text-muted mt-3">
                Bem-vindo ao sistema de gerenciamento de veículos.
                Aqui você pode cadastrar, consultar e administrar
                veículos e marcas.
            </p>

            <div class="mt-4">
                <a href="{{ route('veiculos.index') }}"
                   class="btn btn-flamengo btn-lg me-2">
                    Ver Veículos
                </a>

                <a href="{{ route('marcas.index') }}"
                   class="btn btn-dark btn-lg">
                    Ver Marcas
                </a>
            </div>

        </div>
    </div>
</div>

@endsection
```</
@extends('layouts.app')

@section('title', 'Editar Veículo')

@section('content')

<div class="card col-md-8 mx-auto">

    <div class="card-header fw-bold">
        Editar Veículo
    </div>

    <div class="card-body">

        <form action="{{ route('veiculos.update', $veiculo) }}" method="POST">

            @csrf
            @method('PUT')

            <!-- Marca -->
            <div class="mb-3">
                <label class="form-label">Marca</label>

                <select
                    name="marca_id"
                    class="form-select @error('marca_id') is-invalid @enderror"
                    required
                >
                    <option value="">Selecione...</option>

                    @foreach($marcas as $marca)
                        <option
                            value="{{ $marca->id }}"
                            @selected(old('marca_id', $veiculo->marca_id) == $marca->id)
                        >
                            {{ $marca->nome }}
                        </option>
                    @endforeach
                </select>

                @error('marca_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Modelo -->
            <div class="mb-3">
                <label class="form-label">Modelo</label>

                <input
                    type="text"
                    name="modelo"
                    class="form-control @error('modelo') is-invalid @enderror"
                    value="{{ old('modelo', $veiculo->modelo) }}"
                    required
                >

                @error('modelo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="row">

                <!-- Ano -->
                <div class="col-md-4 mb-3">
                    <label class="form-label">Ano</label>

                    <input
                        type="number"
                        name="ano"
                        class="form-control"
                        value="{{ old('ano', $veiculo->ano) }}"
                        required
                    >
                </div>

                <!-- Preço -->
                <div class="col-md-4 mb-3">
                    <label class="form-label">Preço (R$)</label>

                    <input
                        type="number"
                        step="0.01"
                        name="preco"
                        class="form-control"
                        value="{{ old('preco', $veiculo->preco) }}"
                        required
                    >
                </div>

                <!-- Status -->
                <div class="col-md-4 mb-3">
                    <label class="form-label">Status</label>

                    <select name="status" class="form-select">

                        <option
                            value="disponivel"
                            @selected(old('status', $veiculo->status) == 'disponivel')
                        >
                            Disponível
                        </option>

                        <option
                            value="reservado"
                            @selected(old('status', $veiculo->status) == 'reservado')
                        >
                            Reservado
                        </option>

                        <option
                            value="vendido"
                            @selected(old('status', $veiculo->status) == 'vendido')
                        >
                            Vendido
                        </option>

                    </select>
                </div>

            </div>

            <!-- Botões -->
            <button type="submit" class="btn btn-success">
                Atualizar Veículo
            </button>

            <a
                href="{{ route('veiculos.index') }}"
                class="btn btn-secondary"
            >
                Cancelar
            </a>

        </form>

    </div>

</div>

@endsection
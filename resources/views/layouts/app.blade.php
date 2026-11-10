
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'AutoDrive Flamengo')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --flamengo-red: #c8102e;
            --flamengo-dark: #111111;
            --flamengo-gold: #d4af37;
        }

        body {
            background: #111111;
            color: white;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: #000000;
            border-bottom: 4px solid var(--flamengo-red);
        }

        .navbar-brand {
            color: white !important;
            letter-spacing: 1px;
        }

        .navbar-brand span {
            color: var(--flamengo-red);
        }

        .nav-link {
            color: white !important;
        }

        .nav-link:hover {
            color: var(--flamengo-gold) !important;
        }

        .btn-flamengo {
            background: var(--flamengo-red);
            border-color: var(--flamengo-red);
            color: white;
        }

        .btn-flamengo:hover {
            background: #a50d25;
            color: white;
        }

        .btn-outline-flamengo {
            border: 1px solid var(--flamengo-red);
            color: var(--flamengo-red);
        }

        .btn-outline-flamengo:hover {
            background: var(--flamengo-red);
            color: white;
        }

        /* BANNER DO FLAMENGO */
        .banner-flamengo {
            position: relative;
            width: 100%;
            height: 200px;
            min-height: 200px;
            overflow: hidden;
            border-bottom: 6px solid var(--flamengo-red);
            border-radius: 10px;
            margin-bottom: 10px;
            background: #000;
        }

        .banner-flamengo img {
            width: -100%;
            height: -20%;
            object-fit: cover;
            object-position: center;
            display: block;
        }

        @media (max-width: 768px) {
            .banner-flamengo {
                height: 300px !important;
                min-height: 300px;
            }
        }
        .banner-conteudo {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: rgba(0, 0, 0, 0.4);
            color: white;
        }

        .banner-conteudo h1 {
            font-size: 42px;
            font-weight: bold;
            text-shadow: 2px 2px 8px black;
        }

        /* CONTEÚDO */
        main.container {
            background: #181818;
            padding: 25px;
            border-radius: 10px;
            color: white;
            min-height: 300px;
        }

        /* CARDS */
        .card {
            background: #222222;
            color: white;
            border: 1px solid #333;
            border-top: 4px solid var(--flamengo-red);
            border-radius: 10px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.3);
        }

        .card-header {
            background: #000;
            color: white;
        }

        .card-footer {
            background: #222 !important;
            border-top: 1px solid #444 !important;
        }

        .text-flamengo {
            color: var(--flamengo-red) !important;
        }

        .text-muted {
            color: #bbb !important;
        }

        /* FORMULÁRIOS */
        .form-control,
        .form-select {
            background: #292929;
            color: white;
            border: 1px solid #555;
        }

        .form-control::placeholder {
            color: #aaa;
        }

        .form-control:focus,
        .form-select:focus {
            background: #292929;
            color: white;
            border-color: var(--flamengo-red);
            box-shadow: 0 0 0 0.2rem rgba(200, 16, 46, 0.25);
        }

        .form-select option {
            background: #292929;
            color: white;
        }

        .form-label {
            color: white;
        }

        /* TABELAS */
        .table {
            --bs-table-bg: #222222;
            --bs-table-color: white;
            --bs-table-border-color: #444;
        }

        .table th {
            background: #000;
            color: white;
        }

        /* RODAPÉ */
        .footer-flamengo {
            background: #000;
            color: white;
            border-top: 4px solid var(--flamengo-red);
        }

        @media (max-width: 768px) {
            .banner-flamengo {
                height: 200px;
            }

            .banner-conteudo h1 {
                font-size: 28px;
            }

            main.container {
                padding: 15px;
            }
        }
    </style>
</head>

<body>

    <!-- MENU -->
    <nav class="navbar navbar-expand-lg navbar-dark mb-4">
        <div class="container">

            <a class="navbar-brand fw-bold" href="{{ route('veiculos.index') }}">
                <span>FLA</span> AutoDrive
            </a>

            <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#menuPrincipal">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuPrincipal">
                <div class="navbar-nav ms-auto align-items-lg-center">

                    <a class="nav-link" href="{{ route('veiculos.index') }}">
                        Veículos
                    </a>

                    <a class="nav-link" href="{{ route('marcas.index') }}">
                        Marcas
                    </a>

                    <a class="btn btn-flamengo btn-sm ms-lg-2 mt-2 mt-lg-0"
                       href="{{ route('veiculos.create') }}">
                        + Novo Veículo
                    </a>

                </div>
            </div>
        </div>
    </nav>

    <!-- BANNER ANIMADO DO FLAMENGO -->
    <div class="container">
        <div class="banner-flamengo">

            <img
                src="https://tse4.mm.bing.net/th/id/OIP.kKvZ_Q4xNCYyuOPPPc-KEwHaEK?r=0&rs=1&pid=ImgDetMain&o=7&rm=3"
                alt="Bandeira do Flamengo "
            >

            <div class="banner-conteudo">
                <h1>AUTO DRIVE</h1>
                <p>Gestão de Veículos</p>
            </div>

        </div>
    </div>

    <!-- MENSAGENS -->
    <main class="container">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @yield('content')

    </main>

    <!-- RODAPÉ -->
    <footer class="footer-flamengo text-center py-3 mt-5">
        <p class="mb-0">
         AutoDrive Flamengo - Gestão de Veículos
        </p>
        <small>Desenvolvido com paixão</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

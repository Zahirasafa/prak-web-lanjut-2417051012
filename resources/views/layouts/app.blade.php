<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root { --ungu: #b39ddb; --ungu-tua: #7e57c2; --ungu-muda: #f3edfb; --kuning: #ffe9a8; --kuning-tua: #f5c542; --teks: #4a4458; }
        body { background-color: var(--ungu-muda); color: var(--teks); }
        .card { border: none; border-radius: 14px; }
        .card-header-ungu { background-color: var(--ungu); color: #fff; border-radius: 14px 14px 0 0; }
        .btn-ungu { background-color: var(--ungu-tua); border-color: var(--ungu-tua); color: #fff; }
        .btn-ungu:hover { background-color: #6a45b0; border-color: #6a45b0; color: #fff; }
        .btn-kuning { background-color: var(--kuning); border-color: var(--kuning); color: var(--teks); }
        .btn-kuning:hover { background-color: var(--kuning-tua); border-color: var(--kuning-tua); color: var(--teks); }
        .table-ungu th { background-color: var(--ungu) !important; color: #fff !important; }
        .badge-kuning { background-color: var(--kuning); color: var(--teks); }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    <x-navbar />
    <main class="flex-grow-1">
        @yield('content')
    </main>
    <x-footer />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AZMI NUR SYAIFA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <div class="py-3 text-white" style="background: linear-gradient(135deg, #A86B08, #D97706, #8A4B08);">
        <div class="container-fluid d-flex align-items-center">

            <div class="border-end pe-4 me-4">
                <img src="{{ asset('images/garuda.png') }}" alt="Garuda Pancasila"
                    style="width: 120px; height: 120px; object-fit: contain;">
            </div>

            <div>
                <h1 class="fw-bold mb-0">Data Pegawai PNS</h1>
                <p class="mb-0">Sistem Input dan Pengelolaan Data Pegawai Negeri Sipil</p>
            </div>

        </div>
    </div>

    {{-- tite --}}
    <div class="container my-5">{{ $slot }}</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>

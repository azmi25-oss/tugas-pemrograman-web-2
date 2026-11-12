<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>

    @if (session('succes'))
        <div class="alert alert-success" role="alert">
            {{ session('succes') }}
        </div>
    @endif

    <style>
        .table-chocolate {
            width: 100%;
            table-layout: fixed;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(168, 107, 8, 0.10);
            background-color: white;
        }

        .table-chocolate th {
            background-color: #A86B08;
            color: white;
            border: none;
            padding: 16px;
            font-weight: 600;
        }

        .table-chocolate tbody td,
        .table-chocolate tbody th {
            padding: 15px;
            vertical-align: middle;
            border-color: #F3E7D8;
            overflow-wrap: break-word;
        }

        .table-chocolate tbody tr:nth-child(even) {
            background-color: #FFFAF5;
        }

        .table-chocolate tbody tr:hover {
            background-color: #F7EBDD;
            transition: background-color 0.25s ease;
        }

        .table-chocolate tbody tr:last-child td,
        .table-chocolate tbody tr:last-child th {
            border-bottom: none;
        }

        .table-chocolate th:nth-child(1) {
            width: 5%;
        }

        .table-chocolate th:nth-child(2) {
            width: 15%;
        }

        .table-chocolate th:nth-child(3) {
            width: 20%;
        }

        .table-chocolate th:nth-child(4) {
            width: 18%;
        }

        .table-chocolate th:nth-child(5) {
            width: 10%;
        }

        .table-chocolate th:nth-child(6) {
            width: 22%;
        }

        .table-chocolate th:nth-child(7) {
            width: 10%;
        }
    </style>

    <a class="btn btn-primary mb-1" href="{{ route('pegawai.create') }}" role="button"
        style="background-color: #A86B08; border-color: #A86B08; color: white;">
        Add
    </a>

    <table class="table table-chocolate">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NIP</th>
                <th scope="col">Nama Pegawai</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Golongan</th>
                <th scope="col">Unit Kerja</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($pegawai as $p)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $p->nip }}</td>
                    <td>{{ $p->name }}</td>
                    <td>{{ $p->jabatan }}</td>
                    <td>{{ $p->golongan }}</td>
                    <td>{{ $p->unit }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('pegawai.edit', $p->id) }}" role="button"
                            style="background-color: #A86B08; border-color: #A86B08; color: white;">
                            Edit
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app>

<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>

    <a class="btn" href="{{ route("pegawai.create") }}" role="button"
        style="background-color: #A86B08; border-color: #A86B08; color: white;">
        Add
    </a>

    <table class="table">
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
                        -
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app>

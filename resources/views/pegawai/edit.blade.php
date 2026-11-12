<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container mt-4">
        <h3>Ubah Data Pegawai</h3>

        <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nama Pegawai</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $pegawai->name) }}">
            </div>

        
                <div class="mb-3">
                <label class="form-label">NIP</label>
                <input type="text" name="nip" class="form-control" value="{{ old('nip', $pegawai->nip) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Jabatan</label>
                <select name="jabatan" class="form-select">
                    <option value="">Pilih Jabatan</option>
                    @foreach (['Pranata Komputer', 'Analis Kepegawaian', 'Analis Kebijakan', 'Auditor', 'Arsiparis', 'Pengadministrasi Perkantoran'] as $jabatan)
                        <option value="{{ $jabatan }}"
                            {{ old('jabatan', $pegawai->jabatan) == $jabatan ? 'selected' : '' }}>
                            {{ $jabatan }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Golongan</label>
                <select name="golongan" class="form-select">
                    <option value="">Pilih Golongan</option>
                    @foreach (['II/a', 'II/b', 'II/c', 'II/d', 'III/a', 'III/b', 'III/c', 'III/d', 'IV/a', 'IV/b'] as $golongan)
                        <option value="{{ $golongan }}"
                            {{ old('golongan', $pegawai->golongan) == $golongan ? 'selected' : '' }}>
                            {{ $golongan }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Unit Kerja</label>
                <select name="unit" class="form-select">
                    <option value="">Pilih Unit Kerja</option>
                    @foreach (['Badan Kepegawaian dan Pengembangan Sumber Daya Manusia', 'Dinas Pendidikan', 'Dinas Kesehatan', 'Dinas Komunikasi dan Informatika', 'Dinas Kependudukan dan Pencatatan Sipil', 'Sekretariat Daerah', 'Dinas Sosial'] as $unit)
                        <option value="{{ $unit }}"
                            {{ old('unit', $pegawai->unit) == $unit ? 'selected' : '' }}>
                            {{ $unit }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary"
                style="background-color: #A86B08; border-color: #A86B08; color: white;">
                Submit
            </button>

            <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">
                Kembali
            </a>
        </form>
    </div>
</x-app>

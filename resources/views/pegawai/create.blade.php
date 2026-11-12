<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container mt-4">
        <h3 class="mb-4">Tambah Data Pegawai</h3>

        <form method="POST" action="{{ route('pegawai.store') }}">
            @csrf

            {{-- Nama --}}
            <div class="mb-3">
                <label for="name" class="form-label">NAMA</label>

                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                    name="name" value="{{ old('name') }}" placeholder="Masukkan Nama Pegawai">

                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- NIP --}}
            <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>

                <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip"
                    name="nip" value="{{ old('nip') }}" placeholder="Masukkan NIP">

                @error('nip')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Jabatan, Golongan, Unit Kerja --}}
            <div class="row g-3">

                {{-- Jabatan --}}
                <div class="col-md-4">
                    <label for="jabatan" class="form-label">Jabatan</label>

                    <select class="form-select @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan">

                        <option value="">Pilih Jabatan</option>

                        @foreach (['Pranata Komputer', 'Analis Kepegawaian', 'Analis Kebijakan', 'Auditor', 'Arsiparis', 'Perencana', 'Guru', 'Dokter', 'Perawat'] as $jabatan)
                            <option value="{{ $jabatan }}" {{ old('jabatan') == $jabatan ? 'selected' : '' }}>
                                {{ $jabatan }}
                            </option>
                        @endforeach
                    </select>

                    @error('jabatan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Golongan --}}
                <div class="col-md-4">
                    <label for="golongan" class="form-label">Golongan</label>

                    <select class="form-select @error('golongan') is-invalid @enderror" id="golongan" name="golongan">

                        <option value="">Pilih Golongan</option>

                        @foreach (['II/a', 'II/b', 'II/c', 'II/d', 'III/a', 'III/b', 'III/c', 'III/d', 'IV/a', 'IV/b'] as $golongan)
                            <option value="{{ $golongan }}" {{ old('golongan') == $golongan ? 'selected' : '' }}>
                                {{ $golongan }}
                            </option>
                        @endforeach
                    </select>

                    @error('golongan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Unit Kerja --}}
                <div class="col-md-4">
                    <label for="unit" class="form-label">Unit Kerja</label>

                    <select class="form-select @error('unit') is-invalid @enderror" id="unit" name="unit">

                        <option value="">Pilih Unit Kerja</option>

                        @foreach (['Dinas Pendidikan', 'Dinas Kesehatan', 'Dinas Komunikasi dan Informatika', 'Dinas Kependudukan dan Pencatatan Sipil', 'Inspektorat Daerah', 'Sekretariat Daerah', 'Badan Kepegawaian dan Pengembangan Sumber Daya Manusia', 'Badan Perencanaan Pembangunan Daerah'] as $unit)
                            <option value="{{ $unit }}" {{ old('unit') == $unit ? 'selected' : '' }}>
                                {{ $unit }}
                            </option>
                        @endforeach
                    </select>

                    @error('unit')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            {{-- Tombol --}}
            <div class="mt-4">
                <a href="{{ route('pegawai.index') }}" class="btn"
                    style="background-color: #A86B08; border-color: #A86B08; color: white;">
                    Back To Page
                </a>

                <button type="submit" class="btn btn-primary"
                    style="background-color: #A86B08; border-color: #A86B08; color: white;">
                    Submit
                </button>
            </div>

        </form>
    </div>
</x-app>

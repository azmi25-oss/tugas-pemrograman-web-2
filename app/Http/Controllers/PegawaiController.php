<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pegawai.index', [
            'title' => 'Employee Data Page',
            'pegawai' => Pegawai::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.create', [
            'title' => 'Employee Data Addition Page'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'nip' => 'required|numeric|digits:12',
            'jabatan' => 'required',
            'golongan' => 'required',
            'unit' => 'required',
        ], [
            'name.required' => 'Nama Wajib Di Input',
            'nip.required' => 'NIP Wajib Di Input',
            'nip.numeric' => 'NIP Wajib Berupa Angka',
            'nip.digits' => 'NIP Wajib 12 Digit',
            'jabatan.required' => 'Jabatan Wajib Dipilih',
            'golongan.required' => 'Golongan Wajib Dipilih',
            'unit.required' => 'Unit Wajib Dipilih',
        ]);

        Pegawai::create($validated);

        return to_route('pegawai.index')
            ->with('succes', 'Data Berhasil Di Input :)');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        return view('pegawai.edit', [
            'title' => 'Edit Data Pegawai',
            'pegawai' => $pegawai,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $validated = $request->validate(
            [
                'name' => 'required',
                'nip' => 'required|numeric|digits:12',
                'jabatan' => 'required',
                'golongan' => 'required',
                'unit' => 'required',
            ],
            [
                'name.required' => 'Nama Wajib Di Input',
                'nip.required' => 'NIP Wajib Di Input',
                'nip.numeric' => 'NIP Wajib Berupa Angka',
                'nip.digits' => 'NIP Wajib 12 Digit',
                'jabatan.required' => 'Jabatan Wajib Dipilih',
                'golongan.required' => 'Golongan Wajib Dipilih',
                'unit.required' => 'Unit Wajib Dipilih',
            ]
        );

        $pegawai->update($validated);

        return redirect()->route('pegawai.index')
            ->with('succes', 'Data Pegawai Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

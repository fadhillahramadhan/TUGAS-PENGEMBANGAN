<?php

namespace App\Http\Controllers;

use App\Models\penerimaan;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PenerimaanController extends Controller
{
    public function index()
    {
        $penerimaan = penerimaan::all();
        return view('penerimaan.index', compact('penerimaan'));
    }

    public function create()
    {

        return view('penerimaan.create');
    }


    public function store(Request $request)
    {
        try {

            // Validate the incoming request data
            $validatedData = Validator::make($request->all(), [
                'nama' => 'required',
                'alamat' => 'required',
                'tanggal_lahir' => 'required',
                'jenis_kelamin' => 'required',
                'asal_sekolah' => 'required',
                'agama' => 'required|in:islam,protestan,katholik,hindu,budha,konghucu',
                'nilai_ind' => 'required|integer',
                'nilai_ipa' => 'required|integer',
                'nilai_mtk' => 'required|integer',
            ]);

            if ($validatedData->fails()) {

                return redirect()->route('penerimaan.create')
                    ->withErrors($validatedData);
            }

            $data = $request->all();
            $penerimaan = new penerimaan();
            $data['no_pendaftaran'] = $penerimaan->getNumberPendaftaran();


            penerimaan::create($data);

            // Redirect to a success page or perform any other action you want
            return redirect()->route('penerimaan.index')->with('success', 'Data penerimaan telah ditambahkan.');
        } catch (\Throwable $th) {
            return redirect()->route('penerimaan.create')->with('error', 'Terjadi kesalahan. Silahkan coba lagi.');
        }
    }
}

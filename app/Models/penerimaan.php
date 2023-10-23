<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penerimaan extends Model
{
    use HasFactory;

    protected $table = 'penerimaan';

    protected $fillable = [
        'no_pendaftaran',
        'nama',
        'alamat',
        'tanggal_lahir',
        'jenis_kelamin',
        'asal_sekolah',
        'agama',
        'nilai_ind',
        'nilai_ipa',
        'nilai_mtk',
    ];

    protected $hidden = [
        //
    ];

    public function getNumberPendaftaran()
    {
        $lastData = penerimaan::orderBy('id', 'desc')->first();
        if ($lastData) {
            $lastNumber = (int) substr($lastData->no_pendaftaran, 3, 3);
            $newNumber = $lastNumber + 1;
            $newNumber = sprintf("%03s", $newNumber);
            return 'PND' . $newNumber;
        } else {
            return 'PND001';
        }
    }
}

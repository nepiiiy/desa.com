<?php

namespace App\Imports;

use App\Models\resident;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class residentImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new resident([
            'user_id' => Auth::user()->id,
            'nama'  => $row['0'],
            'jk' => $row['1'],
            'agama'  => $row['2'],
            'tanggal'  => $row['3'],
            'alamat'  => $row['4'],
            'pendidikan'  => $row['5'],
            'status'  => $row['6'],
        ]);
    }


    }




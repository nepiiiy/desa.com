<?php

namespace App\Exports;

use App\Models\resident;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;

class residentExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return resident::where('user_id',Auth::user()->id)->select('nama','jk','agama','tanggal','alamat','pendidikan','status')->get();
    }
    public function headings():array
    {
        return[
            'Nama',
            'Jenis Kelamin',
            'Agama',
            'Tanggal',
            'Alamat',
            'Pendidikan',
            'Status',
        ];
    }
}

<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use App\Models\RegistrasiSiswa;

class MuridExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RegistrasiSiswa::with('kelas')->get(); // Mengambil data RegistrasiSiswa dengan relasi Kelas
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'Nama Panggilan',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Jenis Kelamin',
            'Agama',
            'Alamat',
            'No HP',
            'Tempat Les',
            'Kelas',
            'Les Dimulai',
        ];
    }

    /**
     * @param 
     * @return array
     */
    public function map($row): array
    {
        return [
            $row->nama_panggilan,
            $row->tempat_lahir,
            $row->tanggal_lahir,
            $row->jenis_kelamin,
            $row->agama,
            $row->alamat,
            $row->no_hp,
            $row->tempat_les,
            $row->kelas->nama_kelas ?? 'Tidak ada kelas', 
            $row->les_dimulai,
        ];
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return 'Data Daftar Siswa';  
    }
}

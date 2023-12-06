<?php

namespace App\Imports;

use App\Models\MarketShare;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class MarketShareImport implements ToModel, WithHeadingRow
{
    private $rows = 0;

    public function model(array $row)
    {
        //dd($row);
        ++$this->rows;
    
        return new MarketShare([
            // 'date' => date( 'Y-m-d', strtotime( $row[0] ) ),
            // 'nrkb' => $row[1],
            // 'name' => $row[2],
            // 'address' => $row[3],
            // 'brand' => $row[4],
            // 'type' => $row[5],
            // 'chassis_number' => $row[6],
            // 'machine_number' => $row[7],
            // 'color' => $row[8],
            // 'cc' => $row[9],
            // 'year' => (int)$row[10],

            'date' => Date::excelToDateTimeObject($row['tgl_daftar']),
            'nrkb' => $row['nrkb'],
            'name' => $row['nama_pemilik'],
            'address' => $row['alamat'],
            'brand' => $row['merk'],
            'type' => $row['type'],
            'chassis_number' => $row['no_rangka'],
            'machine_number' => $row['no_mesin'],
            'color' => $row['warna'],
            'cc' => $row['cc'],
            'year' => (int)$row['tahun'],
        ]);
    }
    
    public function getRowCount(): int
    {
        return $this->rows;
    }
}
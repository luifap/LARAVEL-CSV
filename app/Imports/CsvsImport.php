<?php

namespace App\Imports;

use App\Models\Csv;
use Maatwebsite\Excel\Concerns\ToModel;

class CsvsImport implements ToModel
{

    public function model(array $row)
    {
        return new Csv([
           'cedula'     => $row[0],
           'variable'     => $row[1],
           'breakdown'    => $row[2],
           'breakdown_category' => $row[3],
           'year' => $row[4],
           'rd_value' => $row[6],
           'units' => $row[6],
           'footnotes' => $row[7]
        ]);
    }
}

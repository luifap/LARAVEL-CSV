<?php

namespace App\Imports;

use App\Models\Csv;
use Maatwebsite\Excel\Concerns\ToModel;

class CsvsImport implements ToModel
{

    public function model(array $row)
    {
        return new Csv([
           'variable'     => $row[0],
           'breakdown'    => $row[1],
           'breakdown_category' => $row[2],
           'year' => $row[3],
           'rd_value' => $row[4],
           'units' => $row[5],
           'footnotes' => $row[6]
        ]);
    }
} 
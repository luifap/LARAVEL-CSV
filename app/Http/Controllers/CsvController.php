<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CsvsImport;
use App\Models\Csv;
use Illuminate\Http\Request;

class CsvController extends Controller
{
    public function index() {
        $csvs = Csv::all();
        return view('index', ['csvs' => $csvs]);


    }

    public function import(Request $request) {
        Excel::import(new CsvsImport, $request->file('file'));
        return redirect()->back()->with('success', 'Data Imported Successfully');
    }
}

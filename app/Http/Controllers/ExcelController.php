<?php

namespace App\Http\Controllers;

use App\Exports\CategoryExport;
use App\Imports\CategoriesImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx,csv'
        ]);
        Excel::import(new CategoriesImport() , $request->file('file')->store('files'));
//        dd('success');
        return redirect()->back()->with('msg' , 'imported');
    }
    public function export()
    {
        return Excel::download(new CategoryExport() , 'category.xlsx');
    }
    public function index()
    {
        return view('excel');
    }
}

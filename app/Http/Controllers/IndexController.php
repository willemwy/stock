<?php
/**
 * Created by PhpStorm.
 * User: Willem Van Wyk
 * Date: 2015-11-14
 * Time: 05:40 PM
 */

namespace App\Http\Controllers;

use App\Clinic;
use App\Stock;
use DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $clinics = Clinic::all();
        return view('clinics', compact('clinics'));
    }

    public function stock($clinicId)
    {
        $medicationStockLevels = DB::table('clinic')
            ->where('clinic.id', $clinicId)
            ->join('stock', 'clinic.id', '=', 'stock.clinic_id')
            ->join('medication', 'stock.medication_id', '=', 'medication.id')
            ->select('medication.name', 'stock.level', 'stock.id')
            ->get();

        $clinicName = Clinic::where('id', "=", $clinicId)->get()->first()->name;
        return view('stock', compact('medicationStockLevels', 'clinicId', 'clinicName'));
    }

    public function stockSet(Request $request)
    {
        $level = $request->input("level");
        $stockId = $request->input("stockId");

        $stock = Stock::find($stockId);
        $stock->level = $level;
        $stock->save();
    }

    public function lowStock()
    {
        $clinics = Clinic::join('stock', 'clinic.id', '=', 'stock.clinic_id')
            ->join('medication', 'stock.medication_id', '=', 'medication.id')
            ->where('stock.level', '<', 5)
            ->select('clinic.id', 'clinic.name', 'stock.level', 'medication.name as med_name')
            ->get();
        return view('lowStock', compact('clinics'));
    }
}

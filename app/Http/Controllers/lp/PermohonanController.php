<?php

namespace App\Http\Controllers\lp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permohonan;
use File;
use Storage;

class PermohonanController extends Controller
{
   public function index()
   {
       //liss all aunthenticate permohonan
       //$senarai_permohonan = auth()->user()->permohonan()->paginate();
       $senarai_permohonan = Permohonan::paginate();

       return view('lp.permohonan.index', compact('senarai_permohonan'));
   } 
   
   
    public function create()
    {
        // show permohonan create form
        return view('lp.permohonan.create');
    }


    public function store(Request $request)
    {
        // store to permohonan table using model
        $permohonan = new Permohonan();
        $permohonan->user_id = auth()->user()->id;
        $permohonan->save();

        
        // return permohonan index
        return redirect()->to('lp/senarai-permohonan')->with([
            'type' => 'alert-primary',
            'message' => 'Berjaya simpan lp'
        ]);

    }
    
}

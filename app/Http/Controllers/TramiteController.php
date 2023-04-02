<?php

namespace App\Http\Controllers;

use App\Models\Comuna;
use App\Models\DocumentoRelacion;
use App\Models\Tramite;
use Illuminate\Http\Request;

class TramiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $tramite = new Tramite();
        $rubro = $request->get('rubro')!= 'Elige tu rubro'?$request->get('rubro'):1;
        $comuna = $request->get('comuna')!= 'Elige tu comuna'?$request->get('comuna'):1;

        $tramite->rubro_id = $rubro;
        $tramite->comuna_id = $comuna;
        $tramite->user_id = $request->user()->id;
        $tramite->current_step = 1;
        $tramite->save();

        $rubro_id =intval($tramite->rubro_id);
        $comuna_id =intval($tramite->comuna_id);
        $requisitos = DocumentoRelacion::getRequisitos($rubro_id,$comuna_id);

        //  return redirect()->route('requisitosruta',$requisitos->toArray());
         return view('requisitos',['requisitos'=>$requisitos]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tramite $tramite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tramite $tramite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tramite $tramite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tramite $tramite)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Contrato;
use Illuminate\Http\Request;

class ContratosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
 
            $search = $request->get('search');
           
            $contratos = Contrato::where('dtAprovação', 'like', "%{$search}%")
                ->orWhere('Categoria', 'like', "%{$search}%")
                ->orWhere('Descrição', 'like', "%{$search}%")
                ->orWhere('Segmento', 'like', "%{$search}%")
                ->orWhere('skTipoProposta', 'like', "%{$search}%")
                ->orWhere('Regional', 'like', "%{$search}%")
                ->orWhere('Validade', 'like', "%{$search}%")
                ->orWhere('Observações', 'like', "%{$search}%")
                ->paginate(10);
           
            $contratos->appends(['search' => $search]);
            return view('index.grid', compact('contratos', 'search'));
                } else {
            $contratos = Contrato::paginate(12);
            return view('index.grid', compact('contratos'));
                }
               
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

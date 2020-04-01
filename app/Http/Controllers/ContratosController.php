<?php

namespace App\Http\Controllers;
use App\Models\Contrato;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ContratosRequest;

class ContratosController extends Controller
{
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

            return view('contratos.index', compact('contratos', 'search'));
        } else {
            $contratos = Contrato::paginate(12);

            return view('contratos.index', compact('contratos'));
        }
    }

    public function create()
    {
        return view('contratos.form');
    }

    public function store(ContratosRequest $request)
    {
        $contratos = Contrato::create($request->all());

        if ($contratos) {
            Session::flash('success', "Registro #{$contratos->id} salvo com êxito");

            return redirect()->route('contratos.index');
        }
        return redirect()->back()->withErrors(['error', "Registo não foi salvo."]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $contratos = Contrato::findOrFail($id);

        if ($contratos) {
            return view('contratos.form', compact('contratos'));
        } else {
            return redirect()->back();
        }    
    }

    public function update(ContratosRequest $request, $id)
    {
        $contratos = Contrato::where('id', $id)->update($request->except('_token', '_method'));

        if ($contratos) {
            Session::flash('success', "Registro #{$id} atualizado com êxito");

            return redirect()->route('contratos.index');
        }
        return redirect()->back()->withErrors(['error', "Registo #{$id} não foi encontrado"]);
    }

    public function destroy($id)
    {
        $contratos = Contrato::where('id', $id)->delete();

        if ($contratos) {
            Session::flash('success', "Registro #{$id} excluído com êxito");

            return redirect()->route('contratos.index');
        } 
        return redirect()->back()->withErrors(['error', "Registo #{$id} não pode ser excluído"]);
    }
}

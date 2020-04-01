@extends('adminlte::page')
@extends('layouts.app')
@section('title', 'Listando todos os registros')

@section('content')
<h1>Listagem Principal</h1>
<hr>
{!! Form::open(array('method' => 'get', 'route' => 'contratos.index', 'class' => 'form-horizontal')) !!}
 
    <div class="form-row form-group">
 
 
        {!! Form::label('search', 'Procurar por', ['class' => 'col-sm-2 col-form-label text-right']) !!}
 
 
        <div class="col-sm-8">
 
      {!! Form::text('search', isset($search) ? $search : null, ['class' => 'form-control']) !!}
 
        </div>
        <div class="col-sm-2">
 
      {!! Form::submit('procurar', ['class'=>'btn btn-primary']) !!}
 
        </div>
 
    </div>
 
{!! Form::close() !!}
<div class="container">
  @include('layouts.messages')
    <table class="table table-bordered table-striped table-sm">
        <thead>
      <tr>
          <th>#</th>
          <th>Descrição</th>
          <th>Gerente</th>
          <th>Cliente</th>
          <th>Valor</th>
          <th>
        <a href="{{ route('contratos.create') }}" class="btn btn-info btn-sm" >Novo</a>
          </th>
      </tr>
        </thead>
        <tbody>
          
      @forelse($contratos as $contrato)
      <tr>
          <td>{{ $contrato->id }}</td>
          <td>{{ $contrato->Descrição }}</td>
          <td>{{ $contrato->skGerente }}</td>
          <td>{{ $contrato->skCliente }}</td>
          <td>{{ $contrato->ValorAprovado }}</td>
          <td>
        <a href="{{ route('contratos.edit', $contrato->id) }}" class="btn btn-warning btn-sm">Editar</a>
        <form method="POST" action="{{ route('contratos.destroy', $contrato->id) }}" style="display: inline" onsubmit="return confirm('Deseja excluir este registro?');" >
            @csrf
            <input type="hidden" name="_method" value="delete" >
            <button class="btn btn-danger btn-sm">Excluir</button>
        </form>
          </td>
      </tr>
      @empty
      <tr>
          <td colspan="6">Nenhum registro encontrado para listar</td>
      </tr>
      @endforelse
        </tbody>
    </table>
    {{ $contratos->links() }}




    
</div>
@endsection
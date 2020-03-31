@extends('adminlte::page')

@section('title', 'SmartLuso')

@section('content_header')
<h1>Contratos</h1>
@stop

@section('content')
<style type="text/css">
	.form-group {
	    float: left;
	}
</style><!--
<div class="box box-primary">
	
	<div class="box-header with-border">
		<i class="fa fa-chevron-right"></i>
		<span>As <strong>PO</strong> são contratos, para enriquecer o mapa!</span>
	</div>
	
	<form role="form" id="form" name="form" method="POST" action="contratos">
		<div class="box-body">
				{{ csrf_field() }}
				<!--
				<div class="form-group col-sm-1">
					<label for="id">Id</label>
					<input type="text" class="form-control" id="id" name="id" readonly="true">
				</div> 
				<div class="form-group col-sm-2">
					<label for="skCliente">skCliente</label>
					<input type="text" class="form-control" id="skCliente" name="skCliente">
				</div>
				<div class="form-group col-sm-9">
					<label for="Categoria">Categoria</label>
					<input type="text" class="form-control" id="Categoria" name="Categoria">
				</div>
				<div class="form-group col-sm-3">
					<label for="skGerente">skGerente</label>
					<input type="text" class="form-control" id="skGerente" name="skGerente">
				</div>
				<div class="form-group col-sm-9">
					<label for="Regional">Regional</label>
					<input type="text" class="form-control" id="Regional" name="Regional">
				</div>
		</div>
		<div class="box-footer">
			<button type="submit" class="btn btn-primary btn-app pull-right"><i class="fa fa-save"></i> Salvar</button>
		</div>
	</form>
	
	

</div>
-->
{!! Form::close() !!}
</div>

<div class="box box-danger">
	<div class="box-body table-responsive">
		@include('layouts.messages')
    <table class="table table-bordered table-striped table-sm">
        <thead>
      <tr>
          <th>#</th>
          <th>Descrição</th>
          <th>Cliente</th>
          <th>Grupo</th>
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
			<td><a class="btn" onclick="edit('{{ $contrato->skCliente }}','{{ $contrato->Categoria }}','{{ $contrato->skGerente }}','{{ $contrato->Regional }}','{{ $contrato->id }}')">{{ $contrato->id }}</a></td>
			<td>{{ $contrato->skCliente }}</td>
			<td>{{ $contrato->Categoria }}</td>
			<td>{{ $contrato->skGerente }}</td>
			<td>{{ $contrato->Regional }}</td>
          <td>
        <a href="{{ route('contratos.edit', $customer->id) }}" class="btn btn-warning btn-sm">Editar</a>
        <form method="POST" action="{{ route('contratos.destroy', $customer->id) }}" style="display: inline" onsubmit="return confirm('Deseja excluir este registro?');" >
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

		<!--
		<table id="tabela1" class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>SKCLIENTE</th>
					<th>CATEGORIA</th>
					<th>SKGERENTE</th>
					<th>REGIONAL</th>
				</tr>
			</thead>
			<tbody>
				@foreach (App\Models\Contrato::orderBY('skCliente', 'asc')->get() as $local) 
				<tr>
					<td>{{ $local->id }}</td>
					<td><a class="btn" onclick="edit('{{ $local->skCliente }}','{{ $local->Categoria }}','{{ $local->skGerente }}','{{ $local->Regional }}')">{{ $local->id }}</a></td>
					<td>{{ $local->skCliente }}</td>
					<td>{{ $local->Categoria }}</td>
					<td>{{ $local->skGerente }}</td>
					<td>{{ $local->Regional }}</td>
				</tr>		
				@endforeach
			</tbody>
		</table>
		-->
	</div>
</div>

<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>


<script>
	function edit(id,code,name,category,uf,cidade) {
		$('#id').val(id);
		$('#skCliente').val(skCliente);
		$('#Categoria').val(Categoria);
		$('#skGerente').val(skGerente);
		$('#Regional').val(Regional);
		$('#skCliente').focus();
	}
	$(function () {
		$( "#form" ).submit(function( event ) {
			wOk = true;
			if($('#code').val()=='') {
				alert('Campo CODE precisa ser preenchido');
				$('#code').focus();
				wOk = false;
			}
			
			if($('#skCliente').val()=='') {
				alert('Campo SKCLIENTE precisa ser preenchido');
				$('#skCliente').focus();
				wOk = false;
			}

			if($('#Categoria').val()=='') {
				alert('Campo CATEGORIA precisa ser preenchido');
				$('#Categoria').focus();
				wOk = false;
			}

			if($('#skGerente').val()=='') {
				alert('Campo SKGERENTE precisa ser preenchido');
				$('#skGerente').focus();
				wOk = false;
			}

			if($('#Regional').val()=='') {
				alert('REGIONAL CODE precisa ser preenchido');
				$('#Regional').focus();
				wOk = false;
			}

			return wOk;
		});
		$('#tabela1').DataTable();
	})
</script>
@stop


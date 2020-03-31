@extends('adminlte::page')
@section('title', 'Registro')
 
@section('content_header')
<h1>Contratos</h1>
<hr>
 
<div class="container">
 
 
    @if(isset($contratos))
 
        {!! Form::model($contratos, ['method' => 'put', 'route' => ['contratos.update', $contratos->id ], 'class' => 'form-horizontal']) !!}
 
    @else
 
        {!! Form::open(['method' => 'post','route' => 'contratos.store', 'class' => 'form-horizontal']) !!}
 
    @endif
 
    <div class="card">
        <div class="card-header">
      <span class="card-title">
          @if (isset($contratos))
        Editando registro #{{ $contratos->id }}
          @else
        Criando novo registro
          @endif
      </span>

        </div>
        <div class="card-body">
      <div class="form-row form-group">
 
          {!! Form::label('first_name', 'Nome', ['class' => 'col-form-label col-sm-2 text-right']) !!}
 
          <div class="col-sm-4">
 
        {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder'=>'Defina o nome']) !!}
 
          </div>
 
      </div>
      <div class="form-row form-group">
 
          {!! Form::label('last_name', 'Sobreome', ['class' => 'col-form-label col-sm-2 text-right']) !!}
 
          <div class="col-sm-4">
 
        {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder'=>'Defina o sobrenome']) !!}
 
          </div>
 
      </div>
      <div class="form-row form-group">
 
          {!! Form::label('email', 'E-mail', ['class' => 'col-form-label col-sm-2 text-right']) !!}
 
          <div class="col-sm-8">
 
        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder'=>'Defina o email']) !!}
 
          </div>
 
      </div>
      <div class="form-row form-group">
 
          {!! Form::label('phone', 'Telefone', ['class' => 'col-form-label col-sm-2 text-right']) !!}
 
          <div class="col-sm-4">
 
        {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder'=>'Defina o telefone']) !!}
 
          </div>
 
      </div>
      <div class="form-row form-group">
 
          {!! Form::label('address', 'Endereço', ['class' => 'col-form-label col-sm-2 text-right']) !!}
 
          <div class="col-sm-10">
 
        {!! Form::textarea('address', null, ['class' => 'form-control', 'placeholder'=>'Defina o endereço completo']) !!}
 
          </div>
 
      </div>
        </div>
        <div class="card-footer">
      {!! Form::button('cancelar', ['class'=>'btn btn-danger btn-sm', 'onclick' =>'windo:history.go(-1);']); !!}
      {!! Form::submit(  isset($contratos) ? 'atualizar' : 'criar', ['class'=>'btn btn-success btn-sm']) !!}
 
        </div>
    </div>
 
    {!! Form::close() !!}
 
</div>
@endsection
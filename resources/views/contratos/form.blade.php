@extends('adminlte::page')
@section('title', 'SmartLuso')
 
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
    
            {!! Form::label('skCliente', 'CNPJ / CPF', ['class' => 'col-form-label col-sm-2 text-right']) !!}
    
            <div class="col-sm-4">
    
            {!! Form::text('skCliente', null, ['class' => 'form-control', 'placeholder'=>'Defina o CNPJ ou CPF...']) !!}
    
            </div>
    
        </div>
        <div class="form-row form-group">

            {!! Form::label('dtAprovação', 'Data Aprovação', ['class' => 'col-form-label col-sm-2 text-right']) !!}
    
            <div class="col-sm-4">
    
            {{ Form::date('dtAprovação', null, ['class' => 'form-control', 'placeholder'=>'Defina o sobrenome']) }}  
            </div>
    
        </div>
        <div class="form-row form-group">
    
            {!! Form::label('Categoria', 'Categoria', ['class' => 'col-form-label col-sm-2 text-right']) !!}
            
            <div class="col-sm-8">
            {!! Form::text('Categoria', null, ['class'=>'form-control', 'placeholder'=>'Entre com a categoria']) !!}
            </div>
    
        </div>
        <div class="form-row form-group">
    
            {!! Form::label('Descrição', 'Descrição', ['class' => 'col-form-label col-sm-2 text-right']) !!}
    
            <div class="col-sm-4">
    
            {!! Form::text('Descrição', null, ['class' => 'form-control', 'placeholder'=>'Defina a Descrição']) !!}
    
            </div>
    
        </div>
        
        <div class="form-row form-group">
    
            {!! Form::label('skGerente', 'Gerente', ['class' => 'col-form-label col-sm-2 text-right']) !!}

            <div class="col-sm-4">

        {!! Form::text('skGerente', null, ['class' => 'form-control', 'placeholder'=>'Defina o Gerente']) !!}

            </div>

        </div>
        
        <div class="form-row form-group">
    
            {!! Form::label('Segmento', 'Segmento', ['class' => 'col-form-label col-sm-2 text-right']) !!}

            <div class="col-sm-4">

        {!! Form::text('Segmento', null, ['class' => 'form-control', 'placeholder'=>'Defina o Segmento']) !!}

            </div>

        </div>
        
        <div class="form-row form-group">
    
            {!! Form::label('skTipoProposta', 'Tipo Proposta', ['class' => 'col-form-label col-sm-2 text-right']) !!}

            <div class="col-sm-4">

        {!! Form::text('skTipoProposta', null, ['class' => 'form-control', 'placeholder'=>'Defina o Tipo da Proposta']) !!}

            </div>

        </div>
        
        <div class="form-row form-group">
    
            {!! Form::label('skGrupo', 'Grupo', ['class' => 'col-form-label col-sm-2 text-right']) !!}

            <div class="col-sm-4">

        {!! Form::text('skGrupo', null, ['class' => 'form-control', 'placeholder'=>'Defina o Grupo']) !!}

            </div>

        </div>
        
        <div class="form-row form-group">
    
            {!! Form::label('Regional', 'Regional', ['class' => 'col-form-label col-sm-2 text-right']) !!}

            <div class="col-sm-4">

        {!! Form::text('Regional', null, ['class' => 'form-control', 'placeholder'=>'Defina a Regional']) !!}

            </div>

        </div>
        
        <div class="form-row form-group">
    
            {!! Form::label('Validade', 'Validade', ['class' => 'col-form-label col-sm-2 text-right']) !!}

            <div class="col-sm-4">

        {!! Form::date('Validade', null, ['class' => 'form-control', 'placeholder'=>'Defina a Validade']) !!}

            </div>

        </div>
        
        <div class="form-row form-group">
    
            {!! Form::label('ValorAprovado', 'Valor Aprovado', ['class' => 'col-form-label col-sm-2 text-right']) !!}

            <div class="col-sm-4">

        {!! Form::text('ValorAprovado', null, ['class' => 'form-control', 'placeholder'=>'Defina o Valor Aprovado']) !!}

            </div>

        </div>
        
        <div class="form-row form-group">
    
            {!! Form::label('Limite_Utilizado', 'Limite Utilizado', ['class' => 'col-form-label col-sm-2 text-right']) !!}

            <div class="col-sm-4">

        {!! Form::text('Limite_Utilizado', null, ['class' => 'form-control', 'placeholder'=>'Defina o Limite Utilizado']) !!}

            </div>

        </div>
        
        <div class="form-row form-group">
    
            {!! Form::label('Probabilidade_Saque', 'Probabilidade Saque', ['class' => 'col-form-label col-sm-2 text-right']) !!}

            <div class="col-sm-4">

        {!! Form::text('Probabilidade_Saque', null, ['class' => 'form-control', 'placeholder'=>'Defina a Probabilidade de Saque']) !!}

            </div>

        </div>
        
        <div class="form-row form-group">
    
            {!! Form::label('Previsão_Saque', 'Previsão Saque', ['class' => 'col-form-label col-sm-2 text-right']) !!}

            <div class="col-sm-4">

        {!! Form::date('Previsão_Saque', null, ['class' => 'form-control', 'placeholder'=>'Defina a data de previsão']) !!}

            </div>

        </div>
        
        <div class="form-row form-group">

            {!! Form::label('Observações', 'Observações', ['class' => 'col-form-label col-sm-2 text-right']) !!}

            <div class="col-sm-10">

        {!! Form::textarea('Observações', null, ['class' => 'form-control', 'placeholder'=>'Insira possíveis observações a respeito da PO']) !!}

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
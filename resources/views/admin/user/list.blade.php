@extends('adminlte::page')
@section('title', 'SmartLuso')
@section('content_header')
  <h5><b>Listagem de Usuários</b></h5>  
@stop
@section('content')
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
          @endif     
        </div>
        <div class="box-body">
          <table id="laravel_datatable" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
              </tr>
            </thead>
            <tbody>
              
            @php
              $i = 0;  
            @endphp
              @foreach ($users as $user)
              @php
                  $i = $i + 1;
              @endphp
                <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->created_at }}</td>
                  <td>{{ $user->updated_at }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
          @php
              if($i != 0 && $i > 0){
                if($i == 1){
                  echo("1 registro encontrado.");
                }else{
                  echo($i . " registros encontrados.");
                }
              }
          @endphp
        </div>
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
@stop
@section('js')
<script>
  $(document).ready( function () {
    $('#laravel_datatable').DataTable();
  });
</script>
@stop

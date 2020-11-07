@extends('admin.master')

@section('title', 'Categorias')

@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{ url('/admin/categories') }}" class="nav-link"><i class="fas fa-folder"></i> Editar Categoria</a>
</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="panel shadow">
                <div class="header">
                    <h2 class="title">
                        <i class="fas fa-edit"></i> Editar Categoria
                    </h2>
                </div>

                <div class="inside">
                    {!! Form::open(['url' => '/admin/categories/'.$cat->id.'/edit']) !!}
                    <label for="name">Nombre:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-keyboard"></i>
                            </span>
                        </div>
                        {!! Form::text('name', $cat->name, ['class' => 'form-control']) !!}
                    </div>

                    <label for="module" class="mtop16">Módulo:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-keyboard"></i>
                            </span>
                        </div>
                        {!! Form::select('module', getModulesArray(), $cat->module, ['class' => 'custom-select']) !!}
                    </div>

                    <label for="icon" class="mtop16">Icono:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-keyboard"></i>
                            </span>
                        </div>
                        {!! Form::text('icon', $cat->icon, ['class' => 'form-control']) !!}
                    </div>
                    {!! Form::submit('Guardar', ['class' => 'btn btn-success mtop16']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

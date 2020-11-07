@extends('admin.master')

@section('title', 'Productos')

@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{ url('/admin/products') }}" class="nav-link"><i class="fas fa-boxes"></i> Productos</a>
</li>
<li class="breadcrumb-item">
    <a href="{{ url('/admin/products/add') }}" class="nav-link"><i class="fas fa-plus-square"></i> Agregar Productos</a>
</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fas fa-boxes"></i> Agregar Productos</h2>
        </div>
        <div class="inside">
            {!! Form::open(['url' => '/admin/products/add']) !!}
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Nombre del producto:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-keyboard"></i>
                            </span>
                        </div>
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="category">Categoría:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-folder"></i>
                            </span>
                        </div>
                        {!! Form::select('category', $cats, 0, ['class' => 'custom-select']) !!}
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="image">Imagen Destacada:</label>
                    <div class="custom-file">
                        {!! Form::file('image', ['class' => 'custom-file-input', 'id' => 'customFile']) !!}
                        <label for="customFile" class="custom-file-label">Elige el archivo...</label>
                    </div>

                </div>
            </div>

            <div class="row mtop16">
                <div class="col-md-3">
                    <label for="price">Precio:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-coins"></i>
                            </span>
                        </div>
                        {!! Form::number('price', null, ['class' => 'form-control', 'min' => '0.00', 'step' => 'any']) !!}
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="indiscount">¿Está en descuento?:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-percentage"></i>
                            </span>
                        </div>
                        {!! Form::select('indiscount', ['0' => 'No', '1' => 'Si'], 0, ['class' => 'custom-select']) !!}
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="discount">Descuento:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-percentage"></i>
                            </span>
                        </div>
                        {!! Form::number('discount', 0.00, ['class' => 'form-control', 'min' => '0.00', 'step' => 'any']) !!}
                    </div>
                </div>
            </div>

            <div class="row mtop16">
                <div class="col-md-12">
                    <label for="editor">Descripción</label>
                    {!! Form::textarea('editor', null, ['class' => 'form-control', 'id' => 'editor']) !!}
                </div>
            </div>

            <div class="row mtop16">
                <div class="col-md-12">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

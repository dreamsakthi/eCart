@extends('layouts.master')
 
@section('Edit Product', 'Page Title')
 
@section('sidebar')
    @parent
@endsection
 
@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">Edit Product</div>
        </div>
        <div class="panel-body" >
                {!! Form::model($product, [
                    'method' => 'PATCH',
                    'route' => ['product.edit', $product->id]
                ]) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
                    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('price', 'Price:', ['class' => 'control-label']) !!}
                    {!! Form::text('price', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('imageurl', 'Image URL:', ['class' => 'control-label']) !!}
                    {!! Form::text('imageurl', null, ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}

                {!! Form::close() !!}
        </div>
    </div>
@endsection
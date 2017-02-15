@extends('layouts.master')
 
@section('Admin shop', 'Page Title')
 
@section('sidebar')
    @parent
@endsection
 
@section('content')
 
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="/admin/product/new"><button class="btn btn-success">New Product</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                    <td>Name</td>
                    <td>Price</td>
                    <td colspan=2 align=center>Actions</td>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}$</td>
                            <td><a href="/admin/product/edit/{{$product->id}}"><button class="btn btn-success">Edit</button></a> </td>
                            <td><a href="/admin/product/destroy/{{$product->id}}"><button class="btn btn-danger">Delete</button></a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 
@endsection
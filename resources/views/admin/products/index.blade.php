@extends('admin.layouts.app')

@section('Product','active')
@section($category->slug,'active')
@section('body-part')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ $category->name }} Category
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">All Products</h3>
                                <br>
                                <a href="{{ route('products.create', ['category='.$category->slug]) }}">
                                    <button class="btn btn-success btn-flat">New</button>
                                </a>
                                <br>
                                @if(session('alert_session'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('alert_session') }}
                                    </div>
                                @endif
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        @if($category->slug != 'burgers' and $category->slug != 'panzzaroti' and $category->slug != 'garlic_fingers' and $category->slug != 'chicken' and $category->slug != 'seafood')
                                            <th>Small($)</th>
                                        @endif
                                        @if($category->slug != 'seafood' and $category->slug != 'donairs' and $category->slug != 'panzzaroti' and $category->slug != 'garlic_fingers' and $category->slug != 'poutine' and $category->slug != 'chicken' and $category->slug != 'subs_sandwiches' and $category->slug != 'appetizers' and $category->slug != 'burgers')
                                            <th>Medium($)</th>
                                        @endif
                                        @if($category->slug != 'burgers' and $category->slug != 'panzzaroti' and $category->slug != 'garlic_fingers' and $category->slug != 'chicken' and $category->slug != 'seafood')
                                            <th>Large($)</th>
                                        @endif
                                        @if($category->slug != 'seafood' and $category->slug != 'donairs' and $category->slug != 'panzzaroti' and $category->slug != 'garlic_fingers' and $category->slug != 'poutine' and $category->slug != 'chicken' and $category->slug != 'subs_sandwiches' and $category->slug != 'burgers' and $category->slug != 'appetizers')
                                            <th>Extra Large($)</th>
                                        @endif
                                        @if($category->slug != 'pizza' and $category->slug != 'poutine')
                                            <th>Price($)</th>
                                        @endif
                                        @if($category->slug != 'pizza' and $category->slug != 'donairs' and $category->slug != 'panzzaroti' and $category->slug != 'garlic_fingers' and $category->slug != 'poutine' and $category->slug != 'chicken' and $category->slug != 'subs_sandwiches' and $category->slug != 'appetizers' and $category->slug != 'seafood')
                                            <th>Platter($)</th>
                                        @endif
                                        @if($category->slug == 'donairs')
                                            <th>Extra Cheese or Meat($)</th>
                                        @endif
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->description }}</td>
                                            @if($category->slug != 'burgers' and $category->slug != 'panzzaroti' and $category->slug != 'garlic_fingers' and $category->slug != 'chicken' and $category->slug != 'seafood')
                                                <td>{{ number_format($product->small,2) }}</td>
                                            @endif
                                            @if($category->slug != 'seafood' and $category->slug != 'donairs' and $category->slug != 'panzzaroti' and $category->slug != 'garlic_fingers' and $category->slug != 'poutine' and $category->slug != 'chicken' and $category->slug != 'subs_sandwiches' and $category->slug != 'burgers' and $category->slug != 'appetizers')
                                                <td>{{ number_format($product->medium,2) }}</td>
                                            @endif
                                            @if($category->slug != 'burgers' and $category->slug != 'panzzaroti' and $category->slug != 'garlic_fingers' and $category->slug != 'chicken' and $category->slug != 'seafood')
                                                <td>{{ number_format($product->large,2) }}</td>
                                            @endif
                                            @if($category->slug != 'seafood' and $category->slug != 'donairs' and $category->slug != 'panzzaroti' and $category->slug != 'garlic_fingers' and $category->slug != 'poutine' and $category->slug != 'chicken' and $category->slug != 'subs_sandwiches' and $category->slug != 'burgers' and $category->slug != 'appetizers')
                                                <td>{{ number_format($product->extra_large,2) }}</td>
                                            @endif
                                            @if($category->slug != 'pizza' and $category->slug != 'poutine')
                                                <td>{{ number_format($product->price,2) }}</td>
                                            @endif
                                            @if($category->slug != 'pizza' and $category->slug != 'donairs' and $category->slug != 'panzzaroti' and $category->slug != 'garlic_fingers' and $category->slug != 'poutine' and $category->slug != 'chicken' and $category->slug != 'subs_sandwiches' and $category->slug != 'appetizers' and $category->slug != 'seafood')
                                                <td>{{ number_format($product->platter,2) }}</td>
                                            @endif
                                            @if($category->slug == 'donairs')
                                                <th>{{ number_format($product->extra_sauce,2) }}</th>
                                            @endif
                                            <td>
                                                <a href="{{ route('products.edit',$product->id) }}">
                                                    <button class="btn btn-warning btn-flat btn-block">Edit</button>
                                                </a>
                                            </td>
                                            <td>
                                                <form id="delete-form-{{ $product->id }}" method="POST" action="{{ route('products.destroy',$product->id) }}" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <a href="" onclick="if(confirm('Do you really want to delete this product?')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{ $product->id }}').submit();
                                                        }else{
                                                        event.preventDefault();
                                                        }">
                                                    <button class="btn btn-danger btn-flat btn-block">Delete</button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        @if($category->slug != 'burgers' and $category->slug != 'panzzaroti' and $category->slug != 'garlic_fingers' and $category->slug != 'chicken' and $category->slug != 'seafood')
                                            <th>Small($)</th>
                                        @endif
                                        @if($category->slug != 'seafood' and $category->slug != 'donairs' and $category->slug != 'panzzaroti' and $category->slug != 'garlic_fingers' and $category->slug != 'poutine' and $category->slug != 'chicken' and $category->slug != 'subs_sandwiches' and $category->slug != 'appetizers' and $category->slug != 'burgers')
                                            <th>Medium($)</th>
                                        @endif
                                        @if($category->slug != 'burgers' and $category->slug != 'panzzaroti' and $category->slug != 'garlic_fingers' and $category->slug != 'chicken' and $category->slug != 'seafood')
                                            <th>Large($)</th>
                                        @endif
                                        @if($category->slug != 'seafood' and $category->slug != 'donairs' and $category->slug != 'panzzaroti' and $category->slug != 'garlic_fingers' and $category->slug != 'poutine' and $category->slug != 'chicken' and $category->slug != 'subs_sandwiches' and $category->slug != 'burgers' and $category->slug != 'appetizers')
                                            <th>Extra Large($)</th>
                                        @endif
                                        @if($category->slug != 'pizza' and $category->slug != 'poutine' and $category->slug != 'appetizers')
                                            <th>Price($)</th>
                                        @endif
                                        @if($category->slug != 'pizza' and $category->slug != 'donairs' and $category->slug != 'panzzaroti' and $category->slug != 'garlic_fingers' and $category->slug != 'poutine' and $category->slug != 'chicken' and $category->slug != 'subs_sandwiches' and $category->slug != 'appetizers' and $category->slug != 'seafood')
                                            <th>Platter($)</th>
                                        @endif
                                        @if($category->slug == 'donairs')
                                            <th>Extra Cheese or Meat($)</th>
                                        @endif
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
        </section>
    </div>
@endsection
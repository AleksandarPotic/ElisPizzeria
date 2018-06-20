@extends('admin.layouts.app')

@section('Product','active')
@section($product->category->slug,'active')
@section('body-part')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ $product->category->name }} Category
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- general form elements -->
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Product</h3>
                            <br>
                            <a href="{{ route('products.index', ['category='.$product->category->slug]) }}"><button class="btn btn-success btn-flat">Back</button></a>
                            @if(session('alert_session'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('alert_session') }}
                                </div>
                            @endif
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="POST" action="{{ route('products.update',$product->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="box-body">
                                <div class="form-group">
                                    <input type="hidden" value="{{ $product->category->id }}" name="category_id">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $product->name }}" placeholder="Enter name" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <textarea class="textarea" placeholder="Enter description" name="description"
                                              style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $product->description }}</textarea>
                                </div>
                                @if($product->category->slug != 'burgers' and $product->category->slug != 'panzzaroti' and $product->category->slug != 'chicken' and $product->category->slug != 'seafood')
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Small Price($)</label>
                                    <input type="number" step="any" name="small" class="form-control" id="exampleInputEmail1" value="{{ $product->small }}" placeholder="Enter small price">
                                </div>
                                @endif
                                @if($product->category->slug != 'seafood' and $product->category->slug != 'donairs' and $product->category->slug != 'panzzaroti' and $product->category->slug != 'poutine' and $product->category->slug != 'chicken' and $product->category->slug != 'subs_sandwiches' and $product->category->slug != 'appetizers' and $product->category->slug != 'burgers')
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Medium Price($)</label>
                                    <input type="number" step="any" name="medium" class="form-control" id="exampleInputEmail1" value="{{ $product->medium }}" placeholder="Enter medium price">
                                </div>
                                @endif
                                @if($product->category->slug != 'burgers' and $product->category->slug != 'panzzaroti' and $product->category->slug != 'chicken' and $product->category->slug != 'seafood')
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Large Price($)</label>
                                    <input type="number" step="any" name="large" class="form-control" id="exampleInputEmail1" value="{{ $product->large }}" placeholder="Enter large price">
                                </div>
                                @endif
                                @if($product->category->slug != 'seafood' and $product->category->slug != 'donairs' and $product->category->slug != 'panzzaroti' and $product->category->slug != 'poutine' and $product->category->slug != 'chicken' and $product->category->slug != 'subs_sandwiches' and $product->category->slug != 'appetizers' and $product->category->slug != 'burgers')
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Extra Large Price($)</label>
                                    <input type="number" step="any" name="extra_large" class="form-control" id="exampleInputEmail1" value="{{ $product->extra_large }}" placeholder="Enter extra large price">
                                </div>
                                @endif
                                @if($product->category->slug != 'pizza' and $product->category->slug != 'poutine')
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Price($)</label>
                                        <input type="number" step="any" name="price" class="form-control" id="exampleInputEmail1" value="{{ $product->price }}" placeholder="Enter price">
                                    </div>
                                @endif
                                @if($product->category->slug != 'pizza' and $product->category->slug != 'donairs' and $product->category->slug != 'panzzaroti' and $product->category->slug != 'poutine' and $product->category->slug != 'chicken' and $product->category->slug != 'subs_sandwiches' and $product->category->slug != 'appetizers' and $product->category->slug != 'seafood')
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Platter($)</label>
                                        <input type="number" step="any" name="platter" class="form-control" id="exampleInputEmail1" value="{{ $product->platter }}" placeholder="Enter price">
                                    </div>
                                @endif
                                @if($product->category->slug == 'donairs')
                                <div class="form-group">
                                        <label for="exampleInputEmail1">Extra Cheese or Meat($)</label>
                                        <input type="number" step="any" name="extra_sauce" class="form-control" id="exampleInputEmail1" value="{{ $product->extra_sauce }}" placeholder="Enter price">
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label>New Product?</label>
                                    <br>
                                    <input type="checkbox" name="new" @if($product->new == 1) checked @endif>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary btn-flat">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
    </div>

@endsection
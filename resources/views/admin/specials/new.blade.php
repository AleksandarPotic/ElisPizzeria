@extends('admin.layouts.app')

@section('Special','active')
@section('body-part')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Create Special
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- general form elements -->
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">New Special</h3>
                            <br>
                            <a href="{{ route('specials.index') }}"><button class="btn btn-success btn-flat">Back</button></a>
                            @if(session('alert_session'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('alert_session') }}
                                </div>
                            @endif
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="POST" action="{{ route('specials.store') }}">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <textarea class="textarea" placeholder="Enter description" name="description"
                                              style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Price One($)</label>
                                    <input type="number" step="any" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter price">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Price Two($)</label>
                                    <input type="number" step="any" name="price2" class="form-control" id="exampleInputEmail1" placeholder="Enter price">
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
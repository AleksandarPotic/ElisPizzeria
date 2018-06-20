@extends('admin.layouts.app')

@section('Special','active')
@section('body-part')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Specials
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">All Specials</h3>
                            <br>
                            <a href="{{ route('specials.create') }}">
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
                                    <th>Price One</th>
                                    <th>Price Two</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($specials as $special)
                                    <tr>
                                        <td>{{ $special->id }}</td>
                                        <td>{{ $special->name }}</td>
                                        <td>{!!  htmlspecialchars_decode($special->description)  !!}</td>
                                        <td>{{ $special->price }}</td>
                                        <td>{{ $special->price2 }}</td>
                                        <td>
                                            <a href="{{ route('specials.edit',$special->id) }}"><button class="btn btn-warning btn-flat btn-block">Edit</button></a>
                                        </td>
                                        <td>
                                            <form id="delete-form-{{ $special->id }}" method="POST" action="{{ route('specials.destroy',$special->id) }}" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <a href="" onclick="if(confirm('Do you really want to delete this special?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $special->id }}').submit();
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
                                    <th>Price One</th>
                                    <th>Price Two</th>
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
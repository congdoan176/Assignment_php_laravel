@extends('layout.master', ['currentPage' => 'category-create'])
@section('page-title', 'Create new Category')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>Create New Category</h1>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <form role="form" method="post" action="/xe/category">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input class="form-control" name="description">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input class="form-control" name="images">
                        </div>
                        <button type="submit" class="btn btn-default">Save</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </form>
                </div>
                <!-- /.col-lg-6 (nested) -->
                <!-- /.col-lg-6 (nested) -->
            </div>
            <!-- /.row (nested) -->
        </div>
        <!-- /.panel-body -->
    </div>
@endsection
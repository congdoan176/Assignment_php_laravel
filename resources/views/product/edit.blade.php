@extends('layout.master', ['currentPage' => 'product-edit'])
@section('page-title', 'Create new Bakery')
@section('content')
    <h1>Create New Product</h1>
    <form role="form" method="post" action="/xe/product/{{$obj->id}}">
        @method('PUT')
        {{csrf_field()}}
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="name" value="{{$obj->name}}">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="categoryId" value="{{$obj->categoryId}}">
                <option value="1">Xe Đạp Điện</option>
                <option value="2">Xe Máy Số</option>
                <option value="3">Xe Tay Ga</option>
                <option value="4">Xe Côn Tay</option>
                <option value="4">Xe Mô Tô</option>
            </select>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input class="form-control" name="price" value="{{$obj->price}}">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input class="form-control" name="description" value="{{$obj->description}}">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input class="form-control" name="images" value="{{$obj->images}}">
        </div>
        <button type="submit" class="btn btn-default">Save</button>
        <button type="reset" class="btn btn-default">Reset</button>
    </form>
@endsection
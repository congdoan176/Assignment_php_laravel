@extends('layout.master', ['currentPage' => 'product-list'])
@section('page-title', 'List Bakery - Admin Page')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title float-left">
                {{__('message.list_product')}}
                <small class="text-muted">{{__('message.show_all_bakery')}}</small>
            </h3>
            <a href="/xe/product/create" class="btn float-right"><i class="fas fa-plus-circle"></i> Thêm mới sản
                phẩm</a>
            <div class="clearfix"></div>
            <div class="alert alert-success d-none" role="alert" id="messageSuccess"></div>
            <div class="alert alert-danger d-none" role="alert" id="messageError"></div>
            <div class="row m-1">
                <form action="/xe/product/" method="get">
                    <select name="categoryId">
                        <option value="0">All</option>
                        @foreach($category as $category)
                            <option value="{{$category->id}}" {{$category->id ==$choosedCategoryId? 'selected':''}} > {{$category->name}}</option>
                        @endforeach
                    </select>
                    <input type="submit" value="Search">
                </form>
            </div>
            <table class="table table-striped">
                <thead>
                <tr class="row">
                    <th class="col-md-1"></th>
                    <th class="col-md-1">ID</th>
                    <th class="col-md-2">Thumbnail</th>
                    <th class="col-md-2">Name</th>
                    <th class="col-md-2">Description</th>
                    <th class="col-md-1">Price</th>
                    <th class="col-md-3">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list_obj as $item)
                    <tr class="row" id="row-item-{{$item->id}}">
                        <td class="col-md-1 text-center">
                            <input type="checkbox" class="check-item">
                        </td>
                        <td class="col-md-1">{{$item->id}}</td>
                        <td class="col-md-2">
                            <div class="card"
                                 style="background-image: url('{{$item->images}}'); background-size: cover; width: 60px; height: 60px;">
                            </div>
                        </td>
                        <td class="col-md-2">{{$item->name}}</td>
                        <td class="col-md-2">{{$item->description}}</td>
                        <td class="col-md-1">{{$item->price}}</td>
                        <td class="col-md-3">
                            <a href="/xe/product/{{$item -> id}}/edit" class="btn btn-link btn-edit">Edit</a>&nbsp;&nbsp;
                            <a href="#" id="{{$item-> id}}" class="btn btn-link btn-delete">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Edit BAkery-->
    <script>
        var listDeleteButton = document.getElementsByClassName('btn-delete');
        for (var i = 0; i < listDeleteButton.length; i++) {
            listDeleteButton[i].onclick = function () {
                if (confirm('Are you sure ?')) {
                    var params = '_token={{csrf_token()}}';
                    var currentId = this.id;
                    var xhttp = new XMLHttpRequest();
                    xhttp.open("DELETE", "/xe/product/" + currentId, true);
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            alert('Delete success!');
                            window.location.reload();
                        }
                    };
                    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhttp.send(params);
                }
            }
        }
    </script>
    <script src="{{asset('js/myscript.js')}}"></script>
@endsection
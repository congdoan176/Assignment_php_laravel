@extends('layout.master', ['currentPage' => 'category-list'])
@section('page-title', 'Create new Category')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title float-left">
                List Category
            </h3>
            <a href="/xe/category/create" class="btn float-right"><i class="fas fa-plus-circle"></i> Thêm mới sản
                phẩm</a>
            <div class="clearfix"></div>
            <div class="alert alert-success d-none" role="alert" id="messageSuccess"></div>
            <div class="alert alert-danger d-none" role="alert" id="messageError"></div>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Aciton</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list_obj as $item)
                    <tr class="odd gradeX">
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td class="center">{{$item->description}}</td>
                        <td><img src="{{$item->images}}" alt="" style="width: 150px; height: 100px; border-radius: 10%">
                        </td>
                        <td class="center">
                            <a href="/xe/category/{{$item -> id}}/edit">Edit</a>&nbsp;&nbsp;
                            <a href="#" id="{{$item-> id}}" class="btn btn-link btn-delete">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
    <script>
        var listDeleteButton = document.getElementsByClassName('btn-delete');
        for (var i = 0; i < listDeleteButton.length; i++) {
            listDeleteButton[i].onclick = function () {
                if (confirm('Are you sure ?')) {
                    var params = '_token={{csrf_token()}}';
                    var currentId = this.id;
                    var xhttp = new XMLHttpRequest();
                    xhttp.open("DELETE", "/xe/category/" + currentId, true);
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
@endsection
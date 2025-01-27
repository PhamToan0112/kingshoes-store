@extends('admin.layout_admin')
@section('title','Trang add categories')
@section('content_ad')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Thêm Danh Mục</h1>
    <p class="mb-4">Trang quản lí danh sách danh mục <a target="_blank"
            href="https://datatables.net">Thuộc quyền sở hữu của PTT_FPT</a>.</p>
            @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="container d-flex justify-content-center">
            <div class="content col-lg-9 mb-3 mt-3">
                <form action="{{ route('add_categories') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex">
                        <div class="form-group col-lg-5">
                            <label for="name">Tên danh mục:</label>
                            <input class="form-control" type="text" name="name" id="name" placeholder="Tên danh mục">
                        </div>
                        <div class="form-group col-lg-5">
                            <label for="name_cate_Url">Tên đường dẫn :</label>
                            <input class="form-control" type="text" name="name_cate_Url" id="name_cate_Url" placeholder="name_cate_Url" required>
                        </div>
                    </div>
                    <div class="form-group col-lg-10">
                        <label class="text" for="description">Mô tả danh mục:</label>
                        <textarea class="form-control" name="description" id="description" placeholder="Mô tả danh mục" cols="30" rows="10" style="height: 100px;">
                        </textarea>
                    </div>
                    <div class="d-flex">
                        <div class="form-group col-lg-5">
                            <label for="status">Trạng thái :</label>
                            <select class="form-control" name="status" id="status" required>
                                <option value="">Chọn trạng thái</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-5">
                            <label for="image">Hình ảnh:</label>
                            <input class="form-control-file" type="file" name="image" id="image">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Thêm danh mục</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection

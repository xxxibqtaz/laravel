@extends('admin')
@section('content')
    <style>
        .table-striped {
            height: 200px;
        }

        .table-striped td {
            max-width: fit-content;
            max-height: 100%;
            text-overflow: ellipsis;
            white-space: normal;
            display: block;
        }
    </style>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Thêm khóa học</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
                <li class="breadcrumb-item">Khóa học</li>
                <li class="breadcrumb-item active">Thêm khóa học</li>
            </ol>
        </div>
        <div class="">
            <button
                class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10">
                <i class="ti-settings text-white"></i></button>
        </div>
    </div>
    <!-- ============================================================== -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thêm khóa học</h4>
                        <form class="m-t-40" novalidate method="POST" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <h5>Tên khóa học<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="name" class="form-control" required
                                           data-validation-required-message="This field is required">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <h5>Hình ảnh<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="file" name="image" class="form-control" required></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <h5>Loại khóa học<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="type" class="form-control" required
                                                data-validation-required-message="This field is required">
                                            <option>Chọn loại khóa học</option>
                                            <option value="1">Thịnh hành</option>
                                            <option value="2">Đề xuất</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <h5>Danh mục<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="id_category" class="form-control" required
                                                data-validation-required-message="This field is required">
                                            @foreach ($courses as $item)
                                                <option value="{{$item->category?$item->category->id:''}}">{{$item->category?$item->category->name:'blank'}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Mô tả ngắn<span class="text-danger">*</span></h5>
                                <div class="controls">
                                        <textarea name="preview" class="form-control" required
                                                  data-validation-required-message="This field is required"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Chi tiết khóa học<span class="text-danger">*</span></h5>
                                <div class="controls">
                                        <textarea name="description" class="form-control" rows="10" required
                                                  data-validation-required-message="This field is required"></textarea>
                                </div>
                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-info">Thêm</button>
                                <button type="reset" class="btn btn-inverse">Nhập lại</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

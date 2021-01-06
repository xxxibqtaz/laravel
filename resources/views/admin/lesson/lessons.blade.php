<!-- column -->
@extends('admin')
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Quản lí bài học</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
                <li class="breadcrumb-item active">Bài học</li>
            </ol>

        </div>
        <div>
            <button
                class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10">
                <i
                    class="ti-settings text-white"></i></button>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách bài học</h4>
                        <a href="{{URL::to('/admin/lesson/add')}}" class="btn btn-success">Thêm bài học</a>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên bài học</th>
                                    <th>Thời gian</th>
                                    <th>Tên khóa học</th>
                                    <th>Nội dung</th>
                                    <th>Video bài giảng</th>
                                    <th class="text-nowrap">Tùy chọn</th>
                                </tr>
                                </thead>
                                @foreach ($lessons as $item)
                                    <tbody>
                                    <tr style="max-height: 200px">
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->time}}</td>
                                        <td>{{$item->course?$item->course->name:'blank'}}</td>
                                        <td>{{ $item->content }}</td>
                                        <td style="max-height: 150px;text-overflow: ellipsis;white-space: normal;display: block;overflow: hidden;">
                                            <iframe width=100%
                                                    src="{{ $item->video }}" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe></td>
                                        <td class="text-nowrap">
                                            <a href="{{URL::to('/admin/lesson/edit/'.$item->id)}}" data-toggle="tooltip"
                                               data-original-title="Edit"> <i
                                                    class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="{{URL::to('/admin/lesson/delete/'.$item->id)}}"
                                               data-toggle="tooltip" data-original-title="Delete"> <i
                                                    class="fa fa-close text-danger"></i> </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

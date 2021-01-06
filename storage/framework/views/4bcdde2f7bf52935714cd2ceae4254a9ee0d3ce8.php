<!-- column -->

<?php $__env->startSection('content'); ?>
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
                        <a href="<?php echo e(URL::to('/admin/lesson/add')); ?>" class="btn btn-success">Thêm bài học</a>

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
                                <?php $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tbody>
                                    <tr style="max-height: 200px">
                                        <td><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><?php echo e($item->time); ?></td>
                                        <td><?php echo e($item->course?$item->course->name:'blank'); ?></td>
                                        <td><?php echo e($item->content); ?></td>
                                        <td style="max-height: 150px;text-overflow: ellipsis;white-space: normal;display: block;overflow: hidden;">
                                            <iframe width=100%
                                                    src="<?php echo e($item->video); ?>" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe></td>
                                        <td class="text-nowrap">
                                            <a href="<?php echo e(URL::to('/admin/lesson/edit/'.$item->id)); ?>" data-toggle="tooltip"
                                               data-original-title="Edit"> <i
                                                    class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="<?php echo e(URL::to('/admin/lesson/delete/'.$item->id)); ?>"
                                               data-toggle="tooltip" data-original-title="Delete"> <i
                                                    class="fa fa-close text-danger"></i> </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lms1\resources\views/admin/lesson/lessons.blade.php ENDPATH**/ ?>
<!-- column -->

<?php $__env->startSection('content'); ?>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Quản lí danh mục</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
                <li class="breadcrumb-item active">Danh mục</li>
            </ol>

        </div>
        <div>
            <button
                class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i
                    class="ti-settings text-white"></i></button>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách danh mục</h4>
                        <a href="<?php echo e(URL::to('/admin/category/add')); ?>" class="btn btn-success">Thêm danh mục</a>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên danh mục</th>
                                    <th>Hình ảnh</th>
                                    <th class="text-nowrap">Tùy chọn</th>
                                </tr>
                                </thead>
                                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tbody>
                                    <tr>
                                        <td><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->name); ?></td>

                                        <td>
                                            <img src="<?php echo e(asset('/upload/'.$item->image)); ?>" style="width: 100px " alt="">
                                        </td>
                                        <td class="text-nowrap">
                                            <a href="<?php echo e(URL::to('/admin/category/edit/'.$item->id)); ?>" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="<?php echo e(URL::to('/admin/category/delete/'.$item->id)); ?>" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a>
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

<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lms1\resources\views/admin/category/category.blade.php ENDPATH**/ ?>
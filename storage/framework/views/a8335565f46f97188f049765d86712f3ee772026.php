<?php $__env->startSection('content'); ?>
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Thêm danh mục</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
                    <li class="breadcrumb-item">Danh mục</li>
                    <li class="breadcrumb-item active">Thêm danh mục</li>
                </ol>
            </div>
            <div class="">
                <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            </div>
        </div>
        <!-- ============================================================== -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Thêm danh mục</h4>
                            <form class="m-t-40" novalidate method="POST" action="" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <h5>Tên danh mục<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="name" class="form-control" required data-validation-required-message="This field is required"> </div>

                                </div>
                                <div class="form-group">
                                    <h5>Hình ảnh<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="file" name="img" class="form-control" required> </div>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lms1\resources\views/admin/category/add.blade.php ENDPATH**/ ?>
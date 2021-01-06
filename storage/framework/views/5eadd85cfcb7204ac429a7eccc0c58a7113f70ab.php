
<?php $__env->startSection('home'); ?>
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Quản trị</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Quản trị</li>
        </ol>
    </div>
    <div>
        <button
            class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i
                class="ti-settings text-white"></i></button>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lms\resources\views/admin/home.blade.php ENDPATH**/ ?>
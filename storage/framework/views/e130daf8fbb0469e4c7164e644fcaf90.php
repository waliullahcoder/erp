<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

    <title><?php echo e($admin_setting ? $admin_setting->title : ''); ?></title>
    <link rel="shortcut icon"
        href="<?php echo e($admin_setting && file_exists($admin_setting->favicon) ? asset($admin_setting->favicon) : asset('backend/images/logo/favicon.png')); ?>"
        type="image/x-icon">
    <?php echo $__env->make('layouts.admin.partial.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.admin.partial.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        :root {
            --bs-primary: <?php echo e($admin_setting && $admin_setting->primary_color ? $admin_setting->primary_color : '#3753e9'); ?>;
            --bs-secondary: <?php echo e($admin_setting && $admin_setting->secondary_color ? $admin_setting->secondary_color : '#415FFF'); ?>;
        }
    </style>
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
<style>
body,*{
    font-family: 'SolaimanLipi', sans-serif;
}
</style>
</head>

<body class="bg-light">
    <div class="overflow-hidden site-wrapper <?php if(Session::has('sidebar-collapse')): ?> session-sidebar <?php endif; ?>">
        <?php echo $__env->make('layouts.admin.partial.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="content-wrapper">
            <?php echo $__env->make('layouts.admin.partial.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="content">
                <div class="p-sm-4 p-3">
                    <div class="row g-3">
                        <?php if(!isset($filter_form)): ?>
                            <div class="col-12">
                                <form action="<?php echo e(isset($filter_link) ? $filter_link : '#'); ?>"
                                    id="<?php echo e(isset($filter_link) ? '' : 'filter_form'); ?>" class="filter_form" method="GET">
                                    <div class="card">
                                        <div class="card-body">
                                            <?php echo $__env->yieldContent('form'); ?>
                                        </div>
                                        <div
                                            class="card-footer p-2 gap-2 d-flex justify-content-end align-items-center">
                                            <?php if(isset($buttons)): ?>
                                                <?php echo $buttons; ?>

                                            <?php else: ?>
                                                <button type="submit" class="btn btn-sm btn-primary text-uppercase"
                                                    id="filter_btn">Search</button>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        <?php endif; ?>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header pe-2 py-2">
                                    <div class="d-flex align-items-center justify-content-between gap-2">
                                        <h6 class="h6 mb-0 text-uppercase py-1">
                                            <?php echo e(isset($title) ? $title : 'Please Set Title'); ?>

                                        </h6>
                                        <?php if(isset($filter_form)): ?>
                                            <?php echo $filter_form; ?>

                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <?php echo $__env->yieldContent('content'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo $__env->make('layouts.admin.partial.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <!-- End Site Wrapper -->

    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.admin.partial.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            $(document).on('submit', '#filter_form', function(e) {
                e.preventDefault();
                $('.dataTable').DataTable().ajax.reload();
            });
        });
    </script>
    <?php echo $__env->yieldPushContent('js'); ?>
</body>

</html>
<?php /**PATH E:\laragon\www\erp\resources\views/layouts/admin/report_app.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
    <div class="row g-3">
        <?php if(Auth::user()->hasRole('Software Admin')): ?>
            <div class="col-lg-4 col-sm-6">
                <label for="company_id" class="form-label"><b>Company Name <span class="text-danger">*</span></b></label>
                <select name="company_id" id="company_id" class="select form-select" data-placeholder="Select Company" required>
                    <option value=""></option>
                    <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($company->id); ?>"
                            <?php echo e(old('company_id') && old('company_id') == $company->id ? 'selected' : ''); ?>>
                            <?php echo e($company->name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        <?php endif; ?>
        <div class="col-lg-4 col-sm-6">
            <label for="branch_id" class="form-label"><b>Branch Name <span class="text-danger">*</span></b></label>
            <select name="branch_id" id="branch_id" class="select form-select" data-placeholder="Select Branch" required>
                <option value=""></option>
                <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($branch->id); ?>"
                        <?php echo e(old('branch_id') && old('branch_id') == $branch->id ? 'selected' : ''); ?>>
                        <?php echo e($branch->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="col-lg-4 col-sm-6">
            <label for="type" class="form-label"><b>Staff Type <span class="text-danger">*</span></b></label>
            <div class="custom-select">
                <select class="form-control custom-select__element" name="type" id="type" required>
                    <option value="general" <?php echo e(old('type') && old('type') == 'general' ? 'selected' : ''); ?>>General</option>
                    <option value="sales" <?php echo e(old('type') && old('type') == 'sales' ? 'selected' : ''); ?>>Sales</option>
                    <option value="driver" <?php echo e(old('type') && old('type') == 'driver' ? 'selected' : ''); ?>>Driver</option>
                    <option value="delivery_man" <?php echo e(old('type') && old('type') == 'delivery_man' ? 'selected' : ''); ?>>
                        Delivery Man
                    </option>
                </select>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <label for="code" class="form-label"><b>Code <span class="text-danger">*</span></b></label>
            <input type="text" class="form-control" id="code" name="code" required
                value="<?php echo e(old('code')); ?>" placeholder="code">
        </div>
        <div class="col-lg-4 col-sm-6">
            <label for="name" class="form-label"><b>Staff Name <span class="text-danger">*</span></b></label>
            <input type="text" class="form-control" id="name" name="name" required
                value="<?php echo e(old('name')); ?>" placeholder="Staff Name">
        </div>
        <div class="col-lg-4 col-sm-6">
            <label for="short_name" class="form-label"><b>Display Name <span class="text-danger">*</span></b></label>
            <input type="text" class="form-control" id="short_name" name="short_name" required
                value="<?php echo e(old('short_name')); ?>" placeholder="Display Name">
        </div>
        <div class="col-lg-4 col-sm-6">
            <label for="designation" class="form-label"><b>Designation</b></label>
            <input type="text" class="form-control" id="designation" name="designation"
                value="<?php echo e(old('designation')); ?>" placeholder="Designation">
        </div>
        <div class="col-lg-4 col-sm-6">
            <label for="joining_date" class="form-label"><b>Joining Date <span class="text-danger">*</span></b></label>
            <input type="text" class="form-control date_picker" id="joining_date" name="joining_date"
                required value="<?php echo e(date('d-m-Y', strtotime(old('joining_date')))); ?>" placeholder="Joining Date">
        </div>
        <div class="col-lg-4 col-sm-6">
            <label for="email" class="form-label"><b>Email</b></label>
            <input type="email" class="form-control" id="email" name="email"
                value="<?php echo e(old('email')); ?>" placeholder="Email">
        </div>
        <div class="col-lg-4 col-sm-6">
            <label for="phone" class="form-label"><b>Phone No.</b></label>
            <input type="text" class="form-control" id="phone" name="phone"
                value="<?php echo e(old('phone')); ?>" placeholder="Phone">
        </div>
        <div class="col-lg-4 col-sm-6">
            <label for="national_id" class="form-label"><b>National ID</b></label>
            <input type="number" class="form-control" id="national_id" name="national_id"
                value="<?php echo e(old('national_id')); ?>" placeholder="National ID">
        </div>
        <div class="col-lg-4 col-sm-6">
            <label for="ac_no" class="form-label"><b>A/C No.</b></label>
            <input type="text" class="form-control" id="ac_no" name="ac_no"
                value="<?php echo e(old('ac_no')); ?>" placeholder="A/C No.">
        </div>
        <div class="col-lg-4 col-sm-6">
            <label for="ac_branch" class="form-label"><b>A/C Branch</b></label>
            <input type="text" class="form-control" id="ac_branch" name="ac_branch"
                value="<?php echo e(old('ac_branch')); ?>" placeholder="A/C Branch">
        </div>
        <div class="col-12">
            <label for="address" class="form-label"><b>Address</b></label>
            <input type="text" name="address" id="address" class="form-control" placeholder="Address"
                value="<?php echo e(old('address')); ?>">
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".date_picker").datepicker({
                format: 'dd-mm-yyyy',
                changeMonth: true,
                changeYear: true,
            }).datepicker('setDate', 'today');

            $(document).on('change', '#company_id', function(e) {
                let company_id = $(this).val();
                let url = "<?php echo e(Route('admin.staff.create')); ?>";
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        _method: 'GET',
                        company_id: company_id,
                    },
                    success: function(response) {
                        if (response.status == 'success') {
                            $('#branch_id option').remove();
                            $('#branch_id').append('<option value=""></option>');
                            $.each(response.branches, function(key, value) {
                                var html = '<option value="' + value.id + '">' + value
                                    .name + '</option>';
                                $('#branch_id').append(html);
                            });
                        }
                    }
                });
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin.create_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\erp\resources\views/admin/staff/create.blade.php ENDPATH**/ ?>
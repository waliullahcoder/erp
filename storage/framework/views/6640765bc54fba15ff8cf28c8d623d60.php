<?php $__env->startSection('content'); ?>
    <div class="row g-3">
        <div class="col-lg-4 order-lg-last">
            <form action="<?php echo e(Route('admin.attribute.store')); ?>" method="POST" enctype="multipart/form-data" id="addForm">
                <?php echo csrf_field(); ?>
                <div class="card">
                    <div class="card-header pe-2 py-2">
                        <h6 class="h6 mb-0 py-1 text-uppercase">Add New Attribute</h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <?php if(Auth::user()->hasRole('Software Admin')): ?>
                                <div class="col-12">
                                    <label for="company_id" class="form-label"><b>Company Name <span
                                                class="text-danger">*</span></b></label>
                                    <select name="company_id" id="company_id" class="form-select select"
                                        data-placeholder="Select Company.." required>
                                        <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($company->id); ?>"><?php echo e($company->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            <?php endif; ?>
                            <div class="col-12">
                                <label for="name" class="form-label"><b>Name <span
                                            class="text-danger">*</span></b></label>
                                <input type="text" class="form-control" id="name" name="name" required
                                    placeholder="Attribute Name">
                            </div>
                            
                            <div class="col-12">
                                <label for="status" class="form-label"><b>Status <span
                                            class="text-danger">*</span></b></label>
                                <select name="status" id="status" class="form-select" required>
                                    <option value="1" selected>Active</option>
                                    <option value="0">Deactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-sm btn-primary">Add New</button>
                    </div>
                </div>
            </form>

            <form action="" method="POST" id="editForm" enctype="multipart/form-data" style="display: none;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="card">
                    <div class="card-header pe-2 py-2">
                        <h6 class="h6 mb-0 py-1 text-uppercase">Edit Attribute</h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <?php if(Auth::user()->hasRole('Software Admin')): ?>
                                <div class="col-12">
                                    <label for="old_company_id" class="form-label"><b>Company Name <span
                                                class="text-danger">*</span></b></label>
                                    <select id="old_company_id" name="ompany_id" class="form-select select"
                                        data-placeholder="Select Company.." required>
                                        <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($company->id); ?>"><?php echo e($company->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            <?php endif; ?>
                            <div class="col-12">
                                <label for="old_name" class="form-label"><b>Name <span
                                            class="text-danger">*</span></b></label>
                                <input type="text" class="form-control" id="old_name" name="name" required
                                    placeholder="Attribute Name">
                            </div>
                            
                            <div class="col-12">
                                <label for="old_status" class="form-label"><b>Status <span
                                            class="text-danger">*</span></b></label>
                                <select name="status" id="old_status" class="form-select" required>
                                    <option value="1" selected>Active</option>
                                    <option value="0">Deactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-sm btn-warning" id="cancelBtn">Cancel</button>
                            <button type="submit" class="btn btn-sm btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header pe-2 py-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="h6 mb-0 py-1 text-uppercase">Attribute Setup</h6>
                        <div class="d-flex flex-wrap gap-2">
                            <?php if(Auth::user()->hasRole('Software Admin')): ?>
                                <select name="filter" id="filter" class="form-select custom-select flex-shrink-0"
                                    style="width: 100px; padding: 4px 10px; min-height: auto;">
                                    <option value="all">All</option>
                                    <option value="trash">Trash</option>
                                </select>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="dataTable table align-middle" style="width:100%">
                        <thead>
                            <tr class="text-nowrap">
                                <th width="3"></th>
                                <?php if(Auth::user()->hasRole('Software Admin')): ?>
                                    <th>Company</th>
                                <?php endif; ?>
                                <th>Name</th>
                                <th>Status</th>
                                <th width="110" class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <?php
                            $currentRouteName = \Request::route()->getName();
                            $link = Route($currentRouteName);
                            $delete_link = str_replace('index', 'destroy', $currentRouteName);
                        ?>
                        <?php if(Auth::user()->can($delete_link)): ?>
                            <tfoot>
                                <tr>
                                    <th class="text-center" colspan="1">
                                        <div class="custom-control custom-checkbox">
                                            <div id="regular_all_select">
                                                <input type="checkbox" class="custom-control-input" id="selectAll">
                                                <label class="custom-control-label" for="selectAll"></label>
                                            </div>
                                            <div id="trash_all_select" style="display: none;">
                                                <input type="checkbox" class="custom-control-input" id="trash_selectAll">
                                                <label class="custom-control-label" for="trash_selectAll"></label>
                                            </div>
                                        </div>
                                    </th>
                                    <th class="text-end"
                                        colspan="<?php echo e(Auth::user()->hasRole('Software Admin') ? '4' : '3'); ?>">
                                        <button type="button" name="bulk_delete"
                                            data-url="<?php echo e(Route($delete_link, '0')); ?>" id="bulk_delete"
                                            class="btn btn btn-xs btn-danger">Delete</button>
                                        <button type="button" name="bulk_delete"
                                            data-url="<?php echo e(Route($delete_link, '0')); ?>" style="display: none;"
                                            id="trash_bulk_delete" class="btn btn btn-xs btn-danger">Delete</button>
                                    </th>
                                </tr>
                            </tfoot>
                        <?php endif; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('.dataTable').dataTable({
                processing: true,
                serverSide: true,
                scrollX: true,
                ajax: {
                    url: "<?php echo e($link); ?>",
                    type: "GET",
                    data: function(data) {
                        data.type = $('#filter').val();
                    }
                },
                columns: [{
                        data: "checkbox",
                        name: "checkbox",
                        orderable: false,
                        searchable: false,
                        width: '3'
                    },
                    <?php if(Auth::user()->hasRole('Software Admin')): ?>
                        {
                            data: 'company.name',
                            name: 'company.name',
                        },
                    <?php endif; ?> {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'actions',
                        name: 'actions',
                        orderable: false,
                        searchable: false,
                        className: "text-end",
                    },
                ],
                "fnDrawCallback": function(oSettings) {
                    const tooltips = document.querySelectorAll('.tt');
                    tooltips.forEach(t => {
                        new bootstrap.Tooltip(t);
                    });
                }
            });

            $(document).on('click', '.link-edit', function(e) {
                e.preventDefault();
                let url = $(this).attr('href');
                $.ajax({
                    url: url,
                    data: {
                        _method: 'GET',
                    },
                    success: (response) => {
                        if (response.status == 'success') {
                            $('#editForm').attr('action', response.form_link);
                            if ($('#old_company_id').length) {
                                $('#old_company_id').val(response.data.company_id);
                            }
                            $('#old_name').val(response.data.name);
                            if ($('#old_type').length) {
                                $('#old_type').val(response.data.type);
                            }
                            $('#old_status').val(response.data.status);
                            $('#editForm').show();
                            $('#addForm').hide();
                        }
                        if (response.status == 'error') {
                            Swal.fire({
                                width: "22rem",
                                title: "Failed!",
                                text: "You don't have any Authority to do this action",
                                icon: "error",
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }
                    }
                });
            });

            $(document).on('click', '#cancelBtn', function(e) {
                e.preventDefault();
                $('#editForm').hide();
                $('#addForm').show();
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\erp\resources\views/admin/attribute/index.blade.php ENDPATH**/ ?>
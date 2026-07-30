@extends('layouts.admin.app')

@section('content')

<div class="row g-3">

    <div class="col-12">

        <div class="card">

            <div class="card-header py-2">

                <div class="d-flex justify-content-between align-items-center">

                    <h6 class="mb-0 text-uppercase">
                        Payroll Management
                    </h6>

                    <a href="{{ route('admin.payroll.create') }}"
                       class="btn btn-primary btn-sm">

                        <i class="fas fa-plus"></i>
                        Generate Payroll

                    </a>

                </div>

            </div>

            <div class="card-body">

                <table class="table table-bordered table-hover dataTable w-100">

                    <thead>

                        <tr>

                            <th>ID</th>
                            <th>Employee ID</th>
                            <th>Employee</th>
                            <th>Month</th>
                            <th>Year</th>
                            <th>Gross Salary</th>
                            <th>Deduction</th>
                            <th>Net Salary</th>
                            <th>Payment Date</th>
                            <th>Status</th>
                            <th width="130" class="text-end">Action</th>

                        </tr>

                    </thead>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection

@push('js')

<script>

$(function(){

    $('.dataTable').DataTable({

        processing:true,
        serverSide:true,
        responsive:true,
        scrollX:true,

        dom:'Bfrtip',

        buttons:[

            {

                extend:'excelHtml5',

                text:'<i class="fas fa-file-excel"></i> Excel',

                className:'btn btn-success btn-sm',

                title:'Payroll List'

            }

        ],

        ajax:{
            url:"{{ route('admin.payroll.index') }}",
            type:"GET"
        },

        columns:[

            {data:'id',name:'p.id'},

            {data:'employee_code',name:'s.employee_id'},

            {data:'employee_name',name:'s.name'},

            {data:'payroll_month',name:'p.payroll_month'},

            {data:'payroll_year',name:'p.payroll_year'},

            {data:'gross_salary',name:'p.gross_salary'},

            {data:'total_deduction',name:'p.total_deduction'},

            {data:'net_salary',name:'p.net_salary'},

            {data:'payment_date',name:'p.payment_date'},

            {data:'payment_status',name:'p.payment_status'},

            {

                data:'actions',

                name:'actions',

                searchable:false,

                orderable:false,

                className:'text-end'

            }

        ]

    });

});

</script>

@endpush
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">

<title>Salary Sheet</title>

<style>

body{

    font-family:Arial;
    font-size:13px;
    color:#222;

}

.header{

    text-align:center;
    margin-bottom:20px;

}

.header h2{

    margin:0;

}

.header h4{

    margin:5px 0;

}

table{

    width:100%;
    border-collapse:collapse;

}

table th,
table td{

    border:1px solid #000;
    padding:6px;

}

table th{

    background:#efefef;

}

tfoot th{

    background:#ddd;

}

.text-right{

    text-align:right;

}

.print{

    text-align:center;
    margin:20px;

}

@media print{

    .print{

        display:none;

    }

}

</style>

</head>

<body>

<div class="print">

<button onclick="window.print()">

Print

</button>

</div>

<div class="header">

<h2>Techno Park Bangladesh</h2>

<h4>Salary Sheet</h4>

<h4>
For
{{ date('F',mktime(0,0,0,$request->payroll_month,1)) }}
-
{{ $request->payroll_year }}
</h4>

</div>

<table>

<thead>

<tr>

<th>SL</th>
<th>Employee ID</th>
<th>Name</th>
<th>Basic</th>
<th>House Rent</th>
<th>Medical</th>
<th>Other</th>
<th>Deduction</th>
<th>Net Salary</th>

</tr>

</thead>

<tbody>

@foreach($payrolls as $row)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $row->employee_code }}</td>

<td>{{ $row->name }}</td>

<td class="text-right">{{ number_format($row->basic_salary,2) }}</td>

<td class="text-right">{{ number_format($row->house_rent,2) }}</td>

<td class="text-right">{{ number_format($row->medical_allowance,2) }}</td>

<td class="text-right">{{ number_format($row->other_allowance,2) }}</td>

<td class="text-right">{{ number_format($row->total_deduction,2) }}</td>

<td class="text-right">
<b>{{ number_format($row->net_salary,2) }}</b>
</td>

</tr>

@endforeach

</tbody>

<tfoot>

<tr>

<th colspan="3">

Grand Total

</th>

<th class="text-right">

{{ number_format($payrolls->sum('basic_salary'),2) }}

</th>

<th class="text-right">

{{ number_format($payrolls->sum('house_rent'),2) }}

</th>

<th class="text-right">

{{ number_format($payrolls->sum('medical_allowance'),2) }}

</th>

<th class="text-right">

{{ number_format($payrolls->sum('other_allowance'),2) }}

</th>

<th class="text-right">

{{ number_format($payrolls->sum('total_deduction'),2) }}

</th>

<th class="text-right">

{{ number_format($payrolls->sum('net_salary'),2) }}

</th>

</tr>

</tfoot>

</table>

<br><br><br>

<table style="border:none">

<tr style="border:none">

<td style="border:none;text-align:center">

_____________________<br>

Prepared By

</td>

<td style="border:none;text-align:center">

_____________________<br>

Checked By

</td>

<td style="border:none;text-align:center">

_____________________<br>

Approved By

</td>

</tr>

</table>

</body>

</html>
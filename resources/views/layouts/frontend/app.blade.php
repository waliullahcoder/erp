<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ !is_null($setting) ? $setting->title : '' }}</title>
    <link rel="shortcut icon"
        href="{{ !is_null($setting) && file_exists($setting->favicon) ? asset($setting->favicon) : asset('frontend/assets/images/logo/favicon.png') }}"
        type="image/x-icon">

</head>

<body>
   
        @yield('content')
       
</body>

</html>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ !is_null($setting) ? $setting->title : '' }} Login</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Poppins,sans-serif;
}

body{

background:linear-gradient(135deg,#0f172a,#1e3a8a,#2563eb);
min-height:100vh;
display:flex;
justify-content:center;
align-items:center;
padding:30px;

}

.container{

width:1200px;
max-width:100%;
display:grid;
grid-template-columns:1.3fr .8fr;
gap:30px;

}

.left{

background:rgba(255,255,255,.08);
backdrop-filter:blur(20px);
padding:35px;
border-radius:20px;
border:1px solid rgba(255,255,255,.15);

}

.left h1{

color:#fff;
margin-bottom:8px;

}

.left p{

color:#dbeafe;
margin-bottom:30px;

}

.modules{

display:grid;
grid-template-columns:repeat(auto-fit,minmax(140px,1fr));
gap:18px;

}

.card{

background:rgba(255,255,255,.06);
border:1px solid rgba(255,255,255,.12);
padding:25px 10px;
border-radius:18px;
text-align:center;
cursor:pointer;
transition:.35s;

}

.card:hover{

transform:translateY(-8px);
background:#2563eb;
box-shadow:0 15px 30px rgba(0,0,0,.35);

}

.card.active{

background:#06b6d4;

}

.card i{

font-size:35px;
color:#fff;
margin-bottom:12px;

}

.card h4{

color:#fff;
font-size:15px;

}

.login{

background: linear-gradient(135deg, #06B6D4, #2563EB);
padding:40px;
border-radius:20px;
display:flex;
flex-direction:column;
justify-content:center;
box-shadow:0 15px 40px rgba(0,0,0,.25);

}

.logo{

text-align:center;
margin-bottom:20px;

}

.logo i{

font-size:60px;
color:#2563eb;

}

.logo h2{

margin-top:10px;
color:#1e293b;

}

.selected{

background:#eff6ff;
padding:10px;
border-radius:8px;
margin-bottom:20px;
font-weight:600;
color:#2563eb;
text-align:center;

}

.input{

margin-bottom:18px;
position:relative;

}

.input input{

width:100%;
padding:14px;
border-radius:10px;
border:1px solid #ddd;
font-size:15px;
outline:none;

}

.eye{

position:absolute;
right:15px;
top:16px;
cursor:pointer;
color:#666;

}

button{

width:100%;
padding:14px;
border:none;
background:#2563eb;
color:#fff;
font-size:16px;
font-weight:600;
border-radius:10px;
cursor:pointer;
transition:.3s;

}

button:hover{

background:#1d4ed8;

}

.footer{

margin-top:15px;
text-align:center;
font-size:13px;
color:#888;

}

@media(max-width:900px){

.container{

grid-template-columns:1fr;

}

.login{

order:-1;

}

}

</style>

</head>
<body>

<div class="container">

<div class="left">

<h1><i class="fa-solid fa-cubes"></i> {{ !is_null($setting) ? $setting->title : '' }}</h1>

<p>Select Your ERP Module</p>

<div class="modules">

<div class="card active" data-module="Dashboard">
<i class="fa-solid fa-chart-line"></i>
<h4>Dashboard</h4>
</div>

<div class="card" data-module="Sales">
<i class="fa-solid fa-cart-shopping"></i>
<h4>Sales</h4>
</div>

<div class="card" data-module="Inventory">
<i class="fa-solid fa-boxes-stacked"></i>
<h4>Inventory</h4>
</div>

<div class="card" data-module="Accounts">
<i class="fa-solid fa-building-columns"></i>
<h4>Accounts</h4>
</div>

<div class="card" data-module="HR & Payroll">
<i class="fa-solid fa-users"></i>
<h4>HRM</h4>
</div>

<div class="card" data-module="CRM">
<i class="fa-solid fa-user-tie"></i>
<h4>CRM</h4>
</div>

<div class="card" data-module="Purchase">
<i class="fa-solid fa-truck"></i>
<h4>Purchase</h4>
</div>

<div class="card" data-module="Production">
<i class="fa-solid fa-industry"></i>
<h4>Production</h4>
</div>

<div class="card" data-module="Website CMS">
<i class="fa-solid fa-diagram-project"></i>
<h4>Website CMS</h4>
</div>

<div class="card" data-module="Order Management">
<i class="fa-solid fa-wallet"></i>
<h4>Orders</h4>
</div>

<div class="card" data-module="Reports">
<i class="fa-solid fa-chart-pie"></i>
<h4>Reports</h4>
</div>

<div class="card" data-module="Settings">
<i class="fa-solid fa-gear"></i>
<h4>Settings</h4>
</div>

</div>

</div>

<div class="login">

<div class="logo">

<i class="fa-solid fa-cube"></i>

<h2>ERP Login</h2>

</div>

<div class="selected">

Selected Module :
<span id="moduleName">Dashboard</span>

</div>

 <form method="POST" action="{{ route('admin.login') }}">
        @csrf
        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert" style="color:red;">
                <i class="fas fa-exclamation-circle me-2"></i>
                {{ session('error') }}
        </div>
        @endif
<input type="hidden" id="module" value="Dashboard">

<div class="input">

<input type="text"  name="user_name" id="username" placeholder="Username" value="admin">

</div>

<div class="input">

<input type="password" name="password" id="password" placeholder="Password" value="12345678">

<i class="fa-solid fa-eye eye" id="toggle"></i>
 
</div>

<button>

<i class="fa-solid fa-right-to-bracket"></i>

Login

</button>

</form>

<div class="footer">

© 2026 Techno Park BD

</div>

</div>

</div>

<script>

const moduleUsers = {
    "Dashboard": { username: "admin", password: "12345678" },
    "Sales": { username: "sales", password: "12345678" },
    "Inventory": { username: "inventory", password: "12345678" },
    "Accounts": { username: "accounts", password: "12345678" },
    "HR & Payroll": { username: "hrm", password: "12345678" },
    "CRM": { username: "crm", password: "12345678" },
    "Purchase": { username: "purchase", password: "12345678" },
    "Production": { username: "production", password: "12345678" },
    "Website CMS": { username: "website", password: "12345678" },
    "Order Management": { username: "orders", password: "12345678" },
    "Reports": { username: "reports", password: "12345678" },
    "Settings": { username: "settings", password: "12345678" }
};

let cards = document.querySelectorAll(".card");

cards.forEach(card => {

    card.onclick = function () {

        cards.forEach(c => c.classList.remove("active"));
        this.classList.add("active");

        let module = this.dataset.module;

        document.getElementById("moduleName").innerHTML = module;
        document.getElementById("module").value = module;

        // Auto Fill Username & Password
        document.getElementById("username").value = moduleUsers[module].username;
        document.getElementById("password").value = moduleUsers[module].password;
    }

});

</script>

</body>
</html>

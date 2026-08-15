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

/* ================================
   GLOBAL
================================ */

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Poppins, sans-serif;
}

body {
    min-height: 100vh;

    background:
        radial-gradient(circle at 15% 20%, rgba(16, 185, 129, 0.16), transparent 30%),
        radial-gradient(circle at 85% 80%, rgba(245, 158, 11, 0.10), transparent 30%),
        #111827;

    display: flex;
    justify-content: center;
    align-items: center;

    padding: 12px;
}


/* ================================
   MAIN CONTAINER
================================ */

.container {
    width: 1200px;
    max-width: 100%;

    display: grid;
    grid-template-columns: 1.3fr .8fr;

    gap: 24px;
}


/* ================================
   LEFT CRM SECTION
================================ */

.left {

    position: relative;
    overflow: hidden;

    background:
        linear-gradient(
            145deg,
            rgba(31, 41, 55, 0.96),
            rgba(17, 24, 39, 0.98)
        );

    backdrop-filter: blur(20px);

    padding: 20px;

    border-radius: 24px;

    border: 1px solid rgba(255,255,255,.08);

    box-shadow:
        0 25px 60px rgba(0,0,0,.30);
}


/* Decorative Circle */

.left::before {

    content: "";

    position: absolute;

    width: 280px;
    height: 280px;

    border-radius: 50%;

    background: rgba(16,185,129,.07);

    right: -100px;
    top: -100px;
}

.left::after {

    content: "";

    position: absolute;

    width: 180px;
    height: 180px;

    border-radius: 50%;

    background: rgba(245,158,11,.05);

    left: -80px;
    bottom: -80px;
}


/* Heading */

.left h1 {

    position: relative;
    z-index: 2;

    color: #f9fafb;

    font-size: 30px;

    font-weight: 700;

    margin-bottom: 8px;
}

.left h1 i {

    color: #10b981;

    margin-right: 8px;
}


.left p {

    position: relative;
    z-index: 2;

    color: #9ca3af;

    font-size: 14px;

    margin-bottom: 30px;
}


/* ================================
   CRM MODULES
================================ */

.modules {

    position: relative;
    z-index: 2;

    display: grid;

    grid-template-columns:
        repeat(auto-fit, minmax(145px, 1fr));

    gap: 14px;
}


.card {

    background: rgba(255,255,255,.035);

    border: 1px solid rgba(255,255,255,.07);

    padding: 22px 12px;

    border-radius: 16px;

    text-align: center;

    cursor: pointer;

    transition: all .3s ease;
}


.card:hover {

    transform: translateY(-5px);

    background: rgba(16,185,129,.12);

    border-color: rgba(16,185,129,.35);

    box-shadow:
        0 12px 30px rgba(0,0,0,.25);
}


.card.active {

    background:
        linear-gradient(
            135deg,
            #059669,
            #10b981
        );

    border-color: #10b981;

    box-shadow:
        0 12px 30px rgba(16,185,129,.25);
}


.card i {

    display: block;

    font-size: 30px;

    color: #d1d5db;

    margin-bottom: 10px;

    transition: .3s;
}


.card:hover i,
.card.active i {

    color: #ffffff;

    transform: scale(1.08);
}


.card h4 {

    color: #e5e7eb;

    font-size: 14px;

    font-weight: 500;
}


.card.active h4 {

    color: #ffffff;

    font-weight: 600;
}


/* ================================
   LOGIN CARD
================================ */

.login {

    position: relative;

    background: #f9fafb;

    padding: 10px;

    border-radius: 24px;

    display: flex;

    flex-direction: column;

    justify-content: center;

    box-shadow:
        0 25px 60px rgba(0,0,0,.30);

    border: 1px solid #e5e7eb;
}


/* ================================
   LOGO
================================ */

.logo {

    text-align: center;

    margin-bottom: 5px;
}


.logo i {

    width: 85px;
    height: 72px;

    display: inline-flex;

    align-items: center;
    justify-content: center;

    border-radius: 20px;

    background:
        linear-gradient(
            135deg,
            #059669,
            #10b981
        );

    color: #ffffff;

    font-size: 32px;

    box-shadow:
        0 12px 25px rgba(16,185,129,.25);
}


.logo h2 {

    margin-top: 15px;

    color: #111827;

    font-size: 25px;

    font-weight: 700;
}


.logo p {

    margin-top: 5px;

    color: #6b7280;

    font-size: 13px;
}


/* ================================
   SELECTED MODULE
================================ */

.selected {

    background: #ecfdf5;

    padding: 11px 14px;

    border-radius: 10px;

    margin-bottom: 20px;

    font-weight: 600;

    color: #047857;

    text-align: center;

    border: 1px solid #d1fae5;
}


/* ================================
   INPUT
================================ */

.input {

    margin-bottom: 18px;

    position: relative;
}


.input input {

    width: 100%;

    padding: 14px 45px 14px 15px;

    border-radius: 11px;

    border: 1px solid #d1d5db;

    background: #ffffff;

    color: #111827;

    font-size: 14px;

    outline: none;

    transition: .25s;
}


.input input::placeholder {

    color: #9ca3af;
}


.input input:focus {

    border-color: #10b981;

    box-shadow:
        0 0 0 3px rgba(16,185,129,.10);
}


/* ================================
   PASSWORD EYE
================================ */

.eye {

    position: absolute;

    right: 15px;

    top: 16px;

    cursor: pointer;

    color: #6b7280;

    transition: .2s;
}


.eye:hover {

    color: #059669;
}


/* ================================
   LOGIN BUTTON
================================ */

button {

    width: 100%;

    padding: 14px;

    border: none;

    background:
        linear-gradient(
            135deg,
            #059669,
            #10b981
        );

    color: #ffffff;

    font-size: 15px;

    font-weight: 600;

    border-radius: 11px;

    cursor: pointer;

    transition: all .3s ease;

    box-shadow:
        0 8px 20px rgba(16,185,129,.20);
}


button:hover {

    transform: translateY(-2px);

    box-shadow:
        0 12px 25px rgba(16,185,129,.30);
}


button:active {

    transform: translateY(0);
}


/* ================================
   FOOTER
================================ */

.footer {

    margin-top: 22px;

    text-align: center;

    font-size: 12px;

    color: #9ca3af;
}


/* ================================
   RESPONSIVE
================================ */

@media(max-width: 900px) {

    body {

        padding: 20px;

    }

    .container {

        grid-template-columns: 1fr;

        max-width: 650px;

    }

    .login {

        order: -1;

    }

    .left {

        padding: 30px;

    }

}


@media(max-width: 576px) {

    body {

        padding: 12px;

    }

    .left,
    .login {

        padding: 25px 20px;

        border-radius: 18px;

    }

    .left h1 {

        font-size: 24px;

    }

    .modules {

        grid-template-columns:
            repeat(2, 1fr);

        gap: 10px;

    }

    .card {

        padding: 18px 8px;

    }

    .card i {

        font-size: 25px;

    }

    .card h4 {

        font-size: 12px;

    }

}


/* ================================
   SMOOTH ANIMATION
================================ */

@keyframes fadeUp {

    from {

        opacity: 0;

        transform: translateY(15px);

    }

    to {

        opacity: 1;

        transform: translateY(0);

    }

}


.container {

    animation: fadeUp .6s ease;

}


/* ================================
   LOGIN CREDENTIAL SWITCH
================================ */

.login {
    position: relative;
}

.credential-switch {
    position: absolute;
    top: 18px;
    right: 18px;

    display: flex;
    gap: 5px;

    padding: 4px;
    background: #f3f4f6;

    border: 1px solid #e5e7eb;
    border-radius: 10px;

    z-index: 10;
}

.credential-btn {
    width: auto;
    padding: 7px 12px;

    border: none;
    border-radius: 7px;

    background: transparent;
    color: #6b7280;

    font-size: 11px;
    font-weight: 600;

    box-shadow: none;
    transform: none;

    transition: all .25s ease;
}

.credential-btn i {
    margin-right: 4px;
}

.credential-btn:hover {
    transform: none;
    background: #ffffff;
    color: #059669;
    box-shadow: none;
}

.credential-btn.active {
    background: linear-gradient(
        135deg,
        #059669,
        #10b981
    );

    color: #ffffff;

    box-shadow: 0 4px 10px rgba(16,185,129,.20);
}

@media(max-width:576px) {
    .credential-switch {
        top: 12px;
        right: 12px;
    }

    .credential-btn {
        padding: 6px 9px;
        font-size: 10px;
    }
}

.selected {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 8px;
    padding: 7px 10px;
    margin-bottom: 20px;
    background: #ecfdf5;
    border: 1px solid #d1fae5;
    border-radius: 10px;
    color: #047857;
}

.plan-buttons {
    display: inline-flex;
    gap: 3px;
    flex-shrink: 0;
}

.plan-btn {
    width: auto !important;
    padding: 5px 9px !important;
    border: 1px solid #d1d5db !important;
    border-radius: 6px !important;
    background: #fff !important;
    color: #6b7280 !important;
    font-size: 10px !important;
    font-weight: 600 !important;
    box-shadow: none !important;
    transform: none !important;
    line-height: 1.2;
}

.plan-btn:hover,
.plan-btn.active {
    background: #059669 !important;
    border-color: #059669 !important;
    color: #fff !important;
}

.module-text {
    font-size: 11px;
    white-space: nowrap;
}
</style>

<style>
.pricing-banner {
   
    padding: 5px 8px;

    display: flex;
    align-items: center;
    gap: 2px;

    background: linear-gradient(
        135deg,
        #ecfdf5,
        #f0fdfa,
        #eff6ff
    );

    border: 1px solid #d1fae5;
    border-radius: 14px;

    box-shadow: 0 8px 25px rgba(0,0,0,.06);
}

.pricing-title {
   

    color: #047857;
    font-size: 13px;
    font-weight: 700;
}

.pricing-title i {
    font-size: 16px;
}

.pricing-items {
   
    align-items: center;
    justify-content: space-between;
    gap: 14px;
}

.price-item {
   
    align-items: center;
    gap: 7px;
    white-space: nowrap;
}

.price-label {
    color: #374151;
    font-size: 11px;
    font-weight: 600;
}

.price-item strong {
    color: #059669;
    font-size: 14px;
    font-weight: 700;
}

.price-item small {
    color: #6b7280;
    font-size: 9px;
}

.price-item.highlight {
    padding: 7px 10px;
    background: #ffffff;
    border: 1px solid #a7f3d0;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(16,185,129,.10);
}

.price-item.highlight strong {
    color: #d97706;
}

.divider {
    width: 1px;
    height: 28px;
    background: #d1d5db;
}

@media(max-width: 900px) {
    .pricing-banner {
        flex-direction: column;
        align-items: stretch;
    }

    .pricing-title {
        justify-content: center;
    }

    .pricing-items {
        flex-wrap: wrap;
        justify-content: center;
    }

    .divider {
        display: none;
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

<!-- <i class="fa-solid fa-cube"></i> -->
<!-- 
<h2>ERP Login</h2> -->
<div class="pricing-banner">
    <div class="pricing-title">
        <i class="fa-solid fa-tags"></i>
        <span>Pricing Plans</span>
    </div>

    <div class="pricing-items">
        <div class="price-item">
            <span class="price-label">Monthly</span>
            <strong>৳5,000</strong>
            <small>Advanced + Support</small>
        </div>

        <div class="divider"></div>

        <div class="price-item">
            <span class="price-label">Basic</span>
            <strong>৳10,000</strong>
            <small>One-Time</small>
        </div>

        <div class="divider"></div>

        <div class="price-item">
            <span class="price-label">Advanced</span>
            <strong>৳20,000</strong>
            <small>Our Hosting</small>
        </div>

        <div class="divider"></div>

        <div class="price-item highlight">
            <span class="price-label">Advanced + Source Code</span>
            <strong>৳120,000</strong>
            <small>One-Time</small>
        </div>
    </div>
</div>

</div>

<div class="selected">
    <span class="plan-buttons">
        <button type="button" class="plan-btn" data-module="Basic">Basic</button>
        <button type="button" class="plan-btn active" data-module="Advance">Advance</button>
    </span>

    <!-- <span class="module-text">
        Selected Module : <strong id="moduleName">Dashboard</strong>
    </span> -->

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
    "Settings": { username: "settings", password: "12345678" },
    "Advance": { username: "advance", password: "12345678" },
    "Basic": { username: "basic", password: "12345678" }
};

let cards = document.querySelectorAll(".card");
let plan_btn = document.querySelectorAll(".plan-btn");

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

        // ===============================
        // BASIC / ADVANCE PLAN BUTTON
        // ===============================

        let planBtns = document.querySelectorAll(".plan-btn");

        planBtns.forEach(btn => {

            btn.onclick = function () {

                // Remove active from both buttons
                planBtns.forEach(b => b.classList.remove("active"));

                // Add active to clicked button
                this.classList.add("active");

                // Get Basic / Advance
                let module = this.dataset.module;

                // Update selected module
                document.getElementById("moduleName").innerHTML = module;
                document.getElementById("module").value = module;

                // Auto Fill Username & Password
                document.getElementById("username").value =
                    moduleUsers[module].username;

                document.getElementById("password").value =
                    moduleUsers[module].password;
            }

        });

</script>

</body>
</html>

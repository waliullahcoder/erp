 
 @if($admin_setting->template_status=='template1')
<style>
    body{
     color: #112C32 !important;
    }
     :root {
        --bs-primary: #ffffff !important;
        --bs-secondary: #f7f7f7 !important;
    }
    .bg-light {
        background-color: #353c47 !important;
    }
    .navbar-header{
         background-color: #112C32 !important;
         border-bottom: 1px solid #3e434e !important;
    }
    .aside-fixed.aside{
         background-color: #112C32 !important;
    }
    .aside-menu-wrapper{
        border-right: 1px solid #112C32 !important;
    }
    .aside-menu .menu-nav .menu-submenu .menu-link{
         color: #9ca3af !important;
    }
    .aside-menu .menu-nav>.menu-item>.menu-heading .menu-text, .aside-menu .menu-nav>.menu-item>.menu-link .menu-text{
         color: #9ca3af !important;
    }
    .menu-item.menu-item-active>.menu-link>.menu-text, .menu-item>.menu-link.active>.menu-text, .menu-item>.menu-link:hover>.menu-text{
        color: #9ca3af !important;
    }
    .menu-item.menu-item-active>.menu-link, .menu-item>.menu-link.active, .menu-item>.menu-link:hover{
        background-color: #203d44 !important;
         color: #148b1a !important;
    }
    .menu-icon{
       color: #9ca3af !important; 
    }
    .aside-menu .menu-nav .menu-item>.menu-link.active>.menu-icon i, .aside-menu .menu-nav .menu-item.menu-item-active .menu-icon i, .aside-menu .menu-nav .menu-item:hover .menu-icon i{
        color: #f7faf7 !important;
    }
   .lang-btn.active{
        background: #e5e0e0 !important;
        color: #e5e0e0 !important;
    }
    .card{
        background-color: #f7f5f5 !important;
    }
    .custom-info-card {
        background-color: #112C32 !important;
        border:1px solid #9ca3af !important;
    }
    .metric-value{
        color: #e5e0e0 !important;
    }
    .dashboard-chart-card{
        background: #f7f5f5 !important;
        color: #0f0701 !important; 
    }
    .card-icon-box{
        color: #f7f4f2 !important; 
    }
    .dataTables_wrapper th{
        background: #112C32 !important;
        color: #f7f5f5 !important;
    }
    .dataTables_wrapper td{
        color: #0f0701 !important;
    }
    .brand{
         background-color: #353c47 !important;
         border-bottom: 3px solid #112C32 !important;
    }
    .btn{
        border:none;
    }
    .btn:hover{
        background-color: #294e57 !important;
        border:none;
    }
    .btn-primary{
        background-color: #112C32 !important;
        color: #ddd8ba !important;
    }
    .bg-primary{
        background-color: #112C32 !important;
    }
    .border-primary{
        background-color: #112C32 !important;
    }
    .list-dropdown-btn:hover, .list-dropdown-btn:focus{
        background-color: #edf2f7 !important;
        color: #112C32 !important;
        border-color:none;
    }
    .language-switch{
        background: #f8fafc !important;
    }
    .dropdown-menu{
        background: #edf2f7 !important;
    }
    .list-dropdown-btn {
        background: #edf2f7 !important;
        border: none;
        color: #2d3748 !important;
    }
    .text-secondary{
        color: #112C32 !important;
    }
    .text-secondary:hover{
        color: #edf2f7 !important;
    }
    .quick-link-btn{
        background: #475569 !important;
        color: #f8fafc !important;
    }
    .quick-link-btn:hover{
        background: #475569 !important;
        color: #f8fafc !important;
    }
    .pagination .page-item .page-link:hover, .pagination .page-item.active .page-link{
         background-color: #112C32 !important;
        color: #faf9f5 !important;
    }
    .footer{
        background: #112C32;
        border-top: none !important;
        color: #ddd8ba !important;

    }
    .footer a{
        color: #f7e57e !important;
    }
</style>
@elseif($admin_setting->template_status=='template2')
<style>
    body{
     color: #112C32 !important;
    }
    .bg-light {
        background-color: #353c47 !important;
    }
    .navbar-header{
         background-color: #112C32 !important;
         border-bottom: 1px solid #3e434e !important;
    }
    .aside-fixed.aside{
         background-color: #112C32 !important;
    }
    .aside-menu-wrapper{
        border-right: 1px solid #112C32 !important;
    }
    .aside-menu .menu-nav .menu-submenu .menu-link{
         color: #9ca3af !important;
    }
    .aside-menu .menu-nav>.menu-item>.menu-heading .menu-text, .aside-menu .menu-nav>.menu-item>.menu-link .menu-text{
         color: #9ca3af !important;
    }
    .menu-item.menu-item-active>.menu-link>.menu-text, .menu-item>.menu-link.active>.menu-text, .menu-item>.menu-link:hover>.menu-text{
        color: #9ca3af !important;
    }
    .menu-item.menu-item-active>.menu-link, .menu-item>.menu-link.active, .menu-item>.menu-link:hover{
        background-color: #203d44 !important;
         color: #148b1a !important;
    }
    .menu-icon{
       color: #9ca3af !important; 
    }
    .aside-menu .menu-nav .menu-item>.menu-link.active>.menu-icon i, .aside-menu .menu-nav .menu-item.menu-item-active .menu-icon i, .aside-menu .menu-nav .menu-item:hover .menu-icon i{
        color: #f7faf7 !important;
    }
   .lang-btn.active{
        background: #e5e0e0 !important;
        color: #e5e0e0 !important;
    }
    .card{
        background-color: #f7f5f5 !important;
    }
    .custom-info-card {
        background-color: #112C32 !important;
        border:1px solid #9ca3af !important;
    }
    .metric-value{
        color: #e5e0e0 !important;
    }
    .dashboard-chart-card{
        background: #f7f5f5 !important;
        color: #0f0701 !important; 
    }
    .card-icon-box{
        color: #f7f4f2 !important; 
    }
    .dataTables_wrapper th{
        background: #112C32 !important;
        color: #f7f5f5 !important;
    }
    .dataTables_wrapper td{
        color: #0f0701 !important;
    }
    .brand{
         background-color: #353c47 !important;
         border-bottom: 3px solid #112C32 !important;
    }
    .btn{
        border:none;
    }
    .btn:hover{
        background-color: #294e57 !important;
        border:none;
    }
    .btn-primary{
        background-color: #112C32 !important;
        color: #ddd8ba !important;
    }
    .bg-primary{
        background-color: #112C32 !important;
    }
    .border-primary{
        background-color: #112C32 !important;
    }
    .list-dropdown-btn:hover, .list-dropdown-btn:focus{
        background-color: #edf2f7 !important;
        color: #112C32 !important;
        border-color:none;
    }
    .language-switch{
        background: #f8fafc !important;
    }
    .dropdown-menu{
        background: #edf2f7 !important;
    }
    .list-dropdown-btn {
        background: #edf2f7 !important;
        border: none;
        color: #2d3748 !important;
    }
    .text-secondary{
        color: #112C32 !important;
    }
    .text-secondary:hover{
        color: #edf2f7 !important;
    }
    .quick-link-btn{
        background: #475569 !important;
        color: #f8fafc !important;
    }
    .quick-link-btn:hover{
        background: #475569 !important;
        color: #f8fafc !important;
    }
    .pagination .page-item .page-link:hover, .pagination .page-item.active .page-link{
         background-color: #112C32 !important;
        color: #faf9f5 !important;
    }
    .footer{
        background: #112C32;
        border-top: none !important;
        color: #ddd8ba !important;

    }
    .footer a{
        color: #f7e57e !important;
    }
</style>
@endif

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href=" {{ asset('assets/img/apple-icon.png') }} ">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png')  }}">
    <title>
        Material Dashboard 2 PRO by Creative Tim
    </title>


    <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro" />

    <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 5 dashboard, bootstrap 5, css3 dashboard, bootstrap 5 admin, material dashboard bootstrap 5 dashboard, frontend, responsive bootstrap 5 dashboard, material design, material dashboard bootstrap 5 dashboard">
    <meta name="description" content="Material Dashboard PRO is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">

    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim">
    <meta name="twitter:description" content="Material Dashboard PRO is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_bs5_thumbnail.jpg">

    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Material Dashboard PRO by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://demos.creative-tim.com/material-dashboard-pro/pages/dashboards/default.html" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_bs5_thumbnail.jpg" />
    <meta property="og:description" content="Material Dashboard PRO is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you." />
    <meta property="og:site_name" content="Creative Tim" />

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <link id="pagestyle" href="{{ asset('assets/css/material-dashboard.min.css?v=3.0.6') }}" rel="stylesheet" />

    <style>
        .async-hide {
            opacity: 0 !important
        }
    </style>
    <script>
        (function(a, s, y, n, c, h, i, d, e) {
            s.className += ' ' + y;
            h.start = 1 * new Date;
            h.end = i = function() {
                s.className = s.className.replace(RegExp(' ?' + y), '')
            };
            (a[n] = a[n] || []).hide = h;
            setTimeout(function() {
                i();
                h.end = null
            }, c);
            h.timeout = c;
        })(window, document.documentElement, 'async-hide', 'dataLayer', 4000, {
            'GTM-K9BGS8K': true
        });
    </script>

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-46172202-22', 'auto', {
            allowLinker: true
        });
        ga('set', 'anonymizeIp', true);
        ga('require', 'GTM-K9BGS8K');
        ga('require', 'displayfeatures');
        ga('require', 'linker');
        ga('linker:autoLink', ["2checkout.com", "avangate.com"]);
    </script>


    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
    </script>



    <script defer data-site="demos.creative-tim.com" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>
<body class>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">

            <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
                <div class="container-fluid ps-2 pe-0">
                    <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{ asset('pages/dashboards/analytics.html') }}">
                        Material Dashboard 2 PRO
                    </a>
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon mt-2">
<span class="navbar-toggler-bar bar1"></span>
<span class="navbar-toggler-bar bar2"></span>
<span class="navbar-toggler-bar bar3"></span>
</span>
                    </button>
                    <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
                        <ul class="navbar-nav navbar-nav-hover mx-auto">
                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pages
                                    <img src=" {{ asset('assets/img/down-arrow-dark.svg')  }}" alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
                                    <img src="{{ asset('assets/img/down-arrow-dark.svg') }}" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
                                </a>
                                <div class="dropdown-menu dropdown-menu-animation dropdown-xl p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
                                    <div class="row d-none d-lg-block">
                                        <div class="col-12 px-4 py-2">
                                            <div class="row">
                                                <div class="col-4 position-relative">
                                                    <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                                        <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                                                        Dashboards
                                                    </div>
                                                    <a href="{{ asset('pages/dashboards/analytics.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">Analytics</span>
                                                    </a>
                                                    <a href="{{ asset('pages/dashboards/discover.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">Discover</span>
                                                    </a>
                                                    <a href="{{ asset('pages/dashboards/sales.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">Sales</span>
                                                    </a>
                                                    <a href="{{ asset('pages/dashboards/automotive.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">Automotive</span>
                                                    </a>
                                                    <a href="{{ asset('pages/dashboards/smart-home.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">Smart Home</span>
                                                    </a>
                                                    <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                                        <i class="material-icons opacity-6 me-2 text-md">people</i>
                                                        Users
                                                    </div>
                                                    <a href="{{ asset('pages/pages/users/reports.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">Reports</span>
                                                    </a>
                                                    <a href="{{ asset('pages/pages/users/new-user.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">New User</span>
                                                    </a>
                                                    <hr class="vertical dark">
                                                </div>
                                                <div class="col-4 position-relative">
                                                    <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                                        <i class="material-icons opacity-6 me-2 text-md">badge</i>
                                                        Profile
                                                    </div>
                                                    <a href="{{ asset('pages/pages/profile/overview.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">Overview</span>
                                                    </a>
                                                    <a href="{{ asset('pages/pages/profile/messages.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">Messages</span>
                                                    </a>
                                                    <a href="{{ asset('pages/pages/profile/projects.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">Projects</span>
                                                    </a>
                                                    <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                                        <i class="material-icons opacity-6 me-2 text-md">precision_manufacturing</i>
                                                        Projects
                                                    </div>
                                                    <a href="{{ asset('pages/pages/projects/general.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">General</span>
                                                    </a>
                                                    <a href="{{ asset('pages/pages/projects/timeline.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">Timeline</span>
                                                    </a>
                                                    <a href="{{ asset('pages/pages/vr/vr-default.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">Virtual Reality</span>
                                                    </a>
                                                    <a href="{{ asset('pages/pages/projects/new-project.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">New Project</span>
                                                    </a>
                                                    <hr class="vertical dark">
                                                </div>
                                                <div class="col-4">
                                                    <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                                        <i class="material-icons opacity-6 me-2 text-md">account_balance</i>
                                                        Account
                                                    </div>
                                                    <a href="{{ asset('pages/pages/account/settings.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">Settings</span>
                                                    </a>
                                                    <a href="{{ asset('pages/pages/account/billing.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">Billing</span>
                                                    </a>
                                                    <a href="{{ asset('pages/pages/account/invoice.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">Invoice</span>
                                                    </a>
                                                    <a href="{{ asset('pages/pages/account/security.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">Security</span>
                                                    </a>
                                                    <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                                        <i class="material-icons opacity-6 me-2 text-md">queue_play_next</i>
                                                        Extra
                                                    </div>
                                                    <a href="{{ asset('pages/pages/pricing-page.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">Pricing Page</span>
                                                    </a>
                                                    <a href="{{ asset('pages/pages/rtl-page.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">RTL Page</span>
                                                    </a>
                                                    <a href="{{ asset('pages/pages/widgets.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">Widgets</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-lg-none">
                                        <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                            <i class="material-icons text-dark opacity-6 me-2 text-md">dashboard</i>
                                            Dashboards
                                        </div>
                                        <a href="{{ asset('pages/dashboards/analytics.html') }}" class="dropdown-item border-radius-md">
                                            Analytics
                                        </a>
                                        <a href="{{ asset('pages/dashboards/discover.html') }}" class="dropdown-item border-radius-md">
                                            Discover
                                        </a>
                                        <a href="{{ asset('pages/dashboards/sales.html') }}" class="dropdown-item border-radius-md">
                                            Sales
                                        </a>
                                        <a href="{{ asset('pages/dashboards/automotive.html') }}" class="dropdown-item border-radius-md">
                                            Automotive
                                        </a>
                                        <a href="{{ asset('pages/dashboards/smart-home.html') }}" class="dropdown-item border-radius-md">
                                            Smart Home
                                        </a>
                                        <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                            <i class="material-icons text-dark opacity-6 me-2 text-md">people</i>
                                            Users
                                        </div>
                                        <a href="{{ asset('pages/pages/users/reports.html') }}" class="dropdown-item border-radius-md">
                                            Reports
                                        </a>
                                        <a href="{{ asset('pages/pages/users/new-user.html') }}" class="dropdown-item border-radius-md">
                                            New User
                                        </a>
                                        <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                            <i class="material-icons text-dark opacity-6 me-2 text-md">badge</i>
                                            Profile
                                        </div>
                                        <a href="{{ asset('pages/pages/profile/overview.html') }}" class="dropdown-item border-radius-md">
                                            Overview
                                        </a>
                                        <a href="{{ asset('pages/pages/profile/projects.html') }}" class="dropdown-item border-radius-md">
                                            Projects
                                        </a>
                                        <a href="{{ asset('pages/pages/profile/messages.html') }}" class="dropdown-item border-radius-md">
                                            Messages
                                        </a>
                                        <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                            <i class="material-icons text-dark opacity-6 me-2 text-md">precision_manufacturing</i>
                                            Projects
                                        </div>
                                        <a href="{{ asset('pages/pages/projects/general.html') }}" class="dropdown-item border-radius-md">
                                            General
                                        </a>
                                        <a href="{{ asset('pages/pages/projects/timeline.html') }}" class="dropdown-item border-radius-md">
                                            Timeline
                                        </a>
                                        <a href="{{ asset('pages/pages/vr/vr-default.html') }}" class="dropdown-item border-radius-md">
                                            Virtual Reality
                                        </a>
                                        <a href="{{ asset('pages/pages/projects/new-project.html') }}" class="dropdown-item border-radius-md">
                                            New Project
                                        </a>
                                        <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                            <i class="material-icons text-dark opacity-6 me-2 text-md">account_balance</i>
                                            Account
                                        </div>
                                        <a href="{{ asset('pages/pages/account/settings.html') }}" class="dropdown-item border-radius-md">
                                            Settings
                                        </a>
                                        <a href="{{ asset('pages/pages/account/billing.html') }}" class="dropdown-item border-radius-md">
                                            Billing
                                        </a>
                                        <a href="{{ asset('pages/pages/account/invoice.html') }}" class="dropdown-item border-radius-md">
                                            Invoice
                                        </a>
                                        <a href="{{ asset('pages/pages/account/security.html') }}" class="dropdown-item border-radius-md">
                                            Security
                                        </a>
                                        <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                            <i class="material-icons text-dark opacity-6 me-2 text-md">queue_play_next</i>
                                            Extra
                                        </div>
                                        <a href="{{ asset('pages/pages/pricing-page.html') }}" class="dropdown-item border-radius-md">
                                            Pricing Page
                                        </a>
                                        <a href="{{ asset('pages/pages/rtl-page.html') }}" class="dropdown-item border-radius-md">
                                            RTL Page
                                        </a>
                                        <a href="{{ asset('pages/pages/widgets.html') }}" class="dropdown-item border-radius-md">
                                            Widgets
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuAccount" data-bs-toggle="dropdown" aria-expanded="false">
                                    Authentication
                                    <img src=" {{ asset('assets/img/down-arrow-dark.svg') }} " alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
                                    <img src="{{ asset('assets/img/down-arrow-dark.svg') }}" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
                                </a>
                                <div class="dropdown-menu dropdown-menu-animation dropdown-md border-radius-xl p-3 mt-0 mt-lg-3" aria-labelledby="dropdownMenuAccount">
                                    <div class="d-none d-lg-flex">
                                        <div class="col-12 ps-0 d-flex justify-content-center flex-column">
                                            <ul class="list-group">
                                                <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                    <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center mb-1 text-dark" id="dropdownSignIn">
                                                        <i class="material-icons opacity-6 me-2 text-md">login</i>
                                                        <span>Sign In</span>
                                                        <img src="{{ asset('assets/img/down-arrow.svg') }}" alt="down-arrow" class="arrow ms-auto">
                                                    </a>
                                                    <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownSignIn">
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1" href="{{ asset('pages/authentication/signin/basic.html') }}">
                                                            <span>Basic</span>
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1" href="{{ asset('pages/authentication/signin/cover.html') }}">
                                                            <span>Cover</span>
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md" href="{{ asset('pages/authentication/signin/illustration.html') }}">
                                                            <span>Illustration</span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                    <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center mb-1 text-dark" id="dropdownSignUp">
                                                        <i class="material-icons opacity-6 me-2 text-md">assignment</i>
                                                        <span>Sign Up</span>
                                                        <img src="{{ asset('assets/img/down-arrow.svg') }}" alt="down-arrow" class="arrow ms-auto">
                                                    </a>
                                                    <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownSignUp">
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1" href="{{ asset('pages/authentication/signup/basic.html') }}">
                                                            <span>Basic</span>
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1" href="{{ asset('pages/authentication/signup/cover.html') }}">
                                                            <span>Cover</span>
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md" href="{{ asset('pages/authentication/signup/illustration.html') }}">
                                                            <span>Illustration</span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                    <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center mb-1 text-dark" id="dropdownPasswordReset">
                                                        <i class="material-icons opacity-6 me-2 text-md">restart_alt</i>
                                                        <span>Reset Password</span>
                                                        <img src="{{ asset('assets/img/down-arrow.svg') }}" alt="down-arrow" class="arrow ms-auto">
                                                    </a>
                                                    <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownPasswordReset">
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1" href="{{ asset('pages/authentication/reset/basic.html') }}">
                                                            <span>Basic</span>
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1" href="{{ asset('pages/authentication/reset/cover.html') }}">
                                                            <span>Cover</span>
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md" href="{{ asset('pages/authentication/reset/illustration.html') }}">
                                                            <span>Illustration</span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                    <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center mb-1 text-dark" id="dropdownLock">
                                                        <i class="material-icons opacity-6 me-2 text-md">lock</i>
                                                        <span>Lock</span>
                                                        <img src="{{ asset('assets/img/down-arrow.svg') }}" alt="down-arrow" class="arrow ms-auto">
                                                    </a>
                                                    <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownLock">
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1" href="{{ asset('pages/authentication/lock/basic.html') }}">
                                                            <span>Basic</span>
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1" href="{{ asset('pages/authentication/lock/cover.html') }}">
                                                            <span>Cover</span>
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md" href="{{ asset('pages/authentication/lock/illustration.html') }}">
                                                            <span>Illustration</span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                    <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center mb-1 text-dark" id="dropdown2fa">
                                                        <i class="material-icons opacity-6 me-2 text-md">admin_panel_settings</i>
                                                        <span>2-Step Verification</span>
                                                        <img src="{{ asset('assets/img/down-arrow.svg') }}" alt="down-arrow" class="arrow ms-auto">
                                                    </a>
                                                    <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdown2fa">
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1" href="{{ asset('pages/authentication/verification/basic.html') }}">
                                                            <span>Basic</span>
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1" href="{{ asset('pages/authentication/verification/cover.html') }}">
                                                            <span>Cover</span>
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md" href="{{ asset('pages/authentication/verification/illustration.html') }}">
                                                            <span>Illustration</span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                    <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center mb-1 text-dark" id="dropdownError">
                                                        <i class="material-icons opacity-6 me-2 text-md">warning</i>
                                                        <span>Error</span>
                                                        <img src="{{ asset('assets/img/down-arrow.svg') }}" alt="down-arrow" class="arrow ms-auto">
                                                    </a>
                                                    <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownError">
                                                        <a class="dropdown-item ps-3 border-radius-md mb-1" href="{{ asset('pages/authentication/error/404.html') }}">
                                                            <span>404</span>
                                                        </a>
                                                        <a class="dropdown-item ps-3 border-radius-md" href="{{ asset('pages/authentication/error/500.html') }}">
                                                            <span>500</span>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row d-lg-none">
                                        <div class="col-12 d-flex justify-content-center flex-column">
                                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                                <i class="material-icons opacity-6 me-2 text-md">login</i>
                                                Sign In
                                            </h6>
                                            <a href="{{ asset('pages/authentication/signin/basic.html') }}" class="dropdown-item border-radius-md ps-4">
                                                Basic
                                            </a>
                                            <a href="{{ asset('pages/authentication/signin/cover.html') }}" class="dropdown-item border-radius-md ps-4">
                                                Cover
                                            </a>
                                            <a href="{{ asset('pages/authentication/signin/illustration.html') }}" class="dropdown-item border-radius-md ps-4">
                                                Illustration
                                            </a>
                                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                                <i class="material-icons opacity-6 me-2 text-md">assignment</i>
                                                Sign Up
                                            </h6>
                                            <a href="{{ asset('pages/authentication/signup/basic.html') }}" class="dropdown-item border-radius-md ps-4">
                                                Basic
                                            </a>
                                            <a href="{{ asset('pages/authentication/signup/cover.html') }}" class="dropdown-item border-radius-md ps-4">
                                                Cover
                                            </a>
                                            <a href="{{ asset('pages/authentication/signup/illustration.html') }}" class="dropdown-item border-radius-md ps-4">
                                                Illustration
                                            </a>
                                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                                <i class="material-icons opacity-6 me-2 text-md">restart_alt</i>
                                                Reset Password
                                            </h6>
                                            <a href="{{ asset('pages/authentication/reset/basic.html') }}" class="dropdown-item border-radius-md ps-4">
                                                Basic
                                            </a>
                                            <a href="{{ asset('pages/authentication/reset/cover.html') }}" class="dropdown-item border-radius-md ps-4">
                                                Cover
                                            </a>
                                            <a href="{{ asset('pages/authentication/reset/illustration.html') }}" class="dropdown-item border-radius-md ps-4">
                                                Illustation
                                            </a>
                                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                                <i class="material-icons opacity-6 me-2 text-md">lock</i>
                                                Lock
                                            </h6>
                                            <a href="{{ asset('pages/authentication/lock/basic.html') }}" class="dropdown-item border-radius-md ps-4">
                                                Basic
                                            </a>
                                            <a href="{{ asset('pages/authentication/lock/cover.html') }}" class="dropdown-item border-radius-md ps-4">
                                                Cover
                                            </a>
                                            <a href="{{ asset('pages/authentication/lock/illustration.html') }}" class="dropdown-item border-radius-md ps-4">
                                                Illustration
                                            </a>
                                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                                <i class="material-icons opacity-6 me-2 text-md">admin_panel_settings</i>
                                                2-Step Verification
                                            </h6>
                                            <a href="{{ asset('pages/authentication/verification/basic.html') }}" class="dropdown-item border-radius-md ps-4">
                                                Basic
                                            </a>
                                            <a href="{{ asset('pages/authentication/verification/cover.html') }}" class="dropdown-item border-radius-md ps-4">
                                                Cover
                                            </a>
                                            <a href="{{ asset('pages/authentication/verification/illustration.html') }}" class="dropdown-item border-radius-md ps-4">
                                                Illustration
                                            </a>
                                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                                <i class="material-icons opacity-6 me-2 text-md">warning</i>
                                                Error
                                            </h6>
                                            <a href="{{ asset('pages/authentication/error/404.html') }}" class="dropdown-item border-radius-md ps-4">
                                                404
                                            </a>
                                            <a href="{{ asset('pages/authentication/error/500.html') }}" class="dropdown-item border-radius-md ps-4">
                                                500
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                                    Applications
                                    <img src=" {{ asset('assets/img/down-arrow-dark.svg') }}" alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
                                    <img src="{{ asset('assets/img/down-arrow-dark.svg') }}" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
                                </a>
                                <div class="dropdown-menu dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">
                                    <div class="d-none d-lg-block">
                                        <ul class="list-group">
                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                <a class="dropdown-item border-radius-md mb-2" href=" {{ asset('pages/applications/kanban.html') }}">
                                                    <div class="d-flex align-items-center text-dark">
                                                        <i class="material-icons opacity-6 me-2 text-md">widgets</i>
                                                        Kanban
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                <a class="dropdown-item border-radius-md mb-2" href="{{ asset('pages/applications/wizard.html') }}">
                                                    <div class="d-flex align-items-center text-dark">
                                                        <i class="material-icons opacity-6 me-2 text-md">import_contacts</i>
                                                        Wizard
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                <a class="dropdown-item border-radius-md mb-2" href="{{ asset('pages/applications/datatables.html')}}">
                                                    <div class="d-flex align-items-center text-dark">
                                                        <i class="material-icons opacity-6 me-2 text-md">backup_table</i>
                                                        DataTables
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                <a class="dropdown-item border-radius-md" href="{{ asset('pages/applications/calendar.html')}}">
                                                    <div class="d-flex align-items-center text-dark">
                                                        <i class="material-icons opacity-6 me-2 text-md">event</i>
                                                        Calendar
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="row d-lg-none">
                                        <div class="col-md-12">
                                            <a class="py-2 ps-3 border-radius-md" href="{{ asset('pages/applications/kanban.html')}}">
                                                <div class="d-flex align-items-center text-dark">
                                                    <i class="material-icons opacity-6 me-2 text-md">widgets</i>
                                                    Kanban
                                                </div>
                                            </a>
                                            <a class="py-2 ps-3 border-radius-md" href="{{ asset('pages/applications/wizard.html')}}">
                                                <div class="d-flex align-items-center text-dark">
                                                    <i class="material-icons opacity-6 me-2 text-md">import_contacts</i>
                                                    Wizard
                                                </div>
                                            </a>
                                            <a class="py-2 ps-3 border-radius-md" href="{{ asset('pages/applications/datatables.html')}}">
                                                <div class="d-flex align-items-center text-dark">
                                                    <i class="material-icons opacity-6 me-2 text-md">backup_table</i>
                                                    DataTables
                                                </div>
                                            </a>
                                            <a class="py-2 ps-3 border-radius-md" href="{{ asset('pages/applications/calendar.html')}}">
                                                <div class="d-flex align-items-center text-dark">
                                                    <i class="material-icons opacity-6 me-2 text-md">event</i>
                                                    Calendar
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuEcommerce" data-bs-toggle="dropdown" aria-expanded="false">
                                    Ecommerce
                                    <img src=" {{ asset('assets/img/down-arrow-dark.svg')}}  " alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
                                    <img src="{{ asset('assets/img/down-arrow-dark.svg')}}" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
                                </a>
                                <div class="dropdown-menu dropdown-menu-animation dropdown-lg p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuEcommerce">
                                    <div class="row d-none d-lg-block">
                                        <div class="col-12 px-4 py-2">
                                            <div class="row">
                                                <div class="col-6 position-relative">
                                                    <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                                        <i class="material-icons opacity-6 me-2 text-md">shopping_cart</i>
                                                        Orders
                                                    </div>
                                                    <a href="{{ asset('img/photo.jpg')}}pages/ecommerce/orders/list.html" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">Order List</span>
                                                    </a>
                                                    <a href="{{ asset('pages/ecommerce/orders/details.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">Order Details</span>
                                                    </a>
                                                    <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                                        <i class="material-icons opacity-6 me-2 text-md">store</i>
                                                        General
                                                    </div>
                                                    <a href="{{ asset('pages/ecommerce/overview.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">Overview</span>
                                                    </a>
                                                    <a href="{{ asset('pages/ecommerce/referral.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">Referral</span>
                                                    </a>
                                                    <hr class="vertical dark">
                                                </div>
                                                <div class="col-6 position-relative">
                                                    <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                                        <i class="material-icons opacity-6 me-2 text-md">memory</i>
                                                        Products
                                                    </div>
                                                    <a href="{{ asset('pages/ecommerce/products/new-product.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">New Product</span>
                                                    <a href="{{ asset('pages/ecommerce/products/edit-product.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">Edit Product</span>
                                                    </a>
                                                    <a href="{{ asset('pages/ecommerce/products/product-page.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">Product Page</span>
                                                    </a>
                                                    <a href="{{ asset('pages/ecommerce/products/products-list.html') }}" class="dropdown-item border-radius-md">
                                                        <span class="ps-2">Products List</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-lg-none">
                                        <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                            <i class="material-icons opacity-6 me-2 text-md">shopping_cart</i>
                                            Orders
                                        </div>
                                        <a href="{{ asset('pages/ecommerce/orders/list.html') }}" class="dropdown-item border-radius-md">
                                            Order List
                                        </a>
                                        <a href="{{ asset('pages/ecommerce/orders/details.html') }}" class="dropdown-item border-radius-md">
                                            Order Details
                                        </a>
                                        <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                            <i class="material-icons opacity-6 me-2 text-md">store</i>
                                            General
                                        </div>
                                        <a href="{{ asset('pages/ecommerce/overview.html') }}" class="dropdown-item border-radius-md">
                                            Overview
                                        </a>
                                        <a href="{{ asset('pages/ecommerce/referral.html') }}" class="dropdown-item border-radius-md">
                                            Referral
                                        </a>
                                        <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                            <i class="material-icons opacity-6 me-2 text-md">memory</i>
                                            Products
                                        </div>
                                        <a href="{{ asset('pages/ecommerce/products/new-product.html') }}" class="dropdown-item border-radius-md">
                                            New Product
                                        </a>
                                        <a href="{{ asset('pages/ecommerce/products/edit-product.html') }}" class="dropdown-item border-radius-md">
                                            Edit Product
                                        </a>
                                        <a href="{{ asset('pages/ecommerce/products/product-page.html') }}" class="dropdown-item border-radius-md">
                                            Product Page
                                        </a>
                                        <a href="{{ asset('pages/ecommerce/products/products-list.html') }}" class="dropdown-item border-radius-md">
                                            Products List
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                                    Docs
                                    <img src=" {{ asset('assets/img/down-arrow-dark.svg')}} " alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
                                    <img src="{{ asset('assets/img/down-arrow-dark.svg')}}" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
                                </a>
                                <div class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">
                                    <div class="d-none d-lg-block">
                                        <ul class="list-group">
                                            <li class="nav-item list-group-item border-0 p-0">
                                                <a class="dropdown-item border-radius-md text-dark" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard">
                                                    <div class="d-flex align-items-center">
                                                        <i class="material-icons opacity-6 me-2 text-md">article</i>
                                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0 mb-0">Getting Started</h6>
                                                    </div>
                                                    <span class="text-sm opacity-8 ps-4">All about overview, quick start, license and contents</span>
                                                </a>
                                            </li>
                                            <li class="nav-item list-group-item border-0 p-0">
                                                <a class="dropdown-item border-radius-md text-dark" href="https://www.creative-tim.com/learning-lab/bootstrap/colors/material-dashboard">
                                                    <div class="d-flex align-items-center">
                                                        <i class="material-icons opacity-6 me-2 text-md">grading</i>
                                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0 mb-0">Foundation</h6>
                                                    </div>
                                                    <span class="text-sm opacity-8 ps-4">See our colors, icons and typography</span>
                                                </a>
                                            </li>
                                            <li class="nav-item list-group-item border-0 p-0">
                                                <a class="dropdown-item border-radius-md text-dark" href="https://www.creative-tim.com/learning-lab/bootstrap/alerts/material-dashboard">
                                                    <div class="d-flex align-items-center">
                                                        <i class="material-icons opacity-6 me-2 text-md">apps</i>
                                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0 mb-0">Components</h6>
                                                    </div>
                                                    <span class="text-sm opacity-8 ps-4">Explore our collection of fully designed components</span>
                                                </a>
                                            </li>
                                            <li class="nav-item list-group-item border-0 p-0">
                                                <a class="dropdown-item border-radius-md text-dark" href="https://www.creative-tim.com/learning-lab/bootstrap/datepicker/material-dashboard">
                                                    <div class="d-flex align-items-center">
                                                        <i class="material-icons opacity-6 me-2 text-md">extension</i>
                                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0 mb-0">Plugins</h6>
                                                    </div>
                                                    <span class="text-sm opacity-8 ps-4">Check how you can integrate our plugins</span>
                                                </a>
                                            </li>
                                            <li class="nav-item list-group-item border-0 p-0">
                                                <a class="dropdown-item border-radius-md text-dark" href="https://www.creative-tim.com/learning-lab/bootstrap/utilities/material-dashboard">
                                                    <div class="d-flex align-items-center">
                                                        <i class="material-icons opacity-6 me-2 text-md">swipe</i>
                                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0 mb-0">Utility Classes</h6>
                                                    </div>
                                                    <span class="text-sm opacity-8 ps-4">For those who want flexibility, use our utility classes</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="row d-lg-none">
                                        <div class="col-md-12 g-0">
                                            <a class="dropdown-item border-radius-md text-dark" href="{{ asset('pages/about-us.html') }}">
                                                <div class="d-flex align-items-center">
                                                    <i class="material-icons opacity-6 me-2 text-md">article</i>
                                                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">Getting Started</h6>
                                                </div>
                                                <span class="text-sm ps-4">All about overview, quick start, license and contents</span>
                                            </a>
                                            <a class="dropdown-item border-radius-md text-dark" href="{{ asset('pages/about-us.html') }}">
                                                <div class="d-flex align-items-center">
                                                    <i class="material-icons opacity-6 me-2 text-md">grading</i>
                                                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">Foundation</h6>
                                                </div>
                                                <span class="text-sm ps-4">See our colors, icons and typography</span>
                                            </a>
                                            <a class="dropdown-item border-radius-md text-dark" href="{{ asset('pages/about-us.html') }}">
                                                <div class="d-flex align-items-center">
                                                    <i class="material-icons opacity-6 me-2 text-md">apps</i>
                                                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">Components</h6>
                                                </div>
                                                <span class="text-sm ps-4">Explore our collection of fully designed components</span>
                                            </a>
                                            <a class="dropdown-item border-radius-md text-dark" href="{{ asset('pages/about-us.html') }}">
                                                <div class="d-flex align-items-center">
                                                    <i class="material-icons opacity-6 me-2 text-md">extension</i>
                                                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">Plugins</h6>
                                                    <span class="text-sm ps-4">Check how you can integrate our plugins</span>
                                                </div>
                                            </a>
                                            <a class="dropdown-item border-radius-md text-dark" href="{{ asset('pages/about-us.html') }}">
                                                <div class="d-flex align-items-center">
                                                    <i class="material-icons opacity-6 me-2 text-md">swipe</i>
                                                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">Utility Classes</h6>
                                                    <span class="text-sm ps-4">All about overview, quick start, license and contents</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav d-lg-block d-none">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/product/material-dashboard-pro" class="btn btn-sm  bg-gradient-primary  mb-0" onclick="smoothToPricing('pricing-soft-ui')">Buy Now</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </div>
</div>
<main class="main-content  mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                        <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('{{ asset('assets/img/illustrations/illustration-signin.jpg')}}'); background-size: cover;"></div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                        <div class="card card-plain">
                            <div class="card-header text-center">
                                <h4 class="font-weight-bolder">Sign In</h4>
                                <p class="mb-0">Enter your email and password to sign in</p>
                            </div>
                            <div class="card-body mt-2">
                                <form role="form">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control">
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <div class="form-check form-switch d-flex align-items-center mb-3">
                                        <input class="form-check-input" type="checkbox" id="rememberMe">
                                        <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                                    </div>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-sm mx-auto">
                                    Don't have an account?
                                    <a href="javascript:;" class="text-primary text-gradient font-weight-bold">Sign up</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="{{ asset('assets/js/core/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>

<script src="{{ asset('assets/js/plugins/dragula/dragula.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/jkanban/jkanban.js')}}"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="{{ asset('assets/js/material-dashboard.min.js?v=3.0.6')}}"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c777fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7d608d2968864828","version":"2023.4.0","r":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}' crossorigin="anonymous"></script>
</body>
</html>

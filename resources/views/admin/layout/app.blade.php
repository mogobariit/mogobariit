<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from spark.bootlab.io/dashboard-default.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Feb 2022 04:59:16 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Modern, flexible and responsive Bootstrap 5 admin &amp; dashboard template">
    <meta name="author" content="Bootlab">

    <title>Mogobari admin template</title>

    <!-- PICK ONE OF THE STYLES BELOW -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="{{asset('admin/css/modern.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <!-- <link href="css/classic.css" rel="stylesheet"> -->
    <!-- <link href="css/dark.css" rel="stylesheet"> -->
    <!-- <link href="css/light.css" rel="stylesheet"> -->

    <!-- BEGIN SETTINGS -->
    <!-- You can remove this after picking a style -->
    <style>
    body {
        opacity: 0;
    }
    </style>
    <script src="{{asset('admin/js/settings.js')}}"></script>
    <!-- END SETTINGS -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120946860-7"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-120946860-7');
    </script>
</head>

<body>

    <div class="wrapper">
        <nav id="sidebar" class="sidebar">
            <a class="sidebar-brand" href="">
                <svg>
                    <use xlink:href="#ion-ios-pulse-strong"></use>
                </svg>
                Spark
            </a>
            <div class="sidebar-content">
                <div class="sidebar-user">
                    <img src="{{asset('admin')}}/img/avatars/avatar.jpg" class="img-fluid rounded-circle mb-2"
                        alt="Linda Miller" />
                    <div class="fw-bold">Linda Miller</div>
                    <small>Front-end Developer</small>
                </div>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Main
                    </li>
                    <li class="sidebar-item active">
                        <a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link">
                            <i class="align-middle me-2 fas fa-fw fa-home"></i> <span
                                class="align-middle">Dashboards</span>
                        </a>
                        <ul id="dashboards" class="sidebar-dropdown list-unstyled collapse show"
                            data-bs-parent="#sidebar">
                            <li class="sidebar-item active"><a
                                    class="sidebar-link <?= request()->routeIs('categories.index') ? 'active' : "" ?>"
                                    href="{{route('categories.index')}}">Categories</a></li>
                            <li class="sidebar-item"><a class="sidebar-link"
                                    href="dashboard-analytics.html">Analytics</a></li>
                            <li class="sidebar-item"><a class="sidebar-link"
                                    href="dashboard-e-commerce.html">E-commerce</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#pages" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle me-2 fas fa-fw fa-file"></i> <span class="align-middle">Pages</span>
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="pages-settings.html">Settings</a>
                            </li>
                            <li class="sidebar-item"><a class="sidebar-link" href="pages-clients.html">Clients <span
                                        class="sidebar-badge badge rounded-pill bg-primary">New</span></a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="pages-invoice.html">Invoice</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="pages-pricing.html">Pricing</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="pages-tasks.html">Tasks</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="pages-chat.html">Chat <span
                                        class="sidebar-badge badge rounded-pill bg-primary">New</span></a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="pages-blank.html">Blank Page</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#auth" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle me-2 fas fa-fw fa-sign-in-alt"></i> <span
                                class="align-middle">Website SetUp</span>
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a
                                    class="sidebar-link @if(request()->routeIs('logo.index') OR request()->is('/logo')) active @endif"
                                    href="{{ route('logo.index') }}">
                                    Website Logo</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="{{ route('slider.index') }} "> Slider
                                </a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="{{ route('topbar.index') }}">
                                    Topbar </a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href=" {{route('services.index')}} ">
                                    Services</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href=" {{route('course.index')}} ">
                                    Course</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href=" {{route('partner.index')}} ">
                                    Clinte Image</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="pages-500.html">500
                                    Page</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-header">
                        Elements
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#ui" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle me-2 fas fa-fw fa-flask"></i> <span class="align-middle">User
                                Interface</span>
                        </a>
                        <ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="ui-alerts.html">Alerts</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="ui-buttons.html">Buttons</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="ui-cards.html">Cards</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="ui-general.html">General</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="ui-grid.html">Grid</a>
                            </li>
                            <li class="sidebar-item"><a class="sidebar-link" href="ui-modals.html">Modals</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="ui-offcanvas.html">Offcanvas</a></li>
                            <li class="sidebar-item"><a class="sidebar-link"
                                    href="ui-placeholders.html">Placeholders</a></li>
                            <li class="sidebar-item"><a class="sidebar-link"
                                    href="ui-notifications.html">Notifications</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="ui-tabs.html">Tabs</a>
                            </li>
                            <li class="sidebar-item"><a class="sidebar-link" href="ui-typography.html">Typography</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#charts" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle me-2 fas fa-fw fa-chart-pie"></i> <span
                                class="align-middle">Charts</span>
                            <span class="sidebar-badge badge rounded-pill bg-primary">New</span>
                        </a>
                        <ul id="charts" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="charts-chartjs.html">Chart.js</a>
                            </li>
                            <li class="sidebar-item"><a class="sidebar-link"
                                    href="charts-apexcharts.html">ApexCharts</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a data-bs-target="#forms" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle me-2 fas fa-fw fa-check-square"></i> <span
                                class="align-middle">Forms</span>
                        </a>
                        <ul id="forms" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="forms-layouts.html">Layouts</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="forms-basic-elements.html">Basic
                                    Elements</a></li>
                            <li class="sidebar-item"><a class="sidebar-link"
                                    href="forms-advanced-elements.html">Advanced Elements</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="forms-floating-labels.html">Floating
                                    Labels</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="forms-input-groups.html">Input
                                    Groups</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="forms-editors.html">Editors</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="forms-validation.html">Validation</a>
                            </li>
                            <li class="sidebar-item"><a class="sidebar-link" href="forms-wizard.html">Wizard</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="tables-bootstrap.html">
                            <i class="align-middle me-2 fas fa-fw fa-list"></i> <span class="align-middle">Tables</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#datatables" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle me-2 fas fa-fw fa-table"></i> <span
                                class="align-middle">DataTables</span>
                        </a>
                        <ul id="datatables" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link"
                                    href="tables-datatables-responsive.html">Responsive Table</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="tables-datatables-buttons.html">Table
                                    with Buttons</a></li>
                            <li class="sidebar-item"><a class="sidebar-link"
                                    href="tables-datatables-column-search.html">Column Search</a></li>
                            <li class="sidebar-item"><a class="sidebar-link"
                                    href="tables-datatables-fixed-header.html">Fixed Header</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="tables-datatables-multi.html">Multi
                                    Selection</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="tables-datatables-ajax.html">Ajax
                                    Sourced Data</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#icons" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle me-2 fas fa-fw fa-heart"></i> <span class="align-middle">Icons</span>
                        </a>
                        <ul id="icons" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="icons-feather.html">Feather</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="icons-ion.html">Ion
                                    Icons</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="icons-font-awesome.html">Font
                                    Awesome</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="calendar.html">
                            <i class="align-middle me-2 far fa-fw fa-calendar-alt"></i> <span
                                class="align-middle">Calendar</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#maps" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle me-2 fas fa-fw fa-map-marker-alt"></i> <span
                                class="align-middle">Maps</span>
                        </a>
                        <ul id="maps" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="maps-google.html">Google Maps</a>
                            </li>
                            <li class="sidebar-item"><a class="sidebar-link" href="maps-vector.html">Vector Maps</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-header">
                        Extras
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#documentation" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle me-2 fas fa-fw fa-book"></i> <span
                                class="align-middle">Documentation</span>
                        </a>
                        <ul id="documentation" class="sidebar-dropdown list-unstyled collapse "
                            data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="docs-getting-started.html">Getting
                                    Started</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="docs-plugins.html">Plugins</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="docs-changelog.html">Changelog</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="main">
            <nav class="navbar navbar-expand navbar-theme">
                <a class="sidebar-toggle d-flex me-2">
                    <i class="hamburger align-self-center"></i>
                </a>

                <form class="d-none d-sm-inline-block">
                    <input class="form-control form-control-lite" type="text" placeholder="Search projects...">
                </form>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                    <!-- <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle position-relative" href="#" id="messagesDropdown"
                                data-bs-toggle="dropdown">
                                <i class="align-middle fas fa-envelope-open"></i>
                            </a>

                        </li>
                        <li class="nav-item dropdown ms-lg-2">
                            <a class="nav-link dropdown-toggle position-relative" href="#" id="alertsDropdown"
                                data-bs-toggle="dropdown">
                                <i class="align-middle fas fa-bell"></i>
                                <span class="indicator"></span>
                            </a>

                        </li>
                        <li class="nav-item dropdown ms-lg-2">
                            <a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown"
                                data-bs-toggle="dropdown">
                                <i class="align-middle fas fa-cog"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-user"></i>
                                    View Profile</a>
                                <a class="dropdown-item" href="#"><i
                                        class="align-middle me-1 fas fa-fw fa-comments"></i> Contacts</a>
                                <a class="dropdown-item" href="#"><i
                                        class="align-middle me-1 fas fa-fw fa-chart-pie"></i> Analytics</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-cogs"></i>
                                    Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i
                                        class="align-middle me-1 fas fa-fw fa-arrow-alt-circle-right"></i> Sign
                                    out</a>
                            </div>
                        </li>
                    </ul> -->
                </div>
            </nav>
            <div class="content" id="app">
                @yield('admin-content')
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-8 text-start">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Terms of Service</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-4 text-end">
                            <p class="mb-0">
                                &copy; 2022 - <a href="dashboard-default.html" class="text-muted">Spark</a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <svg width="0" height="0" style="position:absolute">
        <defs>
            <symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
                <path
                    d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
                </path>
            </symbol>
        </defs>
    </svg>
    <script src="{{asset('admin/js/app.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{ asset('admin/js/summernote.min.js') }}"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Line chart
        new Chart(document.getElementById("chartjs-dashboard-line"), {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
                    "Dec"
                ],
                datasets: [{
                        label: "Orders",
                        fill: true,
                        backgroundColor: window.theme.primary,
                        borderColor: window.theme.primary,
                        borderWidth: 2,
                        data: [3, 2, 3, 5, 6, 5, 4, 6, 9, 10, 8, 9]
                    },
                    {
                        label: "Sales ($)",
                        fill: true,
                        backgroundColor: "rgba(0, 0, 0, 0.05)",
                        borderColor: "rgba(0, 0, 0, 0.05)",
                        borderWidth: 2,
                        data: [5, 4, 10, 15, 16, 12, 10, 13, 20, 22, 18, 20]
                    }
                ]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                tooltips: {
                    intersect: false
                },
                hover: {
                    intersect: true
                },
                plugins: {
                    filler: {
                        propagate: false
                    }
                },
                elements: {
                    point: {
                        radius: 0
                    }
                },
                scales: {
                    xAxes: [{
                        reverse: true,
                        gridLines: {
                            color: "rgba(0,0,0,0.0)"
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            stepSize: 5
                        },
                        display: true,
                        gridLines: {
                            color: "rgba(0,0,0,0)",
                            fontColor: "#fff"
                        }
                    }]
                }
            }
        });
    });
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Pie chart
        new Chart(document.getElementById("chartjs-dashboard-pie"), {
            type: 'pie',
            data: {
                labels: ["Chrome", "Firefox", "IE", "Other"],
                datasets: [{
                    data: [4401, 4003, 1589],
                    backgroundColor: [
                        window.theme.primary,
                        window.theme.warning,
                        window.theme.danger,
                        "#E8EAED"
                    ],
                    borderColor: "transparent"
                }]
            },
            options: {
                responsive: !window.MSInputMethodContext,
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                cutoutPercentage: 75
            }
        });
    });
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Bar chart
        new Chart(document.getElementById("chartjs-dashboard-bar"), {
            type: 'bar',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
                    "Dec"
                ],
                datasets: [{
                    label: "This year",
                    backgroundColor: window.theme.primary,
                    borderColor: window.theme.primary,
                    hoverBackgroundColor: window.theme.primary,
                    hoverBorderColor: window.theme.primary,
                    data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
                    barPercentage: .75,
                    categoryPercentage: .5
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            display: false
                        },
                        stacked: false,
                        ticks: {
                            stepSize: 20
                        }
                    }],
                    xAxes: [{
                        stacked: false,
                        gridLines: {
                            color: "transparent"
                        }
                    }]
                }
            }
        });
    });
    </script>

    <script>
    $(function() {
        $('#datatables-dashboard-projects').DataTable({
            pageLength: 6,
            lengthChange: false,
            bFilter: false,
            autoWidth: false
        });
    });
    </script>
    <script>
    $(function() {
        $('#datetimepicker-dashboard').datetimepicker({
            inline: true,
            sideBySide: false,
            format: 'L'
        });
    });
    </script>
    @yield('script')

</body>


<!-- Mirrored from spark.bootlab.io/dashboard-default.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Feb 2022 05:00:00 GMT -->

</html>
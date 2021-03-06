<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MANAGE-RESTARUANT</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('./DataTables-1.12.1/css/dataTables.bootstrap4.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('./DataTables-1.12.1/css/jquery.dataTables.min.css')}}" />
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
</head>

<body>

    <div class="row main-container">

        <!-- ===== Start  Side Menu ===== -->
        <div class="col-lg-2 col-md-3  col-sm-3 col-xs-3 sidemenu" id="main-menu">
            <div class="dashboard">
                <h5>
                    <span class="hidden-md">CodeeWebb</span>
                </h5>
            </div>

            {{-- ===== Logo Site ==== --}}
            <div class="code-logo">
                <div class="logo">
                    <span>c</span>
                    <span>w</span>
                </div>
            </div>

            <ul class="list">
                <!-- ----- link main page ----- -->
                <li class="active">
                    <a href="{{route('home')}}">
                        <i class="fa fa-home icon-menu"></i>
                        <span class="title"> الصفحة الرئيسية </span>
                    </a>
                </li>

                <!-- ----- Start link  sales -----  -->
                <li>
                    <a href="{{route('sales')}}">
                        <i class="fa fa-gears icon-menu"></i>
                        <span class="title">نافدة المبيعات</span>
                    </a>
                </li>


                @if (Auth::user())
                @if (Auth::user()->level == 1 || Auth::user()->level == 2)

                <!-- ----- start link manage department -----  -->
                <li>
                    <a href="#collapse_dept" data-toggle="collapse" aria-controls="ture">
                        <i class="fa fa-sitemap icon-menu"></i>
                        <span class="title">إدارة الأقسام</span>
                        {{-- <span><i class="fa fa-chevron-down fa-down"></i></span> --}}
                    </a>
                </li>
                <ul class="collapse collapseable" id="collapse_dept">
                    <li class="sub-li-menu">
                        <a href="{{route('add-category')}}" class="li_collapse "> اضــافة قسم </a>
                    </li>

                    <li class="sub-li-menu">
                        <a href="{{route('show-categorys')}}" class="li_collapse "> عرض الأقسام</a>
                    </li>
                </ul>


                <!-- ----- start link manage types -----  -->
                <li>
                    <a href="#collapse_type" data-toggle="collapse" aria-controls="ture">
                        <i class="fa fa-list-ul icon-menu"></i>
                        <span class="title">إدارة الأصناف</span>
                    </a>
                </li>
                <ul class="collapse collapseable" id="collapse_type">
                    <li class="sub-li-menu">
                        <a href="{{route('add-type')}}" class="li_collapse"> اضــافة صنف</a>
                    </li>

                    <li class="sub-li-menu">
                        <a href="{{route('show-type')}}" class="li_collapse"> عرض الأصناف </a>
                    </li>
                </ul>


                <!-- ----- start link manage weaters -----  -->
                <li>
                    <a href="#collapse_weaters" data-toggle="collapse" aria-controls="ture">
                        <i class="fa fa-male icon-menu"></i>
                        <span class="title">إدارة الويتر</span>
                    </a>
                </li>
                <ul class="collapse collapseable" id="collapse_weaters">
                    <li class="sub-li-menu">
                        <a href="{{route('add-weater')}}" class="li_collapse"> اضــافة ويتر </a>
                    </li>

                    <li class="sub-li-menu">
                        <a href="{{route('show-weater')}}" class="li_collapse"> عرض الويتر</a>
                    </li>
                </ul>


                <!-- ----- start link manage Users -----  -->
                <li>
                    <a href="#collapse_users" data-toggle="collapse" aria-controls="ture">
                        <i class="fa fa-users  icons-menu icon-menu"></i>
                        <span class="title">إدارة المستخدمين</span>
                    </a>
                </li>
                <ul class="collapse collapseable" id="collapse_users">
                    <li class="sub-li-menu">
                        <a href="{{route('add-user')}}" class="li_collapse">اضــافة مستخدم </a>
                    </li>

                    <li class="sub-li-menu">
                        <a href="{{route('show-users')}}" class="li_collapse"> عرض المستخدمين</a>
                    </li>
                </ul>


                <!-- ----- start link manage  suppliers -----  -->
                <li>
                    <a href="#collapse_supplier" data-toggle="collapse" aria-controls="ture">
                        <i class="fa fa-truck  icons-menu icon-menu"></i>
                        <span class="title">إدارة الموردين</span>
                    </a>
                </li>
                <ul class="collapse collapseable" id="collapse_supplier">
                    <li class="sub-li-menu">
                        <a href="{{route('add-supplier')}}" class="li_collapse">اضــافة مورد </a>
                    </li>

                    <li class="sub-li-menu">
                        <a href="{{route('show-suppliers')}}" class="li_collapse"> عرض الموردين</a>
                    </li>
                </ul>

                <!-- ----- Start link  buyes -----  -->
                <li>
                    <a href="#collapse_buys" data-toggle="collapse" aria-controls="ture">
                        <i class="fa fa-money  icons-menu icon-menu"></i>
                        <span class="title">إدارة المشتريات</span>
                    </a>
                </li>
                <ul class="collapse collapseable" id="collapse_buys">
                    <li class="sub-li-menu">
                        <a href="{{route('buys')}}" class="li_collapse">اضــافة مشتريات </a>
                    </li>

                    <li class="sub-li-menu">
                        <a href="{{route('show-buys')}}" class="li_collapse"> عرض المشتريات</a>
                    </li>
                </ul>

                @endif
                @endif

                <!-- ----- Start link  reporting -----  -->
                @if (Auth::user())
                @if (Auth::user()->level == 1 )

                <li>
                    <a href="#collapse_report" data-toggle="collapse" aria-controls="ture">
                        <i class="fa fa-bar-chart-o  icons-menu icon-menu"></i>
                        <span class="title"> التقارير</span>
                    </a>
                </li>
                <ul class="collapse collapseable" id="collapse_report">
                    <li class="sub-li-menu">
                        <a href="{{route('sales-report')}}" class="li_collapse"> تقارير المبيعات </a>
                    </li>

                    <li class="sub-li-menu">
                        <a href="{{route('buys-report')}}" class="li_collapse"> تقارير المشتريات</a>
                    </li>
                </ul>
                @endif
                @endif

                <!-- ----- Start link  settings -----  -->
                {{-- <li>
                    <a href="{{route('sales')}}">
                        <i class="fa fa-gear icon-menu"></i>
                        <span class="title">الإعدادات</span>
                    </a>
                </li> --}}

            </ul>
        </div>
        <!-- ===== End  Side Menu ===== -->

        <!-- ===== Start Main Content ===== -->
        <div class="col-lg-10 col-md-9  col-sm-9 col-xs-9  content" id="main-content">
            <div class="header">
                <div class="dropdown">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                        @if (Auth::user())
                        {{ Auth::user()->name }}
                        @endif
                    </button>

                    <div class="dropdown-menu">
                        <button class="btn box-logout dropdown-item" id="logout" _token={{csrf_token()}}>
                            <i class="fa fa-sign-out"></i>
                            <span>تسجيل خروج</span>
                        </button>
                    </div>
                </div>

                <div>
                    <i id="toggel-menu" class="fa fa-bars"></i>
                </div>
            </div>

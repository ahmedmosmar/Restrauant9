@extends('layouts.master-sales')
@section('salesContent')

{{-- ========== Start Sales Content ======== --}}
<div class="sales-content">

    {{-- ========== Start Sales Header ========= --}}
    <div class="header-sales">
        <h5>
            طاولات الطعام
            <i class="fa fa-cutlery"></i>
        </h5>

        <a href="{{route('home')}}">
            <button class="btn back-to-home">
                <i class="fa fa-arrow-left"></i>
                <span>الرئيسية</span>
            </button>
        </a>

    </div>
    {{-- ========== End Sales Header ========= --}}

    {{-- ========== All Tebles ========= --}}
    <div class="tables">
        <div class="row">
            @if (Auth::user())
            @if (Auth::user()->level == 1 )
            {{-- ======== Start  Reset ======= --}}
            <div class="col-md-3 col-sm-4">
                <a href="{{url('show-reset')}}">
                    <div class="direct-sales">
                        <img src="{{asset('images/file_invoice.png')}}" alt="">
                        <span> الفواتير </span>
                        {{-- <i class="fa fa-home"></i> --}}
                    </div>
                </a>
            </div>
            {{-- ======== End  Reset ======= --}}
            @endif
            @endif

            {{-- ======== Start direct Sale ======= --}}
            <div class="col-md-3 col-sm-4">
                <a href="{{url('sales-direct/'. 500 .'/'. 500)}}">
                    <div class="direct-sales">
                        <img src="{{asset('images/sales2.png')}}" alt="">
                        <span>بيع مباشر </span>
                        {{-- <i class="fa fa-direct"></i> --}}
                    </div>
                </a>
            </div>
            {{-- ======== End direct Sale ======= --}}

            {{-- ======== Start foreach All Table ======= --}}
            @foreach ($tables as $table)
            <div class="col-md-3 col-sm-4">
                <a href="{{url('sales-table/'. $table->id .'/'.$tabel_number)}}">
                    <div class="table">
                        <img src="{{asset('images/coffee_table_100px.png')}}" alt="">
                        <span> [ {{  $tabel_number++ }} ] طاولة رقم </span>
                    </div>
                </a>
            </div>
            @endforeach
            {{-- ======== End foreach All Table ======= --}}

            {{-- ======= Start Add New Table ======= --}}
            <div class="col-md-3 col-sm-4">
                <a href="{{route('add-new-table')}}">
                    <div class="new-table">
                        <img src="{{asset('images/add_list_100px.png')}}" alt="">
                        <span>طاولة جديدة </span>
                    </div>
                </a>
            </div>
            {{-- ======= End Add New Table ======= --}}

        </div>
    </div>
</div>
</div>
{{-- ========== End Sales Content ======== --}}

<!-- ===== End Main Content ===== -->
</div>
@stop
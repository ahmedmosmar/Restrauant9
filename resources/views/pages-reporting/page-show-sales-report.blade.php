@extends('layouts.master-report')
@section('reportContent')

<div class="report-content">

    <div class="box-print">
        <button class="btn" id="print_report">
            <i class="fa fa-print"></i>
            <span>طباعة</span>
        </button>
        <button class="btn back">
            <i class="fa fa-share"></i>
            <a href="{{route('sales-report')}}">رجوع</a>
        </button>
    </div>

    {{-- ===== Header Report ===== --}}
    <div class="container">

        <div class="report-details">
            @if ($report->count() <= 0) <div class="alert alert-danger text-center">
                <strong>عفواً!</strong> لايوجد تقرير اختر بتمعن ... شكرا
        </div>


        @elseif ($report->count() > 0)

        <div class="ganral-details">
            <h5> المطعم : امواج </h5>
            <p>المكان : الخرطوم </p>
            <p>الشارع : افريقا </p>
            <p>الهاتف : 0912367890</p>
        </div>

        <div class="about-report">
            <p>تقرير المبيعات </p>
            <p> من تاريخ : {{$date_from}}</p>
            <p> الي تاريخ : {{$date_for}}</p>
            <p> المبلغ : {{$price}} جنية</p>
        </div>
    </div>

    {{-- ===== Table Report ===== --}}
    <table class="table table-dark ">
        <thead>
            <tr>
                <th>#</th>
                <th>الصنف</th>
                <th>الكمية </th>
                <th> الطاولة</th>
                <th>رقم الفاتورة </th>
                <th>سعر الصنف</th>
                <th> تاريخ البيع </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($report as $rep)
            <tr>
                <td>{{$rep->id}}</td>
                <td>{{$rep->type_Fun_Relation->type_name}}</td>
                <td>{{$rep->type_amount}}</td>
                <td>
                    @if ($rep->sales_table == 500)
                    بيع مباشر
                    @else
                    {{$rep->sales_table}}
                    @endif
                </td>
                <td> {{$rep->reset_id}} </td>
                <td>{{$rep->type_price}}</td>
                <td>{{$rep->created_at}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @endif
</div>
</div>
@stop
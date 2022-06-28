@extends('layoutes.master')
@section('MyContent')

         <div class="sub-content">

                <h2>طلبات الفاتورة</h2>

                <div class="report-reset">
                    <div class="reset-number">
                        <span>رقم الفاتورة : </span>
                        <span class="number">{{$reset_id}}</span>
                    </div>
                    <div class="total-price">
                        <span>المبلغ الكلي : </span>
                        <span class="price">{{$total_price}} جنية</span>
                    </div>
                    <div class="print-reset">
                        <button class="btn">
                            <span><i class="fa fa-print"></i></span>
                            <span>طباعة</span>
                        </button>
                         <div class="show-resets">
                         <a href="{{route('show-reset')}}">
                             <button class="btn">كل الفواتير</button>
                        </a>
                    </div>
                    </div>

                </div>

               {{-- =======  Table    Data ======  --}}
                <div class="show-cat-content">
                    <table>
                        <thead>
                           <tr>
                            <td>الرقم</td>
                            <td>الطلب</td>
                            <td>سعر الطلب</td>
                            {{-- <td>تاريخ الإضافة</td>
                            <td>العمليات</td> --}}
                           </tr>
                        </thead>
                        <tbody>

                           {{-- ===== Start Foreach ====== --}}
                            @foreach ($orders as $order)
                            <tr class="delete-data-{{$order->id}}">
                            <td>{{$order->id}}</td>
                            <td>{{$order->type_Fun_Relation->type_name}}</td>
                            <td>{{$order->type_Fun_Relation->price_sale}}</td>

                            {{-- <td>{{$reset->created_at}}</td> --}}
                                {{-- <td class="opartion">
                                    <button class="btn btn-edit-data">
                                    <a href="{{route('edit-category',$reset->id)}}">
                                        <span>عرض الطلبات</span>
                                        <i class="fa fa-edit"></i>
                                        </a>
                                    </button>

                                  <button class="btn btn-delete-data delete-category" data-id-for-delete="{{$reset->id}}">
                                        <a href="{{route('delete-category',$reset->id)}}">
                                            <span>حذف</span>
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </button>
                                </td> --}}
                            </tr>
                             @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- ===== End Main Content ===== -->
@stop

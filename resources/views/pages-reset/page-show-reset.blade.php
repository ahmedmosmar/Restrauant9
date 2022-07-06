@extends('layoutes.master')
@section('MyContent')

<div class="sub-content">

    <h2>الفواتير</h2>

    {{-- =======  Table    Data ======  --}}
    <div class="show-cat-content">
        <div class="row">
            <div class="col-md-12">
                <table id="example">

                    <thead>
                        <tr>
                            <td>الرقم</td>
                            <td>المبلغ</td>
                            <td>رقم الطاولة</td>
                            <td>تاريخ الإضافة</td>
                            <td>العمليات</td>
                        </tr>
                    </thead>
                    <tbody>

                        {{-- ===== Start Foreach ====== --}}
                        @foreach ($resets as $reset)
                        <tr class="delete-data-{{$reset->id}}">
                            <td>{{$reset->id}}</td>
                            <td>{{$reset->final_price}}</td>
                            <td>
                                @if ($reset->table_number == 500)
                                بيع مباشر
                                @else
                                {{$reset->table_number}}
                            </td>
                            @endif

                            <td>{{$reset->created_at}}</td>
                            <td class="opartion">
                                <button class="btn btn-edit-data">
                                    <a href="{{route('show-reset-order',$reset->id)}}">
                                        <span> الطلبات</span>
                                        <i class="fa fa-file-text-o"></i>
                                    </a>
                                </button>

                                <button class="btn btn-delete-data delete-reset" data-id-for-delete="{{$reset->id}}">
                                    <a href="">
                                        <span>حذف</span>
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </button>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<!-- ===== End Main Content ===== -->
@stop
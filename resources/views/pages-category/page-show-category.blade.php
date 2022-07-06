@extends('layoutes.master')
@section('MyContent')

<div class="sub-content">
    <div class="cat-content">
        @if (Session::has('success'))
        <span class="success-update" data-message="{{Session::get('success')}}"></span>
        @endif

        <h2>الأقسام</h2>

        @if ($EmptyError == 1)
        <div class="alert alert-warning">
            <strong>عفواً!</strong> ... أضف بعض الاقسام اولاًً
        </div>
        @else

        {{-- =======  Table  Category  Data ======  --}}
        <div class="show-cat-content">
            <div class="row">
                <div class="col-md-12">
                    <table id="example">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>اسم القسم</td>
                                {{-- <td>عدد الأصناف</td> --}}
                                <td>تاريخ الإضافة</td>
                                <td>العمليات</td>
                            </tr>
                        </thead>
                        <tbody>

                            {{-- ===== Start Foreach ====== --}}
                            @foreach ($categorys as $category)
                            <tr class="delete-data-{{$category->id}}">
                                <td>{{$index++}}</td>
                                <td>{{$category->category_name}}</td>
                                {{-- <td>عدلها</td> --}}
                                <td>{{$category->created_at}}</td>
                                <td class="opartion">
                                    <button class="btn btn-edit-data">
                                        <a href="{{route('edit-category',$category->id)}}">
                                            <span>تعديل</span>
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </button>

                                    <button class="btn btn-delete-data delete-category"
                                        data-id-for-delete="{{$category->id}}">
                                        <a href="{{route('delete-category',$category->id)}}">
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
            @endif
        </div>
    </div>

</div>
<!-- ===== End Main Content ===== -->
@stop
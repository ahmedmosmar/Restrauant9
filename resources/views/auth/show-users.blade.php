@extends('layouts.master')
@section('MyContent')

<div class="sub-content">
    <div class="register-content">

        @if (Session::has('success'))
          <span class="success-update" data-message="{{Session::get('success')}}"></span>
        @endif


        <h2> عرض المستخدمين </h2>

        {{-- =======  Table  Users Data ======  --}}
        <div class="show-users-content">
          <div class="row">
          <div class="col-md-12">
            <table id="example">
                <thead>
                    <td>الرقم</td>
                    <td>الاسم </td>
                    <td>اسم المستخدم</td>
                    <td> رقم االهاتف</td>
                    <td> المستوي </td>
                    <td>تاريخ الإضافة</td>
                    <td>العمليات</td>
                </thead>
                <tbody >

                    {{-- ===== Start Foreach ====== --}}
                    @foreach ($users as $user)

                     <tr class="tr_id delete-data-{{$user->id}}" data-id="{{$user->id}}">
                        <td>{{$user->id}}</td>
                        <td>{{$user->full_name}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->level}}</td>
                        <td>{{$user->created_at}}</td>
                        <td class="opartion">
                            <button class="btn btn-edit-data">
                                <a href="{{route('edit-user',$user->id)}}">
                                    تعديل
                                    <i class="fa fa-edit"></i>
                                </a>
                            </button>

                           <button class="btn btn-delete-data delete-user" data-id-for-delete="{{$user->id}}">
                                <a href="{{route('delete-user',$user->id)}}">
                                    حذف
                                    <i class="fa fa-trash"></i>
                                </a>
                            </button>
                        </td>
                    </tr>


                    @endforeach
                    {{-- ===== End Foreach ====== --}}

                </tbody>
            </table>
          </div>
          </div>
        </div>
    </div>
</div>

@endsection

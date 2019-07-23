@extends('layouts.master')

@section('content')
<div class="content-header row">

        <div class="content-header-left col-md-6 col-xs-12 mb-1">
          <h2 class="content-header-title">الطلاب</h2>
        </div>

        <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
          <div class="breadcrumb-wrapper col-xs-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">الرئيسية</a>
              </li>
              <li class="breadcrumb-item"><a href="#">شؤون الطلاب</a>
              </li>
              <li class="breadcrumb-item active">الطلاب  
              </li>
            </ol>
          </div>
        </div>
      </div>


      <div class="content-body">
        <div class="row">
          <div class="col-xs-12">
              <div class="card">
                  <div class="card-body collapse in">
                      <div class="card-block card-dashboard">
                          <p> جدول يوضح كل الفصول </p>
                      </div>
                      <div class="table-responsive">
                          <table class="table table-hover mb-0">
                              <thead>
                                  <tr>
                                      <th>رقم </th>
                                      <th>اسم الفصل </th>
                                      <th>السنه الدراسيه</th>
                                      <th>عدد الطلاب</th>
                                      <th> إدارة</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($rooms as $room)
                                    <tr>
                                        <th scope="row">{{ $room->id }}</th>
                                        <td>{{ $room->name }}</td>
                                        <td>{{ $room->year }}</td>
                                        <td>{{ $room->students->count() }}</td>
                                        <td>
                                          <a href="/class/{{ $room->id }}" type="button" class="btn btn-success btn-block">تفاصيل</a>
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
</div>    
@endsection

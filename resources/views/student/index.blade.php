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
                          <p> جدول يوضح كل الطلاب بالمدرسه </p>
                      </div>
                      <div class="table-responsive">
                          <table class="table table-hover mb-0">
                              <thead>
                                  <tr>
                                      <th>رقم </th>
                                      <th>الاسم </th>
                                      <th>الفصل الدراسي</th>
                                      <th>السنه الدراسيه</th>
                                      <th>اسم ولي الامر</th>
                                      <th>رقم هاتف ولي الامر</th>
                                      <th> إدارة</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($students as $student)
                                <tr>
                                <th scope="row">{{ $student->id }}</th>
                                  <td>{{ $student->full_name }}</td>
                                  <td>{{ $student->room->name }}</td>
                                  <td>{{ $student->studay_year }}</td>
                                  <td>{{ $student->responser_full_name }}</td>
                                  <td>{{ $student->responser_phone }}</td>
                                  <td>
                                    <a href="/employee/{{ $student->id }}" type="button" class="btn btn-success btn-block">تفاصيل</a>
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

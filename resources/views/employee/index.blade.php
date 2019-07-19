@extends('layouts.master')

@section('content')

<div class="content-header row">
        <div class="content-header-left col-md-6 col-xs-12 mb-1">
          <h2 class="content-header-title">الموظفين  </h2>
        </div>
        <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
          <div class="breadcrumb-wrapper col-xs-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">الرئيسية</a>
              </li>
              <li class="breadcrumb-item"><a href="#">شؤون الموظفين</a>
              </li>
              <li class="breadcrumb-item active">الموظفين  
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
                        <p> جدول يوضح كل القوى العاملة  في المؤسسة </p>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>رقم </th>
                                    <th>الاسم </th>
                                    <th> العمر  </th>
                                    <th> الجنس  </th>
                                    <th>المهنة / الوظيفة </th>
                                    <th>تاريخ التعيين</th>
                                    <th> إدارة</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($employees as $employee)
                              <tr>
                              <th scope="row">{{ $employee->id }}</th>
                                <td>{{ $employee->full_name }}</td>
                                <td>{{ $employee->birth_date }}</td>
                                <td>{{ $employee->gender }}</td>
                                <td>{{ $employee->jobe_title }}</td>
                                <td>{{ $employee->hirring_date }}</td>
                                <td>
                                  <button type="button" class="btn btn-success btn-block">تفاصيل</button>
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

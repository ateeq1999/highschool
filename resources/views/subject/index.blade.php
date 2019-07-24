@extends('layouts.master')

@section('content')
<div class="content-header row">

    <div class="content-header-left col-md-6 col-xs-12 mb-1">
        <h2 class="content-header-title">المواد الدراسيه</h2>
      </div>
      
      <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
        <div class="breadcrumb-wrapper col-xs-12">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">الرئيسية</a>
            </li>
            <li class="breadcrumb-item"><a href="#">المواد الدراسيه</a>
            </li>
            <li class="breadcrumb-item active">المواد  
            </li>
          </ol>
        </div>
      </div>
      </div>
    <div class="row">
        <div class="col-md-2"></div>	
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-body collapse in collapse in">
                    <div class="card-block">
                        <form class="form">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="projectinput5"> ألحق المادة </label>
                                            <select id="projectinput5" name="interested" class="form-control">
                                                <option value="none" selected="" started="" disabled=""> اسم المادة</option>
                                                <option value="design">عربي</option>
                                                <option value="development">انجليزي</option>
                                                <option value="illustration">رياضيات</option>
                                                <option value="design">علوم فيزياء</option>
                                                <option value="development">علوم كيمياء</option>
                                                <option value="illustration">جغرافيا</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="projectinput5">بالفصل</label>
                                            <select id="projectinput5" name="interested" class="form-control">
                                                <option value="none" selected="" disabled=""> العام</option>
                                                <option value="design">أولى أ</option>
                                                <option value="development">أولى ب</option>
                                                <option value="illustration">ثانية أ</option>
                                                <option value="development">ثانية ب</option>
                                                <option value="illustration">ثالثة أ</option>
                                                <option value="development">ثالثة ب</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group" style="margin-top:8%">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="icon-check2"></i> حفظ
                                            </button>
                                            <button type="button" class="btn btn-warning mr-1">
                                                <i class="icon-cross2"></i> إلغاء
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>	
                    </div>
                </div>
            </div>
        </div>
    </div>

      <div class="content-body">
        <div class="row">
          <div class="col-xs-12">
              <div class="card">
                  <div class="card-body collapse in">
                      <div class="card-block card-dashboard">
                          <h4>{{ 'مواد السنه الاولى' }}</h4>
                      </div>
                      <div class="table-responsive">
                          <table class="table table-hover mb-0">
                              <thead>
                                  <tr>
                                    <th>رقم </th>
                                    <th>اسم الماده </th>
                                    <th>السنه الدراسيه</th>
                                    <th> إدارة</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($year_one_subjects as $subject)
                                    <tr>
                                        <th scope="row">{{ $subject->id }}</th>
                                        <td>{{ $subject->name }}</td>
                                        <td>{{ $subject->studay_year }}</td>
                                        <td>
                                          <a href="/subject/{{ $subject->id }}" type="button" class="btn btn-success btn-block">تفاصيل</a>
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
        <div class="row">
          <div class="col-xs-12">
              <div class="card">
                  <div class="card-body collapse in">
                      <div class="card-block card-dashboard">
                          <h4>{{ 'مواد السنه الثانيه' }}</h4>
                      </div>
                      <div class="table-responsive">
                          <table class="table table-hover mb-0">
                              <thead>
                                  <tr>
                                    <th>رقم </th>
                                    <th>اسم الماده </th>
                                    <th>السنه الدراسيه</th>
                                    <th> إدارة</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($year_tow_subjects as $subject)
                                    <tr>
                                        <th scope="row">{{ $subject->id }}</th>
                                        <td>{{ $subject->name }}</td>
                                        <td>{{ $subject->studay_year }}</td>
                                        <td>
                                          <a href="/subject/{{ $subject->id }}" type="button" class="btn btn-success btn-block">تفاصيل</a>
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
        <div class="row">
          <div class="col-xs-12">
              <div class="card">
                  <div class="card-body collapse in">
                      <div class="card-block card-dashboard">
                        <h4>{{ 'مواد السنه الثالثه' }}</h4>
                      </div>
                      <div class="table-responsive">
                          <table class="table table-hover mb-0">
                              <thead>
                                  <tr>
                                    <th>رقم </th>
                                    <th>اسم الماده </th>
                                    <th>السنه الدراسيه</th>
                                    <th> إدارة</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($year_three_subjects as $subject)
                                    <tr>
                                        <th scope="row">{{ $subject->id }}</th>
                                        <td>{{ $subject->name }}</td>
                                        <td>{{ $subject->studay_year }}</td>
                                        <td>
                                          <a href="/subject/{{ $subject->id }}" type="button" class="btn btn-success btn-block">تفاصيل</a>
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

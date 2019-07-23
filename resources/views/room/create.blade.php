@extends('layouts.master')

@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-6 col-xs-12 mb-1">
      <h2 class="content-header-title">إضافة فصل </h2>
    </div>
    <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
      <div class="breadcrumb-wrapper col-xs-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">الرئيسية</a>
          </li>
          <li class="breadcrumb-item"><a href="#">إدارة المدرسة</a>
          </li>
          <li class="breadcrumb-item active">إضافة فصل 
          </li>
        </ol>
      </div>
    </div>
  </div>
  <div class="content-body"><section id="grid-options" class="row">
          <div class="col-md-2"></div>	
      <div class="col-md-8 col-offset-3">
          <div class="card">
              <div class="card-body collapse in collapse in">
                  <div class="card-block">
                          <div class="col-md-12">
                                  <div class="card" style="">
                                      <div class="card-header">
                                          <h4 class="card-title" id="basic-layout-form">إضافة فصل جديد </h4>
                                          <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                          
                                      </div>
                                      <div class="card-body collapse in">
                                          <div class="card-block">
                                              <form action="/room" class="form" method="POST">
                                                @csrf
                                                  <div class="form-body">
                                                      <div class="row">
                                                          <div class="col-md-12">
                                                              <div class="form-group">
                                                                  <label for="name">اسم الفصل </label>
                                                                  <input type="text" id="name" class="form-control" placeholder="اسم الفصل " name="name">
                                                              </div>
                                                          </div>
                                                      </div>
                                                      
                                                      <div class="row">
                                                          <div class="col-md-12">
                                                              <div class="form-group">
                                                                  <label for="year"> السنة الدراسية</label>
                                                                  <select id="year" name="year" class="form-control">
                                                                      <option value="none"> السنة</option>
                                                                      <option selected value="الاول">الاول</option>
                                                                      <option value="الثاني">الثاني</option>
                                                                      <option value="الثالث">الثالث</option>
                                                                  </select>
                                                              </div>
                                                          </div>
                      
                                                      </div>
                      
                                                  </div>
                      
                                                    <div class="form-actions">
                                                        <button class="btn btn-primary mr-3" type="submit">{{ 'اضافه' }}</button>
                                                        <a class="btn btn-danger ml-2" href="/">{{ 'الغاء' }}</a>
                                                    </div>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection

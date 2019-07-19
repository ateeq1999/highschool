@extends('layouts.master')

@section('content')

  <div class="content-header row">
    <div class="content-header-left col-md-6 col-xs-12 mb-1">
      <h2 class="content-header-title"> تسجيل موظف جديد</h2>
    </div>
    <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
      <div class="breadcrumb-wrapper col-xs-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">الرئيسية</a>
          </li>
          <li class="breadcrumb-item"><a href="#">شؤون الموظفين</a>
          </li>
          <li class="breadcrumb-item active">توظيف  
          </li>
        </ol>
      </div>
    </div>
  </div>


  <div class="content-body">
    <div class="row match-height">
      <div class="col-xs-12">
        <form action="/employee" method="POST">
          @csrf
          <div class="row match-height">
            <div class="col-md-4">
              <div class="card" style="">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-form">بيانات الموظف </h4>
                  <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                </div>
                <div class="card-body collapse in">
                  <div class="card-block">
                      <div class="form-body">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="full_name">الاسم كاملا </label>
                              <input type="text" id="full_name" class="form-control" placeholder="الاسم كاملا" name="full_name">
                            </div>
                          </div>
                        </div>
  
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="email">البريد الالكتروني</label>
                              <input type="text" id="email" class="form-control" placeholder="البريد الالكتروني" name="email">
                            </div>
                          </div>
                        </div>
  
                        <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                <label for="phone">رقم الهاتف </label>
                                <input type="text" id="phone" class="form-control" placeholder="رقم الهاتف " name="phone">
                              </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="input-group">
                                      <label class="display-inline-block custom-control custom-radio ml-1">
                                        <input value="ذكر" type="radio" name="gender" checked="checked" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description ml-0">ذكر</span>
                                      </label>
                                      <label class="display-inline-block custom-control custom-radio">
                                        <input value="انثى" type="radio" name="gender"  class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description ml-0">انثى</span>
                                      </label>
                                      <label class="display-inline-block custom-control custom-radio">
                                        <input value="غير ذلك" type="radio" name="gender"  class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description ml-0">غير ذلك</span>
                                      </label>
                                    </div>
                                  </div>
                            </div>
                          </div>
    
                        <div class="row">
                            <div class="col-md-12">
                          <div class="form-group">
                              <label for="birth_date"> تاريخ الميلاد </label>
                              <div class="position-relative has-icon-left">
                                <input type="date" id="birth_date" class="form-control" name="birth_date">
                                <div class="form-control-position">
                                  <i class="icon-calendar5"></i>
                                </div>
                              </div>
                          </div>
                        </div>
                        </div>
                        <div class="form-group">
                          <label for="employee_note">ملاحظة عن الموظف</label>
                          <textarea id="employee_note" rows="5" class="form-control" name="employee_note" placeholder="ملحوظة عن الموظف سلوكياته او توصيات من شاهنا تحسن من اداءه مستقبلا  "></textarea>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card" style="">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-colored-form-control">بيانات  الوظيفة </h4>
                  <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                  
                </div>
                <div class="card-body collapse in">
                  <div class="card-block">
                      <div class="form-body">
  
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="jobe_title">عنوان الوظيفة</label>
                                <select id="jobe_title" name="jobe_title" class="form-control">
                                  <option value="مدير" >مدير</option>
                                  <option value="وكيل شؤون الطلاب">وكيل شؤون الطلاب </option>
                                  <option value="مدرس"  selected>مدرس </option>
                                  <option value="امين صنجوق">امين صندوق</option>
                                  <option value="امين مكتبه">امين المكتبة</option>
                                  <option value="طباخ">طباخ</option>
                                  <option value="بواب">بواب</option>
                                </select>
                              </div>
                            </div>
                          </div>
  
                          <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="hirring_date">  تاريخ التوظيف </label>
                                  <div class="position-relative has-icon-left">
                                      <input type="date" id="hirring_date" class="form-control" name="hirring_date">
                                      <div class="form-control-position">
                                        <i class="icon-calendar5"></i>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="jobe_type"> نوع الوظيفة </label>
                                    <select id="jobe_type" name="jobe_type" class="form-control">
                                      <option value="none" disabled> نوع الوظيفة </option>
                                      <option value="design" selected>دائمة</option>
                                      <option value="development">مؤقتة</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            <div class="form-group">
                              <label for="jobe_description">  الوصف الوظيفي</label>
                              <textarea id="jobe_description" rows="5" class="form-control" name="jobe_description" placeholder="توضيح دور ومهام الموظف و ما له من التزامات مرتبطة بالوظيفة المسندة إليه "></textarea>
                            </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="">
                  <div class="card-header">
                    <h4 class="card-title" id="basic-layout-colored-form-control"> معلومات الخبرة والمجال </h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                  </div>
                  <div class="card-body collapse in">
                    <div class="card-block">
                        <div class="form-body">
                          <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="experince_year"> عدد الخبرة بالسنوات</label>
                              <input type="number" id="experince_year" class="form-control"  name="experince_year">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                            <label for="jobe_note"> نبذة مختصرة عن الوظيفة السابقة </label>
                            <textarea id="jobe_note" rows="5" class="form-control" name="jobe_note" placeholder=" اكتب عن التجارب والخبرة  "></textarea>
                        </div>
                      </div>
            
                      <div class="form-actions right">
                        <input type="submit" value="تسجيل" class="btn btn-primary mr-2">
                        <button type="button" class="btn btn-warning ml-2">
                          <i class="icon-cross2"></i> إالغاء
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection

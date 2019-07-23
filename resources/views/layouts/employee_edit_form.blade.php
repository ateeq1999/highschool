<div class="content-body">
        <div class="row match-height">
          <div class="col-xs-12">
            <form action="/employee/{{ $employee->id }}" method="POST">
              @csrf
              @method('PATCH')
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
                                    <input type="text" id="full_name" class="form-control" value="{{ old('full_name') ?? $employee->full_name }}" placeholder="الاسم كاملا" name="full_name">
                                </div>
                              </div>
                            </div>
      
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="email">البريد الالكتروني</label>
                                  <input value="{{ old('email') ?? $employee->email }}" type="text" id="email" class="form-control" placeholder="البريد الالكتروني" name="email">
                                </div>
                              </div>
                            </div>
      
                            <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="phone">رقم الهاتف </label>
                                    <input value="{{ old('phone') ?? $employee->phone }}" type="text" id="phone" class="form-control" placeholder="رقم الهاتف " name="phone">
                                  </div>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            @if ($employee->gender = 'ذكر')
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
                                            @else
                                                <label class="display-inline-block custom-control custom-radio ml-1">
                                                    <input value="ذكر" type="radio" name="gender" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description ml-0">ذكر</span>
                                                </label>
                                                <label class="display-inline-block custom-control custom-radio">
                                                    <input value="انثى" type="radio" name="gender" checked="checked" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description ml-0">انثى</span>
                                                </label>
                                            @endif
                                        </div>
                                      </div>
                                </div>
                              </div>
        
                            <div class="row">
                                <div class="col-md-12">
                              <div class="form-group">
                                  <label for="birth_date"> تاريخ الميلاد </label>
                                  <div class="position-relative has-icon-left">
                                    <input value="{{ old('birth_date') ?? $employee->birth_date }}" type="date" id="birth_date" class="form-control" name="birth_date">
                                    <div class="form-control-position">
                                      <i class="icon-calendar5"></i>
                                    </div>
                                  </div>
                              </div>
                            </div>
                            </div>
                            <div class="form-group">
                              <label for="employee_note">ملاحظة عن الموظف</label>
                              <textarea id="employee_note" rows="5" class="form-control" name="employee_note" placeholder="ملحوظة عن الموظف سلوكياته او توصيات من شاهنا تحسن من اداءه مستقبلا  ">{{ old('employee_note') ?? $employee->employee_note }}</textarea>
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
                                      @if ($employee->jobe_title == 'مدير')
                                        <option value="مدير" selected>مدير</option>
                                        <option value="وكيل شؤون الطلاب">وكيل شؤون الطلاب </option>
                                        <option value="مدرس" >مدرس </option>
                                        <option value="امين صندوق">امين صندوق</option>
                                        <option value="امين مكتبه">امين المكتبة</option>
                                        <option value="طباخ">طباخ</option>
                                        <option value="بواب">بواب</option>
                                      @else
                                          @if ($employee->jobe_title == 'وكيل شؤون الطلاب')
                                            <option value="مدير">مدير</option>
                                            <option selected value="وكيل شؤون الطلاب">وكيل شؤون الطلاب </option>
                                            <option value="مدرس" >مدرس </option>
                                            <option value="امين صندوق">امين صندوق</option>
                                            <option value="امين مكتبه">امين المكتبة</option>
                                            <option value="طباخ">طباخ</option>
                                            <option value="بواب">بواب</option>
                                          @else
                                              @if ($employee->jobe_title == 'مدرس')
                                                <option value="مدير">مدير</option>
                                                <option value="وكيل شؤون الطلاب">وكيل شؤون الطلاب </option>
                                                <option selected value="مدرس" >مدرس </option>
                                                <option value="امين صندوق">امين صندوق</option>
                                                <option value="امين مكتبه">امين المكتبة</option>
                                                <option value="طباخ">طباخ</option>
                                                <option value="بواب">بواب</option>
                                              @else
                                                  @if ($employee->jobe_title == 'امين صندوق')
                                                    <option value="مدير">مدير</option>
                                                    <option value="وكيل شؤون الطلاب">وكيل شؤون الطلاب </option>
                                                    <option value="مدرس" >مدرس </option>
                                                    <option selected value="امين صندوق">امين صندوق</option>
                                                    <option value="امين مكتبه">امين المكتبة</option>
                                                    <option value="طباخ">طباخ</option>
                                                    <option value="بواب">بواب</option>
                                                  @else
                                                      @if ($employee->jobe_title == 'امين مكتبه')
                                                        <option value="مدير">مدير</option>
                                                        <option value="وكيل شؤون الطلاب">وكيل شؤون الطلاب </option>
                                                        <option value="مدرس" >مدرس </option>
                                                        <option value="امين صندوق">امين صندوق</option>
                                                        <option selected value="امين مكتبه">امين المكتبة</option>
                                                        <option value="طباخ">طباخ</option>
                                                        <option value="بواب">بواب</option>
                                                      @else
                                                          @if ($employee->jobe_title == 'طباخ')
                                                            <option value="مدير" >مدير</option>
                                                            <option value="وكيل شؤون الطلاب">وكيل شؤون الطلاب </option>
                                                            <option value="مدرس" >مدرس </option>
                                                            <option value="امين صندوق">امين صندوق</option>
                                                            <option value="امين مكتبه">امين المكتبة</option>
                                                            <option selected value="طباخ">طباخ</option>
                                                            <option value="بواب">بواب</option>
                                                          @else
                                                            <option value="مدير">مدير</option>
                                                            <option value="وكيل شؤون الطلاب">وكيل شؤون الطلاب </option>
                                                            <option value="مدرس" >مدرس </option>
                                                            <option value="امين صندوق">امين صندوق</option>
                                                            <option value="امين مكتبه">امين المكتبة</option>
                                                            <option value="طباخ">طباخ</option>
                                                            <option selected value="بواب">بواب</option>
                                                          @endif
                                                      @endif
                                                  @endif
                                              @endif
                                          @endif
                                      @endif
                                    </select>
                                  </div>
                                </div>
                              </div>
      
                              <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="hirring_date">  تاريخ التوظيف </label>
                                      <div class="position-relative has-icon-left">
                                          <input value="{{ old('hirring_date') ?? $employee->hirring_date}}" type="date" id="hirring_date" class="form-control" name="hirring_date">
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
                                          @if ($employee->jobe_type == 'دائمه')
                                            <option value="دائمه" selected>دائمة</option>
                                            <option value="مؤقته">مؤقتة</option>
                                          @else
                                            <option value="دائمه">دائمة</option>
                                            <option selected value="مؤقته">مؤقتة</option>
                                          @endif
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                <div class="form-group">
                                  <label for="jobe_description">  الوصف الوظيفي</label>
                                  <textarea id="jobe_description" rows="5" class="form-control" name="jobe_description" placeholder="توضيح دور ومهام الموظف و ما له من التزامات مرتبطة بالوظيفة المسندة إليه ">{{ old('jobe_description') ?? $employee->jobe_description}}</textarea>
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
                                  <input value="{{ $employee->experince_year }}" type="number" id="experince_year" class="form-control"  name="experince_year">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                                <label for="jobe_note"> نبذة مختصرة عن الوظيفة السابقة </label>
                                <textarea id="jobe_note" rows="5" class="form-control" name="jobe_note" placeholder=" اكتب عن التجارب والخبرة  ">{{ old('jobe_note') ?? $employee->jobe_note }}</textarea>
                            </div>
                          </div>
                
                          <div class="form-actions right">
                            <input type="submit" value="{{ 'تعديل' }}" class="btn btn-primary mr-2">
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
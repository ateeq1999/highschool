<div class="content-header row">
    <div class="content-header-left col-md-6 col-xs-12 mb-1">
        <h2 class="content-header-title"> تسجيل طالب جديد</h2>
    </div>

    <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
        <div class="breadcrumb-wrapper col-xs-12">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">الرئيسية</a>
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
    <div class="row match-height">
        <form action="/student" method="post">
            @csrf
            <div class="col-md-4">
                    <div class="card" style="height: 969px;">
                        <div class="card-header">
                        <h4 class="card-title" id="basic-layout-form">بيانات الطالب </h4>
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
                                                    <input value="{{ 'ذكر' }}" type="radio" name="gender" checked="checked" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description ml-0">ذكر</span>
                                                </label>
                                                <label class="display-inline-block custom-control custom-radio">
                                                    <input value="{{ 'انثى' }}" type="radio" name="gender"  class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description ml-0">انثى</span>
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
                                <label for="notes_about_student">ملاحظة عن الطالب</label>
                                <textarea id="notes_about_student" rows="5" class="form-control" name="notes_about_student" placeholder="ملحوظة عن الطالب سلوكياته او توصيات من شاهنا تحسن من اداءه مستقبلا  "></textarea>
                                </div>
                            </div>
        
                        </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4">
                    <div class="card" style="height: 969px;">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-colored-form-control">بيانات الفصل الدراسي </h4>
                            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="studay_year"> السنة الدراسية</label>
                                        <select id="studay_year" name="studay_year" class="form-control">
                                        <option value="none" disabled="">السنة </option>
                                        <option value="الاولى">الاولى</option>
                                        <option value="الثانية">الثانية</option>
                                        <option value="الثالثة">الثالثة</option>
                                        </select>
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="room_id">الفصل</label>
                                        <select id="room_id" name="room_id" class="form-control">
                                            @foreach ($rooms as $room)
                                                <option value="{{ $room->id }}">{{ $room->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="year_of_study"> العام الدراسي </label>
                                            <select id="year_of_study" name="year_of_study" class="form-control">
                                                <option value="2019 - 2020" selected>2019 - 2020</option>
                                                <option value="2020 - 2021">2020 - 2021</option>
                                                <option value="2021 - 2022">2021 - 2022</option>
                                                <option value="2022 - 2023">2022 - 2023</option>
                                                <option value="2023 - 2024">2023 - 2024</option>
                                                <option value="2024 - 2025">2024 - 2025</option>
                                                <option value="2025 - 2026">2025 - 2026</option>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="funds"> الرسوم الدراسيه</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">SDG</span>
                                                <input type="number" class="form-control square" placeholder="بالجنيه" aria-label="Amount (to the nearest dollar)" name="funds">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <h4 class="card-title" ><i class="icon-clipboard4"></i>معلومات صحية عن الطالب</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="spcial_desises">امراض مزمنة ان وجد </label>
                                            <select id="spcial_desises" name="spcial_desises" class="form-control">
                                                <option value="لايوجد" selected>{{ 'لايوجد' }}</option>
                                                <option value="سكري">سكري</option>
                                                <option value="ضغط">ضغط</option>
                                                <option value="صرع">صرع</option>
                                            </select>
                                        </div>
                                        </div>
        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="spcial_case"> حالة خاصة </label>
                                                <input type="text" id="spcial_case" class="form-control" placeholder="حالة خاصة يجب التعامل معها بحذر" name="spcial_case">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="col-md-4">
                    <div class="card" style="height: 969px;">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-colored-form-control">بيانات ولي الامر </h4>
                            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">
        
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="responser_full_name">الاسم رباعي </label>
                                                <input type="text" id="responser_full_name" class="form-control" placeholder="الاسم رباعي" name="responser_full_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="responser_email">البريد الالكتروني</label>
                                                <input type="text" id="responser_email" class="form-control" placeholder="البريد الالكتروني" name="responser_email">
                                            </div>
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                        <label for="responser_phone">رقم الهاتف </label>
                                        <input type="text" id="responser_phone" class="form-control" placeholder="رقم الهاتف " name="responser_phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="responser_jobe"> المهنة او الوظيفة </label>
                                        <input type="text" id="responser_jobe" class="form-control" placeholder=" المهنة او الوظيفة" name="responser_jobe">
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="responser_address"> العنوان والسكن </label>
                                        <input type="text" id="responser_address" class="form-control" placeholder=" العنوان والسكن" name="responser_address">
                                    </div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                        <label for="responser_relation"> صلته بالطالب </label>
                                        <input type="text" id="responser_relation" class="form-control" placeholder=" صلة القرابة" name="responser_relation">
                                        </div>
                                    </div>
                                    </div>
                                </div>
        
                                <div class="form-actions">
                                    <button class="btn btn-primary mr-3" type="submit">{{ 'تسجيل' }}</button>
                                    <a class="btn btn-danger ml-2" href="/">{{ 'الغاء' }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</div>
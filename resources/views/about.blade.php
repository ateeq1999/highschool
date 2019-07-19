@extends('layouts.master')

@section('content')
<div class="content-body">
        <div class="row">
            <div class="col-xl-1 col-lg-1 col-xs-1 mb-1 ">
            </div>
            <div class="col-lg-10 col-md-12">
                <p style="margin-right:30%"> تطبيق لإدارة مدرسة ثانوية </p>
                <p style="margin-right:10%"> يتكون من مديولس او اجزاء منفصلة وعند تكاملها تيكون نظام مدرسة متكامل  </p>
                <p> وشامل وذلك حسب متطلبات المؤسسة   </p>
                <p> الإجزاء المضمنة في هذه النسخة هي :   </p>
                <ul class="list-group">
                    <li class="list-group-item"> 

                        الرئسية
                        <p class="list-group-item-text">
                            صفحة تحتوي على ارقام و معلومات عن حالة النظام في شكل ارقام او اشكال بيانية
                            </p>
                            
                    </li>
                    <li class="list-group-item">

                        إدارة المدرسة
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">
                                </h3 class="list-group-item-heading"> إضافة فصل دراسي </h3>
                                <p class="list-group-item-text">
                                    صفحة تحتوي على فورم لإضافة فصل جديد لسنة دراسية معينة 

                                </p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                </h3 class="list-group-item-heading">إدارة الفصول</h3>
                                <p class="list-group-item-text">
                                    صفحة لإدارة الفصول بحيث اضافة معلم معين او طالب لفصل معين في سنة دراسية معينة
                                </p>
                            </a>
                        </div>
                        </li>
                    <li class="list-group-item">
                        </h3 class="">  شؤون الموظفين </h3>
                    
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">
                                </h3 class="list-group-item-heading"> توظيف جديد  </h3>
                                <p class="list-group-item-text">
                                    صفحة تحتوي على فورم لإضافة موظف جديد 
                                </p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                </h3 class="list-group-item-heading">عرض الموظفين </h3>
                                <p class="list-group-item-text">
                                    صفحة تعرض كل الفوى العاملة
                                </p>
                            </a>
                        </div>
                    </li>
                    <li class="list-group-item">
                        
                    شؤون الطلاب
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">
                                </h3 class="list-group-item-heading"> تسجيل الطلاب </h3>
                                <p class="list-group-item-text">
                                    صفحة تحتوي على فورم لتسجيل طالب جديد
                                </p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                </h3 class="list-group-item-heading">إدارة شؤون الطلاب</h3>
                                <p class="list-group-item-text">
                                    صفحة تعرض كل الطلاب وتسمح بإدارة حالتهم من انتماءهم لاي فصل او توقيفهم ...

                                </p>
                            </a>
                        </div>
                    </li>
                    <li class="list-group-item">
                    <a href="#" class="list-group-item list-group-item-action">
                                <h3 class="list-group-item-heading">  دفعيات الطلاب (الحسابات) </h3>
                                <p class="list-group-item-text">
                                    صفحة توضح المعاملات الحسابية الخاصة بالطلاب 
                                </p>
                            </a>
                    </li>
                    <li class="list-group-item"> 
                        
                    المواد الدراسية
                        <div class="list-group ">
                            <a href="#" class="list-group-item list-group-item-action primary">
                                </h3 class="list-group-item-heading">  إضافة مادة </h3>
                                <p class="list-group-item-text">
                                    صفحة تحتوي على فورم لإضافة مادة جديدة للنظام 
                                </p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                </h3 class="list-group-item-heading"> إدراج مادة لفصل</h3>
                                <p class="list-group-item-text">
                                    صفحة لإدراج مادة جديدة لفصل معين 
                                </p>
                            </a>
                        </div>
                    </li>
                    <li class="list-group-item">
                        </h3 class="list-group-item-heading">  التقارير </h3>
                        <p class="list-group-item-text">
                            صفحة تمكن المستخدم لاستخراج تقارير عن اي جزء من النظام
                        </p>
                    
                    </li>
                    <li class="list-group-item"> حول النظام</li>
                </ul>

                    
            </div>
        </div>
        <div class="row ">
            <div class="col-xl-2 col-lg-4 col-xs-4 mb-1 ">

            </div>
            <div class="col-xl-3 col-lg-6 col-xs-6 mb-1 text-xs-center">
                </h3 class="text-xs-center">إيميل المطورون</h3>
                    <div class="tooltip top in" role="tooltip" style="display: block; position: relative; margin: 0; padding: 0; z-index: 100;">
                        <div class="tooltip-arrow" style="bottom: -5px; left: 50%; margin-left: -5px; border-width: 5px 5px 0; border-top-color: #000;"></div>
                        <div class="tooltip-inner" style="max-width: none;">
                            <i style="bottom: -4px; left: 50%;margin-left: -5px;border-width: 5px 5px 0;border-top-color: #000;position: absolute;border-style: solid;"></i>
                            adam.mousa13@gmail.com</div>
                    </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-xs-6 mb-1 text-xs-center">
            </h3 class="text-xs-center">حساب لينكد إن للتواصل</h3>
                <div class="tooltip bottom in" role="tooltip" style="display: block; position: relative; margin: 0; padding: 0; z-index: 100;">
                    <div class="tooltip-arrow" style="top: -5px;left: 50%;margin-left: -5px;border-width: 0 5px 5px;border-bottom-color: #000;"></div>
                    <div class="tooltip-inner" style="max-width: none;">
                        <i style="top: -4px; left: 50%;margin-left: -5px;border-width:0 5px 5px;border-bottom-color: #000;position: absolute;border-style: solid;"></i>
                        linkedIn.com/adamoxy </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection

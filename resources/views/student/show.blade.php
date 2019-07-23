@extends('layouts.master')

@section('content')
    <h1><b>{{ 'بيانات الطالب' }}</b>{{ 'للعام الدراسي' }} {{ $student->year_of_study }}</h1>
    <div class="card mt-3">
        <div class="card-header"><h4>{{ $student->full_name }}</h4></div>
        <div class="card-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        {{ 'السنه الدراسيه' }}
                    </div>
                    <div class="col-md-6">
                        {{ $student->studay_year }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'اسم الفصل' }}
                    </div>
                    <div class="col-md-6">
                        {{ $student->room->name }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'رقم الجوال' }}
                    </div>
                    <div class="col-md-6">
                        {{ $student->phone }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'البريد الالكتروني' }}
                    </div>
                    <div class="col-md-6">
                        {{ $student->email }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'تاريخ الميلاد' }}
                    </div>
                    <div class="col-md-6">
                        {{ $student->birth_date }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'الجنس' }}
                    </div>
                    <div class="col-md-6">
                        {{ $student->gender }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'الامراض' }}
                    </div>
                    <div class="col-md-6">
                        {{ $student->spcial_desises }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'حالات خاصه' }}
                    </div>
                    <div class="col-md-6">
                        {{ $student->spcial_case }}
                    </div>
                </div>
                <br>
                <h1>{{ 'بيانات ولي الامر' }}</h1>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'الاسم' }}
                    </div>
                    <div class="col-md-6">
                        {{ $student->responser_full_name }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'رقم الجوال' }}
                    </div>
                    <div class="col-md-6">
                        {{ $student->responser_phone }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'البريد الاكتروني' }}
                    </div>
                    <div class="col-md-6">
                        {{ $student->responser_email }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'العنوان' }}
                    </div>
                    <div class="col-md-6">
                        {{ $student->responser_address }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'الوظيفه' }}
                    </div>
                    <div class="col-md-6">
                        {{ $student->responser_jobe }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'صله القرابه' }}
                    </div>
                    <div class="col-md-6">
                        {{ $student->responser_relation }}
                    </div>
                </div>
            </div>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-md-6">
                    <a href="/student/{{ $student->id }}/edit" class="btn btn-primary">تعديل</a>
                </div>
                <div class="col-md-6">
                    <form action="/student/{{ $student->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">{{ 'حذف' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.master')

@section('content')
    <h1><b>{{ 'بيانات الموظف' }}</b></h1>
    <div class="card mt-3">
        <div class="card-header"><h4>{{ $employee->full_name }}</h4></div>
        <div class="card-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        {{ 'عنوان الوظيفه' }}
                    </div>
                    <div class="col-md-6">
                        {{ $employee->jobe_title }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'رقم الجوال' }}
                    </div>
                    <div class="col-md-6">
                        {{ $employee->phone }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'البريد الالكتروني' }}
                    </div>
                    <div class="col-md-6">
                        {{ $employee->email }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'تاريخ الميلاد' }}
                    </div>
                    <div class="col-md-6">
                        {{ $employee->birth_date }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'الجنس' }}
                    </div>
                    <div class="col-md-6">
                        {{ $employee->gender }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'تاريخ التعيين' }}
                    </div>
                    <div class="col-md-6">
                        {{ $employee->hirring_date }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'نوع الوظيفه' }}
                    </div>
                    <div class="col-md-6">
                        {{ $employee->jobe_type }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'سنوات الخبره' }}
                    </div>
                    <div class="col-md-6">
                        {{ $employee->experince_year }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'ملاحظات عن الموظف' }}
                    </div>
                    <div class="col-md-6">
                        {{ $employee->employee_note }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'ملاحظات عن الوظيفه' }}
                    </div>
                    <div class="col-md-6">
                        {{ $employee->jobe_description }}
                    </div>
                </div>
            </div>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-md-6">
                    <a href="/employee/{{ $employee->id }}/edit" class="btn btn-primary">تعديل</a>
                </div>
                <div class="col-md-6">
                    <form action="/employee/{{ $employee->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">{{ 'حذف' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

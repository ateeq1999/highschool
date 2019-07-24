@extends('layouts.master')

@section('content')
    <h1><b>{{ 'عرض بيانات الماده ' }}</b></h1>
    <div class="card mt-3">
        <div class="card-header"><h4>{{ $subject->name }}</h4></div>
        <div class="card-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        {{ 'اسم الماده' }}
                    </div>
                    <div class="col-md-6">
                        {{ $subject->name }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'السنه الدراسيه' }}
                    </div>
                    <div class="col-md-6">
                        {{ $subject->studay_year }}
                    </div>
                </div>
            </div>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-md-6">
                    <a href="/subject/{{ $subject->id }}/edit" class="btn btn-primary">تعديل</a>
                </div>
                <div class="col-md-6">
                    <form action="/subject/{{ $subject->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">{{ 'حذف' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

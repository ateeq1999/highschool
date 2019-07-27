@extends('layouts.master')

@section('content')
    <h1><b>{{ 'عرض بيانات المستخدم ' }}</b></h1>
    <div class="card mt-3">
        <div class="card-header"><h4>{{ $user->name }}</h4></div>
        <div class="card-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        {{ 'اسم المستخدم' }}
                    </div>
                    <div class="col-md-6">
                        {{ $user->name }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'البريد الالكتروني' }}
                    </div>
                    <div class="col-md-6">
                        {{ $user->email }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'تاريخ التسجيل' }}
                    </div>
                    <div class="col-md-6">
                        {{ $user->created_at }}
                    </div>
                </div>
            </div>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-md-6">
                    <a href="/user/{{ $user->id }}/edit" class="btn btn-primary">تعديل</a>
                </div>
                <div class="col-md-6">
                    <form action="/user/{{ $user->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">{{ 'حذف' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

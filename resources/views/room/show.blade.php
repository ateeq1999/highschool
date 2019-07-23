@extends('layouts.master')

@section('content')
    <h1><b>{{ 'تعديل بيانات الفصل ' }}</b></h1>
    <div class="card mt-3">
        <div class="card-header"><h4>{{ $room->name }}</h4></div>
        <div class="card-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        {{ 'اسم الفصل' }}
                    </div>
                    <div class="col-md-6">
                        {{ $room->name }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'السنه الدراسيه' }}
                    </div>
                    <div class="col-md-6">
                        {{ $room->year }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'عدد الطلاب' }}
                    </div>
                    <div class="col-md-6">
                        {{ $room->students->count() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-md-6">
                    <a href="/room/{{ $room->id }}/edit" class="btn btn-primary">تعديل</a>
                </div>
                <div class="col-md-6">
                    <form action="/room/{{ $room->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">{{ 'حذف' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.master')

@section('content')
    <h1><b>{{ 'الفاتوره رقم' }}</b> {{ $invoice->id }}</h1>
    <div class="card mt-3">
        <div class="card-header"><h4>{{ $invoice->student->full_name }}</h4></div>
        <div class="card-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        {{ 'اسم الطالب' }}
                    </div>
                    <div class="col-md-6">
                        {{ $invoice->student->full_name }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'اسم الفصل' }}
                    </div>
                    <div class="col-md-6">
                        {{ $invoice->student->room->name }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'تارخ استخراج الفاتوره' }}
                    </div>
                    <div class="col-md-6">
                        {{ $invoice->created_at }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'جمله الرسوم' }}
                    </div>
                    <div class="col-md-6">
                        {{ $invoice->student->funds }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'القيم المدفوعه' }}
                    </div>
                    <div class="col-md-6">
                        {{ $invoice->payed }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        {{ 'القيمه المتبقه من جمله الرسوم' }}
                    </div>
                    <div class="col-md-6">
                        {{ $invoice->left }}
                    </div>
                </div>
            </div>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-md-6">
                    <a href="/invoice/{{ $invoice->id }}/edit" class="btn btn-primary">تعديل</a>
                </div>
                <div class="col-md-6">
                    <form action="/invoice/{{ $invoice->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">{{ 'حذف' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.master')

@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">حسابات الطلاب  </h2>
        </div>
        <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
                    <li class="breadcrumb-item"><a href="#">الحسابات</a></li>
                    <li class="breadcrumb-item active">الطلاب</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="content-body">
        <div class="row">
            <div class="col-xs-12">
                <div class="card">
                    <div class="col-sm-12 col-lg-4 col-xl-2">
                        <ul class="pl-0 list-unstyled">
                            <li class="mb-1">
                            <li class=" nav-item">
                                <a href="/invoice/create" class="btn btn-success btn-block">
                                    <i class="icon-plus">
                                        دفع قسط جديد  
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body collapse in">
                        <div class="table-bordered">
                        
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th># </th>
                                        <th> الاسم </th>
                                        <th> الجنس </th>
                                        <th> الصف  </th>
                                        <th> الفصل </th>
                                        <th> القيمة المحددة</th>
                                        <th> تم دفع </th>
                                        <th>تبقت</th>
                                        <th>أخرى</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($invoices as $invoice)
                                        <tr>
                                            <th scope="row">{{ $invoice->id }}</th>
                                            <td>{{ $invoice->student->full_name }}</td>
                                            <td>{{ $invoice->student->gender }}</td>
                                            <td>{{ $invoice->student->room->name }}</td>
                                            <td>{{ $invoice->student->room->name }}</td>
                                            <td>{{ $invoice->student->funds }}</td>
                                            <td>{{ $invoice->payed }}</td>
                                            <td>{{ $invoice->left }}</td>
                                            <td>
                                                <ul class="pl-0 list-unstyled">
                                                    <li class="mb-1">
                                                        <button type="button" class="btn btn-success btn-block"> تفاصيل </button>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

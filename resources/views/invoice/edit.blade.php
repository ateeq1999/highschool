@extends('layouts.master')

@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">دفع رسوم دراسية  </h2>
        </div>
        <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
                    <li class="breadcrumb-item"><a href="#">الحسابات</a></li>
                    <li class="breadcrumb-item active">رسوم</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="content-body">
        <div class="row match-height">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card" style="">
                    <div class="card-body collapse in">
                        <div class="card-block">
                            <form action="/invoice/{{ $invoice->id }}" class="form" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>قيمة الدفع </label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">SDG</span>
                                                    <input value="{{ $invoice->payed }}" name="payed" type="number" class="form-control square" placeholder="بالجنيه" aria-label="Amount (to the nearest dollar)">
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="form-actions">
                                        <button class="btn btn-primary mr-3" type="submit">{{ 'اضافه' }}</button>
                                        <a class="btn btn-danger ml-2" href="/invoice">{{ 'الغاء' }}</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

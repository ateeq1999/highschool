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
                            <form action="/invoice/create_tow" class="form" method="POST">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label> الصف الدراسي  </label>
                                                <select id="room" name="room" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Status" data-original-title="" title="">
                                                    @foreach ($rooms as $room)
                                                        <option value="{{ $room->id }}">{{ $room->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button class="btn btn-primary mr-3" type="submit">{{ 'اضافه' }}</button>
                                        <a class="btn btn-danger ml-2" href="/subject">{{ 'الغاء' }}</a>
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

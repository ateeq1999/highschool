@extends('layouts.master')

@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">إضافة مادة </h2>
        </div>
        <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">الرئيسية</a>
                    </li>
                    <li class="breadcrumb-item"><a href="/subject">المواد الدراسية </a>
                    </li>
                    <li class="breadcrumb-item active">إضافة مادة 
                    </li>
                </ol>
            </div>
        </div>
    </div>
    @include('layouts.subject_form')
@endsection

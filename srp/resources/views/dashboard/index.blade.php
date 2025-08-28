@extends('layouts.app')

@section('content')
<div class="content pb-0">

    {{-- Page Header --}}
    @include('dashboard._header')

    {{-- Welcome Banner --}}
    @include('dashboard._welcome')

    {{-- Stats Row --}}
    @include('dashboard._stats')

    {{-- Charts Row --}}
    @include('dashboard._charts')
    @include('dashboard._metric')
    @include('dashboard._list')

    {{-- Transactions, Registered, Expired Plans --}}
    <div class="row">
        <div class="col-xxl-4 col-xl-12 d-flex">
            @include('dashboard._transactions')
        </div>
        <div class="col-xxl-4 col-xl-12 d-flex">
            @include('dashboard._companies')
        </div>
    </div>

</div>
@endsection

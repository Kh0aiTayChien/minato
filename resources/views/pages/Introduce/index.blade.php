@extends('page-layout.master')
@section('section')
    @include('pages.Introduce.sec1')
    @include('pages.Introduce.sec2')
    @if(app()->getLocale() === 'vi')
        @include('pages.Introduce.sec3')
    @elseif(app()->getLocale() === 'en')
        @include('pages.Introduce.sec3-english')
    @endif
    @include('pages.Introduce.sec3')
    @include('pages.Introduce.sec4')
    @include('pages.Introduce.sec5')
@stop

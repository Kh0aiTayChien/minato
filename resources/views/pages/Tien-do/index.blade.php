@extends('page-layout.master')
@section('section')
    @include('pages.Introduce.sec1')
    @if(app()->getLocale() === 'vi')
        @include('pages.Tien-do.sec2')
    @elseif(app()->getLocale() === 'en')
        @include('pages.Tien-do.sec2-eng')
    @elseif(app()->getLocale() === 'ja')
        @include('pages.Tien-do.sec2-ja')
    @endif
@stop

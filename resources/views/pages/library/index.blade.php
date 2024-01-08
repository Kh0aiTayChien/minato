@extends('page-layout.master')
@section('section')
    @include('pages.Introduce.sec1')
    @if(app()->getLocale() === 'vi')
        @include('pages.library.section-thuvien')
    @elseif(app()->getLocale() === 'en')
        @include('pages.library.section-thuvien')
    @elseif(app()->getLocale() === 'ja')
        @include('pages.library.section-thuvien-ja')
    @endif
@stop

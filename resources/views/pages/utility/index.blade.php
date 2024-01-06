@extends('page-layout.master')
@section('section')
    @include('pages.Introduce.sec1')
    @if(app()->getLocale() === 'vi')
        @include('pages.utility.section-5')
    @elseif(app()->getLocale() === 'en')
        @include('pages.utility.section-5-eng')
    @elseif(app()->getLocale() === 'ja')
        @include('pages.utility.section-5-ja')
    @endif
@stop

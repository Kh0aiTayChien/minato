@extends('page-layout.master')
@section('section')
    @include('pages.Introduce.sec1')
    @if(app()->getLocale() === 'vi')
        @include('pages.contact-v.sec2')
    @elseif(app()->getLocale() === 'en')
        @include('pages.contact-v.sec2')
    @elseif(app()->getLocale() === 'ja')
        @include('pages.contact-v.sec2-jp')
    @endif
@stop

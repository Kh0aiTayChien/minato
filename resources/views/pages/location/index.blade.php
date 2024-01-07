@extends('page-layout.master')
@section('section')
    @include('pages.Introduce.sec1')
    @if(app()->getLocale() === 'vi')
        @include('pages.location.sec2')
    @elseif(app()->getLocale() === 'en')
        @include('pages.location.sec2')
    @elseif(app()->getLocale() === 'ja')
        @include('pages.location.sec2-jp')
    @endif
    @if(app()->getLocale() === 'vi')
        @include('pages.location.sec3')
    @elseif(app()->getLocale() === 'en')
        @include('pages.location.sec3')
    @elseif(app()->getLocale() === 'ja')
        @include('pages.location.sec3-jp')
    @endif
@stop

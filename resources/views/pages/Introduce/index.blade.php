@extends('page-layout.master')
@section('section')
    @include('pages.Introduce.sec1')
    @if(app()->getLocale() === 'vi')
        @include('pages.Introduce.sec2')
    @elseif(app()->getLocale() === 'en')
        @include('pages.Introduce.sec2')
    @elseif(app()->getLocale() === 'ja')
        @include('pages.Introduce.sec2-jp')
    @endif
    @if(app()->getLocale() === 'vi')
        @include('pages.Introduce.sec3')
    @elseif(app()->getLocale() === 'en')
        @include('pages.Introduce.sec3-english')
    @elseif(app()->getLocale() === 'ja')
        @include('pages.Introduce.sec3-jp')
    @endif
{{--    @include('pages.Introduce.sec3')--}}
    @if(app()->getLocale() === 'vi')
        @include('pages.Introduce.sec4')
    @elseif(app()->getLocale() === 'en')
        @include('pages.Introduce.sec4')
    @elseif(app()->getLocale() === 'ja')
        @include('pages.Introduce.sec4-jp')
    @endif
    @if(app()->getLocale() === 'vi')
        @include('pages.Introduce.sec5')
    @elseif(app()->getLocale() === 'en')
        @include('pages.Introduce.sec5')
    @elseif(app()->getLocale() === 'ja')
        @include('pages.Introduce.sec5-jp')
    @endif
@stop

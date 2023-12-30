@extends('page-layout.master')
@section('section')
    @if(app()->getLocale() === 'vi')
        @include('pages.Introduce.sec1')
        @include('pages.news.show.article')
        @include('pages.news.show.section-7')
    @elseif(app()->getLocale() === 'en')
        @include('pages.Introduce.sec1')
        @include('pages.news.show.article')
        @include('pages.news.show.section-7-eng')
    @endif
@stop

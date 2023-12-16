@extends('page-layout.master')
@section('section')
    @if(app()->getLocale() === 'vi')
        @include('pages.home-page.section-1')
    @elseif(app()->getLocale() === 'en')
        @include('pages.home-page.section-1-eng')
    @endif
    @include('pages.home-page.sec2')
    @include('pages.home-page.sec3')
    @include('pages.home-page.section-5')
    @include('pages.home-page.section-6')
    @include('pages.home-page.section-7')
    @include('pages.home-page.sec7-v')
@stop

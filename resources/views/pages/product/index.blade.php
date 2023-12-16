@extends('page-layout.master')
@section('section')
    @include('pages.Introduce.sec1')
    @if(app()->getLocale() === 'vi')
        @include('pages.product.sec2')
        @include('pages.product.sec3')
        @include('pages.product.section-map')
    @elseif(app()->getLocale() === 'en')
        @include('pages.product.sec2-eng')
        @include('pages.product.sec3-eng')
        @include('pages.product.section-map-eng')
    @endif
@stop

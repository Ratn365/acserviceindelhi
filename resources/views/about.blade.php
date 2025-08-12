@extends('layouts.app')

@section('content')
    
    <x-page-header title="About Us" subtitle="About"/>
    @include('components.about')
    @include('components.facts')
   
    @include('components.team')
    @include('components.testimonial')
    
@endsection
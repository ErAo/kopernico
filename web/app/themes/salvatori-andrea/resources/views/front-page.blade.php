@extends('layouts.app')

@section('content')

@include('partials.hero')
@include('partials.actividades-home')
@include('partials.nosotros-home')
@include('partials.servicios-home')
@include('partials.publicidad-home')
@include('partials.blog-home')

@endsection

<!-- comentario de el cotenedor anterior -->

<!-- @include('partials.page-header')
<div>
<pages-loop></pages-loop>
@include('partials.info')
<posts-loop></posts-loop>
</div> -->
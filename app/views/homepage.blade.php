@extends('template')

@section('main')
{{-- Main Frame --}}
<div class="theme">
    {{PictureFill::make("images/themes/fans.jpg","Greek Laravel Fans")}}

<div class="community"><strong>{{$devscount}}</strong> προγραμματιστές ανακαλύφθηκαν. Ας γίνουμε περισσότεροι!</div>
@stop
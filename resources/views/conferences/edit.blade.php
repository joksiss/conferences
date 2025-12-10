@extends('layouts.app')

@section('content')

    <h1 class="text-2xl font-bold mb-4">{{ __('app.edit_conference') }}</h1>

    <form method="POST" action="{{ route('conferences.update', $conference) }}">
        @csrf
        @method('PUT')

        @include('conferences.partials._form', ['buttonText' => __('app.update')])

    </form>

@endsection

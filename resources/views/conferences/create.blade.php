@extends('layouts.app')
@section('content')

    <h1 class="text-2xl font-bold mb-4">{{ __('app.create_conference') }}</h1>

    <form method="POST" action="{{ route('conferences.store') }}">
        @csrf

        @include('conferences.partials._form', ['buttonText' => __('app.add')])

    </form>

@endsection

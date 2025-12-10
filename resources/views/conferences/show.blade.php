@extends('layouts.app')

@section('content')

    <h1 class="text-2xl font-bold mb-4">{{ $conference->title }}</h1>

    <div class="bg-white p-4 rounded border border-gray-300 space-y-2">
        <p><strong>{{ __('app.description') }}:</strong> {{ $conference->description }}</p>
        <p><strong>{{ __('app.date') }}:</strong> {{ $conference->conference_date }}</p>
        <p><strong>{{ __('app.address') }}:</strong> {{ $conference->address }}</p>
        <p><strong>{{ __('app.participants') }}:</strong> {{ $conference->participants }}</p>
        <p><strong>{{ __('app.city') }}:</strong> {{ $conference->city }}</p>
    </div>

    <a href="{{ route('conferences.index') }}"
       class="mt-4 inline-block bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">
        {{ __('app.back') }}
    </a>

@endsection

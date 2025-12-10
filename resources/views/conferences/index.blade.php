@extends('layouts.app')

@section('content')

    <h1 class="text-2xl font-bold mb-4">{{ __('app.conferences') }}</h1>

    @auth
        <a href="{{ route('conferences.create') }}"
           class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 mb-4">
            {{ __('app.add_conference') }}
        </a>
    @endauth

    <table class="w-full bg-white border border-gray-300 rounded">
        <thead class="bg-gray-100 border-b">
        <tr>
            <th class="text-left p-2">{{ __('app.title') }}</th>
            <th class="text-left p-2">{{ __('app.date') }}</th>
            <th class="text-left p-2">{{ __('app.city') }}</th>
            <th class="text-left p-2">{{ __('app.actions') }}</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($conferences as $conference)
            <tr class="border-b">
                <td class="p-2">{{ $conference->title }}</td>
                <td class="p-2">{{ $conference->conference_date }}</td>
                <td class="p-2">{{ $conference->city }}</td>

                <td class="p-2 flex space-x-2">

                    {{-- Peržiūra (leidžiama neprisijungus) --}}
                    <a href="{{ route('conferences.show', $conference) }}"
                       class="text-blue-600 hover:underline">
                        {{ __('app.view') }}
                    </a>

                    @auth
                        <a href="{{ route('conferences.edit', $conference) }}"
                           class="text-yellow-600 hover:underline">
                            {{ __('app.edit') }}
                        </a>

                        <form method="POST"
                              action="{{ route('conferences.destroy', $conference) }}">
                            @csrf
                            @method('DELETE')

                            <button class="text-red-600 hover:underline"
                                    onclick="return confirm('{{ __('app.confirm_delete') }}')">
                                {{ __('app.delete') }}
                            </button>
                        </form>
                    @endauth

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

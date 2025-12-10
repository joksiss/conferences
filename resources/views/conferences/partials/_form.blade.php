<div class="space-y-4">

    <div>
        <label>{{ __('app.title') }}</label>
        <input type="text" name="title"
               value="{{ old('title', $conference->title ?? '') }}"
               class="block w-full border-gray-300 rounded"/>
        @error('title') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>{{ __('app.description') }}</label>
        <textarea name="description" rows="4"
                  class="block w-full border-gray-300 rounded">{{ old('description', $conference->description ?? '') }}</textarea>
        @error('description') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>{{ __('app.date') }}</label>
        <input type="date" name="conference_date"
               value="{{ old('conference_date', isset($conference) ? $conference->conference_date : '') }}"
               class="block w-full border-gray-300 rounded"/>
        @error('conference_date') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>{{ __('app.address') }}</label>
        <input type="text" name="address"
               value="{{ old('address', $conference->address ?? '') }}"
               class="block w-full border-gray-300 rounded"/>
        @error('address') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>{{ __('app.participants') }}</label>
        <input type="number" name="participants"
               value="{{ old('participants', $conference->participants ?? '') }}"
               class="block w-full border-gray-300 rounded"/>
        @error('participants') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>{{ __('app.city') }}</label>
        <input type="text" name="city"
               value="{{ old('city', $conference->city ?? '') }}"
               class="block w-full border-gray-300 rounded"/>
        @error('city') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        {{ $buttonText }}
    </button>
</div>

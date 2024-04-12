<div class="flex flex-col space-y-4">
    <!-- Title -->
    <div>
        <x-input-label for="title" :value="__('Title')" />
        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')"  />
        <x-input-error :messages="$errors->get('title')" class="mt-2" />
    </div>

    <!-- Description -->
    <div>
        <x-input-label for="description" :value="__('Description')" />
        <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')"  />
        <x-input-error :messages="$errors->get('description')" class="mt-2" />
    </div>

    <!-- Submit Button -->
    <div>
        <x-primary-button>
            {{ __('Submit') }}
        </x-primary-button>
    <div>
</div>
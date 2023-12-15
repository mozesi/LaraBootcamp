<div>
    <div>
        <form wire:submit="saveMyEducation">

            <input type="test" wire:model="nameOfCertificate" placeholder="Name of Certificate">
            <div>@error('title') {{ $message }} @enderror</div>
            <input type="test" wire:model="nameOfSchoolAttended" placeholder="Name of School Attended">
            <input type="date" wire:model="yearStartedSchool" >
            <input type="date" wire:model="yearGraduatedSchool">
            <textarea

                wire:model="descriptionOfStudy"

                placeholder="{{ __('What\'s on your mind?') }}"

                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"

            ></textarea>

            <x-input-error :messages="$errors->get('message')" class="mt-2" />

            <x-primary-button class="mt-4">{{ __('Save') }}</x-primary-button>

        </form>

    </div>
</div>

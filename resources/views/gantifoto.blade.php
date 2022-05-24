<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            <img src="{{asset('/images')}}/konoha.png" width="100" height="100">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('ganti-foto') }}" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            
            <div class="mt-4">
                <x-label for="image" :value="__('Upload Foto Profile')" />

                <x-input id="image" class="block mt-1 w-full"
                                type="file"
                                name="image" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                

                <x-button class="ml-4">
                    {{ __('Change Avatar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

<x-app-layout>
    <div class="py-12">
        <div class="w-full mx-auto sm:px-6 lg:px-9">
            <div class="px-4 sm:px-6 lg:px-8">
                <form method="POST" action="{{ route('clients.store') }}">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block w-full mt-1" type="text" name="name"
                            :value="old('name')" required autofocus />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block w-full mt-1" type="email" name="email"
                            :value="old('email')" required />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password_id" :value="__('Password')" />
                        <x-text-input id="password_id" class="block w-full mt-1" type="password" name="password"
                            :value="old('password')" required />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    {{-- Address --}}
                    <div class="mt-4">
                        <x-input-label for="address_id" :value="__('Address')" />

                        <x-select-address />

                        <x-input-error :messages="$errors->get('address_id')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-link :route="route('clients.index')">
                            {{ __('Voltar') }}
                        </x-link>
                        <x-primary-button class="ml-4">
                            {{ __('Save') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

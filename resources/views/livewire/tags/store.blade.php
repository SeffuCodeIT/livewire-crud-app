    @livewireStyles
<div class="p-4">
    <?php
    $disabled = $errors->any() || empty($this->name) || empty($this->email) ? true : false;
    ?>
    <div class="flex justify-center gap-4">
        <x-button class="items-center bg-green-500 hover:bg-green-400" wire:click="openModalToCreateTag" wire:target="openModalToCreateTag" wire:loading.attr="disabled">
            {{__('Create Tag')}}
        </x-button>
        <div class="w-12/12">
            <x-alerts.message/>
        </div>
    </div>
    <x-dialog-modal wire:model="openModal">
{{--        title--}}
        <x-slot name="title">
            {{__('Create Tag')}}
        </x-slot>
{{--        content--}}
        <x-slot name="content">
            <section class="w-full p-4 mx-auto space-y-4">

                <h2 class="text-sm text-indigo-400 uppercase">
                    Create Tags
                </h2>
{{--                alerts--}}
                @if (session()->has('success'))
                    <x-alerts.message>
                        {{ session('success') }}
                    </x-alerts.message>
                @endif

{{--                form--}}
                <form wire:submit.prevent="store" class="space-y-4" id="SubmitForm">
                    <div class="space-y-4">
                        {{--            name--}}
                        <div>
                            <x-label for="name" value="{{ __('Name') }}" />
                            <x-input wire:model.debounce.500ms="name" id="name" class="block mt-1 w-full" type="text" name="name" required />
                            <x-input-error for="name"/>
                        </div>
                        {{--            email--}}
                        <div>
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input wire:model.debounce.500ms="email" id="email" class="block mt-1 w-full" type="email" name="email" required />
                            <x-input-error for="email"/>
                        </div>
                    </div>
                </form>
            </section>
        </x-slot>
{{--        footer--}}
        <x-slot name="footer">
{{--            cancel button--}}
            <x-secondary-button wire:click="$toggle('openModal')">
                {{__('Nevermind')}}
            </x-secondary-button>

            {{--            submit button--}}
            <x-buttons.primary wire:target="store" wire:loading.attr="disabled" wire:click="store"
                               type="submit" :disabled="$disabled" form="SubmitForm">

                {{__('Create')}}
            </x-buttons.primary>
        </x-slot>

    </x-dialog-modal>

</div>
@livewireScripts

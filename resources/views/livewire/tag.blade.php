<div>
    @livewireStyles
    {{-- In work, do what you enjoy. --}}
    <x-slot name="title">

        {{__('tags')}}
    </x-slot>

{{--    <h2>Tags page</h2>--}}
    <livewire:tags.store/>
{{--    <livewire:store/>--}}
{{--    @livewire('tags.store')--}}
{{--    <livewire:tags.store/>--}}

    @livewireScripts
</div>

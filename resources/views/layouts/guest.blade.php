<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @livewireStyles

        <x-partials.head :title="$title ?? 'Some page'"/>
    </head>
    <body>
        <x-partials.nav/>

            <main class="font-sans text-gray-900 antialiased">
                {{ $slot ?? ''}}
            </main>


        <section>
            {{$body ?? ''}}
        </section>
{{--        <livewire:tags.store/>--}}

{{--        <p>tHIS IS THE MAIN PAGE</p>--}}
        <x-partials.footer/>

    @livewireScripts
    </body>
</html>

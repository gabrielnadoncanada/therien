<x-filament::page>
    <form wire:submit.prevent="submit">

        {{ $this->form }}


        <button type="submit">submit</button>
{{--		<x-tables::button type="submit" class="mt-2">--}}
{{--            @lang('Save')--}}
{{--        </x-tables::button>--}}
    </form>
</x-filament::page>
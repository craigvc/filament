<x-filament::form class="space-y-6">
    <x-filament::fields :fields="$this->fields()" />    

    <x-filament::button type="submit" class="btn-primary w-full" wire:loading.attr="disabled">
        <x-filament::loader class="w-6 h-6 absolute left-0 ml-2 pointer-events-none" wire:loading />
        {{ __('filament::auth.register') }}
    </x-filament::button>
</x-filament::form>
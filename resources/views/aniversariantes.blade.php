<x-layouts::app :title="__('Aniversariantes')">
    <div class="flex h-full w-full flex-1 flex-col items-center gap-6 rounded-xl">
        <div class="w-full max-w-2xl">
            <flux:heading size="xl" level="1">{{ __('Aniversariantes') }}</flux:heading>
            <flux:subheading size="lg">{{ __('Lista de aniversariantes cadastrados') }}</flux:subheading>
        </div>

        <flux:table striped class="w-full max-w-2xl">
            <flux:table.columns>
                <flux:table.column>{{ __('Nome') }}</flux:table.column>
                <flux:table.column>{{ __('Aniversário') }}</flux:table.column>
                <flux:table.column align="end">{{ __('Idade') }}</flux:table.column>
            </flux:table.columns>

            <flux:table.rows>
                @forelse ($aniversariantes as $aniversariante)
                    <flux:table.row :key="$aniversariante->id">
                        <flux:table.cell variant="strong" class="flex items-center gap-3">
                            <flux:avatar size="sm" :name="$aniversariante->nome" color="auto" />
                            {{ $aniversariante->nome }}
                        </flux:table.cell>
                        <flux:table.cell align="end">
                            <flux:badge color="lime" size="sm" icon="cake">
                                {{ $aniversariante->aniversario->format('d/m/Y') }}
                            </flux:badge>
                        </flux:table.cell>
                        <flux:table.cell align="end">
                            <flux:badge color="indigo" size="sm" icon="calendar">
                                {{ floor($aniversariante->idade) }}
                            </flux:badge>
                        </flux:table.cell>
                    </flux:table.row>
                @empty
                    <flux:table.row>
                        <flux:table.cell colspan="2" class="text-center text-zinc-500">
                            {{ __('Nenhum aniversariante cadastrado.') }}
                        </flux:table.cell>
                    </flux:table.row>
                @endforelse
            </flux:table.rows>
        </flux:table>
    </div>
</x-layouts::app>

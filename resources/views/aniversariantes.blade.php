<x-layouts::app :title="__('Aniversariantes')">
    <div class="flex h-full flex-1 flex-col items-center gap-6 items-center rounded-xl">
        <div class="flex w-full max-w-2xl items-end justify-between gap-4">
            <div>
                <flux:heading size="xl" level="1">{{ __('Aniversariantes') }}</flux:heading>
                <flux:subheading size="lg">{{ __('Lista de aniversariantes cadastrados') }}</flux:subheading>
            </div>
            <flux:button
                variant="primary"
                size="sm"
                icon="plus"
                class="cursor-pointer hover:scale-105"
                href="{{ route('aniversariantes.create') }}"
            >
                {{ __('Adicionar Aniversariante') }}
            </flux:button>
        </div>
        @if (session('success'))
            <flux:callout icon="check-circle" color="green" class="w-full max-w-2xl">
                {{ session('success') }}
            </flux:callout>
        @endif
        <flux:table striped container:class="w-full max-w-2xl">
            <flux:table.columns>
                <flux:table.column>{{ __('Nome') }}</flux:table.column>
                <flux:table.column>{{ __('Aniversário') }}</flux:table.column>
                <flux:table.column align="end">{{ __('Idade') }}</flux:table.column>
                <flux:table.column align="end">{{ __('Ações') }}</flux:table.column>
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
                        <flux:table.cell align="end">
                            <flux:button
                                size="sm"
                                variant="ghost"
                                icon="pencil-square"
                                class="cursor-pointer border border-zinc-200 hover:bg-zinc-50"
                                href="{{ route('aniversariantes.edit', $aniversariante->id) }}"
                            >
                                {{ __('Editar') }}
                            </flux:button>
                        </flux:table.cell>
                    </flux:table.row>
                @empty
                    <flux:table.row>
                        <flux:table.cell colspan="4" class="text-center text-zinc-500">
                            {{ __('Nenhum aniversariante cadastrado.') }}
                        </flux:table.cell>
                    </flux:table.row>
                @endforelse
            </flux:table.rows>
        </flux:table>
    </div>
</x-layouts::app>

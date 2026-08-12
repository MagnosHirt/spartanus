<x-layouts::app :title="__('Aniversariantes')">
    <div class="flex h-full flex-1 flex-col items-center gap-6 items-center rounded-xl">
        <div class="flex w-full max-w-2xl items-end justify-between gap-4">
            <div>
                <flux:heading size="xl" level="1">{{ __('Edição de Aniversariante') }}</flux:heading>
                <flux:subheading size="lg">{{ __('Preencha os dados do aniversariante') }}</flux:subheading>
            </div>
            
        </div>
        <div class="card flex flex-col items-center w-full max-w-2xl gap-4 p-6">
            <form id="update-form" action="{{ route('aniversariantes.update', $aniversariante->id) }}" method="POST" class="flex flex-col gap-4 w-full">
                @csrf
                @method('PUT')
                <flux:input label="Nome" name="nome" value="{{ $aniversariante->nome }}" />
                <flux:input label="Data de Nascimento" name="data_nascimento" type="date" value="{{ $aniversariante->aniversario->format('Y-m-d') }}" />
            </form>
            <form id="destroy-form" action="{{ route('aniversariantes.destroy', $aniversariante->id) }}" method="POST" onsubmit="return confirm('{{ __('Tem certeza que deseja remover este aniversariante?') }}')"></form>

            <div class="flex items-center gap-2">
                <flux:button form="update-form" type="submit" size="sm" class="cursor-pointer bg-green-500 hover:bg-green-600" icon="check">Salvar</flux:button>
                <flux:button type="button" size="sm" class="cursor-pointer" onclick="window.location='{{ route('aniversariantes') }}'" icon="x-mark">Cancelar</flux:button>
                <flux:button form="destroy-form" type="submit" size="sm" class="cursor-pointer bg-red-500 hover:bg-red-600" icon="trash">Deletar</flux:button>
            </div>
        </div>
    </div>
</x-layouts::app>

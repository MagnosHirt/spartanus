<x-layouts::app :title="__('Aniversariantes')">
    <div class="flex h-full flex-1 flex-col items-center gap-6 items-center rounded-xl">
        <div class="flex w-full max-w-2xl items-end justify-between gap-4">
            <div>
                <flux:heading size="xl" level="1">{{ __('Edição de Aniversariante') }}</flux:heading>
                <flux:subheading size="lg">{{ __('Preencha os dados do aniversariante') }}</flux:subheading>
            </div>
            
        </div>
        <div class="card items-start w-full max-w-2xl gap-4 p-6">
            <form action="{{ route('aniversariantes.update', $aniversariante->id) }}" method="POST" class="flex flex-col gap-4">
                @csrf
                @method('PUT')
                <flux:input label="Nome" name="nome" class="m-2" value="{{ $aniversariante->nome }}" />
                <flux:input label="Data de Nascimento" class="m-2" name="data_nascimento" type="date" value="{{ $aniversariante->aniversario->format('Y-m-d') }}" />
                <flux:button type="submit" class="m-2">Salvar</flux:button>
                
                <flux:button type="button" class="m-2 cursor-pointer" onclick="window.location='{{ route('aniversariantes') }}'">Cancelar</flux:button>
            </form>
            <form action="{{ route('aniversariantes.destroy', $aniversariante->id) }}" method="POST" onsubmit="return confirm('{{ __('Tem certeza que deseja remover este aniversariante?') }}')">
                @csrf
                @method('DELETE')
                <flux:button type="submit" class="m-2 bg-red-500 hover:bg-red-600 cursor-pointer">Deletar</flux:button>
            </form>
        </div>
    </div>
</x-layouts::app>

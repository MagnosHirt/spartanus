<x-layouts::app :title="__('Aniversariantes')">
    <div class="flex h-full flex-1 flex-col items-center gap-6 items-center rounded-xl">
        <div class="flex w-full max-w-2xl items-end justify-between gap-4">
            <div>
                <flux:heading size="xl" level="1">{{ __('Cadastro de Aniversariantes') }}</flux:heading>
                <flux:subheading size="lg">{{ __('Preencha os dados do aniversariante') }}</flux:subheading>
            </div>
            
        </div>
        <div class="card items-start w-full max-w-2xl gap-4 p-6">
            <form action="{{ route('aniversariantes.store') }}" method="POST" class="flex flex-col gap-4">
                @csrf
                <flux:input label="Nome" name="nome" class="m-2" />
                <flux:input label="Data de Nascimento" class="m-2" name="data_nascimento" type="date" />
                <flux:button type="submit" class="m-2">Cadastrar</flux:button>
            </form>
        </div>
    </div>
</x-layouts::app>

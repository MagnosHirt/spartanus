<x-layouts::app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
                <div class="absolute bg-black/50 p-4">
                    <flux:heading size="lg" level="2">{{ __('Aniversariantes do mês:') }}</flux:heading>
                    @forelse ($aniversariantesDoMes as $aniversariante)
                        <flux:badge color="lime" size="sm" icon="cake" class="mt-2">
                            {{ $aniversariante->nome }} - {{ $aniversariante->aniversario->format('d/m/Y') }} - Idade: {{ floor($aniversariante->idade) }} anos 
                        </flux:badge><br>
                    @empty
                        <p>{{ __('Nenhum aniversariante encontrado para este mês.') }}</p>
                    @endforelse
                </div>
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div>
    </div>
</x-layouts::app>

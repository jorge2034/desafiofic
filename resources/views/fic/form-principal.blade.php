<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Formalizarse') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Responda las dos preguntas de selección para darle información mas precisa.") }}
        </p>
    </header>

    <form method="post" action="{{ route('tramite.store') }}" class="mt-6 space-y-6">
        @csrf
        @method('post')
        @php
           // dd($rubro)
        @endphp
        <div>
            <x-input-label for="rubro" :value="__('¿Cuál es el rubro del emprendimiento?')" />
            <x-select-input id="rubro" name="rubro" :values="$rubro" class="mt-1 block w-full" required autofocus>
                <x-slot:placeholder>Elige tu rubro</x-slot:placeholder>
            </x-select-input>
        </div>

        <div>
            <x-input-label for="comuna" :value="__('¿Cuál es la comuna en la que se emplaza?')" />
            <x-select-input id="comuna" name="comuna" :values="$comuna" class="mt-1 block w-full" required>
                <x-slot:placeholder>Elige tu comuna</x-slot:placeholder>
            </x-select-input>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Generar requisitos') }}</x-primary-button>

        </div>
    </form>
</section>

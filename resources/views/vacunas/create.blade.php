<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Agregar Vacuna
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('vacunas.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md p-10">
                        <div class="mt-4">
                            <x-jet-label for="nombre" value="{{ __('Nombre') }}"/>
                            <x-jet-input id="nombre" class="block mt-1 w-full p-2 border" type="string" name="nombre" :value="old('nombre')" required autofocus autocomplete="nombre" />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="dosis" value="{{ __('Dosis') }}" />
                            <x-jet-input id="dosis" class="block mt-1 w-full p-2" type="number" name="dosis" :value="old('dosis')" required />
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-100 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest bg-blue-500 hover:bg-blue-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Crear 
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
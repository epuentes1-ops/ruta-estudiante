<x-layouts.app :title="__('Investiga y Crea')">

    <div class="flex flex-col items-center w-full gap-8 p-6">

        {{-- Encabezado --}}
        <div class="mb-8 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white">
                Investiga y crea
            </h1>

            <p class="mt-3 max-w-3xl mx-auto text-gray-600 dark:text-gray-300">
                Encuentra aquí herramientas y recursos enfocados a la investigacion académica
            </p>
        </div>

        {{-- Subsecciones --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            {{-- Encuentra guía y orientación --}}
            <a href="{{ route('investiga-y-crea.encuentra-guia-y-orientacion') }}"
                class="group block rounded-2xl border border-gray-200 bg-white p-6 shadow-sm
                      transition duration-300 hover:-translate-y-1 hover:shadow-lg
                      dark:border-gray-700 dark:bg-gray-800
                      focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">

                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Encuentra guía y orientación
                </h2>

                <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                    Conoce la guia y orientacion que trael el CRAI.
                </p>

                <span
                    class="mt-4 inline-flex items-center text-sm font-semibold text-orange-600
                             group-hover:text-orange-700 dark:text-orange-400">
                    Explorar
                    <span class="ml-2 transition-transform group-hover:translate-x-1">
                        →
                    </span>
                </span>
            </a>

            {{-- Encuentra lo que buscas --}}
            <a href="{{ route('investiga-y-crea.encuentra-lo-que-buscas') }}"
                class="group block rounded-2xl border border-gray-200 bg-white p-6 shadow-sm
                      transition duration-300 hover:-translate-y-1 hover:shadow-lg
                      dark:border-gray-700 dark:bg-gray-800
                      focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">

                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Encuentra lo que buscas
                </h2>

                <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                    Encuentra recursos que te brindaran formas de buscar un contenido bibliografico.
                </p>

                <span
                    class="mt-4 inline-flex items-center text-sm font-semibold text-orange-600
                             group-hover:text-orange-700 dark:text-orange-400">
                    Explorar
                    <span class="ml-2 transition-transform group-hover:translate-x-1">
                        →
                    </span>
                </span>
            </a>

            {{-- Escribe y cita con confianza --}}
            <a href="{{ route('investiga-y-crea.escribe-y-cita-con-confianza') }}"
                class="group block rounded-2xl border border-gray-200 bg-white p-6 shadow-sm
                      transition duration-300 hover:-translate-y-1 hover:shadow-lg
                      dark:border-gray-700 dark:bg-gray-800
                      focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">

                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Escribe y cita con confianza
                </h2>

                <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                    Explora estos recursos y encuentra herramientas para citar, organizar tus fuentes y trabajar con integridad académica.
                </p>

                <span
                    class="mt-4 inline-flex items-center text-sm font-semibold text-orange-600
                             group-hover:text-orange-700 dark:text-orange-400">
                    Explorar
                    <span class="ml-2 transition-transform group-hover:translate-x-1">
                        →
                    </span>
                </span>
            </a>

            {{-- Investiga, crea y comparte --}}
            <a href="{{ route('investiga-y-crea.investiga-crea-y-comparte') }}"
                class="group block rounded-2xl border border-gray-200 bg-white p-6 shadow-sm
                      transition duration-300 hover:-translate-y-1 hover:shadow-lg
                      dark:border-gray-700 dark:bg-gray-800
                      focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">

                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Investiga, crea y comparte
                </h2>

                <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                    Encuentra herramientas para investigar, consultar información, fortalecer tus trabajos y recibir acompañamiento cuando lo necesites.
                </p>

                <span
                    class="mt-4 inline-flex items-center text-sm font-semibold text-orange-600
                             group-hover:text-orange-700 dark:text-orange-400">
                    Explorar
                    <span class="ml-2 transition-transform group-hover:translate-x-1">
                        →
                    </span>
                </span>
            </a>

            
        </div>
    </div>

    
     @include('partials.footer')
</x-layouts.app>
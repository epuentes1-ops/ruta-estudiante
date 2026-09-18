<x-layouts.app :title="__('Vive al máximo tu espacio virtual')">

    <main class="w-full px-6 py-10">
        <div class="mx-auto max-w-7xl">

            {{-- Encabezado --}}
            <div class="mb-8 text-center">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white">
                    Tus tramites
                </h1>

                <p class="mt-3 max-w-3xl mx-auto text-gray-600 dark:text-gray-300">
                    Encuentra aquí información sobre tus tramites y los pasos a seguir para realizarlos.
                </p>
            </div>

            {{-- Subsecciones --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- Activa tu experiencia --}}
                <a href="{{ route('tus-tramites.gestiona-matricula-y-pagos') }}"
                    class="group block rounded-2xl border border-gray-200 bg-white p-6 shadow-sm
                      transition duration-300 hover:-translate-y-1 hover:shadow-lg
                      dark:border-gray-700 dark:bg-gray-800
                      focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">

                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Gestiona matrícula y pagos
                    </h2>

                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                        Conoce las herramientas y espacios que tienes disponibles
                        para gestionar tu matrícula y pagos.
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

                {{-- Gestiona novedades académicas --}}
                <a href="{{ route('tus-tramites.gestiona-novedades-academicas') }}"
                    class="group block rounded-2xl border border-gray-200 bg-white p-6 shadow-sm
                      transition duration-300 hover:-translate-y-1 hover:shadow-lg
                      dark:border-gray-700 dark:bg-gray-800
                      focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">

                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Gestiona novedades académicas
                    </h2>

                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                        Encuentra recursos, herramientas y recomendaciones para
                        preparar gestionar tus novedades académicas y mantenerte al día con tus actividades.
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

                {{-- Consulta resultados y certificados --}}
                <a href="{{ route('tus-tramites.consulta-resultados-y-certificados') }}"
                    class="group block rounded-2xl border border-gray-200 bg-white p-6 shadow-sm
                      transition duration-300 hover:-translate-y-1 hover:shadow-lg
                      dark:border-gray-700 dark:bg-gray-800
                      focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">

                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Consulta resultados y certificados
                    </h2>

                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                        Accede a la información sobre tus resultados académicos y solicita tus certificados.

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

                {{-- Preparate para tu grado --}}
                <a href="{{ route('tus-tramites.preparate-para-tu-grado') }}"
                    class="group block rounded-2xl border border-gray-200 bg-white p-6 shadow-sm
                      transition duration-300 hover:-translate-y-1 hover:shadow-lg
                      dark:border-gray-700 dark:bg-gray-800
                      focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">

                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Preparate para tu grado
                    </h2>

                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                        Accede a la información sobre los requisitos y procedimientos para graduarte.
                    </p>

                    <span
                        class="mt-4 inline-flex items-center text-sm font-semibold text-orange-600
                             group-hover:text-orange-700 dark:text-orange-400">
                        Explorar
                        <span class="ml-2 transition-transform group-hover:translate-x-1">
                            →
                        </span>
                    </span>
                    </p>

                </a>



            </div>
        </div>
    </main>

    @include('partials.footer')
</x-layouts.app>

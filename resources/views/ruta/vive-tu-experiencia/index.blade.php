<x-layouts.app :title="__('Vive al máximo tu espacio virtual')">

    <main class="w-full px-6 py-10">
        <div class="mx-auto max-w-7xl">

            {{-- Encabezado --}}
            <div class="mb-8 text-center">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white">
                    Vive tu experiencia al máximo
                </h1>

                <p class="mt-3 max-w-3xl mx-auto text-gray-600 dark:text-gray-300">
                    Encuentra aquí herramientas y recursos para aprovechar al máximo
                    tu experiencia académica y virtual.
                </p>
            </div>

            {{-- Subsecciones --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- Activa tu experiencia --}}
                <a href="{{ route('vive-tu-experiencia.activa-tu-experiencia') }}"
                    class="group block rounded-2xl border border-gray-200 bg-white p-6 shadow-sm
                      transition duration-300 hover:-translate-y-1 hover:shadow-lg
                      dark:border-gray-700 dark:bg-gray-800
                      focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">

                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Activa tu experiencia
                    </h2>

                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                        Conoce las herramientas y espacios que tienes disponibles
                        para iniciar tu experiencia académica.
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

                {{-- Equípate para estudiar --}}
                <a href="{{ route('vive-tu-experiencia.equipate-para-estudiar') }}"
                    class="group block rounded-2xl border border-gray-200 bg-white p-6 shadow-sm
                      transition duration-300 hover:-translate-y-1 hover:shadow-lg
                      dark:border-gray-700 dark:bg-gray-800
                      focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">

                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Equípate para estudiar
                    </h2>

                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                        Encuentra recursos, herramientas y recomendaciones para
                        preparar tu espacio y estudiar mejor.
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

                {{-- Organiza tu aprendizaje --}}
                <a href="{{ route('vive-tu-experiencia.organiza-tu-aprendizaje') }}"
                    class="group block rounded-2xl border border-gray-200 bg-white p-6 shadow-sm
                      transition duration-300 hover:-translate-y-1 hover:shadow-lg
                      dark:border-gray-700 dark:bg-gray-800
                      focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">

                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Organiza tu aprendizaje
                    </h2>

                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                        Planifica tus actividades, gestiona tus tiempos y organiza
                        tus recursos académicos.
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

                {{-- Conecta y participa --}}
                <a href="{{ route('vive-tu-experiencia.conecta-y-participa') }}"
                    class="group block rounded-2xl border border-gray-200 bg-white p-6 shadow-sm
                      transition duration-300 hover:-translate-y-1 hover:shadow-lg
                      dark:border-gray-700 dark:bg-gray-800
                      focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">

                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Conecta y participa
                    </h2>

                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                        Conoce espacios para interactuar, participar y conectar
                        con tu comunidad académica.
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

                {{-- Revisa cómo vas --}}
                <a href="{{ route('vive-tu-experiencia.revisa-como-vas') }}"
                    class="group block rounded-2xl border border-gray-200 bg-white p-6 shadow-sm
                      transition duration-300 hover:-translate-y-1 hover:shadow-lg
                      dark:border-gray-700 dark:bg-gray-800
                      focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">

                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Revisa cómo vas
                    </h2>

                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                        Consulta tu progreso, revisa tus avances y mantente al día
                        con tus actividades académicas.
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

                {{-- Resuelve dudas y apoyo --}}
                <a href="{{ route('vive-tu-experiencia.resuelve-dudas-y-apoyo') }}"
                    class="group block rounded-2xl border border-gray-200 bg-white p-6 shadow-sm
                      transition duration-300 hover:-translate-y-1 hover:shadow-lg
                      dark:border-gray-700 dark:bg-gray-800
                      focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">

                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Resuelve dudas y apoyo
                    </h2>

                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                        Encuentra orientación, canales de atención y recursos de
                        apoyo para resolver tus inquietudes.
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
    </main>

    @include('partials.footer')
</x-layouts.app>

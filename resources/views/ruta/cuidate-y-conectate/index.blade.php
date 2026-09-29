<x-layouts.app :title="__('Vive al máximo tu espacio virtual')">

    <div class="flex flex-col items-center w-full gap-8 p-6">

        {{-- Encabezado --}}
        <div class="mb-8 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white">
                Cuídate y conéctate
            </h1>

            <p class="mt-3 max-w-3xl mx-auto text-gray-600 dark:text-gray-300">
                Encuentra aquí herramientas y recursos enfocados a tu cuidado.
            </p>
        </div>

        {{-- Subsecciones --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            {{-- Mantente activo y saludable --}}
            <a href="{{ route('cuidate-y-conectate.mantente-activo-y-saludable') }}"
                class="group block rounded-2xl border border-gray-200 bg-white p-6 shadow-sm
                      transition duration-300 hover:-translate-y-1 hover:shadow-lg
                      dark:border-gray-700 dark:bg-gray-800
                      focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">

                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Mantente activo y saludable
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

            {{-- Equilibra estudio y vida --}}
            <a href="{{ route('cuidate-y-conectate.equilibra-estudio-y-vida') }}"
                class="group block rounded-2xl border border-gray-200 bg-white p-6 shadow-sm
                      transition duration-300 hover:-translate-y-1 hover:shadow-lg
                      dark:border-gray-700 dark:bg-gray-800
                      focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">

                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Equilibra estudio y vida
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

            {{-- fortalece-tu-bienestar --}}
            <a href="{{ route('cuidate-y-conectate.fortalece-tu-bienestar') }}"
                class="group block rounded-2xl border border-gray-200 bg-white p-6 shadow-sm
                      transition duration-300 hover:-translate-y-1 hover:shadow-lg
                      dark:border-gray-700 dark:bg-gray-800
                      focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">

                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Fortalece tu bienestar
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

            {{-- Activa tu red de apoyo --}}
            <a href="{{ route('cuidate-y-conectate.activa-tu-red-de-apoyo') }}"
                class="group block rounded-2xl border border-gray-200 bg-white p-6 shadow-sm
                      transition duration-300 hover:-translate-y-1 hover:shadow-lg
                      dark:border-gray-700 dark:bg-gray-800
                      focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">

                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Activa tu red de apoyo
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

            {{-- Vive UCompensar --}}
            <a href="{{ route('cuidate-y-conectate.vive-ucompensar') }}"
                class="group block rounded-2xl border border-gray-200 bg-white p-6 shadow-sm
                      transition duration-300 hover:-translate-y-1 hover:shadow-lg
                      dark:border-gray-700 dark:bg-gray-800
                      focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">

                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Vive UCompensar
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


        </div>
    </div>




    @include('partials.footer')
</x-layouts.app>

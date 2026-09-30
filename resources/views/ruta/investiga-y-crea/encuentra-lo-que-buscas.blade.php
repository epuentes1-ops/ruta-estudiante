<x-layouts.app :title="__('Encuentra lo que buscas')">

    <div class="flex flex-col items-center w-full gap-8 p-6">

        <!-- Banner principal -->
        <div x-data="{
            activeSlide: 0,
            slides: ['/images/banners/crea/seccion4_2.png']
        }" x-init="setInterval(() => activeSlide = (activeSlide + 1) % slides.length, 4000)"
            class="relative w-full max-w-6xl aspect-[16/6] sm:aspect-[16/7] md:aspect-[16/5] lg:aspect-[16/4] overflow-hidden rounded-2xl shadow-xl">
            <template x-for="(slide, index) in slides" :key="index">
                <img :src="slide" alt="Banner"
                    class="absolute inset-0 w-full h-full object-cover object-center transition-opacity duration-700 ease-in-out"
                    :class="{ 'opacity-100': activeSlide === index, 'opacity-0': activeSlide !== index }">
            </template>
        </div>

        <!-- ACORDEÓN-->
        <div x-data="{ openSection: 'bases' }" class="w-full max-w-6xl mx-auto mt-8 px-4 space-y-6">

            <!-- Ítem 1: Accede a bases de datos, libros y recursos digitales -->
            <div class="border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden shadow-sm">
                <button
                    class="w-full flex justify-between items-center px-4 py-3 text-left
                    focus:outline-none transition-all duration-300"
                    :class="openSection === 'bases'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] dark:text-white hover:!bg-[#362651]' :
                        'bg-gray-50 text-gray-700 hover:!bg-[#ede9fe] dark:bg-gray-800 dark:text-gray-200 dark:hover:!bg-[#b49bec] dark:hover:!text-gray-900'"
                    @click="openSection = openSection === 'bases' ? null : 'bases'">

                    <h4
                        class="text-base sm:text-lg md:text-xl lg:text-xl
                        font-semibold text-inherit">
                        Accede a bases de datos, libros y recursos digitales
                    </h4>

                    <span x-text="openSection === 'bases' ? '−' : '+'" class="text-xl font-bold text-inherit">
                    </span>

                </button>

                <div x-show="openSection === 'bases'" x-collapse class="border-t border-gray-200 dark:border-gray-700">
                    <div class="flex flex-col md:flex-row items-center justify-center gap-6 mt-6 px-4 pb-6">
                        <!-- Texto -->
                        <div class="w-full md:w-1/3 text-center md:text-left">
                            <p
                                class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                                En el CRAI tienes acceso a libros, artículos y bases de datos especializadas para
                                encontrar información que realmente aporte a tus trabajos e investigaciones.<br><br>
                                Te mostramos cómo llegar a estos recursos y sacarles provecho cuando necesites pasar de
                                una simple búsqueda a información que sí te sirve.
                            </p>

                            <br>

                            <div class="flex flex-col sm:flex-row gap-4">

                                <flux:button href="https://crai.ucompensar.edu.co/" target="_blank"
                                    rel="noopener noreferrer" icon="magnifying-glass" variant="filled"
                                    class="!bg-[#7C3AED] !text-white
                                        hover:!bg-[#362651]
                                        dark:!bg-[#7C3AED] dark:!text-white
                                        dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
                                        transition-all duration-300">
                                    Ir al buscador
                                </flux:button>

                                <flux:button href="https://login.ucompensar.basesdedatosezproxy.com/login"
                                    target="_blank" rel="noopener noreferrer" icon="circle-stack" variant="filled"
                                    class="!bg-[#7C3AED] !text-white
                                        hover:!bg-[#362651]
                                        dark:!bg-[#7C3AED] dark:!text-white
                                        dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
                                        transition-all duration-300">
                                    Ir a recursos digitales
                                </flux:button>
                            </div>
                        </div>
                        <!-- Video -->
                        <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                            <div class="aspect-video">
                                <iframe title="Accede a bases de datos, libros y recursos digitales"
                                    src="https://player.vimeo.com/video/1229299814?badge=0&autopause=0&player_id=0&app_id=58479"
                                    class="w-full h-full" frameborder="0"
                                    referrerpolicy="strict-origin-when-cross-origin"
                                    allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ítem 2:Busca información académica de forma efectiva en el catálogo -->
            <div class="border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden">
                <button
                    class="w-full flex justify-between items-center px-4 py-3 text-left
           focus:outline-none transition-all duration-300"
                    :class="openSection === 'buscar'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] dark:text-white hover:!bg-[#362651]' :
                        'bg-gray-50 text-gray-700 hover:!bg-[#ede9fe] dark:bg-gray-800 dark:text-gray-200 dark:hover:!bg-[#b49bec] dark:hover:!text-gray-900'"
                    @click="openSection = openSection === 'buscar' ? null : 'buscar'">
                    <h4
                        class="text-base sm:text-lg md:text-xl lg:text-xl
                        font-semibold text-inherit">
                        Busca información académica de forma efectiva en el catálogo
                    </h4>
                    <span x-text="openSection === 'buscar' ? '-' : '+'"
                        class="text-xl font-bold text-gray-700 dark:text-gray-200"></span>
                </button>

                <div x-show="openSection === 'buscar'" x-collapse class="border-t border-gray-200 dark:border-gray-700">
                    <div class="flex flex-col md:flex-row items-center justify-center gap-6 mt-6 px-4 pb-6">
                        <!-- Video -->
                        <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                            <div class="aspect-video">
                                <iframe title="Busca información"
                                    src="https://player.vimeo.com/video/1229623334?badge=0&autopause=0&player_id=0&app_id=58479"
                                    class="w-full h-full" frameborder="0"
                                    referrerpolicy="strict-origin-when-cross-origin"
                                    allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>

                        <!-- Texto -->
                        <div class="w-full md:w-1/3 text-center md:text-left">
                            <p
                                class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                                Buscar información para un trabajo puede ser como buscar una dirección: si sabes qué
                                estás
                                buscando y por dónde entrar, llegas mucho más rápido.<br><br>
                                En el catálogo del CRAI puedes usar palabras clave, filtros y búsquedas más precisas
                                para
                                encontrar libros y materiales que realmente te sirvan.<br><br>
                                Te mostramos cómo hacerlo en pocos pasos.
                            </p>
                            <br>

                            <div class="flex flex-col sm:flex-row gap-4">

                                <flux:button href="https://crai.ucompensar.edu.co/" target="_blank"
                                    rel="noopener noreferrer" icon="book-open" variant="filled"
                                    class="!bg-[#7C3AED] !text-white
                                        hover:!bg-[#362651]
                                        dark:!bg-[#7C3AED] dark:!text-white
                                        dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
                                        transition-all duration-300">
                                    Ir al catálogo
                                </flux:button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ítem 3: Solicita servicios bibliográficos y documentales -->
            <div class="border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden">
                <button
                    class="w-full flex justify-between items-center px-4 py-3 text-left
           focus:outline-none transition-all duration-300"
                    :class="openSection === 'servicios'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] dark:text-white hover:!bg-[#362651]' :
                        'bg-gray-50 text-gray-700 hover:!bg-[#ede9fe] dark:bg-gray-800 dark:text-gray-200 dark:hover:!bg-[#b49bec] dark:hover:!text-gray-900'"
                    @click="openSection = openSection === 'servicios' ? null : 'servicios'">
                    <h4
                        class="text-base sm:text-lg md:text-xl lg:text-xl
                        font-semibold text-inherit">
                        Solicita servicios bibliográficos y documentales
                    </h4>
                    <span x-text="openSection === 'servicios' ? '-' : '+'"
                        class="text-xl font-bold text-gray-700 dark:text-gray-200"></span>
                </button>

                <div x-show="openSection === 'servicios'" x-collapse
                    class="border-t border-gray-200 dark:border-gray-700">
                    <div class="flex flex-col md:flex-row items-center justify-center gap-6 mt-6 px-4 pb-6">
                        <!-- Texto -->
                        <div class="w-full md:w-1/3 text-center md:text-left">
                            <p
                                class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                                Hay veces en las que encuentras justo lo que buscabas. Y otras en las que ese libro,
                                artículo o
                                documento parece estar jugando a las escondidas.<br><br>
                                En el CRAI puedes solicitar documentos que no encuentres en sus colecciones, renovar
                                materiales
                                y consultar tus solicitudes. Descubre cómo pedir lo que necesitas y hacerle seguimiento
                                hasta
                                tenerlo disponible.
                            </p>
                            <br>

                            <div class="flex flex-col sm:flex-row gap-4">

                                <flux:button href="https://crai.ucompensar.edu.co/cgi-bin/koha/pages.pl?p=servicios"
                                    target="_blank" rel="noopener noreferrer" icon="rectangle-group" variant="filled"
                                    class="!bg-[#7C3AED] !text-white
                                        hover:!bg-[#362651]
                                        dark:!bg-[#7C3AED] dark:!text-white
                                        dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
                                        transition-all duration-300">
                                    Ir a los servicios
                                </flux:button>
                            </div>
                            <br>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <flux:button href="https://crai.ucompensar.edu.co/cgi-bin/koha/pages.pl?p=recursos"
                                    target="_blank" rel="noopener noreferrer" icon="document-magnifying-glass" variant="filled"
                                    class="!bg-[#7C3AED] !text-white
                                        hover:!bg-[#362651]
                                        dark:!bg-[#7C3AED] dark:!text-white
                                        dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
                                        transition-all duration-300">
                                    Ir a los recursos abiertos
                                </flux:button>
                            </div>

                        </div>
                        <!-- video -->
                        <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                            <div class="aspect-video">
                                <iframe title="Solicita servicios bibliográficos"
                                    src="https://player.vimeo.com/video/1229626820?badge=0&autopause=0&player_id=0&app_id=58479"
                                    class="w-full h-full" frameborder="0"
                                    referrerpolicy="strict-origin-when-cross-origin"
                                    allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>


    <x-section-rating sectionKey="encuentra-lo-que-buscas" />
    @include('partials.footer')
</x-layouts.app>

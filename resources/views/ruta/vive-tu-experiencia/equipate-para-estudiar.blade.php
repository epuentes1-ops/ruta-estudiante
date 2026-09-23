<x-layouts.app :title="__('Equípate para estudiar')">
    <div class="flex flex-col items-center w-full gap-10 p-6">

        <!-- Banner principal -->
        <div x-data="{
            activeSlide: 0,
            slides: ['/images/banners/vive/seccion1_2.png']
        }" x-init="setInterval(() => activeSlide = (activeSlide + 1) % slides.length, 4000)"
            class="relative w-full max-w-6xl aspect-[16/6] sm:aspect-[16/7] md:aspect-[16/5] lg:aspect-[16/4] overflow-hidden rounded-2xl shadow-xl">
            <template x-for="(slide, index) in slides" :key="index">
                <img :src="slide" alt="Banner"
                    class="absolute inset-0 w-full h-full object-cover object-center transition-opacity duration-700 ease-in-out"
                    :class="{ 'opacity-100': activeSlide === index, 'opacity-0': activeSlide !== index }">
            </template>
        </div>

        <div class="text-left mt-8 flex flex-col items-center w-full gap-10 p-6">
            <h3
                class="text-2xl sm:text-3xl md:text-4xl lg:text-4xl font-bold text-gray-900 dark:text-white leading-relaxed text-left">
                Configura tu correo y conoce Microsoft 365
            </h3>
        </div>

        <!-- Sección Texto + video -->
        <div class="flex flex-col md:flex-row items-center justify-center gap-6 max-w-6xl mx-auto mt-8 px-4">
            <!-- Texto -->
            <div class="w-full md:w-1/3 text-center md:text-left">
                <p class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                    ¿Tu correo institucional es solo para recibir correos? Spoiler: no.<br> <br>

                    Tienes todo un espacio virtual para estudiar, organizarte, guardar tus archivos, trabajar en equipo
                    y sobrevivir a esos trabajos grupales que aparecen de la nada.<br> <br>

                    Descubre todo lo que tienes a tu alcance con Microsoft 365 y empieza a sacarle jugo a tu cuenta.
                </p>
            </div>

            <!-- Genially -->
            <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                <div class="aspect-video">
                    <iframe title="genially-2" src="https://view.genially.com/690288b15151ac3654f965fa"
                        class="w-full h-full" frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                        allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>

        <div class="text-left mt-8 flex flex-col items-center w-full gap-10 p-6">
            <h3
                class="text-2xl sm:text-3xl md:text-4xl lg:text-4xl font-bold text-gray-900 dark:text-white leading-relaxed text-left">
                Descubre cómo sacarle juego a OneDrive
            </h3>
        </div>

        <!-- Video + Sección Texto o -->
        <div class="flex flex-col md:flex-row items-center justify-center gap-6 max-w-6xl mx-auto mt-8 px-4">
            <!-- Video -->

            <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                <div class="aspect-video">
                    <iframe title="OneDrive"
                        src="https://player.vimeo.com/video/996267166?badge=0&autopause=0&player_id=0&app_id=58479%22"
                        class="w-full h-full" frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                        allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>

            <!-- Texto -->
            <div class="w-full md:w-1/3 text-center md:text-left">
                <p class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                    Tener todo en un solo lugar te puede ahorrar más de un dolor de cabeza.<br> <br>
                    Con OneDrive puedes guardar y organizar tus archivos para tenerlos siempre a la mano y encontrarlos
                    cuando los necesites. En este video te mostramos cómo crear carpetas, subir archivos, compartirlos
                    con tus compañeros y dar permisos para trabajar en equipo.<br> <br>
                    Organiza tu info, compártela fácil y ten todo bajo control.
                </p>
            </div>
        </div>


    </div>

    <x-section-rating sectionKey="equipate-para-estudiar" />
    @include('partials.footer')
</x-layouts.app>

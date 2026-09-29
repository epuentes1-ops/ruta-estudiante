<x-layouts.app :title="__('Equilibra estudio y vida')">

    <div class="flex flex-col items-center w-full gap-8 p-6">

        <!-- Banner principal -->
        <div x-data="{
            activeSlide: 0,
            slides: ['/images/banners/conectate/seccion3_2.png']
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
                Organiza tu tiempo entre la familia y el estudio
            </h3>
        </div>

        <!-- Sección Texto + video -->
        <div class="flex flex-col md:flex-row items-center justify-center gap-6 max-w-6xl mx-auto mt-8 px-4">
            <!-- Texto -->
            <div class="w-full md:w-1/3 text-center md:text-left">
                <p class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                    ¿Entre clases, tareas, hijos y familia sientes que el día se queda corto?<br><br>
                    No se trata de escoger entre una cosa y otra. En este recurso encontrarás ideas para organizar tus
                    tiempos, priorizar lo importante y seguir avanzando en tus estudios sin perderte los momentos que
                    cuentan.<br><br>
                    Porque tu familia también hace parte de esta meta.
                </p>

            </div>

            <!-- genially -->
            <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                <div class="aspect-video">
                    <iframe title="Genially - Soy-mamá-soy-papá"
                        src="https://view.genially.com/64c3e79446031600131e4786" class="w-full h-full" frameborder="0"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>

        <div class="text-left mt-8 flex flex-col items-center w-full gap-10 p-6">
            <h3
                class="text-2xl sm:text-3xl md:text-4xl lg:text-4xl font-bold text-gray-900 dark:text-white leading-relaxed text-left">
                Conoce orientaciones y apoyos para la lactancia
            </h3>
        </div>

        <!-- Video + Sección Texto o -->
        <div class="flex flex-col md:flex-row items-center justify-center gap-6 max-w-6xl mx-auto mt-8 px-4">

            <!-- genially -->
            <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                <div class="aspect-video">
                    <iframe title="video - apoyos-para-la-lactancia"
                        src="https://player.vimeo.com/video/868123475?badge=0&autopause=0&player_id=0&app_id=58479"
                        class="w-full h-full" frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                        allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>

            <!-- Texto -->
            <div class="w-full md:w-1/3 text-center md:text-left">
                <p class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                    Ser mamá es estar pendiente de mil cosas…<br> <br>
                    y sí, a veces también necesitas un espacio para ti.<br> <br>
                    Conoce la Sala Amiga de la Familia Lactante, un lugar pensado para acompañarte en este proceso y
                    hacer que estudiar y ser mamá puedan ir de la mano.
                </p>
                <br>
            </div>
        </div>


    </div>

    <x-section-rating sectionKey="equilibra-estudio-y-vida" />
    @include('partials.footer')
</x-layouts.app>

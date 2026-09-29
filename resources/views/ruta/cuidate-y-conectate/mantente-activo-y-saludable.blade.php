<x-layouts.app :title="__('Mantente activo y saludable')">

    <div class="flex flex-col items-center w-full gap-8 p-6">
        <!-- Banner principal -->
        <div x-data="{
            activeSlide: 0,
            slides: ['/images/banners/conectate/seccion3_1.png']
        }" x-init="setInterval(() => activeSlide = (activeSlide + 1) % slides.length, 4000)"
            class="relative w-full max-w-6xl aspect-[16/6] sm:aspect-[16/7] md:aspect-[16/5] lg:aspect-[16/4] overflow-hidden rounded-2xl shadow-xl">
            <template x-for="(slide, index) in slides" :key="index">
                <img :src="slide" alt="Banner"
                    class="absolute inset-0 w-full h-full object-cover object-center transition-opacity duration-700 ease-in-out"
                    :class="{ 'opacity-100': activeSlide === index, 'opacity-0': activeSlide !== index }">
            </template>
        </div>

        <!-- CONTENIDO EN PESTAÑAS -->
        <div x-data="{ activeTab: 'cuida_cuerpo' }" class="w-full max-w-6xl mx-auto mt-8">

            <!-- Barra de pestañas -->
            <div
                class="flex flex-col sm:flex-row border-b border-gray-200 dark:border-gray-700 rounded-t-xl overflow-hidden">
                <button
                    class="flex-1 px-4 py-3 text-xs sm:text-sm md:text-base font-semibold text-center tracking-wide
                           border-b-2 sm:border-b-0 sm:border-r-2
                           border-transparent hover:bg-gray-300 dark:hover:bg-gray-800
                           transition"
                    :class="activeTab === 'cuida_cuerpo'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] hover:!bg-[#362651] dark:text-gray-900' :
                        'bg-gray-50 text-gray-700 dark:hover:!bg-[#b49bec] dark:bg-gray-800 dark:text-gray-200 dark:hover:!text-gray-900'"
                    @click="activeTab = 'cuida_cuerpo'">
                    1. Cuida tu cuerpo y tu mente con hábitos saludables
                </button>

                <button
                    class="flex-1 px-4 py-3 text-xs sm:text-sm md:text-base font-semibold text-center tracking-wide
                           border-b-2 sm:border-b-0 sm:border-r-2
                           border-transparent  hover:bg-gray-300 dark:hover:bg-gray-800
                           transition"
                    :class="activeTab === 'pausas_activas'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] hover:!bg-[#362651] dark:text-gray-900' :
                        'bg-gray-50 text-gray-700 dark:hover:!bg-[#b49bec] dark:bg-gray-800 dark:text-gray-200 dark:hover:!text-gray-900'"
                    @click="activeTab = 'pausas_activas'">
                    2. Haz pausas activas y mantente en movimiento
                </button>


            </div>

            <!-- Contenedor de contenido -->
            <div
                class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-b-xl shadow-lg p-6">

                <!-- TAB 1: Cuida tu cuerpo -->
                <div x-show="activeTab === 'cuida_cuerpo'" x-transition>
                    <p class="mb-6 text-sm sm:text-base md:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                        Pequeños cambios pueden hacer una gran diferencia en cómo vives tu día.<br><br>
                        Explora estos 10 hábitos y encuentra formas sencillas de cuidar tu cuerpo, despejar tu mente y
                        sentirte mejor paso a paso.<br><br>
                    </p>

                    <div class="w-full rounded-xl overflow-hidden shadow-md">
                        <div class="aspect-video">
                            <iframe title="genyally-cuida_tu_cuerpo"
                                src="https://view.genially.com/64c3e75ba156a90019ac0f5b" class="w-full h-full"
                                frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                                allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- TAB 2: Pausas activas -->
                <div x-show="activeTab === 'pausas_activas'" x-transition>
                    <p class="mb-6 text-sm sm:text-base md:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                        ¿Llevas horas frente al computador y sientes que tu cabeza ya está en modo “necesito un
                        descanso”?<br><br>
                        A veces no necesitas parar el día, solo hacer una pausa para volver con más energía. Descubre
                        cómo pequeños movimientos pueden ayudarte a soltar la tensión, despejar la mente y continuar con
                        tus actividades.<br><br>
                        Porque sí: descansar un momento también es avanzar.
                    </p>

                    <div class="w-full rounded-xl overflow-hidden shadow-md">
                        <div class="aspect-video">
                            <iframe title="video-pausas_activas"
                                src="https://player.vimeo.com/video/849226559?badge=0&autopause=0&player_id=0&app_id=58479"
                                class="w-full h-full" frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                                allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div> <!-- fin contenedor contenido tabs -->
        </div> <!-- fin x-data tabs -->


        <!-- CONTENIDO EN PESTAÑAS -->
        <div x-data="{ activeTab: 'sueno' }" class="w-full max-w-6xl mx-auto mt-8">

            <!-- Barra de pestañas -->
            <div
                class="flex flex-col sm:flex-row border-b border-gray-200 dark:border-gray-700 rounded-t-xl overflow-hidden">
                <button
                    class="flex-1 px-4 py-3 text-xs sm:text-sm md:text-base font-semibold text-center tracking-wide
                           border-b-2 sm:border-b-0 sm:border-r-2
                           border-transparent hover:bg-gray-300 dark:hover:bg-gray-800
                           transition"
                    :class="activeTab === 'sueno'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] hover:!bg-[#362651] dark:text-gray-900' :
                        'bg-gray-50 text-gray-700 dark:hover:!bg-[#b49bec] dark:bg-gray-800 dark:text-gray-200 dark:hover:!text-gray-900'"
                    @click="activeTab = 'sueno'">
                    1. Mejora tus hábitos de sueño
                </button>

                <button
                    class="flex-1 px-4 py-3 text-xs sm:text-sm md:text-base font-semibold text-center tracking-wide
                           border-b-2 sm:border-b-0 sm:border-r-2
                           border-transparent  hover:bg-gray-300 dark:hover:bg-gray-800
                           transition"
                    :class="activeTab === 'meditacion'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] hover:!bg-[#362651] dark:text-gray-900' :
                        'bg-gray-50 text-gray-700 dark:hover:!bg-[#b49bec] dark:bg-gray-800 dark:text-gray-200 dark:hover:!text-gray-900'"
                    @click="activeTab = 'meditacion'">
                    2. Practica meditación y yoga
                </button>


            </div>

            <!-- Contenedor de contenido -->
            <div
                class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-b-xl shadow-lg p-6">

                <!-- TAB 1: habitos de sueño -->
                <div x-show="activeTab === 'sueno'" x-transition>
                    <p class="mb-6 text-sm sm:text-base md:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                        ¿Te acuestas cansado, pero justo cuando apagas la luz tu cerebro decide abrir 37
                        pestañas?<br><br>
                        Dormir bien no siempre es cuestión de “acostarse temprano”. Descubre el método de las 7 D’s y
                        encuentra pequeñas formas de preparar tu cuerpo y tu mente para una noche de verdadero
                        descanso.<br><br>
                        Mañana también necesitas batería.
                    </p>

                    <div class="w-full rounded-xl overflow-hidden shadow-md">
                        <div class="aspect-video">
                            <iframe title="video-Mejora_habitos_sueño"
                                src="https://player.vimeo.com/video/868123514?badge=0&autopause=0&player_id=0&app_id=58479"
                                class="w-full h-full" frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                                allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- TAB 2: Meditacion -->
                <div x-show="activeTab === 'meditacion'" x-transition>
                    <p class="mb-6 text-sm sm:text-base md:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                        ¿Cabeza a mil? ¿Cuerpo tenso? 😮‍💨<br><br>
                        Haz una pausa con Luis y acompáñalo en una práctica sencilla de respiración, movimiento y relajación.<br><br>
                        No necesitas ser experto ni hacer piruetas. Solo busca un espacio cómodo, respira y date unos minutos para ti.
                    </p>

                    <div class="w-full rounded-xl overflow-hidden shadow-md">
                        <div class="aspect-video">
                            <iframe title="video-estres"
                                src="https://player.vimeo.com/video/1229608253?badge=0&autopause=0&player_id=0&app_id=58479"
                                class="w-full h-full" frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                                allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div> <!-- fin contenedor contenido tabs -->
        </div> <!-- fin x-data tabs -->

    </div>

    <x-section-rating sectionKey="mantente-activo-y-saludable" />
    @include('partials.footer')
</x-layouts.app>

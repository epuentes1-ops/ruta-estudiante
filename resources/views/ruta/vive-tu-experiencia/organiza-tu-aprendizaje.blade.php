<x-layouts.app :title="__('Organiza tu aprendizaje')">

    <div class="flex flex-col items-center w-full gap-10 p-6">


        <!-- Banner principal -->
        <div x-data="{
            activeSlide: 0,
            slides: ['/images/banners/vive/seccion1_3.png']
        }" x-init="setInterval(() => activeSlide = (activeSlide + 1) % slides.length, 4000)"
            class="relative w-full max-w-6xl aspect-[16/6] sm:aspect-[16/7] md:aspect-[16/5] lg:aspect-[16/4] overflow-hidden rounded-2xl shadow-xl">
            <template x-for="(slide, index) in slides" :key="index">
                <img :src="slide" alt="Banner"
                    class="absolute inset-0 w-full h-full object-cover object-center transition-opacity duration-700 ease-in-out"
                    :class="{ 'opacity-100': activeSlide === index, 'opacity-0': activeSlide !== index }">
            </template>
        </div>

        <!-- CONTENIDO EN PESTAÑAS -->
        <div x-data="{ activeTab: 'organiza' }" class="w-full max-w-6xl mx-auto mt-8">

            <!-- Barra de pestañas -->
            <div
                class="flex flex-col sm:flex-row border-b border-gray-200 dark:border-gray-700 rounded-t-xl overflow-hidden">
                <button
                    class="flex-1 px-4 py-3 text-xs sm:text-sm md:text-base font-semibold text-center tracking-wide
                           border-b-2 sm:border-b-0 sm:border-r-2
                           border-transparent hover:bg-gray-300 dark:hover:bg-gray-800
                           transition"
                    :class="activeTab === 'organiza'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] hover:!bg-[#362651] dark:text-gray-900' :
                        'bg-gray-50 text-gray-700 dark:hover:!bg-[#b49bec] dark:bg-gray-800 dark:text-gray-200 dark:hover:!text-gray-900'"
                    @click="activeTab = 'organiza'">
                    1. Organiza tu tiempo para estudiar en virtual
                </button>

                <button
                    class="flex-1 px-4 py-3 text-xs sm:text-sm md:text-base font-semibold text-center tracking-wide
                           border-b-2 sm:border-b-0 sm:border-r-2
                           border-transparent  hover:bg-gray-300 dark:hover:bg-gray-800
                           transition"
                    :class="activeTab === 'preparate'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] hover:!bg-[#362651] dark:text-gray-900' :
                        'bg-gray-50 text-gray-700 dark:hover:!bg-[#b49bec] dark:bg-gray-800 dark:text-gray-200 dark:hover:!text-gray-900'"
                    @click="activeTab = 'preparate'">
                    2. Prepárate para tus encuentros sincrónicos
                </button>

                <button
                    class="flex-1 px-4 py-3 text-xs sm:text-sm md:text-base font-semibold text-center tracking-wide
                           border-b-2 sm:border-b-0 sm:border-r-2
                           border-transparent  hover:bg-gray-300 dark:hover:bg-gray-800
                           transition"
                    :class="activeTab === 'consulta'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] hover:!bg-[#362651] dark:text-gray-900' :
                        'bg-gray-50 text-gray-700 dark:hover:!bg-[#b49bec] dark:bg-gray-800 dark:text-gray-200 dark:hover:!text-gray-900'"
                    @click="activeTab = 'consulta'">
                    3. Consulta tus encuentros sincrónicos y grabaciones
                </button>


            </div>

            <!-- Contenedor de contenido -->
            <div
                class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-b-xl shadow-lg p-6">

                <!-- TAB 1: organiza -->
                <div x-show="activeTab === 'organiza'" x-transition>
                    <p class="mb-6 text-sm sm:text-base md:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                        ¿Cómo haces para que en el mismo día quepan UCompensar, el trabajo, la familia y también tú?<br><br>
                        Estudiar virtual te da libertad, pero también significa que nadie va a venir a decirte: “oye, ya
                        es hora de estudiar”. 😅<br><br>
                        En este video encontrarás formas sencillas de organizar tu semana, aprovechar mejor tus tiempos
                        y avanzar en la U sin sentir que todo se te viene encima.<br><br>
                        No necesitas más horas. Necesitas encontrarles su lugar.
                    </p>

                    <div class="w-full rounded-xl overflow-hidden shadow-md">
                        <div class="aspect-video">
                            <iframe title="video-tiempo-estudiar"
                                src="https://player.vimeo.com/video/999307435?badge=0&autopause=0&player_id=0&app_id=58479%22"
                                class="w-full h-full" frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                                allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- TAB 2: preparate -->
                <div x-show="activeTab === 'preparate'" x-transition>
                    <p class="mb-6 text-sm sm:text-base md:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                        Clase virtual en 10 minutos y todavía estás buscando dónde sentarte, cargando el computador y
                        pensando qué iban a ver hoy?<br><br>
                        Aquí encuentras tips sencillos para llegar preparado, participar y sacarle más provecho a tus
                        encuentros sincrónicos.
                    </p>

                    <div class="w-full rounded-xl overflow-hidden shadow-md">
                        <div class="aspect-video">
                            <iframe title="Genially-encuentros"
                                src="https://view.genially.com/66abd2b93cf39a7254c6775c" class="w-full h-full"
                                frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                                allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- TAB 3: consulta -->
                <div x-show="activeTab === 'consulta'" x-transition>
                    <p class="mb-6 text-sm sm:text-base md:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                        ¿Te conectaste tarde, se te cruzó algo o simplemente necesitas volver a ver la clase?<br><br>
                        ¡No te preocupes! Tus encuentros sincrónicos y sus grabaciones quedan disponibles para que
                        puedas volver a ellos cuando los necesites.<br><br>
                        En este video te mostramos dónde encontrarlos, cómo entrar a tus encuentros y cómo volver a ver
                        las grabaciones desde tu curso.<br><br>
                        Para que perderte una clase no signifique perderte el contenido.
                    </p>

                    <div class="w-full rounded-xl overflow-hidden shadow-md">
                        <div class="aspect-video">
                            <iframe title="video-consulta-encuentros"
                                src="https://player.vimeo.com/video/770059844?badge=0&autopause=0&player_id=0&app_id=58479"
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

    <x-section-rating sectionKey="organiza-tu-aprendizaje" />
    @include('partials.footer')
</x-layouts.app>

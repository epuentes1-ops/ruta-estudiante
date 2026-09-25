<x-layouts.app :title="__('Prepárate para tu grado')">

    <div class="flex flex-col items-center w-full gap-8 p-6">
        <!-- Banner principal -->
        <div x-data="{
            activeSlide: 0,
            slides: ['/images/banners/tramites/seccion2_4.png']
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
                Programa co-terminal como opción de grado
            </h3>
        </div>

        <!-- Video + Sección Texto o -->
        <div class="flex flex-col md:flex-row items-center justify-center gap-6 max-w-6xl mx-auto mt-8 px-4">

            <!-- Imagen -->
            <div class="w-full md:w-5/12 rounded-xl overflow-hidden">

                <img src="/images/banners/tramites/imgseccion2_3.png" alt="Consulta tus fechas claves"
                    class="w-full h-auto object-contain" id="modelImage">

            </div>

            <!-- Texto -->
            <div class="w-full md:w-2/3 text-center md:text-left">
                <p class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                    ¿Y si el final de tu carrera no fuera realmente el final?<br> <br>
                    Llegas a los últimos semestres y empiezas a pensar en lo que viene.<br> <br>
                    ¿Trabajo? ¿Especialización? ¿Seguir estudiando? ¿Todas las anteriores?
                    Si ya estás cerca de terminar tu pregrado, hay una opción que vale la pena conocer. Se llama
                    Co-terminal y te permite cursar y aprobar créditos de una especialización en UCompensar como opción
                    de grado de tu carrera.<br> <br>
                    Sí, puedes empezar a moverte hacia lo que sigue mientras cierras esta etapa.
                </p>
                <br>
                <div class="flex flex-col sm:flex-row gap-4">

                    <flux:button href="https://bancodecontenidos.ucompensar.edu.co/index.php/s/BC4rRYZ8krXZBbC"
                        target="_blank" rel="noopener noreferrer" icon="document-arrow-down" variant="filled"
                        class="!bg-[#7C3AED] !text-white
               hover:!bg-[#362651]
               dark:!bg-[#7C3AED] dark:!text-white
               dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
               transition-all duration-300">
                        Ir al paso a paso
                    </flux:button>

                    <flux:button href="https://ucompensar2.my.site.com/estudiantes/s/" target="_blank"
                        rel="noopener noreferrer" icon="cursor-arrow-ripple" variant="filled"
                        class="!bg-[#7C3AED] !text-white
               hover:!bg-[#362651]
               dark:!bg-[#7C3AED] dark:!text-white
               dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
               transition-all duration-300">
                        Hacer mi solicitud
                    </flux:button>
                </div>

            </div>
        </div>

        <div class="text-left mt-8 flex flex-col items-center w-full gap-10 p-6">
            <h3
                class="text-2xl sm:text-3xl md:text-4xl lg:text-4xl font-bold text-gray-900 dark:text-white leading-relaxed text-left">
                Realiza tu solicitud de grado
            </h3>
        </div>

        <!-- Sección Texto + Genially -->
        <div class="flex flex-col md:flex-row items-center justify-center gap-6 max-w-6xl mx-auto mt-8 px-4">
            <!-- Texto -->
            <div class="w-full md:w-1/3 text-center md:text-left">
                <p class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                    Llegaste a una de las etapas más emocionantes de tu camino: ¡el grado!
                    Aquí encuentras la ruta para conocer cada paso, organizarte y disfrutar este momento mientras te
                    preparas para celebrar todo lo que has logrado.
                </p>

                <br>
                <div class="flex flex-col sm:flex-row gap-4">
                    <flux:button href="https://academico.ucompensar.edu.co" target="_blank" rel="noopener noreferrer"
                        icon="academic-cap" variant="filled"
                        class="!bg-[#7C3AED] !text-white
               hover:!bg-[#362651]
               dark:!bg-[#7C3AED] dark:!text-white
               dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
               transition-all duration-300">
                        Inscríbete a grados
                    </flux:button>
                </div>
            </div>

            <!-- video -->
            <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                <div class="aspect-video">
                    <iframe title="genially-solicitud-grado" src="https://view.genially.com/68f8ea6b5f588c92c4328305"
                        class="w-full h-full" frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                        allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>





    </div>

    <x-section-rating sectionKey="preparate-para-tu-grado" />
    @include('partials.footer')
</x-layouts.app>

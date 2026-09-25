<x-layouts.app :title="__('Consulta resultados y certificados')">

    <div class="flex flex-col items-center w-full gap-8 p-6">
        <!-- Banner principal -->
        <div x-data="{
            activeSlide: 0,
            slides: ['/images/banners/tramites/seccion2_3.png']
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
                Consulta tus resultados académicos oficiales
            </h3>
        </div>

        <!-- Sección Texto + video -->
        <div class="flex flex-col md:flex-row items-center justify-center gap-6 max-w-6xl mx-auto mt-8 px-4">
            <!-- Texto -->
            <div class="w-full md:w-1/3 text-center md:text-left">
                <p class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                    ¿Ya hiciste una solicitud y quieres saber cómo va? Aquí te mostramos dónde consultar su estado y
                    hacer seguimiento a tus trámites académicos desde UCompensar.
                </p>
                <br>
                <div class="flex flex-col sm:flex-row gap-4">

                    <flux:button href="https://ucompensar.edu.co/reingresos/" target="_blank" rel="noopener noreferrer"
                        icon="arrow-path-rounded-square" variant="filled"
                        class="!bg-[#7C3AED] !text-white
               hover:!bg-[#362651]
               dark:!bg-[#7C3AED] dark:!text-white
               dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
               transition-all duration-300">
                        Ver mis solicitudes de reingreso
                    </flux:button>
                </div>
                <br>
                <div class="flex flex-col sm:flex-row gap-4">
                    <flux:button href="https://ucompensar2.my.site.com/estudiantes/s/" target="_blank"
                        rel="noopener noreferrer" icon="cursor-arrow-ripple" variant="filled"
                        class="!bg-[#7C3AED] !text-white
               hover:!bg-[#362651]
               dark:!bg-[#7C3AED] dark:!text-white
               dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
               transition-all duration-300">
                        Ir a mis casos
                    </flux:button>
                </div>
            </div>

            <!-- video -->
            <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                <div class="aspect-video">
                    <iframe title="video-resultados-academicos"
                        src="https://player.vimeo.com/video/1229601127?badge=0&autopause=0&player_id=0&app_id=58479%22"
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
                Solicita tus certificados digitales
            </h3>
        </div>

        <!-- Video + Sección Texto o -->
        <div class="flex flex-col md:flex-row items-center justify-center gap-6 max-w-6xl mx-auto mt-8 px-4">

            <!-- Imagen -->
            <div class="w-full md:w-5/12 rounded-xl overflow-hidden">

                <img src="/images/banners/tramites/imgseccion2_2.png" alt="Consulta tus fechas claves"
                    class="w-full h-auto object-contain" id="modelImage">

            </div>

            <!-- Texto -->
            <div class="w-full md:w-2/3 text-center md:text-left">
                <p class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                    ¿Necesitas un certificado y no sabes ni por dónde empezar?<br> <br>
                    Ya no tienes que darle mil vueltas para encontrar el documento que necesitas. Desde la plataforma de
                    Certificados UCompensar puedes solicitarlo, hacer el pago y recibirlo directamente en tu correo
                    institucional. <br> <br>
                    Aquí te mostramos la ruta para pedirlo, descargarlo y tenerlo listo cuando lo necesites.
                </p>
                <br>
                <div class="flex flex-col sm:flex-row gap-4">

                    <flux:button href="https://bancodecontenidos.ucompensar.edu.co/index.php/s/fZgQtEFEYZZR5z7" target="_blank" rel="noopener noreferrer"
                        icon="document-arrow-down" variant="filled"
                        class="!bg-[#7C3AED] !text-white
               hover:!bg-[#362651]
               dark:!bg-[#7C3AED] dark:!text-white
               dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
               transition-all duration-300">
                        Ir al paso a paso
                    </flux:button>

                    <flux:button href="https://estudiantes.ucompensar.edu.co:8083/certificadosUcompensar/publico/cntPublico.jsp" target="_blank"
                        rel="noopener noreferrer" icon="check-badge" variant="filled"
                        class="!bg-[#7C3AED] !text-white
               hover:!bg-[#362651]
               dark:!bg-[#7C3AED] dark:!text-white
               dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
               transition-all duration-300">
                        Ir a mis certificados
                    </flux:button>
                
                    <flux:button href="https://academico.ucompensar.edu.co" target="_blank"
                        rel="noopener noreferrer" icon="academic-cap" variant="filled"
                        class="!bg-[#7C3AED] !text-white
               hover:!bg-[#362651]
               dark:!bg-[#7C3AED] dark:!text-white
               dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
               transition-all duration-300">
                        Ir a mi Sistema Académico
                    </flux:button>
                </div>


            </div>
        </div>


    </div>

    <x-section-rating sectionKey="consulta-resultados-y-certificados" />
    @include('partials.footer')
</x-layouts.app>

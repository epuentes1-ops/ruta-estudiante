<x-layouts.app :title="__('Ruta del estudiante - Empieza por aquí')" :description="__('Bienvenido a la Ruta del Estudiante')">
    <div class="flex flex-col items-center w-full gap-8 p-6">

        <!-- Sección del banner -->
        <div x-data="{
            activeSlide: 0,
            slides: ['/images/banners/bannerHome.png']
        }" x-init="if (slides.length > 1) {
            setInterval(() => {
                activeSlide = (activeSlide + 1) % slides.length
            }, 4000)
        }"
            class="relative w-full max-w-6xl mx-auto overflow-hidden rounded-2xl shadow-xl">

            <template x-for="(slide, index) in slides" :key="index">
                <img x-show="activeSlide === index" :src="slide" alt="Banner"
                    class="block w-full h-auto object-contain
                   transition-opacity duration-700 ease-in-out">
            </template>

        </div>

        <!-- Textos centrados y responsivos -->
        <div class="text-center max-w-4xl px-4">
            <h2
                class="text-lg sm:text-xl md:text-xl lg:text-2xl font-semibold text-gray-800 dark:text-gray-100 leading-relaxed">
                Tu vida universitaria tiene de todo: clases, trabajos, trámites, momentos de pausa, nuevas ideas y mil
                cosas pasando al mismo tiempo. La Ruta del Estudiante reúne herramientas para acompañarte en cada una de
                esas etapas. Entra, explora y encuentra lo que necesitas, justo cuando lo necesitas.
            </h2>
        </div>
        

        <!-- Video fuera del recuadro principal -->
        <div class="w-full max-w-5xl mt-6 rounded-xl overflow-hidden shadow-lg">
            <div class="aspect-video">
                <iframe title="vimeo-player"
                    src="https://player.vimeo.com/video/1229528041?badge=0&autopause=0&player_id=0&app_id=58479%22"
                    class="w-full h-full" frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                    allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>

    </div>
    <x-section-rating sectionKey="empieza-por-aqui" />

    @include('partials.footer')

</x-layouts.app>

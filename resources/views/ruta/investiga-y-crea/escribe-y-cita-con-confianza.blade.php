<x-layouts.app :title="__('Escribe y cita con confianza')">

    <main class="w-full px-6 py-10">

        <!-- Banner principal -->
        <div x-data="{
            activeSlide: 0,
            slides: ['/images/banners/vive/seccion1.png']
        }" x-init="setInterval(() => activeSlide = (activeSlide + 1) % slides.length, 4000)"
            class="relative w-full max-w-6xl aspect-[16/6] sm:aspect-[16/7] md:aspect-[16/5] lg:aspect-[16/4] overflow-hidden rounded-2xl shadow-xl">
            <template x-for="(slide, index) in slides" :key="index">
                <img :src="slide" alt="Banner"
                    class="absolute inset-0 w-full h-full object-cover object-center transition-opacity duration-700 ease-in-out"
                    :class="{ 'opacity-100': activeSlide === index, 'opacity-0': activeSlide !== index }">
            </template>
        </div>

    </main>

    <x-section-rating sectionKey="escribe-y-cita-con-confianza" />
     @include('partials.footer')
</x-layouts.app>
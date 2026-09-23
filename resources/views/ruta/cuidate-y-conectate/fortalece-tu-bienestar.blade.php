<x-layouts.app :title="__('Fortalece tu bienestar')">

    <div class="flex flex-col items-center w-full gap-8 p-6">
    <!-- Banner principal -->
        <div x-data="{
            activeSlide: 0,
            slides: ['/images/banners/conectate/seccion3_3.png']
        }" x-init="setInterval(() => activeSlide = (activeSlide + 1) % slides.length, 4000)"
            class="relative w-full max-w-6xl aspect-[16/6] sm:aspect-[16/7] md:aspect-[16/5] lg:aspect-[16/4] overflow-hidden rounded-2xl shadow-xl">
            <template x-for="(slide, index) in slides" :key="index">
                <img :src="slide" alt="Banner"
                    class="absolute inset-0 w-full h-full object-cover object-center transition-opacity duration-700 ease-in-out"
                    :class="{ 'opacity-100': activeSlide === index, 'opacity-0': activeSlide !== index }">
            </template>
        </div>

    </div>

    <x-section-rating sectionKey="fortalece-tu-bienestar" />
     @include('partials.footer')
</x-layouts.app>
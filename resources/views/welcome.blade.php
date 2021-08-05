<x-app-layout>
    
    {{-- Seccion ENCABEZADO --}}
    <section class="bg-cover bg-center" style="background-image: linear-gradient(rgba(22,22,22,0), rgba(22,22,22,0.6)), url({{ asset('img/home/students2.jpg') }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Domina la tecnología web con Pixel Cursos</h1>
                <p class="text-white text-lg mt-2 mb-4">En Pixel Cursos encontrarás cursos, manuales y artículos que te ayudarán a convertirte en un profesional del desarrollador web</p>
                
                @livewire('search')
            </div>
        </div>
    </section>

    {{-- Seccion CONTENIDO --}}
    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">	
            <article>
                <figure>
                    <img class="rounded-xl h-50 w-full object-cover" src="{{ asset('img/home/content1.jpg') }}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos y projectos</h1>
                </header>
                <p class="text-sm text-gray-500 mt-3">Encuentra una gran variedad de cursos y proyectos en diversos lenguajes de programación, totalmente gratis.</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-50 w-full object-cover" src="{{ asset('img/home/content2.jpg') }}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Desarrollo y diseño</h1>
                </header>
                <p class="text-sm text-gray-500 mt-3">Encuentra los mejores cursos de desarrollo web para aumentar tus capacidades en programación.</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-50 w-full object-cover" src="{{ asset('img/home/content3.jpg') }}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Blog</h1>
                </header>
                <p class="text-sm text-gray-500 mt-3">Artículos relacionados a programación y desarrollo web, para potenciar tu aprendizaje personal.</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-50 w-full object-cover" src="{{ asset('img/home/content4.jpg') }}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Equipo de trabajo</h1>
                </header>
                <p class="text-sm text-gray-500 mt-3">Contamos con el mejor equipo de trabajo con personas dedicadas y expertas en los temas mas importantes.</p>
            </article>
        </div>
    </section>
    
    {{-- Seccion CATALOGO --}}
    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">¿No sabes que curso tomar?</h1>
        <p class="text-center text-white">Dirígete al catálogo de cursos y filtralos por categoría o nivel</p>
        <div class="flex justify-center mt-4">
            <a href="{{ route('courses.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Catálogo de cursos
            </a> 
        </div>
    </section>

    {{-- Seccion ULTIMOS CURSOS --}}
    <section class="my-20">
        <h1 class="text-center text-3xl text-gray-600">ÚLTIMOS CURSOS</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Trabajando duro para seguir subiendo más cursos</p>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($courses as $course)
                <x-course-card :course="$course"></x-course-card>
            @endforeach
        </div>
    </section>

</x-app-layout>

{{-- storage/cursos/0d926360756a2f4703003f9bf7baa29d.png --}}

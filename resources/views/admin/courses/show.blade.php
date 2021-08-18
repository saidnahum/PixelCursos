<x-app-layout>
    <section class="bg-gray-700 py-12 mb-12">
        <div class="container grid grid-cols1 lg:grid-cols-2 gap-6">
            <figure>
                @if ($course->image) 
                    <img class="h-60 w-full object-cover" src="{{ Storage::url($course->image->url) }}">
                @else 
                    <img class="h-60 w-full object-cover" src="https://images.pexels.com/photos/1181298/pexels-photo-1181298.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                @endif
            </figure>
            <div class="text-white">
                <h1 class="text-4xl">{{ $course->title }}</h1>
                <h2 class="text-xl mb-3">{{ $course->subtitle }}</h2>
                <p class="mb-2"><i class="fas fa-chart-line"></i> Nivel: {{ $course->level->name }}</p>
                <p class="mb-2"><i class=""></i> Categoría: {{ $course->category->name }}</p>
                <p class="mb-2"><i class="fas fa-users"></i> Inscritos: {{ $course->students_count }}</p>
                <p><i class="far fa-star"></i> Calificación: {{ $course->rating }}</p>
            </div>
        </div>
    </section>

    <div class="container grid grid-cols-1 lg:grid-cols-3 gap-6">

        @if (session('info'))
            <div class="lg:col-span-3" x-data="{open: true}" x-show="open">
                <div class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg border border-red-400" role="alert">
                    <strong>Ocurrió un error!! </strong>{{ session('info') }}
                    <span class="absolute inset-y-0 right-0 flex items-center mr-4">
                        <svg x-on:click="open = false" class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20"><path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                    </span>
                </div>
            </div>
        @endif

        {{-- Parte izquierda --}}
        <div class="order-2 lg:col-span-2 lg:order-1">
            
            {{-- Lo que aprenderas --}}
            <section class="card mb-12">
                <div class="card-body">
                    <h1 class="font-bold text-2xl mb-2">Lo que aprenderás</h1>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-2">

                        @forelse ($course->goals as $goal)
                            <li class="text-gray-700 text-base"><i class="fas fa-check text-gray-600 mr-2"></i>{{ $goal->name }}</li>
                        @empty
                            <li class="text-gray-700 text-base">No existen metas asignadas al curso</li>
                        @endforelse

                    </ul>
                </div>
            </section>

            {{-- Temario --}}
            <section class="mb-12">
                <h1 class="font-bold text-2xl mb-2">Temario</h1>
                @forelse ($course->sections as $section)
                    <article class="mb-4 shadow"
                    @if ($loop->first)
                        x-data="{open: true}"
                    @else
                        x-data="{open: false}"
                    @endif
                    >
                        <header class="border border-gray-200 px-4 py-2 cursor-pointer bg-gray-200" x-on:click="open = !open">
                            <h1 class="font-bold text-lg text-gray-600">{{ $section->name }}</h1>
                        </header>
                        <div class="bg-white py-2 px-4" x-show="open">
                            <ul class="grid grid-cols-1 gap-2">
                                @foreach ($section->lessons as $lesson)
                                    <li class="text-gray-700 text-base"><i class="fas fa-play-circle mr-2 text-gray-600"></i>{{ $lesson->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </article>
                    
                @empty

                    <article class="card">
                        <div class="card-body">
                            No existen secciones asignadas al curso
                        </div>
                    </article>

                @endforelse
            </section>

            {{-- Requisitos --}}
            <section class="mb-8">
                <h1 class="font-bold text-2xl">Requisitos</h1>
                <ul class="list-disc list-inside">
                    @forelse ($course->requirements as $requirement)
                        <li class="color-gray-700 text-base">{{ $requirement->name }}</li>
                    @empty
                    <li class="color-gray-700 text-base">No existen requerimientos para este curso</li>
                    @endforelse
                </ul>
            </section>

            {{-- Descripcion del curso --}}
            <section>
                <h1 class="font-bold text-3xl">Descripción</h1>
                <div class="text-gray-700 text-base">
                    {!! $course->description !!}
                </div>
            </section>
        </div>

        {{-- Parte derecha --}}
        <div class="order-1 lg:order-2">
            <section class="card mb-4">
                <div class="card-body">
                    <div class="flex items-center">
                        <img class="h-12 w-12 object-cover rounded-full shadow-lg" src="{{ $course->teacher->profile_photo_url }}" alt="{{ $course->teacher->name }}">
                        <div class="ml-4">
                            <h1 class="font-bold text-gray-500 text-md">Prof. {{ $course->teacher->name }}</h1>
                            <a class="text-blue-400 text-sm font-bold" href="">{{ '@' . Str::slug($course->teacher->name, '')}}</a>
                        </div>
                    </div>
                    
                    <form action="{{ route('admin.courses.approved', $course) }}" class="mt-4" method="POST">
                        @csrf
                        <button class="btn btn-green w-full" type="submit">Aprobar curso</button>
                    </form>

                    <a class="btn btn-danger w-full block text-center mt-4" href="{{ route('admin.courses.observation', $course) }}">Observaciones del curso</a>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
<div>
    {{-- Barra de Botones --}}
    <div class="bg-gray-200 py-4 mb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button class="bg-white shadow h-12 px-4 rounded-lg text-gray-700 mr-4 focus:outline-none" wire:click="resetFilters">
                <i class="fas fa-layer-group mr-2"></i>Todos los cursos
            </button>

            <!-- Dropdown Categoria-->
            <div class="relative mr-4" x-data="{ open: false }">
                <button class="px-4 text-gray-700 block h-12 rounded-lg overflow-hidden focus:outline-none bg-white shadow" x-on:click="open = true">
                    <i class="fas fa-tags text-sm mr-2"></i>Categoría <i class="fas fa-angle-down text-2 ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute left-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away="open = false">
                    @foreach ($categories as $category) 
                        <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-500 hover:text-white"  wire:click="$set('category_id', {{ $category->id }})" x-on:click="open = false">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown Categoria-->

            <!-- Dropdown Niveles -->
            <div class="relative" x-data="{ open: false }">
                <button class="px-4 text-gray-700 block h-12 rounded-lg overflow-hidden focus:outline-none bg-white shadow" x-on:click="open = true">
                    <i class="fas fa-chalkboard-teacher mr-2"></i>Niveles <i class="fas fa-angle-down text-2 ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute left-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away="open = false">
                    @foreach ($levels as $level) 
                        <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-500 hover:text-white" wire:click="$set('level_id', {{ $level->id }})" x-on:click="open = false">
                            {{ $level->name }}
                        </a>
                    @endforeach
                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown Niveles -->
        </div>
    </div>

    {{-- Cursos a mostrar --}}
    <div class="container grid sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">
        @foreach ($courses as $course)
            <x-course-card :course="$course"></x-course-card>
        @endforeach
    </div>

    <div class="container mt-4 mb-8">
        {{ $courses->links() }}
    </div>
</div>

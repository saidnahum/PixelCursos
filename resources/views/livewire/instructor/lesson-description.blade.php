<div>
    <article class="card mt-4" x-data="{open: false}">
        <div class="card-body bg-gray-100">
            <header>
                <h1 x-on:click="open = !open" class="font-bold cursor-pointer">Descripción de la lección</h1>
            </header>

            <div x-show="open">
                <hr class="my-2">

                @if ($lesson->description)
                    <form wire:submit.prevent="update">
                        <textarea wire:model="description.name" class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"></textarea>
                        @error('description.name')
                            <span class="text-xs font-bold text-red-500">{{ $message }}</span>
                        @enderror

                        <div class="flex justify-end mt-3">
                            <button wire:click="destroy" class="btn btn-danger text-sm" type="button">Eliminar</button>
                            <button class="btn btn-green text-sm ml-2" type="submit">Actualizar</button>
                        </div>
                    </form>
                @else
                    <div>
                        <textarea wire:model="name" placeholder="Agregar descripción de la leccion ..." class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"></textarea>
                        @error('name')
                            <span class="text-xs font-bold text-red-500">{{ $message }}</span>
                        @enderror

                        <div class="flex justify-end mt-3">
                            <button wire:click="store" class="btn btn-green text-sm ml-2">Agregar</button>
                        </div>
                    </div>
                @endif
            </div>
            
        </div>
    </article>
</div>

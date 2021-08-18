<div class="card" x-data="{open: false}">
    <div class="card-body bg-gray-100">
        <header>
            <h1 x-on:click="open = !open" class="font-bold cursor-pointer">Recursos de la lección</h1>
        </header>

        <div x-show="open">
            <hr class="my-3">
            @if ($lesson->resource) 
                <div class="flex justify-between items-center">
                    <p><i wire:click="download" class="fas fa-download text-gray-500 mr-2 cursor-pointer"></i>{{ $lesson->resource->url }}</p>
                    <i wire:click="destroy" class="fas fa-trash text-red-500 cursor-pointer"></i>
                </div>
            @else 
                <form wire:submit.prevent="save">
                    <div class="flex items-center">
                        <input wire:model="file" type="file" class="flex-1 p-2 border border-gray-300 rounded-md shadow-sm">
                        <button type="submit" class="btn btn-primary text-sm ml-2">Guardar</button>
                    </div>

                    <div class="text-blue-500 font-bold mt-2" wire:loading wire:target="file">
                        Cargando ...
                    </div>

                    @error('file')
                        <span class="font-bold text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </form>
            @endif
        </div>
    </div>
</div>
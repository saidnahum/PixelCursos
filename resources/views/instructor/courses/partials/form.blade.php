<div class="mb-4">
    {!! Form::label('title', 'Título del curso:', ['class' => 'font-bold']) !!}
    {!! Form::text('title', null, ['class' => 'block w-full mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm' . ($errors->has('title') ? ' border-red-600' : '')]) !!}
    @error('title')
        <strong class="text-sm text-red-600">{{ $message }}</strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('slug', 'Slug del curso:', ['class' => 'font-bold']) !!}
    {!! Form::text('slug', null, ['readonly' => 'readonly' ,'class' => 'block w-full mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm' . ($errors->has('title') ? ' border-red-600' : '')]) !!}
    @error('slug')
        <strong class="text-sm text-red-600">{{ $message }}</strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('subtitle', 'Subtítulo del curso:', ['class' => 'font-bold']) !!}
    {!! Form::text('subtitle', null, ['class' => 'block w-full mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm' . ($errors->has('title') ? ' border-red-600' : '')]) !!}
    @error('subtitle')
        <strong class="text-sm text-red-600">{{ $message }}</strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('description', 'Descripción del curso:', ['class' => 'font-bold']) !!}
    {!! Form::textarea('description', null, ['class' => 'block w-full mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm']) !!}
    @error('description')
        <strong class="text-sm text-red-600">{{ $message }}</strong>
    @enderror
</div>

<div class="grid grid-cols-3 gap-4">
    <div>
        {!! Form::label('category_id', 'Categoría:', ['class' => 'font-bold']) !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'block w-full mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm']) !!}
    </div>
    <div>
        {!! Form::label('level_id', 'Niveles:', ['class' => 'font-bold']) !!}
        {!! Form::select('level_id', $levels, null, ['class' => 'block w-full mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm']) !!}
    </div>
    <div>
        {!! Form::label('price_id', 'Precio:', ['class' => 'font-bold']) !!}
        {!! Form::select('price_id', $prices, null, ['class' => 'block w-full mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm']) !!}
    </div>
</div>

<h1 class="text-2xl font-bold mt-8 mb-2">Imagen del curso</h1>
<div class="grid grid-cols-2 gap-4">
    <figure>
        @isset ($course->image) 
            <img id="picture" class="w-full h-64 object-cover object-center" src="{{ Storage::url($course->image->url) }}">
        @else
            <img id="picture" class="w-full h-64 object-cover object-center" src="https://images.pexels.com/photos/1181298/pexels-photo-1181298.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
        @endisset
    </figure>
    <div>
        <p class="mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde, doloremque. Cupiditate laborum ipsa ut minima in, illum totam molestiae sunt, aliquid esse temporibus facilis voluptatem dolor aliquam nemo distinctio blanditiis.</p>
        {!! Form::file('file', ['class' => 'w-full border border-gray-300 p-2 rounded' . ($errors->has('file') ? ' border-red-600' : ''), 'id' => 'file', 'accept' => 'image/*']) !!}
        @error('file')
            <strong class="text-sm text-red-600">{{ $message }}</strong>
        @enderror
    </div>
</div>
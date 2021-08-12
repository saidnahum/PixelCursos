<div class="mb-4">
  {!! Form::label('title', 'Título del curso:', ['class' => 'font-bold']) !!}
  {!! Form::text('title', null, ['class' => 'w-full shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full shadow-sm']) !!}
</div>

<div class="mb-4">
  {!! Form::label('slug', 'Slug del curso:', ['class' => 'font-bold']) !!}
  {!! Form::text('slug', null, ['class' => 'w-full shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full shadow-sm']) !!}
</div>

<div class="mb-4">
  {!! Form::label('subtitle', 'Subtítulo del curso:', ['class' => 'font-bold']) !!}
  {!! Form::text('subtitle', null, ['class' => 'w-full shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full shadow-sm']) !!}
</div>

<div class="mb-4">
  {!! Form::label('description', 'Descripción del curso:', ['class' => 'font-bold']) !!}
  {!! Form::textarea('description', null, ['class' => 'w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full shadow-sm']) !!}
</div>

<div class="grid grid-cols-3 gap-4">
  <div>
    {!! Form::label('category_id', 'Categoría:', ['class' => 'font-bold']) !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full shadow-sm']) !!}
  </div>

  <div>
    {!! Form::label('level_id', 'Niveles:', ['class' => 'font-bold']) !!}
    {!! Form::select('level_id', $levels, null, ['class' => 'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full shadow-sm']) !!}
  </div>

  <div>
    {!! Form::label('price_id', 'Precios:', ['class' => 'font-bold']) !!}
    {!! Form::select('price_id', $prices, null, ['class' => 'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full shadow-sm']) !!}
  </div>
</div>

<h1 class="text-2xl font-bold mt-8 mb-2">Imagen del curso:</h1>
<div class="grid grid-cols-2 gap-4">
  <figure>
    @isset ($course) 
      <img id="picture" class="w-full h-64 object-cover object-center" src="{{ Storage::url($course->image->url) }}">
    @else 
      <img id="picture" class="w-full h-64 object-cover object-center" src="https://images.pexels.com/photos/5940721/pexels-photo-5940721.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
    @endisset
  </figure>

  <div>
    <p class="mb-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit impedit, recusandae deleniti fuga sint nulla minima quaerat minus ea eveniet dolorum quidem quo nemo, nisi, corrupti iste optio tempora accusamus.</p>
    {!! Form::file('file', ['class' => 'w-full border border-gray-300 rounded-md p-2', 'id' => 'file']) !!}
  </div>
</div>
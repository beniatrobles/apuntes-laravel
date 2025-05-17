


<div class="border rounded p-4 mb-4 shadow w-[40%]">
    <h1 class="text-xl font-bold">{{ $name }}</h1>
    <p class="text-gray-700">{{ $description }}</p>
    <div class="mt-2 space-x-4">
        <a href="{{ $show }}" class="text-blue-500 hover:underline">Ver Detalles</a>
        <a href="{{ $eliminar }}" class="text-red-500 hover:underline">Eliminar</a>
    </div>
</div>
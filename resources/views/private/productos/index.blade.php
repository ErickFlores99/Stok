@extends('layouts.private')

@php $opt = 'productos'; @endphp

@section('content')

{{-- TÍTULO --}}
<div class="mb-6">
    <p class="text-secondary-500 mt-1">
        <a href="{{ route('dashboard') }}">Inicio</a> / <strong>Productos</strong>
    </p>
    <h1 class="text-3xl font-bold text-secondary-900">Productos</h1>
    <p class="text-secondary-500 mt-1">
        Administra y consulta todos tus productos.
    </p>
</div>

{{-- CARDS RESUMEN --}}
<div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">

    <div class="bg-card p-4 rounded-xl shadow-sm border">
        <p class="text-sm text-secondary-500">Productos Totales</p>
        <h2 class="text-2xl font-bold text-primary-600">1,240</h2>
    </div>

    <div class="bg-card p-4 rounded-xl shadow-sm border">
        <p class="text-sm text-secondary-500">Stock Bajo</p>
        <h2 class="text-2xl font-bold text-warning-500">18</h2>
    </div>

    <div class="bg-card p-4 rounded-xl shadow-sm border">
        <p class="text-sm text-secondary-500">Entradas Hoy</p>
        <h2 class="text-2xl font-bold text-success-500">56</h2>
    </div>

    <div class="bg-card p-4 rounded-xl shadow-sm border">
        <p class="text-sm text-secondary-500">Salidas Hoy</p>
        <h2 class="text-2xl font-bold text-danger-500">32</h2>
    </div>

</div>

{{-- FILTROS --}}
<div class="bg-card p-4 rounded-xl shadow-sm border mb-6 space-y-4">

    {{-- BUSCADOR + BOTONES --}}
    <div class="flex flex-col md:flex-row gap-3">

        <input 
            type="text" 
            placeholder="Buscar productos..." 
            class="flex-1 border border-border rounded-lg px-4 py-2"
        >

        <button class="border border-border px-4 py-2 rounded-lg whitespace-nowrap">
            Exportar
        </button>

        <button class="bg-primary-500 hover:bg-primary-600 text-white px-4 py-2 rounded-lg whitespace-nowrap">
            + Agregar Producto
        </button>

    </div>

    {{-- FILTROS --}}
    <div class="flex flex-wrap gap-3 items-end">

        <div class="flex flex-col flex-1 min-w-[140px]">
            <label class="text-xs text-secondary-500 mb-1">Categoría</label>
            <select class="border border-border rounded-lg px-3 py-2 w-full">
                <option>Todas</option>
            </select>
        </div>

        <div class="flex flex-col flex-1 min-w-[120px]">
            <label class="text-xs text-secondary-500 mb-1">Stock</label>
            <select class="border border-border rounded-lg px-3 py-2 w-full">
                <option>Todos</option>
            </select>
        </div>

        <div class="flex flex-col flex-1 min-w-[150px]">
            <label class="text-xs text-secondary-500 mb-1">Rango</label>
            <select class="border border-border rounded-lg px-3 py-2 w-full">
                <option>Todos</option>
            </select>
        </div>

        <div class="flex items-end">
            <button class="bg-primary-500 hover:bg-primary-600 text-white px-4 py-2 rounded-lg whitespace-nowrap">
                Filtrar
            </button>
        </div>

    </div>

</div>

{{-- TABLA --}}
<div class="bg-card rounded-xl shadow-sm border overflow-hidden">

    {{-- HEADER TABLA --}}
    <div class="p-4 flex justify-between text-sm text-secondary-500">
        <span>Mostrando 5 de 100 resultados</span>
    </div>

    <table class="w-full text-sm">

        <thead class="bg-background-dark text-secondary-700">
            <tr class="text-left">
                <th class="p-3">Producto</th>
                <th class="p-3">Categoría</th>
                <th class="p-3">Stock</th>
                <th class="p-3">Precio</th>
                <th class="p-3">Acciones</th>
            </tr>
        </thead>

        <tbody>

            {{-- ROW --}}
            <tr class="border-t">
                <td class="p-3 flex items-center gap-3">
                    <div class="w-10 h-10 bg-gray-200 rounded"></div>
                    Monitor Dell
                </td>
                <td class="p-3">Monitores</td>
                <td class="p-3 font-semibold">20</td>
                <td class="p-3">$350</td>
                <td class="p-3 flex gap-2">
                    <button class="bg-primary-500 text-white px-3 py-1 rounded">
                        Editar
                    </button>
                    <button class="bg-danger-500 text-white px-3 py-1 rounded">
                        Eliminar
                    </button>
                </td>
            </tr>

            <tr class="border-t">
                <td class="p-3 flex items-center gap-3">
                    <div class="w-10 h-10 bg-gray-200 rounded"></div>
                    Mouse Logitech
                </td>
                <td class="p-3">Periféricos</td>
                <td class="p-3">
                    <span class="bg-warning-100 text-warning-700 px-2 py-1 rounded text-xs">
                        3
                    </span>
                </td>
                <td class="p-3">$25</td>
                <td class="p-3 flex gap-2">
                    <button class="bg-primary-500 text-white px-3 py-1 rounded">
                        Editar
                    </button>
                    <button class="bg-danger-500 text-white px-3 py-1 rounded">
                        Eliminar
                    </button>
                </td>
            </tr>

        </tbody>

    </table>

    {{-- FOOTER --}}
    <div class="p-4 flex justify-between items-center text-sm text-secondary-500">

        <span>Mostrando 5 de 100 resultados</span>

        <div class="flex gap-2">
            <button class="px-3 py-1 border rounded">1</button>
            <button class="px-3 py-1 border rounded">2</button>
            <button class="px-3 py-1 border rounded">...</button>
        </div>

    </div>

</div>

@endsection

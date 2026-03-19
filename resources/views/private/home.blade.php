@extends('layouts.private')

@section('content')

{{-- TÍTULO --}}
<div class="mb-6">
    <h1 class="text-3xl font-bold text-secondary-900">Dashboard</h1>
</div>

{{-- STATS --}}
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">

    {{-- Productos --}}
    <div class="bg-card p-5 rounded-xl shadow-sm border border-border">
        <p class="text-sm text-muted">Productos Totales</p>
        <h3 class="text-2xl font-bold text-secondary-900">1,240</h3>
    </div>

    {{-- Stock Bajo --}}
    <div class="bg-card p-5 rounded-xl shadow-sm border border-border">
        <p class="text-sm text-muted">Stock Bajo</p>
        <h3 class="text-2xl font-bold text-warning-500">18</h3>
    </div>

    {{-- Entradas --}}
    <div class="bg-card p-5 rounded-xl shadow-sm border border-border">
        <p class="text-sm text-muted">Entradas Hoy</p>
        <h3 class="text-2xl font-bold text-success-500">56</h3>
    </div>

    {{-- Salidas --}}
    <div class="bg-card p-5 rounded-xl shadow-sm border border-border">
        <p class="text-sm text-muted">Salidas Hoy</p>
        <h3 class="text-2xl font-bold text-danger-500">32</h3>
    </div>

</div>

{{-- GRID PRINCIPAL --}}
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

    {{-- GRÁFICA (placeholder) --}}
    <div class="lg:col-span-2 bg-card p-6 rounded-xl shadow-sm border border-border">
        <h2 class="font-semibold text-secondary-900 mb-4">
            Movimientos del Inventario
        </h2>

        <div class="h-64 flex items-center justify-center text-muted">
            Aquí irá la gráfica 📊
        </div>
    </div>

    {{-- STOCK BAJO --}}
    <div class="bg-card p-6 rounded-xl shadow-sm border border-border">
        <h2 class="font-semibold text-secondary-900 mb-4">
            Productos con Stock Bajo
        </h2>

        <div class="space-y-4">

            <div class="flex justify-between items-center">
                <span>Mouse Logitech</span>
                <span class="text-danger-500 font-bold">3</span>
            </div>

            <div class="flex justify-between items-center">
                <span>Teclado Redragon</span>
                <span class="text-danger-500 font-bold">2</span>
            </div>

            <div class="flex justify-between items-center">
                <span>Monitor LG</span>
                <span class="text-danger-500 font-bold">1</span>
            </div>

        </div>

        <a href="#" class="block mt-4 text-primary-500 text-sm">
            Ver inventario →
        </a>
    </div>

</div>

{{-- SEGUNDA FILA --}}
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-6">

    {{-- USUARIOS --}}
    <div class="bg-card p-6 rounded-xl shadow-sm border border-border">
        <h2 class="font-semibold text-secondary-900 mb-4">
            Usuarios Recientes
        </h2>

        <div class="space-y-3 text-sm">

            <div class="flex justify-between">
                <span>Admin</span>
                <span class="text-muted">Hoy</span>
            </div>

            <div class="flex justify-between">
                <span>Juan</span>
                <span class="text-muted">Ayer</span>
            </div>

            <div class="flex justify-between">
                <span>Maria</span>
                <span class="text-muted">Hoy</span>
            </div>

        </div>
    </div>

    {{-- ACTIVIDAD --}}
    <div class="bg-card p-6 rounded-xl shadow-sm border border-border">
        <h2 class="font-semibold text-secondary-900 mb-4">
            Actividad Reciente
        </h2>

        <div class="space-y-3 text-sm">

            <div class="text-success-500">✔ Juan agregó 20 productos</div>
            <div class="text-success-500">✔ María registró una salida</div>
            <div class="text-success-500">✔ Admin creó un usuario</div>

        </div>

        <button class="mt-4 bg-primary-500 text-white px-4 py-2 rounded-lg text-sm">
            Exportar Reporte
        </button>
    </div>

    {{-- TOP PRODUCTOS --}}
    <div class="bg-card p-6 rounded-xl shadow-sm border border-border">
        <h2 class="font-semibold text-secondary-900 mb-4">
            Top Productos Vendidos
        </h2>

        <div class="space-y-3 text-sm">

            <div class="flex justify-between">
                <span>Monitor Dell</span>
                <span>320</span>
            </div>

            <div class="flex justify-between">
                <span>Mouse Logitech</span>
                <span>289</span>
            </div>

            <div class="flex justify-between">
                <span>Teclado Redragon</span>
                <span>253</span>
            </div>

        </div>

        <button class="mt-4 border border-border px-4 py-2 rounded-lg text-sm">
            Exportar Reporte
        </button>
    </div>

</div>

@endsection
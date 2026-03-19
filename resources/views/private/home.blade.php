@extends('layouts.private')

@section('script')
<script>
document.addEventListener('DOMContentLoaded', () => {

    // MOBILE MENU
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // USER DROPDOWN
    const userBtn = document.getElementById('userMenuBtn');
    const userMenu = document.getElementById('userMenu');

    if (userBtn && userMenu) {

        userBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            userMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', () => {
            userMenu.classList.add('hidden');
        });
    }

});
</script>
@endsection

@section('header')

<div class="bg-white/80 backdrop-blur shadow-md relative z-50">
    <div class="max-w-7xl mx-auto py-4 px-4">

        <div class="flex items-center justify-between">

            <!-- Logo -->
            <div class="text-xl font-bold text-primary-600">
                STOK
            </div>

            <!-- Botón hamburguesa (mobile) -->
            <button id="menuBtn" class="md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" 
                     class="h-6 w-6 text-secondary-900" 
                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>

            <!-- Menú desktop -->
            <div class="hidden md:flex items-center space-x-6 text-secondary-700">

                <a href="#" class="hover:text-primary-500">Inventario</a>
                <a href="#" class="hover:text-primary-500">Productos</a>
                <a href="#" class="hover:text-primary-500">Reportes</a>
                <a href="#" class="hover:text-primary-500">Configuración</a>

                <!-- USER DROPDOWN -->
                <div class="relative">

                    <button id="userMenuBtn"
                        class="flex items-center gap-2 px-3 py-2 rounded-lg hover:bg-background-dark">
                        
                        <div class="w-8 h-8 bg-primary-500 text-white flex items-center justify-center rounded-full text-sm">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </div>

                        <span class="text-sm">{{ Auth::user()->name }}</span>
                    </button>

                    <div id="userMenu"
                        class="hidden absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-md border border-border py-2">

                        <a href="{{ route('profile.edit') }}" 
                           class="block px-4 py-2 text-sm hover:bg-background">
                            Perfil
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full text-left px-4 py-2 text-sm text-danger-500 hover:bg-background">
                                Cerrar sesión
                            </button>
                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- MOBILE MENU -->
    <div id="mobileMenu"
        class="hidden md:hidden absolute top-full left-0 w-full bg-white border-t border-border shadow-md">

        <div class="p-4 space-y-4 text-secondary-700">

            <a href="#" class="block">Inventario</a>
            <a href="#" class="block">Productos</a>
            <a href="#" class="block">Reportes</a>
            <a href="#" class="block">Configuración</a>

            <hr>

            <!-- Usuario -->
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 bg-primary-500 text-white flex items-center justify-center rounded-full text-sm">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
                <span>{{ Auth::user()->name }}</span>
            </div>

            <a href="{{ route('profile.edit') }}" class="block text-sm">
                Perfil
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-full text-left text-sm text-danger-500">
                    Cerrar sesión
                </button>
            </form>

        </div>
    </div>

</div>

@endsection

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
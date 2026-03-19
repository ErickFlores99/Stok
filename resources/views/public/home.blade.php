@extends('layouts.public')

@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const menuBtn = document.getElementById('menuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        if (menuBtn && mobileMenu) {
            menuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
    });
</script>
@endsection

@section('header')

<div class="bg-white/80 backdrop-blur shadow-md">
    <div class="max-w-7xl mx-auto py-4 px-4">

        <div class="flex items-center justify-between">

            <!-- Logo -->
            <div class="text-xl font-bold text-primary-600">
                STOK
            </div>

            <!-- Botón hamburguesa -->
            <button id="menuBtn" class="md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-secondary-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>

            <!-- Menú desktop -->
            <div class="hidden md:flex items-center space-x-6 text-secondary-700">
                <a href="#">Inicio</a>
                <a href="#">Funciones</a>
                <a href="#">Reportes</a>
                <a href="#">Contacto</a>

                <a href="{{ route('login') }}" 
                class="bg-primary-500 hover:bg-primary-600 text-white px-4 py-2 rounded-lg">
                    Iniciar Sesión
                </a>
            </div>

        </div>

        <!-- Menú móvil -->
        <div id="mobileMenu" class="hidden md:hidden mt-4 space-y-3 text-secondary-700">

            <a href="#" class="block">Inicio</a>
            <a href="#" class="block">Funciones</a>
            <a href="#" class="block">Reportes</a>
            <a href="#" class="block">Contacto</a>

            <a href="{{ route('login') }}" 
            class="block bg-primary-500 text-white text-center py-2 rounded-lg">
                Iniciar Sesión
            </a>

        </div>

    </div>
</div>

@endsection

@section('content')

{{-- HERO --}}
<section class="py-12 md:py-16">
    <div class="grid md:grid-cols-2 gap-10 items-center">

        <!-- Texto -->
        <div class="text-center md:text-left">

            <h1 class="text-3xl md:text-5xl font-bold text-secondary-900 leading-tight">
                Control total de tu inventario
            </h1>

            <p class="mt-4 text-secondary-500 text-sm md:text-base">
                Gestiona productos, usuarios y movimientos desde un solo lugar.
            </p>

            <div class="mt-6 flex flex-col sm:flex-row gap-3 justify-center md:justify-start">

                <a href="{{ route('login') }}"
                class="bg-primary-500 hover:bg-primary-600 text-white px-6 py-3 rounded-lg text-center">
                    Comenzar
                </a>

                <a href="#" 
                class="border border-border px-6 py-3 rounded-lg text-center">
                    Contacto
                </a>

            </div>

        </div>

        <!-- Imagen -->
        <div class="bg-card p-3 md:p-4 rounded-xl shadow-sm border border-border">
            <img src="" 
                class="rounded-lg w-full">
        </div>

    </div>
</section>

{{-- STATS --}}
<section class="py-10">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

        <div class="bg-card p-5 rounded-xl shadow-sm border border-border">
            <p class="text-sm text-muted">Productos</p>
            <h3 class="text-2xl font-bold text-primary-500">1,240</h3>
        </div>

        <div class="bg-card p-5 rounded-xl shadow-sm border border-border">
            <p class="text-sm text-muted">Stock Bajo</p>
            <h3 class="text-2xl font-bold text-warning-500">18</h3>
        </div>

        <div class="bg-card p-5 rounded-xl shadow-sm border border-border">
            <p class="text-sm text-muted">Entradas</p>
            <h3 class="text-2xl font-bold text-success-500">56</h3>
        </div>

        <div class="bg-card p-5 rounded-xl shadow-sm border border-border">
            <p class="text-sm text-muted">Salidas</p>
            <h3 class="text-2xl font-bold text-danger-500">32</h3>
        </div>

    </div>
</section>

{{-- FEATURES --}}
<section class="py-16 bg-background-dark rounded-xl">
    <div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-secondary-900">
            Todo lo que necesitas
        </h2>
        <p class="text-secondary-500 mt-2">
            Herramientas diseñadas para optimizar tu operación
        </p>
    </div>

    <div class="grid md:grid-cols-3 gap-6">

        <div class="bg-card p-6 rounded-xl shadow-sm border border-border">
            <h3 class="font-semibold text-lg text-primary-600">Inventario</h3>
            <p class="text-muted mt-2">
                Controla stock, movimientos y disponibilidad en tiempo real.
            </p>
        </div>

        <div class="bg-card p-6 rounded-xl shadow-sm border border-border">
            <h3 class="font-semibold text-lg text-primary-600">Usuarios</h3>
            <p class="text-muted mt-2">
                Administra accesos y roles de forma sencilla.
            </p>
        </div>

        <div class="bg-card p-6 rounded-xl shadow-sm border border-border">
            <h3 class="font-semibold text-lg text-primary-600">Reportes</h3>
            <p class="text-muted mt-2">
                Visualiza datos clave con gráficos y métricas claras.
            </p>
        </div>

    </div>
</section>

{{-- PREVIEW --}}
<section class="py-16">
    <div class="grid md:grid-cols-2 gap-10 items-center">

        <div>
            <h2 class="text-3xl font-bold text-secondary-900">
                Visualiza todo en un dashboard intuitivo
            </h2>

            <p class="mt-4 text-secondary-500">
                Analiza entradas, salidas y stock con gráficos claros y rápidos.
            </p>
        </div>

        <div class="bg-card p-4 rounded-xl shadow-sm border border-border">
            <img src="" class="rounded-lg">
        </div>

    </div>
</section>

{{-- CTA --}}
<section class="py-20 text-center">
    <h2 class="text-3xl font-bold text-secondary-900">
        Empieza a optimizar tu negocio hoy
    </h2>

    <p class="mt-3 text-secondary-500">
        Accede y lleva el control total de tu inventario
    </p>

    <a href="{{ route('login') }}" 
    class="mt-6 inline-block bg-primary-500 hover:bg-primary-600 text-white px-8 py-3 rounded-lg">
        Comenzar
    </a>
</section>

@endsection
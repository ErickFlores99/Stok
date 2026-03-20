<header class="mb-6">

    <div class="bg-white/80 backdrop-blur shadow-md relative z-50">
        <div class="max-w-7xl mx-auto py-4 px-4">

            <div class="flex items-center justify-between">

                <!-- Logo -->
                <a href="{{ route('dashboard') }}">
                    <div class="text-xl font-bold text-primary-600">
                        STOK
                    </div>
                </a>
                

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

                    <!-- Productos -->
                    <a href="{{ route('productos.index') }}"
                    class="relative px-2 py-1 {{ $opt == 'productos' ? 'text-primary-500' : 'text-secondary-700' }} hover:text-primary-500">
                        Productos
                        @if($opt == 'productos')
                            <span class="absolute -bottom-1 left-0 w-full h-1 bg-primary-500 rounded-full"></span>
                        @endif
                    </a>

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

                <!-- Productos -->
                <a href="{{ route('productos.index') }}"
                class="block md:hidden {{ $opt == 'productos' ? 'text-primary-500' : 'text-secondary-700' }} hover:text-primary-500">
                    Productos
                    @if($opt == 'productos')
                        <span class="block w-full h-1 mt-1 bg-primary-500 rounded-full"></span>
                    @endif
                </a>
                
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

</header>
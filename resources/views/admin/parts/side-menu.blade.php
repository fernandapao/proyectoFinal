<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('images/m-logo.png') }}" class="img-fluid" alt="">
                {{--
                <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                        fill="#7367F0" />
                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                        fill="#7367F0" />
                </svg> --}}

            </span>
            <span class="app-brand-text demo menu-text fw-bold">AeroAsist</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Page -->
        @if ( strcmp("admin",auth()->user()->rol)==0)

        <li class="menu-item @if (strcmp($seccionActiva, 'Home') == 0) active @endif">
            <a href="{{ url('admin/home') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-home"></i>
                <div data-i18n="Page 1">Inicio</div>
            </a>
        </li>

        @endif

        @if ( strcmp("operador",auth()->user()->rol)==0)
            <li class="menu-item @if (strcmp($seccionActiva, 'Home') == 0) active @endif">
                <a href="{{ url('operador/home') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-home"></i>
                    <div data-i18n="Page 1">Inicio</div>
                </a>
            </li>
        @endif

        @if ( strcmp("admin",auth()->user()->rol)==0)
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="Components">Contenido General</span>
        </li>




        {{-- HOME PAGINA --}}
        <li class="menu-item @if (strcmp($seccionActiva, 'HomePages') == 0) open active @endif" style="">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-home"></i>

                <div data-i18n="Icons">HOME</div>
            </a>

        </li>


        {{-- HOME NOSOTROS --}}
        <li class="menu-item @if (strcmp($seccionActiva, 'NosotrosPages') == 0) open @endif" style="">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-list-details"></i>
                <div data-i18n="Icons">Nosotros</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item @if (strcmp($submenu, 'NosotrosEs') == 0) active @endif">
                    <a href="{{ url('admin/nosotros/es') }}" class="menu-link">
                        <div data-i18n="Tabler">Español</div>
                    </a>
                </li>
            </ul>
        </li>



        {{-- Preguntas Frecuentes --}}
        <li class="menu-item @if (strcmp($seccionActiva, 'PreguntasFrecuentes') == 0) open @endif" style="">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-help-hexagon"></i>
                <div data-i18n="Icons">Preguntas Frecuentes</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item @if (strcmp($submenu, 'PreguntasFrecuenteslistado') == 0) active @endif">
                    <a href="{{ url('admin/preguntas_frecuentes/listado') }}" class="menu-link">
                        <div data-i18n="Tabler">Listado</div>
                    </a>
                </li>
                <li class="menu-item @if (strcmp($submenu, 'PreguntasFrecuentesAgregar') == 0) active @endif">
                    <a href="{{ url('admin/preguntas_frecuentes/crear') }}" class="menu-link">
                        <div data-i18n="Fontawesome">Agregar nueva pregunta</div>
                    </a>
                </li>
            </ul>
        </li>


        @endif


        {{-- Seccion Vuelos --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="Components">Vuelos</span>
        </li>


        <li class="menu-item @if (strcmp($seccionActiva, 'Reservas') == 0) active open @endif" style="">
            <a href="{{ url('admin/reservas/listado') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-presentation-analytics"></i>
                <div data-i18n="Icons">Listado de Reservas</div>
            </a>
        </li>

        <li class="menu-item @if (strcmp($seccionActiva, 'Clientes') == 0) active open @endif" style="">
            <a href="{{ url('admin/clientes/listado') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-users"></i>

                <div data-i18n="Icons">Clientes</div>
            </a>
        </li>


        @if ( strcmp("admin",auth()->user()->rol)==0)
        {{-- Seccion Configuración --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="Components">Configuración</span>
        </li>

        {{-- Usuarios --}}
        <li class="menu-item @if (strcmp($seccionActiva, 'Usuarios') == 0) open @endif" style="">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-users-group"></i>
                <div data-i18n="Icons">Usuarios</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item @if (strcmp($submenu, 'UsuariosListado') == 0) active @endif">
                    <a href="{{ url('admin/usuarios/listado') }}" class="menu-link">
                        <div data-i18n="Tabler">Listado</div>
                    </a>
                </li>
                <li class="menu-item @if (strcmp($submenu, 'UsuariosAgregar') == 0) active @endif">
                    <a href="{{ url('admin/usuarios/crear') }}" class="menu-link">
                        <div data-i18n="Fontawesome">Crear Usuario</div>
                    </a>
                </li>
            </ul>
        </li>

        {{-- SEO --}}
        <li class="menu-item @if (strcmp($seccionActiva, 'Seo') == 0) open @endif" style="">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-seo"></i>
                <div data-i18n="Icons">SEO</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item @if (strcmp($submenu, 'SeoListado') == 0) active @endif">
                    <a href="{{ url('admin/seo/listado') }}" class="menu-link">
                        <div data-i18n="Tabler">Listado</div>
                    </a>
                </li>
            </ul>
        </li>


        {{-- VALORES --}}
        <li class="menu-item @if (strcmp($seccionActiva, 'Valores') == 0) active @endif" style="">
            <a href="{{ url('admin/configuracion/valores') }}" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-currency-dollar"></i>
                <div data-i18n="Icons">Valores reservas</div>
            </a>
        </li>


        {{-- EMAILS --}}
        <li class="menu-item @if (strcmp($seccionActiva, 'Emails') == 0) active @endif" style="">
            <a href="{{ url('admin/configuracion/emails') }}" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-mail-cog"></i>
                <div data-i18n="Icons">Cuenta de Email</div>
            </a>
        </li>

        {{-- REDES SOCIALES --}}
        <li class="menu-item @if (strcmp($seccionActiva, 'Redes') == 0) active @endif" style="">
            <a href="{{ url('admin/configuracion/redes') }}" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-social"></i>
                <div data-i18n="Icons">Redes Sociales</div>
            </a>
        </li>



        @endif




    </ul>

</aside>

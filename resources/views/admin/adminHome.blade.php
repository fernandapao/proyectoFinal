@extends('layouts.app-admin',[
'TituloPage' =>'MovilRenta',
'seccionActiva' => 'Home',
'SubseccionActiva' => '',
'submenu' => ''])

@section('content')



<div class="row">


    {{ auth()->user()->rol }} {{ auth()->user()->type }}
    @if ( strcmp("admin",auth()->user()->rol)==0)
    <h4 class="py-3 mb-4">Contenido general</h4>

    {{-- HOME --}}
    <div class="col-sm-6 col-lg-3 mb-4">
        <a href="{{ url('admin/home/es') }}" class="card card-border-shadow-primary">
            <div class="card-body">
                <div class="d-flex align-items-center mb-2 pb-1">
                    <div class="avatar me-2">
                        <span class="avatar-initial rounded bg-label-primary">
                            <i class="ti ti-home ti-md"></i>
                        </span>
                    </div>
                    <h4 class="ms-1 mb-0">Home</h4>
                </div>
                <p class="mb-1">Administra el contenido principal de la página de inicio.</p>
            </div>
        </a>
    </div>

    {{-- NOSOTROS --}}
    <div class="col-sm-6 col-lg-3 mb-4">
        <a href="{{ url('admin/nosotros') }}" class="card card-border-shadow-primary">
            <div class="card-body">
                <div class="d-flex align-items-center mb-2 pb-1">
                    <div class="avatar me-2">
                        <span class="avatar-initial rounded bg-label-primary">
                            <i class="ti ti-list-details ti-md"></i>
                        </span>
                    </div>
                    <h4 class="ms-1 mb-0">Nosotros</h4>
                </div>
                <p class="mb-1">Edita la información sobre la empresa, historia, misión, servicios, etc.</p>
            </div>
        </a>
    </div>


    {{-- PREGUNTAS FECUENTES --}}
    <div class="col-sm-6 col-lg-3 mb-4">
        <a href="{{ url('admin/preguntas_frecuentes/listado') }}" class="card card-border-shadow-primary">
            <div class="card-body">
                <div class="d-flex align-items-center mb-2 pb-1">
                    <div class="avatar me-2">
                        <span class="avatar-initial rounded bg-label-primary">
                            <i class="ti ti-help-hexagon ti-md"></i>
                        </span>
                    </div>
                    <h4 class="ms-1 mb-0">Preguntas Frecuentes</h4>
                </div>
                <p class="mb-1">Actualiza las respuestas a las preguntas más comunes de tu empresa.</p>
            </div>
        </a>
    </div>


    @endif

    @if ( strcmp("operador",auth()->user()->rol)==0)

    @endif




</div>





<div class="row">

    <h4 class="py-3 mb-4">Vuelos</h4>


    {{-- CLIENTES --}}
    <div class="col-sm-6 col-lg-3 mb-4">
        <a href="{{ url('admin/clientes/listado') }}" class="card card-border-shadow-primary">
            <div class="card-body">
                <div class="d-flex align-items-center mb-2 pb-1">
                    <div class="avatar me-2">
                        <span class="avatar-initial rounded bg-label-primary">
                            <i class="ti ti-users ti-md"></i>
                        </span>
                    </div>
                    <h4 class="ms-1 mb-0">Clientes</h4>
                </div>
                <p class="mb-1"></p>
            </div>
        </a>
    </div>
</div>






@if ( strcmp("admin",auth()->user()->rol)==0)
<div class="row">
    <h4 class="py-3 mb-4">Configuración</h4>

    {{-- USUARIOS --}}
    <div class="col-sm-6 col-lg-3 mb-4">
        <a href="{{ url('admin/usuarios/listado') }}" class="card card-border-shadow-primary">
            <div class="card-body">
                <div class="d-flex align-items-center mb-2 pb-1">
                    <div class="avatar me-2">
                        <span class="avatar-initial rounded bg-label-primary">
                            <i class="ti ti-users-group ti-md"></i>
                        </span>
                    </div>
                    <h4 class="ms-1 mb-0">Usuarios</h4>
                </div>
                <p class="mb-1"></p>
            </div>
        </a>
    </div>


    {{-- SEO --}}
    <div class="col-sm-6 col-lg-3 mb-4">
        <a href="{{ url('admin/seo/listado') }}" class="card card-border-shadow-primary">
            <div class="card-body">
                <div class="d-flex align-items-center mb-2 pb-1">
                    <div class="avatar me-2">
                        <span class="avatar-initial rounded bg-label-primary">
                            <i class="ti ti-seo ti-md"></i>
                        </span>
                    </div>
                    <h4 class="ms-1 mb-0">SEO</h4>
                </div>
                <p class="mb-1"></p>
            </div>
        </a>
    </div>



    {{-- EMAILS --}}
    <div class="col-sm-6 col-lg-3 mb-4">
        <a href="{{ url('admin/configuracion/emails') }}" class="card card-border-shadow-primary">
            <div class="card-body">
                <div class="d-flex align-items-center mb-2 pb-1">
                    <div class="avatar me-2">
                        <span class="avatar-initial rounded bg-label-primary">
                            <i class="ti ti-social ti-md"></i>
                        </span>
                    </div>
                    <h4 class="ms-1 mb-0">Emails</h4>
                </div>
                <p class="mb-1"></p>
            </div>
        </a>
    </div>

    {{-- REDES SOCIALES --}}
    <div class="col-sm-6 col-lg-3 mb-4">
        <a href="{{ url('admin/configuracion/redes') }}" class="card card-border-shadow-primary">
            <div class="card-body">
                <div class="d-flex align-items-center mb-2 pb-1">
                    <div class="avatar me-2">
                        <span class="avatar-initial rounded bg-label-primary">
                            <i class="ti ti-presentation-analytics ti-md"></i>
                        </span>
                    </div>
                    <h4 class="ms-1 mb-0">Redes Sociales</h4>
                </div>
                <p class="mb-1"></p>
            </div>
        </a>
    </div>


</div>
@endif


@endsection

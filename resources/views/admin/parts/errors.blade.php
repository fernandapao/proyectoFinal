@if ($errors->any())
    <div class="card mb-4">
        <div class="card-body">
            <div class="alert alert-danger alert-dismissible d-flex align-items-baseline" role="alert">
                <span class="alert-icon alert-icon-lg text-danger me-2">
                    <i class="ti ti-check ti-sm"></i>
                </span>
                <div class="d-flex flex-column ps-1">
                    <h5 class="alert-heading mb-2">ERROR !</h5>
                    <p class="mb-0">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>



@endif

@if (isset($success))
    <div class="card mb-4">
        <div class="card-body">

            <div class="alert alert-success alert-dismissible d-flex align-items-baseline" role="alert">
                <span class="alert-icon alert-icon-lg text-success me-2">
                    <i class="ti ti-check ti-sm"></i>
                </span>
                <div class="d-flex flex-column ps-1">
                    <h5 class="alert-heading mb-2">OK !</h5>
                    <p class="mb-0">
                        {{ $success }}
                    </p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
@endif


@if (session('success'))
    <div class="card mb-4">
        <div class="card-body">

            <div class="alert alert-success alert-dismissible d-flex align-items-baseline" role="alert">
                <span class="alert-icon alert-icon-lg text-success me-2">
                    <i class="ti ti-check ti-sm"></i>
                </span>
                <div class="d-flex flex-column ps-1">
                    <h5 class="alert-heading mb-2">OK !</h5>
                    <p class="mb-0">
                        {{ session('success') }}
                    </p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
@endif

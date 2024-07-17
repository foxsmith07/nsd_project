<x-layout>
    <div style="height: 70px"></div>
    {{-- ? HEADER + STATUS MESSAGE --}}
    <header class="container-fluid">
        <div class="row d-flex flex-column justify-content-center align-items-center">
            {{-- <h1 class="text-center my-4">TRAIN MONITORING PAGE</h1> --}}
            @if (session('msg'))
                <div class="alert alert-success alert-dismissible border-3 fade show w-25" role="alert">
                    <strong><i class="fa-solid fa-circle-check me-2"></i>{{ session('msg') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </header>

    <main class="container-fluid">
        <div class="row">
            {{-- todo LEFT --}}
            <div class="col-2 p-2 min-vh-100 bg-secondary-subtle">
                
                <x-left />

            </div>


            {{-- todo Right side  --}}
            <div class="col-10">

                <x-right :$trains />

            </div>
        </div>

    </main>

</x-layout>

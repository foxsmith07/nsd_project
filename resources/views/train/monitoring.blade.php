<x-layout>
    <div style="height: 70px"></div>
    {{--? HEADER + STATUS MESSAGE --}}
    <div class=" d-flex flex-column justify-content-center align-items-center">
        <h1 class="text-center my-4">TRAIN MONITORING PAGE</h1>
        @if (session('msg'))
            <div class="alert alert-success alert-dismissible border-3 fade show w-25" role="alert">
                <strong><i class="fa-solid fa-circle-check me-2"></i>{{ session('msg') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    {{--* TABLE MONITORING  --}}
    
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr class=" table-dark">
                            <th scope="col">Train</th>
                            <th scope="col">Trip</th>
                            <th scope="col">Location</th>
                            <th scope="col">Next trip</th>
                            <th scope="col">Speed</th>
                            <th scope="col">Users</th>
                            <th scope="col" colspan="3" class="text-center">Links</th>
                            <th scope="col">Last check</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($trains as $train)
                            <tr>
                                <th scope="row">{{$train->number}}</th>
                                <td>{{$train->trip}}</td>
                                <td>{{$train->location}}</td>
                                <td>{{$train->next_trip}}</td>
                                <td>{{$train->speed}} km/h</td>
                                <td>
                                    <span class="btn btn-success btn-sm">{{$train->users}}</span>
                                    <span class="btn btn-success btn-sm">07</span>
                                </td>
                                <td colspan="3" class="text-center">
                                    <span class="btn btn-success btn-sm">B1M0</span>
                                    <span class="btn btn-success btn-sm">B1M1</span>
                                    <span class="btn btn-danger btn-sm">B2M0</span>
                                    <span class="btn btn-success btn-sm">B2M1</span>
                                </td>
                                <td>{{$train->created_at->format('d/m/Y - H:i')}}</td>
                            </tr>

                        @empty
                        <tr>
                            <td class="fw-bold text-danger fs-4" colspan="100%">NO TRAIN ADDED ... </td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-layout>

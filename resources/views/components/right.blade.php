<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-tiles-tab" data-bs-toggle="tab" data-bs-target="#nav-tiles" type="button"
            role="tab" aria-controls="nav-tiles" aria-selected="true">Tiles</button>
        <button class="nav-link" id="nav-map-tab" data-bs-toggle="tab" data-bs-target="#nav-map" type="button"
            role="tab" aria-controls="nav-map" aria-selected="false">Map</button>
        <button class="nav-link" id="nav-table-tab" data-bs-toggle="tab" data-bs-target="#nav-table" type="button"
            role="tab" aria-controls="nav-table" aria-selected="false">Table</button>
        <button class="nav-link" id="nav-alarm-tab" data-bs-toggle="tab" data-bs-target="#nav-alarm" type="button"
            role="tab" aria-controls="nav-alarm" aria-selected="false">Alarm</button>
    </div>
</nav>

{{-- ? TILES --}}
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-tiles" role="tabpanel" aria-labelledby="nav-tiles-tab"
        tabindex="0">
        @forelse ($trains as $train)
            <a href="{{ route('train.details', compact('train')) }}" class="btn btn-success m-1"
                style="width: 110px">Train {{ $train->number }}</a>
        @empty
            <p class="text-danger">No train inserted!</p>
        @endforelse

    </div>
    {{-- ? MAP  --}}
    <div class="tab-pane fade" id="nav-map" role="tabpanel" aria-labelledby="nav-map-tab" tabindex="0">
        <div class="min-vh-100">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96570.19839364252!2d14.164201884873547!3d40.85390413346543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x133b0866db7afaeb%3A0xd23a43cc658cb87e!2sNapoli%20NA!5e0!3m2!1sit!2sit!4v1718407786114!5m2!1sit!2sit"
                width="100%" height="1200" style="border:0;" allowfullscreen="no" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>


    </div>
    {{-- ? TABLE  --}}
    <div class="tab-pane fade" id="nav-table" role="tabpanel" aria-labelledby="nav-table-tab" tabindex="0">
        {{-- * TABLE MONITORING  --}}

        <div class="container-fluid">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 p-0">
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
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($trains as $train)
                                <tr>
                                    <th scope="row">{{ $train->number }}</th>
                                    <td>{{ $train->trip }}</td>
                                    <td>{{ $train->location }}</td>
                                    <td>{{ $train->next_trip }}</td>
                                    <td>{{ $train->speed }} km/h</td>
                                    <td>
                                        <span class="btn btn-success btn-sm">{{ $train->users }}</span>
                                        <span class="btn btn-success btn-sm">07</span>
                                    </td>
                                    <td colspan="3" class="text-center">
                                        <span class="btn btn-success btn-sm">B1M0</span>
                                        <span class="btn btn-success btn-sm">B1M1</span>
                                        <span class="btn btn-danger btn-sm">B2M0</span>
                                        <span class="btn btn-success btn-sm">B2M1</span>
                                    </td>
                                    <td>{{ $train->created_at->format('d/m/Y - H:i') }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('train.details', compact('train')) }}"
                                            class="btn btn-primary btn-sm">details</a>
                                        <a href="{{ route('train.edit', compact('train')) }}"
                                            class="btn btn-warning btn-sm">edit</a>
                                        <form action="{{ route('train.destroy', $train) }}" method="POST"
                                            class=" d-inline-flex">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm" type="submit">remove</button>
                                        </form>
                                    </td>
                                </tr>

                            @empty
                                <tr>
                                    <td class="fw-bold text-danger fs-4" colspan="100%">NO TRAIN ADDED
                                        ... </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
    {{-- ? ALARM --}}
    <div class="tab-pane fade" id="nav-alarm" role="tabpanel" aria-labelledby="nav-alarm-tab" tabindex="0">

    </div>
</div>

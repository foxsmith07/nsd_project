<x-layout>
    <div style="height: 70px"></div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex align-items-center">
                <h1>Details Train {{ $train->number }}</h1>
                <div class="input-group ms-4 w-25">
                    <label class="input-group-text" for="inputGroupSelect01">Switch to</label>
                    <select class="form-select" id="inputGroupSelect01">
                        <option selected>{{ $train->number }}</option>
                        @foreach ($trains as $train)
                            <option value="{{ $train->number }}">{{ $train->number }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

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
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-4 border-end border-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96570.19839364252!2d14.164201884873547!3d40.85390413346543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x133b0866db7afaeb%3A0xd23a43cc658cb87e!2sNapoli%20NA!5e0!3m2!1sit!2sit!4v1718407786114!5m2!1sit!2sit" width="100%" height="450" style="border:0;" allowfullscreen="no" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-12 col-md-8">
                <p class="fs-5 fw-bold alert alert-info text-center">No Alarm found</p>
            </div>
        </div>



    </div>
</x-layout>

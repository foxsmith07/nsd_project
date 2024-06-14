<x-layout>
    <div style="height: 70px"></div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-8 shadow rounded-3 p-4">
                <h2 class="text-center">Modifica dati Treno {{ $train->number }}</h2>
                <p class="text-center"><small>(dati al momento fittizzi)</small></p>

                <div class="row">

                    <div class="col-12 col-md-5 d-flex justify-content-center">
                        <form action="{{ route('train.update', compact('train')) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="number" class="form-label">Train Number</label>
                                <input type="number" class="form-control @error('number') is-invalid @enderror"
                                    id="number" name="number" value="{{ $train->number }}">
                                @error('number')
                                    <p class="text-danger"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="trip" class="form-label">Trip</label>
                                <input type="number" class="form-control @error('trip') is-invalid @enderror"
                                    id="trip" name="trip" value="{{ $train->trip }}">
                                @error('trip')
                                    <p class="text-danger"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" class="form-control @error('location') is-invalid @enderror"
                                    id="location" name="location" value="{{ $train->location }}">
                                @error('location')
                                    <p class="text-danger"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="next_trip" class="form-label">Next trip</label>
                                <input type="number" class="form-control @error('next_trip') is-invalid @enderror"
                                    id="next_trip" name="next_trip" value="{{ $train->next_trip }}">
                                @error('next_trip')
                                    <p class="text-danger"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="speed" class="form-label">Speed</label>
                                <input type="number" class="form-control @error('speed') is-invalid @enderror"
                                    id="speed" name="speed" value="{{ $train->speed }}">
                                @error('speed')
                                    <p class="text-danger"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="users" class="form-label">Users</label>
                                <input type="number" class="form-control @error('users') is-invalid @enderror"
                                    id="users" name="users" value="{{ $train->users }}">
                                @error('users')
                                    <p class="text-danger"> {{ $message }} </p>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-warning">Modifica</button>
                        </form>
                    </div>

                    <div class="d-none d-md-inline-block col-md-7 d-flex mt-5 justify-content-center align-items-center">
                        <img src="https://thumbs.dreamstime.com/b/treno-27907878.jpg" width="100%" alt="">
                    </div>

                </div>

            </div>

        </div>

    </div>
</x-layout>

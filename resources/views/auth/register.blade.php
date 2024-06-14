<x-layout>


    <div style="height: 70px"></div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-4 d-flex flex-column justify-content-center align-items-center shadow rounded-5 p-5 main-color my-3">
                <img src="https://www.svgrepo.com/show/484543/data.svg" alt="" width="80">
                <h1 class="text-center mb-2">Network Service Desk</h1>
                <hr class="border border-secondary border-1 w-100">
                <p class="fs-3">Register</p>
                <form class="w-75" action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Username</label>
                        <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Password Confirmation</label>
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation">
                        @error('password_confirmation')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-warning">Register</button>
                </form>
                <hr class="border border-secondary border-1 w-100">
                <p>Are you registered?</p>
                <a href="{{route('login')}}" class="btn btn-primary">Login</a>
            </div>
        </div>
    </div>

</x-layout>

<x-layout>


    <div style="height: 70px"></div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-4 d-flex flex-column justify-content-center align-items-center shadow rounded-5 p-5" style="background-color: #e0e1dd">
                <img src="https://www.svgrepo.com/show/484543/data.svg" alt="" width="80">
                <h1 class="text-center mb-2">Network Service Desk</h1>
                <hr class="border border-secondary border-1 w-100">
                <p class="fs-3">Login</p>
                <form class="w-75" action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                <hr class="border border-secondary border-1 w-100">
                <p>Are you not registered yet?</p>
                <a href="{{route('register')}}" class="btn btn-warning">Register</a>
            </div>
        </div>
    </div>

</x-layout>

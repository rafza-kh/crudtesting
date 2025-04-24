@extends('dashmain/index')

@section('main-container')

<body>
    <div><h4><b>Edit User</b></h4></div>

    <div class="container-fluid p-1">
        <form action="{{ route('emp.update', $empdata->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $empdata->name }}" name="name"
                    aria-describedby="emailHelp">
                    <p class="text-danger">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </p>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ $empdata->email }}"
                    aria-describedby="emailHelp">
                    <p class="text-danger">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </p>

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">New Password</label>
                <input type="password" class="form-control" name="password"  id="exampleInputPassword1">
                <p class="text-danger">
                    @error('password')
                    {{ $message }}
                    @enderror
                </p>
            </div>

            <button type="submit" name="submit" class="btn btn-primary px-4">Submit</button>
            <a href="{{ route('emp.show') }}"  class="btn btn-primary">Show data</a>
        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
@endsection

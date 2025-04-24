@extends('dashmain/index')
@section('main-container')

    <body>
                   <div><h4><b>Add User</b></h4></div>

        <div class="container-fluid p-1">
            <form action="{{ route('emp.add') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputname" class="form-label">NAME</label>
                    <input type="text" value="{{ old('name') }}" name="name" class="form-control" id="name"
                        aria-describedby="emailHelp">
                    <p class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </p>

                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">EMAIL</label>
                    <input type="email" value="{{ old('email') }}" name="email" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                    <p>
                        @error('email')
                            {{ $message }}
                        @enderror
                    </p>

                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">PASSWORD</label>
                    <input type="password" value="{{ old('password') }}" name="password" class="form-control"
                        id="exampleInputPassword1">
                    <p>
                        @error('password')
                            {{ $message }}
                        @enderror
                    </p>

                </div>

                <button type="submit" name="submit" class="btn btn-primary px-4"> Submit </button>
                <a href="{{ route('emp.show') }}" class="btn btn-primary ">show data</a>
            </form>
        </div>



        <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
@endsection

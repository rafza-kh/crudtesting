@extends('dashmain/index')

@section('main-container')
<body>
        <div><h4><b>Trash Bin</b></h4></div>

    <div class="container-fluid p-1">

        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
            @foreach ($empdata as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->password }}</td>
                    <td>{{ $data->created_at }}</td>
                    <td>
                        <a href="{{ route('emp.permdelete', $data->id) }}" class="btn btn-danger">delete </a>|
                        <a href="{{ route('emp.restore', $data->id) }}" class="btn btn-primary"> restore</a>

                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <a href="{{ route('emp.add') }}" class="btn btn-primary">Add data</a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
@endsection

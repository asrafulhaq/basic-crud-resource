<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Development Area</title>
    <!-- ALL CSS FILES  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>



    <div class="wrap-table ">
        <a class="btn btn-sm btn-primary" href="{{ route('student.create') }}">Add new student</a>
        <br>
        <br>
        <div class="card shadow">
            <div class="card-body">
                <h2>All Students</h2>
                @if (Session::has('success'))

                    <p class="alert alert-success">{{ Session::get('success') }} <button class="close"
                            data-dismiss="alert">&times;</button>
                    </p>

                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Cell</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($all_data as $data)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->cell }}</td>
                                <td><img src="{{ asset('') }}media/students/{{ $data->photo }}" alt=""></td>
                                <td>
                                    <a class="btn btn-sm btn-info"
                                        href="{{ route('student.show', $data->id) }}">View</a>
                                    <a class="btn btn-sm btn-warning"
                                        href="{{ route('student.edit', $data->id) }}">Edit</a>
                                    <a class="btn btn-sm btn-danger"
                                        href="{{ route('student.destroy', $data->id) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>








    <!-- JS FILES  -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>

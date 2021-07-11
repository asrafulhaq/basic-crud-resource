<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Development Area</title>
    <!-- ALL CSS FILES  -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>



    <div class="wrap ">
        <a class="btn btn-sm btn-primary" href="{{ route('student.index') }}">Back</a>
        <br>
        <br>
        <div class="card shadow">
            <div class="card-body">
                <h2>Edit Data {{ $edit_data->name }}</h2>

                @if (Session::has('success'))

                    <p class="alert alert-success">{{ Session::get('success') }} <button class="close"
                            data-dismiss="alert">&times;</button>
                    </p>

                @endif


                <form action="{{ route('student.update', $edit_data->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input name="name" class="form-control" value="{{ $edit_data->name }}" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input name="email" class="form-control" value="{{ $edit_data->email }}" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Cell</label>
                        <input name="cell" class="form-control" value="{!! $edit_data->cell !!}" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input name="uname" class="form-control" value="{{ $edit_data->uname }}" type="text">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Sign Up">
                    </div>
                </form>
            </div>
        </div>
    </div>








    <!-- JS FILES  -->
    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>

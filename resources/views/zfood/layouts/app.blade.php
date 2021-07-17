<!DOCTYPE html>
<html lang="en">

<head>

    @include('zfood.layouts.head')

</head>

<body>
    <div class="wrap-body">
        @include('zfood.layouts.header')

        @section('main')
        @show

        @include('zfood.layouts.footer')

    </div>
</body>

</html>

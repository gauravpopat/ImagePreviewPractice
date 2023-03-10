<!doctype html>
<html lang="en">

<head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    @if (Session::has('success'))
                        <p id="errormessage" style="text-align: left;color: green;">
                            {{ Session::get('success') }}
                        </p>
                    @endif
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col" colspan="2" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($images as $image)
                    <tr class="p-20">
                        <td>{{ $image->name }}</td>
                        <td><img src="{{ asset('/images/' . $image->image) }}" alt="" height="40px"
                                width="40px"> </td>
                        <td> <a href="{{ route('delete', ['id' => $image->id]) }}">Delete</a> </td>
                        <td> <a href="{{ route('updateForm', ['id' => $image->id]) }}">Update</a> </td>
                    </tr>
                @endforeach
            </tbody>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>

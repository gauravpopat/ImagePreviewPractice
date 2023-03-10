<!doctype html>
<html lang="en">

<head>
    <title>Update Image</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style="margin: 3%;">
    <form action="{{ route('update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$image->id}}">
        <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" value="{{$image->name}}" class="form-control" placeholder="Enter Your Name" required>
        </div>
        <div class="form-group">
        <br><label for="">Image</label>
        <input type="file" onchange="preview()" class="form-control" name="image" placeholder="Upload File" value="{{$image->image}}">
        </div>
        <div class="form-group">
            <img id="frame" src="{{ asset('images/'.$image->image) }}" class="rounded mx-auto d-block" height="100px" width="100px"/>
        </div>
        <br><input type="submit" value="Update" class="btn btn-dark w-100">
        @if (Session::has('success'))
            <p id="errormessage" style="text-align: left;color: green;">
                {{ Session::get('success') }}
            </p>
        @endif
        @if (Session::has('error'))
            <p id="errormessage" style="text-left: left;color: red;">
                {{ Session::get('error') }}
            </p>
        @endif

    </form>
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

    <script>
        function preview() {
            document.getElementById("frame").style.height = "100px";
            document.getElementById("frame").style.width = "100px";
            frame.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>

</body>

</html>

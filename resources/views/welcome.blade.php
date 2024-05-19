<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="welcome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></head>


</head>
<body>
    <nav class="navbar bg-primary " data-bs-theme="dark" id="navbar">
          <a class="navbar-brand" href="/">Foto Galeri</a>
        </div>
    </nav>
    <h1 class="text-center">Foto</h1>
    <a href="/create"><button class="btn btn-success" id="buttonUp">Upload new image</button></a>
    <div class="d-flex flex-row justify-content-center gap-5 row row-cols-3 row-cols-md-4 g-2" id="page">
        @foreach ($fotos as $b)
        <div class="card-body">
            <form action="{{route('delete', $b->id)}}" method="POST" class="delete-form">
                @csrf
                @method('delete')
                <br>
                <button type="submit" onclick="return" class="delete-button">
                    <img src="{{ asset('storage/image/' . $b->foto) }}" class="card-img" alt="...">
                    <span class="delete-icon"><i class="fa fa-trash"></i></span>
                </button>
            </form>
        </div>
        @endforeach
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

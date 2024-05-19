<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="welcome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">DATA</a>
        </div>
    </nav>
    <h1 class="text-center">Data</h1>
    <a href="/create"><button class="btn btn-success" id="buttonUp">create new data</button></a>
    <div class="d-flex flex-row justify-content-center gap-5">
        <table class="table table-striped table-bordered border-secondary">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Company</th>
                    <th>Capital</th>
                    <th>Button</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @php $i = 1 @endphp
                @foreach ($companies as $b)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $b->company }}</td>
                    <td>{{ $b->capital }}</td>
                    <td>
                        <a href="{{route('edit', $b->id) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                        <form action="{{ route('delete', $b->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

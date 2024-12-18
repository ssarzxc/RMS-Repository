@extends ('layout.main-master')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services Page</title>
</head>
<body>
    @section('content')

    <h1 class="text-center py-2">Services Page</h1>

    <main class="container">
        <div class="row g-2">
            @foreach($services as $service)
            <div class="card shadow" style="width: 18rem;">
                <img src="/images/1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$service['title']}}</h5>
                    <p class="card-text">{{$service['body']}}</p>
                    <p class="card-text">Status: {{$service['status']}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </main>

    @endsection

    <style>
        .card:hover{
            transform:scale(1.1);
        }
        .card {
            transition: transform 0.3s ease;
        }
    </style>

</body>
</html>

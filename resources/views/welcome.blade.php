<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoMart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .car-listing {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            transition: box-shadow 0.3s ease;
            min-height: 400px;
        }
        .car-listing:hover {
            box-shadow: 0px 0px 20px rgba(0,0,0,0.2);
        }
        .car-title {
            color: #ff5733;
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 20px;
            transition: color 0.3s ease;
        }
        .car-brand {
            color: #28a745;
            font-style: italic;
            margin-bottom: 15px;
            font-weight: bold;
        }
        .car-description {
            color: #6c757d;
            line-height: 1.8;
            font-size: 18px;
        }
        .btn-primary {
            background-color: #ffc107;
            border-color: #ffc107;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #dc3545;
            border-color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="car-listing p-4">
                    <div class="text-center">
                        <img class="img-fluid mb-4 rounded" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJe0P-Ge3wu06ozclVWxRcy6cuWLFRNHShvVht_GX1Cw&s" alt="Car Image">
                    </div>
                    <h2 class="car-title">AutoMart Exclusive Edition</h2>
                    <p class="car-brand">By Audi</p>
                    <p class="car-description">Introducing the new AutoMart Exclusive Edition by BMW. This luxurious sedan combines cutting-edge technology with unparalleled comfort. With its sleek design and powerful performance, the AutoMart Exclusive Edition redefines driving experience. Explore the ultimate luxury today!</p> <!-- changed description -->
                    <a href="{{ route('home') }}" class="btn btn-primary btn-lg">Discover More</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<!-- resources/views/phones/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('build/assets/app-Dykhhggy.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/style.css') }}">
    <title>Brand List</title>
</head>
<body>
    @include('layouts.navigation')<!-- Itt hívod meg a navigation.blade.php-t -->
    <h1>Phone Selection</h1>
<div class="select-container">
    @include('phones.partials.selects')
</div>
   
    <h1>Brand List</h1>
    <div class="card-container">
        @foreach ($brands as $brand)
            <div class="card">
                <h2>{{ $brand->brand_name }}</h2>
               
                <ul>
                    @foreach ($brand->phoneModels as $phoneModel)
                        <li>{{ $phoneModel->model_name }}</li>
                    @endforeach
                </ul>

                <!-- Kép megjelenítése -->
                <a href=""><img src="{{ asset('images/brands/' . $brand->brand_image) }}" alt="{{ $brand->brand_name }}"></a>
                
            </div>
        @endforeach

        
    </div>

</body>
</html>

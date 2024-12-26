<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/dashboard/fundation/public/css/gallery.css">
    <title>Image Gallery</title>
    <style>
      
    </style>
</head>
<body>
    <a href="http://localhost/dashboard/fundation/public/forviewing" class="back-button">&#8592; Back</a>
    
    <h1 style="text-align: center; padding: 20px;">Gallery</h1>
    <div class="gallery">
        @foreach ($event as $data)
            <img src="http://localhost/dashboard/fundation/public/storage/{{$data['image']}}" alt="">
            <img src="http://localhost/dashboard/fundation/public/storage/{{$data['image2']}}" alt="">
            <img src="http://localhost/dashboard/fundation/public/storage/{{$data['image3']}}" alt="">
            <img src="http://localhost/dashboard/fundation/public/storage/{{$data['image4']}}" alt="">
        @endforeach
    </div>
</body>
</html>

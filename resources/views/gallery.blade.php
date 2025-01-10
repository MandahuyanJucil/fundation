<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/gallery.css">
    <title>Image Gallery</title>
    <style>
      
    </style>
</head>
<body>
    <a href="/forviewing" class="back-button">&#8592; Back</a>
    
    <h1 style="text-align: center; padding: 20px;">Gallery</h1>
    <div class="gallery">
    @foreach ($event as $data)
        @if (!empty($data['image']))
            <img src="/storage/{{$data['image']}}" alt="">
        @endif
        @if (!empty($data['image2']))
            <img src="/storage/{{$data['image2']}}" alt="">
        @endif
        @if (!empty($data['image3']))
            <img src="/storage/{{$data['image3']}}" alt="">
        @endif
        @if (!empty($data['image4']))
            <img src="/storage/{{$data['image4']}}" alt="">
        @endif
    @endforeach
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hasil Upload File</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <p>Gambar berhasil di upload ke <a href="{{$pathBaru}}">{{ $originalFileName }}</a></p>
        <img src="{{$pathBaru}}" alt="Gambar yang di unggah" class="img-fuild">
    </div>
</body>
</html>
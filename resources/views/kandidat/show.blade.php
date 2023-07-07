<!DOCTYPE html>
<html lang="en">
<head>
<title>Project</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="card" style="margin:20px">
    <div class="card-header">Kandidat Page</div>
    <div class="card-body">
        <h5 class="card-title">Nama Calon: {{ $kandidat->nama_calon }}</h5>
        <h5 class="card-title">Kelas : {{ $kandidat->kelas }}</h5>
        <h5 class="card-title">Jurusan : {{ $kandidat->jurusan }}</h5>
        <h5 class="card-title">Nomor Kandidat : {{ $kandidat->nomor_kandidat }}</h5>
        <a href="{{ url('kandidat')  }}" class="btn btn-success btn-sm" title="Kembali Kandidat">
        Kembali</a>
    </div>
    
</div>
</body>
</html>
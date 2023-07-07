<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ url('kandidat/' .$kandidat->id) }}" method="post">
                        
                            @csrf

                            <div class="form-group">
                            {!! csrf_field() !!}
                              @method("PATCH")
                               <input type="hidden" name="id" id="id" value="{{ $kandidat->id }}" id="id">
                               
                                <label class="font-weight-bold">NAMA CALON</label>
                                <input type="text" class="form-control"  name="nama_calon" value="{{ $kandidat->nama_calon}}"  placeholder="Masukkan nama_calon">
                            
                    
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">KELAS</label>
                                <input type="number" class="form-control"  name="kelas" value="{{ $kandidat->kelas }}" placeholder="Masukkan kelas">
                            
                               
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">JURUSAN</label>
                                <input type="text" class="form-control "  name="jurusan" value="{{ $kandidat->jurusan }}"placeholder="Masukkan Jurusan">
                            
                                
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">NOMOR KANDIDAT</label>
                                <input type="number" class="form-control"  name="nomor_kandidat" value="{{ $kandidat->nomor_kandidat }}" placeholder="Masukkan Nomor Kandidat">
                            
                               
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">Update</button> <br> <br> <br>
                            <a href="{{ url('kandidat')  }}" class="btn btn-success btn-sm" title="Kembali Kandidat">Kembali</a>
                

                        </form> 
                  
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>
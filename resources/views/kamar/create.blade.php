<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Kamar</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('kamar.store') }}" method="POST" >
                          @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama kamar</label>
                                <input type="text" name="nama_kamar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter kamar">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your NIK with anyone else.</small>
                                @error('NIK')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Jenis Kamar</label>
                                <select class="form-control" name="jenis_kamar" id="exampleFormControlSelect1">
                                  <option value="deluxe">deluxe</option>
                                  <option value="superior">superior</option>
                                  <option value="president">president</option>
                                 </select>
                                 @error('country')
                                 <div class="alert alert-danger mt-2">
                                     {{ $message }}
                                 </div>
                                 @enderror
                              </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Ukuran kamar</label>
                              <input type="number" name="ukuran_kamar" class="form-control" id="exampleInputPassword1" placeholder="Enter ukuran kamar">
                              @error('email')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Harga</label>
                              <input type="number" name="harga" class="form-control" id="exampleInputPassword1" placeholder="Enter harga">
                              @error('email')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                              @enderror
                            </div>
                              <br/>
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                          </form>
           
                        
                        {{-- {{ $user->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
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
                    <h3 class="text-center my-4">Data Pengguna</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                    <form action="{{ route('akun.update', $akun->customer_id) }}" method="POST" >
                          @csrf
                          @method('PUT')
                            <div class="form-group">
                                <label for="exampleInputEmail1">NIK</label>
                                <input type="text" name="NIK" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter NIK" value="{{ old('username', $akun->NIK) }}">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your NIK with anyone else.</small>
                                @error('NIK')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                              </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Nama</label>
                              <input type="text" name="nama_customer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" value="{{ old('nama_customer', $akun->nama_customer) }}">
                              <small id="emailHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
                              @error('nama_customer')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Email</label>
                              <input type="Email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email" value="{{ old('email', $akun->email) }}">
                              @error('email')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Negara</label>
                                <select class="form-control" name="country" id="exampleFormControlSelect1">
                                    <option value="{{ old('country', $akun->country) }}">{{ old('country', $akun->country) }}</option>
                                  <option value="Indonesia">Indonesia</option>
                                  <option value="Malaysia">Malaysia</option>
                                  <option value="Brunei Darussalam">Brunei Darussalam</option>
                                 </select>
                                 @error('country')
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
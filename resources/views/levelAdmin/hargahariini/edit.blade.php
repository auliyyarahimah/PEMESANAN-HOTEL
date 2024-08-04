@extends('template.app')
@section('content')
<div class="section-header">
  <h1>Halaman Harga Hari Ini</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Layout</a></div>
    <div class="breadcrumb-item">Default Layout</div>
  </div>
</div>

<div class="card border-0 shadow-sm rounded">
    <div class="card-body">
        <form action="{{ route('admin.hargahariini.update', $hargahariini->id_hotel) }}" method="POST"  >
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="exampleInputEmail1">Harga</label>
            <input type="number" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter harga" value="{{ old('nama_barang', $hargahariini->harga)}}">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            @error('NIK')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Available Room</label>
          <input type="number" name="available_room" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter   " value="{{ old('nama_barang', $hargahariini->available_room)}}">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          @error('available_room')
          <div class="alert alert-danger mt-2">
              {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Tanggal</label>
          <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1" placeholder="Tanggal" value="{{ old('nama_barang', $hargahariini->tanggal)}}">
          @error('tanggal')
          <div class="alert alert-danger mt-2">
              {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">ID Kamar</label>
          <select class="form-control" name="id_kamar" id="exampleFormControlSelect1">
            <option value="{{ old('nama_barang', $hargahariini->id_kamar)}}">{{ old('nama_barang', $hargahariini->id_kamar)}}</option>
            @foreach ($kamar as $kamars)
            <option value="{{ $kamars->id_kamar }}">{{ $kamars->id_kamar }}</option>
            @endforeach
           </select>
           @error('id_kamar')
           <div class="alert alert-danger mt-2">
               {{ $message }}
           </div>
           @enderror
        </div>
              <br/>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
          </form>

        
        {{-- {{ $user->links() }} --}}
    </div>
</div>

@endsection
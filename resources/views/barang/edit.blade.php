@extends('layout.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            @empty($barang)
                <div class="alert alert-danger alert-dismissible">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                    Data yang Anda cari tidak ditemukan.
                </div>
                <a href="{{ url('barang') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
            @else
                <form method="POST" action="{{ url('/barang/'.$barang->barang_id) }}" class="form-horizontal">
                    @csrf
                    {!! method_field('PUT') !!} <!-- tambahkan baris ini untuk proses edit yang butuh method PUT -->
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">ID Kategori</label>
                        <div class="col-11">
                            <select class="form-control" id="kategori" name="kategori_id" required>
                                <option value="">- Jenis Kategori -</option>
                                @foreach($kategori as $item)
                                    <option value="{{ $item->kategori_id }}" @if($item->kategori_id == $barang->kategori_id) selected @endif>{{ $item->kategori_id }}</option>
                                @endforeach
                            </select>
                            @error('kategori_id')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Kode Barang</label>
                        <div class="col-11">
                            <input type="text" class="form-control" id="hargaBeli" name="barangKode" value="{{ old('barangKode', $barang->barang_kode) }}" required>
                            @error('barangKode')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Nama Barang</label>
                        <div class="col-11">
                            <input type="text" class="form-control" id="barangNama" name="barangNama" value="{{ old('barangNama', $barang->barang_nama) }}" required>
                            @error('barangNama')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Harga Beli</label>
                        <div class="col-11">
                            <input type="text" class="form-control" id="hargaBeli" name="hargaBeli" value="{{ old('hargaBeli', $barang->harga_beli) }}" required>
                            @error('hargaBeli')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Harga Jual</label>
                        <div class="col-11">
                            <input type="text" class="form-control" id="hargaJual" name="hargaJual" value="{{ old('hargaJual', $barang->harga_jual) }}" required>
                            @error('hargaJual')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label"></label>
                        <div class="col-11">
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            <a class="btn btn-sm btn-default ml-1" href="{{ url('barang') }}">Kembali</a>
                        </div>
                    </div>
                </form>
            @endempty
        </div>
    </div>
@endsection
@push('css')
@endpush
@push('js')
@endpush
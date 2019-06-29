@extends('layouts.app')
<script>
        CKEDITOR.replace('editorl');

        $(document).ready(function () {
            $('#select2').select2();
        })
</script>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Membuat Data Artikel</div>
               <div class="card-body">
            <form action="{{route('artikel.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control"  name="judul" required>
                </div>
                <div class="form-group">
                    <label for="">Kategori</label>
                    <select class="form-control " name="id_kategori">
                        @foreach ($kategori as $data)
                        <option value="{{ $data->id }}">{{ $data->nama_kategori}}</option>
                        @endforeach
                    </select>
                </div>
             <div class="form-group">
                            <label>Tag</label>
                            <select class="form-control
                                @error('tag') is-invalid @enderror" id="s2_demo3" multiple="multiple" name="tag[]"
                                required>
                                @foreach($tag as $data)
                                <option value="{{ $data->id }}">
                                    {{ $data->nama_tag }}
                                </option>
                                @endforeach
                            </select>
                            @error('tag')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    <div class="form-group">
                      <label for="">Foto</label>
                            <input type="file"  name="foto">
                    </div>
                <div class="form-group">
                    <label for="">Konten</label>
                    <textarea name="konten" class="form-control "  id="editor1"></textarea>
                    @if ($errors->has('konten'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('konten') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <button type ="submit" class="btn btn-primary btn-floating" data-qt-block="body">Simpan</button>
                </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection

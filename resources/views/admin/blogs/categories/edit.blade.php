@extends('admin.layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Kategori Düzenle</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.blog-categories.index') }}" class="btn btn-primary">
                            <i class="fas fa-arrow-left"></i> Geri Dön
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.blog-categories.update', $blogCategory->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Başlık</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $blogCategory->title) }}" required>
                        </div>

                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Güncelle
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
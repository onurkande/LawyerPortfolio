@extends('admin.layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Yeni Özellik Ekle</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.about-features.index') }}" class="btn btn-primary">
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

                    <form action="{{ route('admin.about-features.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Başlık</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Açıklama</label>
                            <textarea name="description" id="description" class="form-control" rows="3" required>{{ old('description') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Kaydet
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
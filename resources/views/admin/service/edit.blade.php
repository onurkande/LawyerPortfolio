@extends('admin.layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Hizmet Düzenle</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.services.index') }}" class="btn btn-primary">
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

                    <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Başlık</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $service->title) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Açıklama</label>
                            <textarea name="description" id="description" class="form-control" rows="3" required>{{ old('description', $service->description) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="content">İçerik</label>
                            <textarea name="content" id="content" class="form-control" required>{{ old('content', $service->content) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Görsel</label>
                            @if($service->image)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/'.$service->image) }}" alt="{{ $service->title }}" class="img-thumbnail" style="max-height: 200px;">
                                </div>
                            @endif
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image" accept="image/*">
                                <label class="custom-file-label" for="image">Dosya seçin</label>
                            </div>
                            <small class="form-text text-muted">İzin verilen formatlar: jpeg, png, jpg, gif. Maksimum boyut: 2MB</small>
                        </div>

                        <div class="form-group">
                            <label for="icon">İkon</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-icons"></i></span>
                                </div>
                                <input type="text" name="icon" id="icon" class="form-control" value="{{ old('icon', $service->icon) }}" placeholder="Örn: fas fa-users" required>
                            </div>
                            <small class="form-text text-muted">Font Awesome ikon sınıfını girin (Örn: fas fa-users)</small>
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

@section('scripts')
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');

    // Dosya seçildiğinde input label'ını güncelle
    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
        var fileName = e.target.files[0].name;
        var nextSibling = e.target.nextElementSibling;
        nextSibling.innerText = fileName;
    });
</script>
@endsection 
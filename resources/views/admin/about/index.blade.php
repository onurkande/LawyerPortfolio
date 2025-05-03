@extends('admin.layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Hakkımızda Bilgisi Düzenle</h3>
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

                    <form action="{{ route('admin.abouts.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Başlık</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $about->title ?? old('title') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Açıklama</label>
                            <textarea name="description" id="description" class="form-control" rows="3" required>{{ $about->description ?? old('description') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="content">İçerik</label>
                            <textarea name="content" id="content" class="form-control" required>{{ $about->content ?? old('content') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="mission">Misyon</label>
                            <textarea name="mission" id="mission" class="form-control" rows="3" required>{{ $about->mission ?? old('mission') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="vision">Vizyon</label>
                            <textarea name="vision" id="vision" class="form-control" rows="3" required>{{ $about->vision ?? old('vision') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Görsel</label>
                            @if($about && $about->image)
                                <div class="mb-2">
                                    <img src="{{ asset($about->image) }}" alt="{{ $about->title }}" class="img-thumbnail" style="max-height: 200px;">
                                </div>
                            @endif
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image" accept="image/*">
                                <label class="custom-file-label" for="image">Dosya seçin</label>
                            </div>
                            <small class="form-text text-muted">İzin verilen formatlar: jpeg, png, jpg, gif. Maksimum boyut: 2MB</small>
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
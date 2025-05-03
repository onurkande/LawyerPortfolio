@extends('admin.layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Site Ayarları</h3>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.site-settings.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Hero Section Settings -->
                        <div class="form-group">
                            <label for="hero_image">Hero Görsel</label>
                            @if($siteSettings && $siteSettings->hero_image)
                                <div class="mb-2">
                                    <img src="{{ asset($siteSettings->hero_image) }}" alt="Hero Image" class="img-thumbnail" style="max-height: 200px;">
                                </div>
                            @endif
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="hero_image" name="hero_image" accept="image/*">
                                <label class="custom-file-label" for="hero_image">Dosya seçin</label>
                            </div>
                            <small class="form-text text-muted">İzin verilen formatlar: jpeg, png, jpg, gif. Maksimum boyut: 2MB</small>
                        </div>

                        <div class="form-group">
                            <label for="hero_title">Hero Başlık</label>
                            <input type="text" name="hero_title" id="hero_title" class="form-control" value="{{ $siteSettings->hero_title ?? old('hero_title') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="hero_description">Hero Açıklama</label>
                            <textarea name="hero_description" id="hero_description" class="form-control" rows="3" required>{{ $siteSettings->hero_description ?? old('hero_description') }}</textarea>
                        </div>

                        <!-- Logo -->
                        <div class="form-group">
                            <label for="logo">Logo</label>
                            @if($siteSettings && $siteSettings->logo)
                                <div class="mb-2">
                                    <img src="{{ asset($siteSettings->logo) }}" alt="Logo" class="img-thumbnail" style="max-height: 100px;">
                                </div>
                            @endif
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="logo" name="logo" accept="image/*">
                                <label class="custom-file-label" for="logo">Dosya seçin</label>
                            </div>
                            <small class="form-text text-muted">İzin verilen formatlar: jpeg, png, jpg, gif. Maksimum boyut: 2MB</small>
                        </div>

                        <!-- Bottom Section Settings -->
                        <div class="form-group">
                            <label for="bottom_description">Alt Bölüm Açıklama</label>
                            <textarea name="bottom_description" id="bottom_description" class="form-control" rows="3" required>{{ $siteSettings->bottom_description ?? old('bottom_description') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="bottom_info">Alt Bölüm Bilgi</label>
                            <textarea name="bottom_info" id="bottom_info" class="form-control" rows="3" required>{{ $siteSettings->bottom_info ?? old('bottom_info') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Ayarları Kaydet
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Dosya seçildiğinde input label'ını güncelle
    document.querySelectorAll('.custom-file-input').forEach(function(input) {
        input.addEventListener('change', function(e) {
            var fileName = e.target.files[0].name;
            var nextSibling = e.target.nextElementSibling;
            nextSibling.innerText = fileName;
        });
    });
</script>
@endsection 
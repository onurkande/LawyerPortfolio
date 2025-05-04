@extends('admin.layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Faydalı Link Düzenle</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.useful-links.update', $usefulLink->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="image">Görsel</label>
                            @if($usefulLink->image)
                                <div class="mb-3">
                                    <img src="{{ asset('storage/'.$usefulLink->image) }}" alt="Current Image" style="max-width: 200px;">
                                </div>
                            @endif
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Yeni Görsel Seç</label>
                                </div>
                            </div>
                            <small class="form-text text-muted">Maksimum dosya boyutu: 2MB. İzin verilen formatlar: jpeg, png, jpg, gif</small>
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Güncelle</button>
                        <a href="{{ route('admin.useful-links.index') }}" class="btn btn-secondary">İptal</a>
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
    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
        var fileName = e.target.files[0].name;
        var nextSibling = e.target.nextElementSibling;
        nextSibling.innerText = fileName;
    });
</script>
@endsection 
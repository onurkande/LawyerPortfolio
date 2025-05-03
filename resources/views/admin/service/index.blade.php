@extends('admin.layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <!-- Service Settings Form -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Hizmet Ayarları</h3>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.service-settings.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Başlık</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $serviceSettings->title ?? old('title') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Açıklama</label>
                            <textarea name="description" id="description" class="form-control" rows="3" required>{{ $serviceSettings->description ?? old('description') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="subtitle">Alt Başlık</label>
                            <textarea name="subtitle" id="subtitle" class="form-control" required>{{ $serviceSettings->subtitle ?? old('subtitle') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Görsel</label>
                            @if($serviceSettings && $serviceSettings->image)
                                <div class="mb-2">
                                    <img src="{{ asset($serviceSettings->image) }}" alt="Service Settings" class="img-thumbnail" style="max-height: 200px;">
                                </div>
                            @endif
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image" accept="image/*">
                                <label class="custom-file-label" for="image">Dosya seçin</label>
                            </div>
                            <small class="form-text text-muted">İzin verilen formatlar: jpeg, png, jpg, gif. Maksimum boyut: 2MB</small>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Ayarları Kaydet
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Services List -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Hizmetler</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Yeni Hizmet Ekle
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Görsel</th>
                                <th>Başlık</th>
                                <th>Slug</th>
                                <th>Açıklama</th>
                                <th>Oluşturulma Tarihi</th>
                                <th>İşlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $service)
                            <tr>
                                <td>{{ $service->id }}</td>
                                <td>
                                    @if($service->image)
                                        <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" class="img-thumbnail" style="max-height: 50px;">
                                    @else
                                        <span class="text-muted">Görsel yok</span>
                                    @endif
                                </td>
                                <td>{{ $service->title }}</td>
                                <td>{{ $service->slug }}</td>
                                <td>{{ Str::limit($service->description, 50) }}</td>
                                <td>{{ $service->created_at->format('d.m.Y H:i') }}</td>
                                <td>
                                    <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i> Düzenle
                                    </a>
                                    <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bu hizmeti silmek istediğinizden emin misiniz?')">
                                            <i class="fas fa-trash"></i> Sil
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('subtitle');

    // Dosya seçildiğinde input label'ını güncelle
    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
        var fileName = e.target.files[0].name;
        var nextSibling = e.target.nextElementSibling;
        nextSibling.innerText = fileName;
    });
</script>
@endsection 
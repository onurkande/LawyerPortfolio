@extends('admin.layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <!-- Blog Settings Form -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Blog Ayarları</h3>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.blog-settings.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Başlık</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $blogSettings->title ?? old('title') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Açıklama</label>
                            <textarea name="description" id="description" class="form-control" rows="3" required>{{ $blogSettings->description ?? old('description') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Görsel</label>
                            @if($blogSettings && $blogSettings->image)
                                <div class="mb-2">
                                    <img src="{{ asset($blogSettings->image) }}" alt="Blog Settings" class="img-thumbnail" style="max-height: 200px;">
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

    <!-- Blogs List -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Blog Yazıları</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Yeni Blog Yazısı Ekle
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Görsel</th>
                                <th>Başlık</th>
                                <th>Kategori</th>
                                <th>Okuma Süresi</th>
                                <th>Oluşturulma Tarihi</th>
                                <th>İşlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $blog->id }}</td>
                                <td>
                                    @if($blog->image)
                                        <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="img-thumbnail" style="max-height: 50px;">
                                    @else
                                        <span class="text-muted">Görsel yok</span>
                                    @endif
                                </td>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->category->title }}</td>
                                <td>{{ $blog->reading_time }} dk</td>
                                <td>{{ $blog->created_at->format('d.m.Y H:i') }}</td>
                                <td>
                                    <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i> Düzenle
                                    </a>
                                    <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bu blog yazısını silmek istediğinizden emin misiniz?')">
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
<script>
    // Dosya seçildiğinde input label'ını güncelle
    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
        var fileName = e.target.files[0].name;
        var nextSibling = e.target.nextElementSibling;
        nextSibling.innerText = fileName;
    });
</script>
@endsection 
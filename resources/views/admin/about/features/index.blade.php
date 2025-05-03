@extends('admin.layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Hakkımızda Özellikleri</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.about-features.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Yeni Özellik Ekle
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
                                <th>Başlık</th>
                                <th>Açıklama</th>
                                <th>Oluşturulma Tarihi</th>
                                <th>İşlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($features as $feature)
                            <tr>
                                <td>{{ $feature->id }}</td>
                                <td>{{ $feature->title }}</td>
                                <td>{{ Str::limit($feature->description, 100) }}</td>
                                <td>{{ $feature->created_at->format('d.m.Y H:i') }}</td>
                                <td>
                                    <a href="{{ route('admin.about-features.edit', $feature->id) }}" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i> Düzenle
                                    </a>
                                    <form action="{{ route('admin.about-features.destroy', $feature->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bu özelliği silmek istediğinizden emin misiniz?')">
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
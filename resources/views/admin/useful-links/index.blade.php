@extends('admin.layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Faydalı Linkler</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.useful-links.create') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Yeni Ekle
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Görsel</th>
                                    <th>Oluşturulma Tarihi</th>
                                    <th>İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($links as $link)
                                <tr>
                                    <td>{{ $link->id }}</td>
                                    <td>
                                        <img src="{{ asset($link->image) }}" alt="Link Image" style="max-width: 100px;">
                                    </td>
                                    <td>{{ $link->created_at->format('d.m.Y H:i') }}</td>
                                    <td>
                                        <a href="{{ route('admin.useful-links.edit', $link->id) }}" class="btn btn-sm btn-info">
                                            <i class="fas fa-edit"></i> Düzenle
                                        </a>
                                        <form action="{{ route('admin.useful-links.destroy', $link->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bu linki silmek istediğinizden emin misiniz?')">
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
</div>
@endsection 
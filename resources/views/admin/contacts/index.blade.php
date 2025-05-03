@extends('admin.layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">İletişim Ayarları</h3>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.contacts.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="image">Görsel</label>
                            @if($contact && $contact->image)
                                <div class="mb-2">
                                    <img src="{{ asset($contact->image) }}" alt="Contact Image" class="img-thumbnail" style="max-height: 200px;">
                                </div>
                            @endif
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image" accept="image/*">
                                <label class="custom-file-label" for="image">Dosya seçin</label>
                            </div>
                            <small class="form-text text-muted">İzin verilen formatlar: jpeg, png, jpg, gif. Maksimum boyut: 2MB</small>
                        </div>

                        <div class="form-group">
                            <label for="title">Başlık</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $contact->title ?? old('title') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Açıklama</label>
                            <textarea name="description" id="description" class="form-control" rows="3" required>{{ $contact->description ?? old('description') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="phone">Telefon</label>
                            <input type="text" name="phone" id="phone" class="form-control" value="{{ $contact->phone ?? old('phone') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="email">E-posta</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $contact->email ?? old('email') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="address">Adres</label>
                            <textarea name="address" id="address" class="form-control" rows="3" required>{{ $contact->address ?? old('address') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="working_hours">Çalışma Saatleri</label>
                            <textarea name="working_hours" id="working_hours" class="form-control" rows="3" required>{{ $contact->working_hours ?? old('working_hours') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="iframe">Harita Iframe Kodu</label>
                            <textarea name="iframe" id="iframe" class="form-control" rows="3">{{ $contact->iframe ?? old('iframe') }}</textarea>
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
    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
        var fileName = e.target.files[0].name;
        var nextSibling = e.target.nextElementSibling;
        nextSibling.innerText = fileName;
    });
</script>
@endsection 
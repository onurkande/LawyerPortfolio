@extends('admin.layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">İletişim Mesajları</h3>
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
                                    <th>İsim</th>
                                    <th>E-posta</th>
                                    <th>Telefon</th>
                                    <th>Mesaj</th>
                                    <th>Durum</th>
                                    <th>Tarih</th>
                                    <th>İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($messages as $message)
                                <tr class="{{ $message->is_read ? '' : 'table-warning' }}">
                                    <td>{{ $message->id }}</td>
                                    <td>{{ $message->name }}</td>
                                    <td>{{ $message->email }}</td>
                                    <td>{{ $message->phone }}</td>
                                    <td>{{ Str::limit($message->description, 50) }}</td>
                                    <td>
                                        @if($message->is_read)
                                            <span class="badge bg-success">Okundu</span>
                                        @else
                                            <span class="badge bg-warning">Okunmadı</span>
                                        @endif
                                    </td>
                                    <td>{{ $message->created_at->format('d.m.Y H:i') }}</td>
                                    <td>
                                        @if(!$message->is_read)
                                            <form action="{{ route('admin.contact-messages.mark-as-read', $message->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-sm btn-info">
                                                    <i class="fas fa-check"></i> Okundu İşaretle
                                                </button>
                                            </form>
                                        @endif
                                        <form action="{{ route('admin.contact-messages.destroy', $message->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bu mesajı silmek istediğinizden emin misiniz?')">
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
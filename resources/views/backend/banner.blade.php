@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Banner Management</h4>
                    <a href="{{ route('backend.banner.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Add New Banner
                    </a>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Welcome Text</th>
                                            <th>Main Title</th>
                                            <th>Subtitle</th>
                                            <th>Status</th>
                                            <th>Sort Order</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($banners as $banner)
                                        <tr>
                                            <td>{{ $banner->id }}</td>
                                            <td>
                                                @if($banner->image)
                                                    <img src="{{ asset('storage/' . $banner->image) }}" 
                                                         alt="{{ $banner->main_title }}" 
                                                         style="max-width: 100px; height: auto;">
                                                @else
                                                    <span class="text-muted">No image</span>
                                                @endif
                                            </td>
                                            <td>{{ $banner->welcome_text ?? '-' }}</td>
                                            <td>{{ $banner->main_title }}</td>
                                            <td>{{ $banner->subtitle ?? '-' }}</td>
                                            <td>
                                                <span class="badge {{ $banner->status ? 'bg-success' : 'bg-danger' }}">
                                                    {{ $banner->status ? 'Active' : 'Inactive' }}
                                                </span>
                                            </td>
                                            <td>{{ $banner->sort_order }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('backend.banner.edit', $banner->id) }}" 
                                                       class="btn btn-sm btn-info">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="{{ route('backend.banner.update.status', $banner->id) }}" 
                                                       class="btn btn-sm btn-warning">
                                                        <i class="fas fa-toggle-on"></i>
                                                    </a>
                                                    <form action="{{ route('backend.banner.destroy', $banner->id) }}" 
                                                          method="POST" 
                                                          style="display: inline;"
                                                          onsubmit="return confirm('Are you sure you want to delete this banner?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="8" class="text-center">No banners found</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // Auto-hide success messages after 3 seconds
        setTimeout(function() {
            $('.alert-success').fadeOut();
        }, 3000);
    });
</script>
@endsection 
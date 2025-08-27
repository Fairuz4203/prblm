@extends('layouts.app')

@section('backend')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add New Banner</h4>
                    <a href="{{ route('backend.banner.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Back to Banners
                    </a>
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

                    <form action="{{ route('backend.banner.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="welcome_text" class="form-label">Welcome Text</label>
                                            <input type="text" class="form-control" id="welcome_text" name="welcome_text" 
                                                   value="{{ old('welcome_text') }}" placeholder="e.g., Welcome to shopery">
                                            <small class="form-text text-muted">The welcome text that appears above the main title</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="main_title" class="form-label">Main Title *</label>
                                            <input type="text" class="form-control" id="main_title" name="main_title" 
                                                   value="{{ old('main_title') }}" required placeholder="e.g., Fresh & Healthy Organic Food">
                                            <small class="form-text text-muted">The main heading of the banner</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="subtitle" class="form-label">Subtitle</label>
                                            <input type="text" class="form-control" id="subtitle" name="subtitle" 
                                                   value="{{ old('subtitle') }}" placeholder="e.g., Sale up to 30% OFF">
                                            <small class="form-text text-muted">Optional subtitle or promotional text</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="button_text" class="form-label">Button Text</label>
                                            <input type="text" class="form-control" id="button_text" name="button_text" 
                                                   value="{{ old('button_text', 'Shop now') }}" placeholder="e.g., Shop now">
                                            <small class="form-text text-muted">Text for the call-to-action button</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="3" 
                                              placeholder="e.g., Free shipping on all your order. we deliver, you enjoy">{{ old('description') }}</textarea>
                                    <small class="form-text text-muted">Description text that appears below the title</small>
                                </div>

                                <div class="mb-3">
                                    <label for="button_link" class="form-label">Button Link</label>
                                    <input type="url" class="form-control" id="button_link" name="button_link" 
                                           value="{{ old('button_link') }}" placeholder="e.g., /shop">
                                    <small class="form-text text-muted">URL where the button will link to</small>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="image" class="form-label">Banner Image *</label>
                                    <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                                    <small class="form-text text-muted">Upload a high-quality banner image (max 2MB)</small>
                                </div>

                                <div class="mb-3">
                                    <label for="sort_order" class="form-label">Sort Order</label>
                                    <input type="number" class="form-control" id="sort_order" name="sort_order" 
                                           value="{{ old('sort_order', 0) }}" min="0">
                                    <small class="form-text text-muted">Lower numbers appear first</small>
                                </div>

                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="1" {{ old('status', 1) == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                    <small class="form-text text-muted">Only active banners will be displayed</small>
                                </div>

                                <div class="mb-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <h6 class="mb-0">Preview</h6>
                                        </div>
                                        <div class="card-body">
                                            <div id="image-preview" class="text-center">
                                                <p class="text-muted">Upload an image to see preview</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Create Banner
                                </button>
                                <a href="{{ route('backend.banner.index') }}" class="btn btn-secondary">
                                    <i class="fas fa-times"></i> Cancel
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // Image preview functionality
        $('#image').change(function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#image-preview').html(`
                        <img src="${e.target.result}" class="img-fluid" style="max-height: 200px;">
                        <p class="mt-2 text-muted">${file.name}</p>
                    `);
                }
                reader.readAsDataURL(file);
            } else {
                $('#image-preview').html('<p class="text-muted">Upload an image to see preview</p>');
            }
        });
    });
</script>
@endsection 
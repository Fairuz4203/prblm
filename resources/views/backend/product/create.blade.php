@extends('layouts.app')
@section('backend')
@push('styles')
<link rel="stylesheet" href="{{ asset('backend/dist/css/rte_theme_default.css') }}">
<style>
/* Toggle Switch Styling for Create Form */
.stock-toggle-container,
.featured-toggle-container,
.status-toggle-container {
    display: block;
}

.stock-toggle-input,
.featured-toggle-input,
.status-toggle-input {
    display: none;
}

.stock-toggle-label,
.featured-toggle-label,
.status-toggle-label {
    position: relative;
    display: inline-block;
    width: 80px;
    height: 32px;
    border-radius: 16px;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

/* Stock Toggle - Red/Green */
.stock-toggle-label {
    background: #dc3545;
}

.stock-toggle-input:checked + .stock-toggle-label {
    background: #28a745;
}

/* Featured Toggle - Gray/Blue */
.featured-toggle-label {
    background: #6c757d;
}

.featured-toggle-input:checked + .featured-toggle-label {
    background: #007bff;
}

/* Status Toggle - Gray/Success */
.status-toggle-label {
    background: #6c757d;
}

.status-toggle-input:checked + .status-toggle-label {
    background: #28a745;
}

.stock-toggle-label:hover,
.featured-toggle-label:hover,
.status-toggle-label:hover {
    box-shadow: 0 4px 8px rgba(0,0,0,0.15);
    transform: translateY(-1px);
}

.stock-toggle-slider,
.featured-toggle-slider,
.status-toggle-slider {
    position: absolute;
    top: 2px;
    left: 2px;
    width: 28px;
    height: 28px;
    background: white;
    border-radius: 50%;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 2px 4px rgba(0,0,0,0.2);
}

.stock-toggle-text,
.featured-toggle-text,
.status-toggle-text {
    position: absolute;
    font-size: 9px;
    font-weight: 600;
    color: white;
    text-transform: uppercase;
    transition: opacity 0.3s ease;
    letter-spacing: 0.5px;
}

/* Stock Text Positioning */
.stock-toggle-text.stock-out {
    right: 6px;
    opacity: 1;
}

.stock-toggle-text.stock-in {
    left: 8px;
    opacity: 0;
}

.stock-toggle-input:checked + .stock-toggle-label .stock-toggle-slider {
    transform: translateX(48px);
}

.stock-toggle-input:checked + .stock-toggle-label .stock-toggle-text.stock-out {
    opacity: 0;
}

.stock-toggle-input:checked + .stock-toggle-label .stock-toggle-text.stock-in {
    opacity: 1;
}

/* Featured Text Positioning */
.featured-toggle-text.featured-no {
    right: 8px;
    opacity: 1;
}

.featured-toggle-text.featured-yes {
    left: 6px;
    opacity: 0;
}

.featured-toggle-input:checked + .featured-toggle-label .featured-toggle-slider {
    transform: translateX(48px);
}

.featured-toggle-input:checked + .featured-toggle-label .featured-toggle-text.featured-no {
    opacity: 0;
}

.featured-toggle-input:checked + .featured-toggle-label .featured-toggle-text.featured-yes {
    opacity: 1;
}

/* Status Text Positioning */
.status-toggle-text.status-inactive {
    right: 4px;
    opacity: 1;
    font-size: 8px;
}

.status-toggle-text.status-active {
    left: 6px;
    opacity: 0;
}

.status-toggle-input:checked + .status-toggle-label .status-toggle-slider {
    transform: translateX(48px);
}

.status-toggle-input:checked + .status-toggle-label .status-toggle-text.status-inactive {
    opacity: 0;
}

.status-toggle-input:checked + .status-toggle-label .status-toggle-text.status-active {
    opacity: 1;
}

/* Form specific styling */
.form-label {
    font-weight: 600;
    color: #374151;
}

/* Card styling for settings section */
.card {
    border: 1px solid #e5e7eb;
    border-radius: 8px;
}

.card-header {
    background-color: #f9fafb;
    border-bottom: 1px solid #e5e7eb;
    padding: 12px 16px;
}

.card-header h6 {
    color: #374151;
    font-weight: 600;
}

/* Custom style to decrease width of short_detail textarea */

</style>
@endpush
@push('scripts')
<script src="{{ asset('backend/dist/js/rte.js') }}"></script>
<script src="{{ asset('backend/dist/js/rte_plugins.js') }}"></script>
@endpush
<div class="card">
    <div class="card-header">
        Add Product
    </div>
    <div class="card-body">
        <form action="{{ route('backend.product.store') }}" method="post" enctype="multipart/form-data">
         @csrf
         <div class="row">
            <div class="col-lg-8">
         <div class="form-group">
            <label for = "">Product Title<b class ="text-theme-6">*</b></label>
        <input type="text"  name="title" class="form-control" id="" placeholder="Enter Product Title">
           </div>
         
           <div class="row mt-4">
            <div class="col-lg-4">
              <div class="form-group">
            <label for = "">Product Price<b class ="text-theme-6">*</b></label>
        <input type="number" name="price" class="form-control" >
           </div>
        </div>
         <div class="col-lg-4">
              <div class="form-group">
            <label for = "">Product Discount Price</label>
        <input type="number" name="selling_price" class="form-control" >
           </div>
        </div>
         <div class="col-lg-4">
              <div class="form-group">
            <label for = ""> Product SKU</label>
        <input type="text" name="sku" class="form-control" >
           </div>
        </div>
     </div>

     <div class="form-group mt-4  w-50 overflow-hidden"  >
        <label for=""> Short Details</label>
     <textarea  name="short_details"  id="short_detail" ></textarea>
</div>



 <div class="form-group mt-4 w-50 overflow-hidden">
        <label for=""> Long Details</label>
     <textarea name="long_details" id="long_detail"></textarea>
</div>
 <div class="form-group mt-4 w-50 overflow-hidden">
        <label for="">Additional Info</label>
     <textarea name="additional_info" id="additional_info"></textarea>
</div>

<!-- Product Settings Section -->
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Product Settings</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Stock Status -->
                    <div class="col-md-4">
                        <div class="form-group mb-3">
                            <label class="form-label mb-2">Stock Status</label>
                            <div class="stock-toggle-container">
                                <input type="checkbox" 
                                       id="stock-toggle" 
                                       class="stock-toggle-input" 
                                       name="stock"
                                       value="1"
                                       checked>
                                <label for="stock-toggle" class="stock-toggle-label">
                                    <span class="stock-toggle-slider">
                                        <span class="stock-toggle-text stock-out">Out</span>
                                        <span class="stock-toggle-text stock-in">In</span>
                                    </span>
                                </label>
                                <small class="form-text text-muted d-block mt-1">Toggle to set initial stock status</small>
                            </div>
                        </div>
                    </div>

                    <!-- Featured Status -->
                    <div class="col-md-4">
                        <div class="form-group mb-3">
                            <label class="form-label mb-2">Featured Product</label>
                            <div class="featured-toggle-container">
                                <input type="checkbox" 
                                       id="featured-toggle" 
                                       class="featured-toggle-input" 
                                       name="featured"
                                       value="1">
                                <label for="featured-toggle" class="featured-toggle-label">
                                    <span class="featured-toggle-slider">
                                        <span class="featured-toggle-text featured-no">No</span>
                                        <span class="featured-toggle-text featured-yes">Yes</span>
                                    </span>
                                </label>
                                <small class="form-text text-muted d-block mt-1">Mark as featured product</small>
                            </div>
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="col-md-4">
                        <div class="form-group mb-0">
                            <label class="form-label mb-2">Product Status</label>
                            <div class="status-toggle-container">
                                <input type="checkbox" 
                                       id="status-toggle" 
                                       class="status-toggle-input" 
                                       name="status"
                                       value="1"
                                       checked>
                                <label for="status-toggle" class="status-toggle-label">
                                    <span class="status-toggle-slider">
                                        <span class="status-toggle-text status-inactive">Inactive</span>
                                        <span class="status-toggle-text status-active">Active</span>
                                    </span>
                                </label>
                                <small class="form-text text-muted d-block mt-1">Set product visibility status</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

      </div>
      <div class="col-lg-4">
         <div class="form-group">
            <label for = "">Featured Image<b class ="text-theme-6">*</b></label>
        <input type="file" class="featuredImage"  name="featured_img">
            @error('featured_img')
                            <span class="text-theme-6">{{ $message }}</span>
                        @enderror
           </div>


             <div class="form-group">
            <label for = "">Gallery</label>
        <input type="file" class="gallImage"  name="gallImage[]" multiple >
           @error('gallImage.*')
                        <span class="text-theme-6">{{ $message }}</span>
                        @enderror
           </div>

               <div class="form-group">
                        <label for="">Category </label>
                        <select name="category" class="form-control">
                            <option disabled selected>Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_title }}</option>
                            @endforeach
                        </select>
                    </div>

      </div>

 </div>
        <button class="btn btn-primary w-full mt-4"> Submit </button>
      
      
        </form>

    </div>
</div>
@push('scripts')
<script>
    
    $(document).ready(function(){
        $('#category_name').keyup(function(){
           let value=$(this).val()
            value = value.replaceAll(' ' , '-').toLowerCase()
          $('#category_url').val(value)
        })
        FilePond.registerPlugin(FilePondPluginImagePreview);
        $('.featuredImage').filepond({
            storeAsFile: true
        });
         $('.gallImage').filepond({
            storeAsFile: true,
            multiple: true,

        });
        new RichTextEditor("#short_detail");
        new RichTextEditor("#long_detail");
        new RichTextEditor("#additional_info");
    })
</script>
@endpush
@endsection
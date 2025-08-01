@extends('layouts.app')
@section('backend')
<div class="card">
    <div class="card-header">
        Add Category
    </div>
    <div class="card-body">
        <form action="{{ route('backend.category.store') }}" method="post" enctype="multipart/form-data">
         @csrf
         <div class="row">
            <div class="col-lg-6">
         <div class ="form-group">
            <label for ="category_name"> Category Name <b class="text-theme-6">*</b></label>
            <input  name="category_title" type="text" id="category_name" class="form-control" placeholder="Example: Electronics.......">
            @error('category_title')

           <span class="text-theme-6"> {{$message}} </span>

             @enderror
        </div>
        </div>
        <div class="col-lg-6 my-4">
         <div class ="form-group">
            <label for ="category_url"> Category URL<b class="text-theme-6">*</b></label>
            <input name="slug" type="text"  id="category_url" class="form-control" placeholder="Example: Electronics.......">
            @error('slug')

            <span class="text-theme-6"> {{$message}} </span>

           @enderror
         </div>
        </div>
        </div>
        <input type="file" name="icon" class="icon">
        @error('icon')

        <span class="text-theme-6"> {{$message}} </span>

        @enderror
        <button class="btn btn-primary w-full"> Submit </button>
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
        $('.icon').filepond({
            storeAsFile: true
        });
    })
</script>
@endpush
@endsection
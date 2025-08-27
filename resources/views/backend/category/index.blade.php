@extends('layouts.app')
@section('backend')

<div class="text-end mt-4 mb-4">
    <a href="{{ route('backend.category.create') }}" class="btn btn-primary "> Add Category <i  class="ms-3" data-feather="plus"></i></a>
</div>


<table id="dataTable" class="table table-responsive table-striped">
    <thead>
        <tr>
            <th class="text-center">SL</th>
            <th>Title</th>
            <th class="text-center" >Status</th>
            <th class="text-center" >Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($categories as $key => $category )
        <tr>
            <td class="text-center">{{++$key}}</td>
             <td class="d-flex align-items-center gap-2">
                <img  width ="60" src ="{{ title_img($category->icon) }}" alt="">
                {{ $category->category_title }}</td>
              <td class="text-center">
             
                {{ general_status($category->status, route('backend.category.update.status', $category->id)) }}</td>
              
               <td class="text-center"><i data-feather="edit"></i> Edit /Delete <i data-feather="delete"></i>
            </td>
               
        </tr>
        @empty
        @endforelse
    </tbody>

</table>
@push('scripts')
<script>
    $(document).ready(function(){
        new DataTable('#dataTable', {
    responsive: true
    })
    });
</script>
@endpush
@endsection
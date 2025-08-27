@extends('layouts.app')
@section('backend')

<div class="text-end mt-4 mb-4">
    <a href="{{ route('backend.product.create') }}" class="btn btn-primary "> Add Products <i  class="ms-3" data-feather="plus"></i></a>
</div>


<table id="dataTable" class="table table-responsive table-striped">
    <thead>
        <tr>
            <th class="text-center">SL</th>
            <th>Title</th>
            <th class="text-center" >Category</th>
            <th class="text-center" >Price</th>
             <th class="text-center" >SKU</th>
             <th class="text-center" > Featured</th>
             <th class="text-center" >Status</th>
              <th class="text-center" >Stock</th>
               <th class="text-center" >Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $key=>$product)
        <tr>
            <td class="text-center">{{ ++$key }}</td>
            <td>
                <a href="#">
                    <img src="{{ asset('storage/'. $product->featured_img) }}" width="50px" alt="">
                    {{ $product->title }}
                </a>
            </td>
            <td>
                {{ $product->category->category_title }}
            </td>
            <td class="text-center">
                @if ($product->selling_price)
                <b>{{ number_format($product->selling_price,2) }}</b> <br> <del style="opacity: 0.75">{{ number_format($product->price,2)
                    }}</del>
                @else
                <b>{{ number_format($product->price,2) }}</b>
                @endif
            </td>
            <td>
                {{ $product->sku }}
            </td>
            <td class="text-center">
                @if ($product->featured)
                <i style="color:green" data-feather="toggle-right"></i>
                @else
                <i class="text-theme-6" data-feather="toggle-left"></i>
                    
                @endif
            </td>
            <td>
                {{ general_status($product->status) }}
            </td>
            <td>
                {{ stock_status($product->status) }}
            </td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>
@push('styles')

@endpush

@push('scripts')
<script>
    $(document).ready(function(){
        new DataTable('#dataTable', {
            responsive: true
        });
        
     
    });

   
</script>
@endpush
@endsection
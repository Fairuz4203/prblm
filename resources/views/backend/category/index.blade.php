@extends('layouts.app')
@section('backend')

<div class="text-end mt-4 mb-4">
    <a href="{{ route('backend.category.create') }}" class="btn btn-primary "> Add Category <i  class="ms-3" data-feather="plus"></i></a>
</div>


<table id="dataTable" class="table table-responsive table-striped">
    <thead>
        <tr>
            <th>SL</th>
            <th>Title</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody></tbody>

</table>


@endsection
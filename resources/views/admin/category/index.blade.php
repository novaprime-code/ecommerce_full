@extends('admin.layout.layout')


@section('content')

<table class="table table-bordered">
    <thead>
        <tr>
            <th>S. No.</th>
            <th>Category Name</th>
            <th>Parent Category Name</th>
            <th>Create Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $key => $category)
            
        <tr>
            <td>{{ $key+1}}</td>
            <td>{{$category->name }}</td>
            <td>
                @if ($category->category_id)
                {{$category->parent->name}}
                @else
                    No Parent Category
                @endif
            </td>
            <td>{{$category->created_at }}</td>
            <td>
                <a href="{{route('category.edit',$category->id)}}" class="btn btn-warning fa fa-edit rounded shadow-3"></a>
                <a href="#" class="btn btn-danger fa fa-trash rounded shadow"></a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>


@endsection
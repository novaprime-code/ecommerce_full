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
                <a href="javascript::void(0)" class="btn btn-danger fa fa-trash rounded shadow category_delete" data-id="{{$category->id}}"></a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>


@endsection
@push('delete_ajax')
    {{-- <script type="text/javascript">
        $('.category_delete').on('click', function() {
            alert('Delete category');
            if(confirm('Are you sure you want to delete this category')){
                var id=$(this).data('id');
                $.ajax({
                    url:'{{route("category.destroy")}}',
                    method:'post',
                    data: {
                        _token: "{{ csrf_token()}}",
                        'id':id
                    }
                    success: function(data){
                        location.reload();
                    }
                });
            }
        });

    </script> --}}
    	<script>
            $('.category_delete').on('click',function(){
                if(confirm('Are you delete this category.')){
                var id = $(this).data('id');
                $.ajax({
                    url:'{{route("category.delete")}}',
                    method:'post',
                    data:{
                        _token: "{{ csrf_token() }}",
                        'id':id
                    },
                    success: function(data){
                            location.reload();
                    }
                });
            }
            });
        </script>
@endpush

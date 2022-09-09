@extends('admin.layout.layout')


@section('content')

<table class="table table-bordered">
    <thead>
        <tr>
            <th>S. No.</th>
            <th>Product Name</th>
            <th>Category Name</th>
            <th>Price</th>
            <th>images</th>
            <th>Extra Details</th>
            <th>Create Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $key => $product)
            
        <tr>
            <td>{{ $key+1}}</td>
            <td>{{$product->name }}</td>
            <td>
                @if ($product->category_id)
                {{$product->category->name}}
                @else
                    No Parent Category
                @endif
            </td>
            <td>{{$product->price }}</td>
            <td>
                <img src="{{asset('uploads/products/'.$product->image)}}" alt="{{$product->name." image "}}" style="width:100%;height:80px;">
            </td>
            <td class="text-center">
                <button class="btn btn-info " style="width:100%">
                    <a href="{{route('product.extraDetails',$product->id)}}">Add</a>
                </button>
            </td>
            <td>{{$product->created_at }}</td>
            <td>
                <a href="{{route('product.edit',$product->id)}}" class="btn btn-warning fa fa-edit rounded shadow-3"></a>
                <a href="javascript::void(0)" class="btn btn-danger fa fa-trash rounded shadow product_delete" data-id="{{$product->id}}"></a>
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
            $('.product_delete').on('click',function(){
                if(confirm('Are you delete this product.')){
                var id = $(this).data('id');
                $.ajax({
                    url:'{{route("product.delete")}}',
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

@extends('admin.layout.layout')


@section('content')

<table class="table table-bordered">
    <thead>
        <tr>
            <th>S. No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Create Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $key => $user)
            
        <tr>
            <td>{{ $key+1}}</td>
            <td>{{$user->name }}</td>
            <td>{{$user->email }}</td>
            <td>{{$user->created_at }}</td>
          
            <td>
          
                <a href="javascript::void(0)" class="btn btn-danger user_delete delete" data-id="{{$user->id}}"><i class=" user_delete fa fa-trash rounded shadow"></i>  </a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>


@endsection
@push('delete_ajax')

    	<script>
            $('.user_delete').on('click',function(){
                if(confirm('Are you delete this user.')){
                var id = $(this).data('id');
                $.ajax({
                    url:'{{route("user.delete")}}',
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

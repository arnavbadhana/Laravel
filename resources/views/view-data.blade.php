@extends('layout.layout')

@section('heading')
    All Users Data
@endsection

@section('body')

    <div class="container">
        <div class="row">
            <div class="co">
                <a href="{{ route('user.create') }}" class="btn btn-success mb-2">New</a>
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Image</th>
                          <th scope="col">Full Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Address</th>
                          <th scope="col" colspan="2">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $i = 1; @endphp
                        @foreach ($users as $user)
                        <tr class="align-middle">
                          <th scope="row">{{ $i++ }}</th>
                          <td><img src="{{ asset('storage/' . $user->image) }}" height="50" alt="Image"></td>
                          <td>{{ $user->full_name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->address }}</td>
                          <td colspan="2">
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                           
                           <form class="d-inline" action="{{ route('user.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-danger">
                           </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
@if(Session::has('message'))
<script>

toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-left",
    "preventDuplicates": true,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }

  toastr["success"]("{{session('message')}}")

</script>
@endif
@endsection
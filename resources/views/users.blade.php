{{-- <h1>Welcome to {{$users}}</h1> --}}
<h2>User Page</h2>

<h2>Form Page</h2>

<form action="users" method="post">
    @csrf
    <input type="text" name="username" placeholder="Enter User Name"><br><br>
    <input type="password" name="password" placeholder="Enter password"><br><br>
    <button type="submit">Login</button>
</form>

{{--
@if ($users == 'Sagan')
<h1>Welcome to Users Page {{$user}}</h1>
@else
<h3>404 Error Status</h3>
@endif

@for ($i = 0; $i < 10; $i++)
    {{$i}}
@endfor

@foreach ($users as $user)
    <h3>{{$user}} </h3>
@endforeach --}}


@include('inner')
{{--
<script>
    var data=@json($users);
    console.log(data);
</script> --}}

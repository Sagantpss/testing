{{-- <h1>Welcome to {{$users}}</h1> --}}
<h2>User Page</h2>



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
@endforeach

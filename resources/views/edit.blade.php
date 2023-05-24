<h1>Update Member</h1>

<form action="/edit" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$memberdata['id']}}">
    <input type="text" name="name" placeholder="Enter Name" value="{{$memberdata['name']}}"><br>
    <input type="text" name="email" placeholder="Enter Email" id="" value="{{$memberdata['email']}}"><br>
    <input type="text" name="address" placeholder="Enter Address" id="" value="{{$memberdata['address']}}"><br>
    <button type="submit">Update Member</button>
</form>

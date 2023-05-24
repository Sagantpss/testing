<h1>Add Members</h1>

<form action="" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter Name"><br><br>
    <input type="text" name="email" placeholder="Enter Email"><br><br>
    <input type="text" name="address" placeholder="Enter Address" id=""><br><br>
    <button type="submit">Add Member</button>
</form>


<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Action</th>
        <th>Update</th>
    </tr>
    @foreach ($members as $user)
        <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
            <td>{{$user['address']}}</td>
            <td><a href={{"delete/".$user['id']}}>Delete</a></td>
            <td><a href={{"edit/".$user['id']}}>Edit</a></td></td>
        </tr>
    @endforeach
</table>

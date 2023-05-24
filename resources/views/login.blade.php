<h1>Login Form</h1>

<form action="user" method="post">
    @csrf
    <input type="text" name="username" id="" placeholder="Enter User Name">
    <input type="password" name="password" id="" placeholder="Enter password">

    <button type="submit">Login</button>
</form>

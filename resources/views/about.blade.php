<h1>About Page</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Salary</th>
        <th>Age</th>
    </tr>
    @foreach ($products as $item)
        <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['employee_name']}}</td>
        <td>{{$item['employee_salary']}}</td>
        <td>{{$item['employee_age']}}</td>
    </tr>
    @endforeach
</table>

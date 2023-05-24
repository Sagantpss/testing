<h2>User Lists</h2>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Title</td>
        <td>Description</td>
        <td>Price</td>
        <td>Discount Percentage</td>
        <td>Rating</td>
        <td>Stock</td>
        <td>Brand</td>
        <td>Category</td>
        <td>Thumbnail</td>
        <td>Images</td>
    </tr>
    @foreach ($collection as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['title']}}</td>
        <td>{{$user['description']}}</td>
        <td>{{$user['price']}}</td>
        <td>{{$user['discountPercentage']}}</td>
        <td>{{$user['rating']}}</td>
        <td>{{$user['stock']}}</td>
        <td>{{$user['brand']}}</td>
        <td>{{ $user['category'] }}</td>
        <td><img src="{{ $user['thumbnail'] }}" alt="{{ $user['title'] }}" width="150" height="150"></td>
        <td>
            <ol>
                @foreach ($user['images'] as $image)
                    <li><img src="{{ $image }}" alt="{{ $user['category'] }}" width="50" height="50"></li>
                @endforeach
            </ol>
        </td>
    </tr>
    @endforeach
</table>

<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<body>

<div class="container">
    <h2>List Product</h2>
    <table class="table table-dark table-striped">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Thumbnail</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        @foreach($list as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td><img src="{{$product->thumbnail}}" width="16%"></td>
                <td>{{$product->price}}</td>
                <td>
                    <a href="/add?productId={{$product->id}}&productQuantity=1"><button type="button" class="btn btn-primary">Add To Cart</button></a>

                    <button type="button" class="btn btn-danger mt-2" style="width: 100%">Delete</button>
                </td>
            </tr>
        @endforeach
    </table>
</div>
</body>
</html>

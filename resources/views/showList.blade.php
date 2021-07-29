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
    <h2>Show List</h2>
    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Thumbnail</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>SubTotal</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($shoppingCart as $product)
            <form action="/add" method="get">
                <input type="hidden" name="cartAction" value="update">
                <input type="hidden" name="productId" value="{{$product->id}}">
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td><img src="{{$product->thumbnail}}" width="22%"></td>
                    <td>{{$product->unitPrice}}</td>
                    <td><input type="number" min="1" name="productQuantity" value="{{$product->quantity}}"></td>
                    <td>{{$product->quantity * $product->unitPrice}}</td>
                    <td>
                        <button class="btn btn-primary mt-2" style="width: 100%">Update</button>
                        <a href="/remove?productId={{$product->id}}" class="btn btn-danger mt-2" style="width: 100%">Remove</a>
                    </td>
                </tr>
            </form>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>

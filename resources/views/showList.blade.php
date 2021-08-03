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
    @if(session('message'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong>{{session('message')}}
        </div>
    @endif
    @if(session('remove'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong>{{session('remove')}}
        </div>
    @endif
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
        @if($shoppingCart == null)
            Vui lòng thêm mới sản phẩm
        @else
            <?php
            $totalPrice=0
            ?>
            @foreach($shoppingCart as $product)
                <?php
                if (!empty($product)){
                    $totalPrice += $product->unitPrice*$product->quantity;
                }
                ?>
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

            <div class="row">
                <div class="col-sm-8 " style="background-color:#454d55;">
                    <div style="font-size: 160%; color: white">
                        Total Price : {{$totalPrice}} $
                    </div>
                </div>
                <div class="col-sm-4" style="background-color:#00b7ff;">
                    <div class="container">
                        <form action="/save" method="post">
                            @csrf
                            <div class="form-group mt-2">
                                <input type="text" class="form-control" placeholder="Enter ship name" name="shipName">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter ship phone" name="shipPhone">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter ship address" name="shipAddress">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter note" name="note">
                            </div>
                            <button type="submit" class="btn btn-primary mb-2 text-center">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        @endif
        </tbody>
    </table>
    <div class="container-fluid">

    </div>
</div>
</body>
</html>

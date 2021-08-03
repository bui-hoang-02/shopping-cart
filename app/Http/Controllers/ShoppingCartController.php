<?php

namespace App\Http\Controllers;

use App\Models\Order_details;
use App\Models\Orders;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Opis\Closure\SecurityException;
use stdClass;

class ShoppingCartController extends Controller
{
    public function add(Request $request){
        $productId = $request->get('productId');
        $productQuantity = $request->get('productQuantity');
        $action = $request->get('cartAction');
        $product = Product::find($productId);
        if ($product == null){
            return view('404');
        }
        $shoppingCart = null;
        if (Session::has('shoppingCart')) {
            $shoppingCart = Session::get('shoppingCart');
        } else {
            $shoppingCart = [];
        }
        if (!array_key_exists($productId, $shoppingCart)){
            $cartItem = new stdClass();
            $cartItem->id = $product->id;
            $cartItem->name = $product->name;
            $cartItem->thumbnail = $product->thumbnail;
            $cartItem->unitPrice = $product->price;
            $cartItem->quantity = intval($productQuantity);
        } else {
            $cartItem = $shoppingCart[$productId];
            if ($action != null && $action == 'update'){
                $cartItem->quantity = $productQuantity;
            } else {
                $cartItem->quantity += $productQuantity;
            }
        }
        $shoppingCart[$productId] = $cartItem;
        Session::put('shoppingCart', $shoppingCart);
        Session::flash('success-msg', 'Thêm sản phẩm vào giỏ hàng thành công');
        return redirect('show');
    }

    public function show(){
        if (!Session::has('shoppingCart')){
            Session::put('shoppingCart', []);
        }
        $shoppingCart = Session::get('shoppingCart');
        return view('showList', [
            'shoppingCart'=>$shoppingCart
        ]);
    }

    public function remove(Request $request){
        $producId = $request->get('productId');
        $shoppingCart = null;
        if (Session::has('shoppingCart')){
            $shoppingCart = Session::get('shoppingCart');
            unset($shoppingCart[$producId]);
            Session::put('shoppingCart', $shoppingCart);
            return redirect('/show');
        }
    }

    public function save(Request $request){
        // shoppingCart(cartItem1, cartItem2)
        // Kiểm tra thông tin giỏ hàng, neus ko có sản phẩm từ trả về trang product.
        if (!Session::has('shoppingCart')|| count(Session::get('shoppingCart')) == 0){
            Session::flash('error-msg', 'Hiện tại ko có sản phẩm nào trong giỏ hàng!');
            return redirect('list');
        }
        // Chuyển đổi từ shopping cart sang order, từng cart item sẽ chuyển thành order detail.
        $shoppingCart = Session::get('shoppingCart');
        $order = new Orders();
        $order->totalPrice = 0;
        $order->customerId = 1; // Sau này phải lấy thông tin người dùng đang đăng nhập hiện tại
        $order->shipName = $request->get('shipName');
        $order->shipPhone = $request->get('shipPhone');
        $order->shipAddress = $request->get('shipAddress');
        $order->note = $request->get('note');
        $order->isCheckout = false; // Default là chưa thanh toán
        $order->updated_at = Carbon::now(); // Thời gian tạo đơn hàng
        $order->updated_at = Carbon::now();
        $order->status = 0; // default là chờ confirm
        // Tạo ra mảng orderDetails để lưu thông tin của các cartItem.
        $orderDetails = [];
        $messageError = '';
        foreach ($shoppingCart as $cartItem){
            $product = Product::find($cartItem->id);
            if ($product == null){
                $messageError = 'Có lỗi sảy ra, sản phẩm với id' . $cartItem->id . 'không tồn tại hoặc đã bị xóa!';
                break;
            }
            $orderDetail = new Order_details(); // Hiện tại chưa thể có order id vì chưa lưu, cho nên không set orderId tại thời điểm ...
            $orderDetail->productId = $product->id;
            $orderDetail->unitPrice = $product->price;
            $orderDetail->quantity = $cartItem->quantity;
            $order->totalPrice += $orderDetail->quantity * $orderDetail->unitPrice;
            array_push($orderDetails, $orderDetail);
        }
        if (count($orderDetails) == 0) {
            Session::flash('error-msg', $messageError);
            return redirect('/list');
        }
        try {
            DB::beginTransaction();
            // database queries here
            $order->save(); // order sau dòng code này có id.
            $orderDetailsArray = [];
            foreach ($orderDetails as $orderDetail) {
                $orderDetail->orderId = $order->id;
                array_push($orderDetailsArray, $orderDetail->toArray());
            }
            Order_details::insert($orderDetailsArray);
            DB::commit(); //finish transaction, tất cả được update database
            Session::forget('shoppingCart');
            Session::flash('success-msg', 'Lưu đơn hàng thành công!');
        } catch (\Exception $e){
            DB::rollBack(); // rollBack, không có thay đổi j trong database cả.
            return $e;
            Session::flash('error-msg', 'Lưu đơn hàng thất bại!');
        }
        return redirect('/list');
    }
}

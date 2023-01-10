@extends('layouts.main')
@section('title','Корзина')

@section('content')

    <!-- Begin Main Content Area -->
    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1919x388.jpg">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="breadcrumb-item">
                            <h2 class="breadcrumb-heading">Корзина</h2>
                            <ul>
                                <li>
                                    <a href="{{ asset('/')}}">Главная</a>
                                </li>
                                <li>Корзина</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-area section-space-y-axis-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="javascript:void(0)">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="product_remove">remove</th>
                                        <th class="product-thumbnail">images</th>
                                        <th class="cart-product-name">Product</th>
                                        <th class="product-price">Unit Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="product_remove">
                                            <a href="#">
                                                <i class="pe-7s-close" data-tippy="Remove" data-tippy-inertia="true"
                                                   data-tippy-animation="shift-away" data-tippy-delay="50"
                                                   data-tippy-arrow="true" data-tippy-theme="sharpborder"></i>
                                            </a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="#">
                                                <img src="assets/images/product/small-size/1-1-112x124.png" alt="Cart Thumbnail">
                                            </a>
                                        </td>
                                        <td class="product-name"><a href="#">American Marigold</a></td>
                                        <td class="product-price"><span class="amount">200</span></td>
                                        <td class="quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" value="1" type="text">
                                                <div class="dec qtybutton">
                                                    <i class="fa fa-minus"></i>
                                                </div>
                                                <div class="inc qtybutton">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product-subtotal"><span class="amount">200</span></td>
                                    </tr>
                                    <tr>
                                        <td class="product_remove">
                                            <a href="#">
                                                <i class="pe-7s-close" data-tippy="Remove" data-tippy-inertia="true"
                                                   data-tippy-animation="shift-away" data-tippy-delay="50"
                                                   data-tippy-arrow="true" data-tippy-theme="sharpborder"></i>
                                            </a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="#">
                                                <img src="assets/images/product/small-size/1-2-112x124.png" alt="Cart Thumbnail">
                                            </a>
                                        </td>
                                        <td class="product-name"><a href="#">Black Eyed Susan</a></td>
                                        <td class="product-price"><span class="amount">150</span></td>
                                        <td class="quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" value="1" type="text">
                                                <div class="dec qtybutton">
                                                    <i class="fa fa-minus"></i>
                                                </div>
                                                <div class="inc qtybutton">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product-subtotal"><span class="amount">150</span></td>
                                    </tr>
                                    <tr>
                                        <td class="product_remove">
                                            <a href="#">
                                                <i class="pe-7s-close" data-tippy="Remove" data-tippy-inertia="true"
                                                   data-tippy-animation="shift-away" data-tippy-delay="50"
                                                   data-tippy-arrow="true" data-tippy-theme="sharpborder"></i>
                                            </a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="#">
                                                <img src="assets/images/product/small-size/1-3-112x124.png" alt="Cart Thumbnail">
                                            </a>
                                        </td>
                                        <td class="product-name"><a href="#">Bleeding Heart</a></td>
                                        <td class="product-price"><span class="amount">130</span></td>
                                        <td class="quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" value="1" type="text">
                                                <div class="dec qtybutton">
                                                    <i class="fa fa-minus"></i>
                                                </div>
                                                <div class="inc qtybutton">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product-subtotal"><span class="amount">130</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="coupon-all">
                                        <div class="coupon">
                                            <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                            <input class="button mt-xxs-30" name="apply_coupon" value="Apply coupon" type="submit">
                                        </div>
                                        <div class="coupon2">
                                            <input class="button" name="update_cart" value="Update cart" type="submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="cart-page-total">
                                        <h2>Cart totals</h2>
                                        <ul>
                                            <li>Subtotal <span>480</span></li>
                                            <li>Total <span>480</span></li>
                                        </ul>
                                        <a href="#">Proceed to checkout</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Main Content Area End Here -->


@endsection

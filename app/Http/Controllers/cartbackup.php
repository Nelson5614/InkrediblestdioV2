<!doctype html>
<html lang="en">
<body>

    @include('layouts.header')



    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Cart</h1>
                    </div>
                </div>
                <div class="col-lg-7">
                </div>
            </div>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="untree_co-section before-footer-section">
        <div class="container">
            <div class="row mb-5">
                
                    <div class="site-blocks-table">
                        @if(session('cart'))
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Image</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-total">Total</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(session('cart') as $id => $details)
                                        <tr>
                                            <td class="product-thumbnail">
                                                <img src="{{ asset('images/wedo.png') }}" alt="Image" class="img-fluid">
                                            </td>
                                            <td class="product-name">
                                                <h2 class="h5 text-black">{{ $details['name'] }}</h2>
                                            </td>
                                            <td>LSL{{ $details['price'] }}.00</td>
                                            <td>
                                                <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                                                    </div>
                                                    <input type="number" name="quantity[{{ $id }}]" class="form-control text-center quantity-amount" value="{{ $details['quantity'] }}" min="1">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-black increase" type="button">&plus;</button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>LSL{{ $details['price'] * $details['quantity'] }}.00</td>
                                            <td>
                                                <form action="{{ route('cart.remove') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $id }}">
                                                    <button class="btn btn-black btn-sm" type="submit">X</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>Your cart is empty</p>
                        @endif
                    </div>
                
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row mb-5">
                        <div class="col-md-6 mb-3 mb-md-0">
                        <form action="{{ route('cart.clear') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-black btn-sm">Clear Cart</button>
                        </form>
                        
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('shop')}}" class="btn btn-outline-black btn-sm btn-block">Continue Shopping</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="text-black h4" for="coupon">Coupon</label>
                            <p>Enter your coupon code if you have one.</p>
                        </div>
                        <div class="col-md-8 mb-3 mb-md-0">
                            <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-black">Apply Coupon</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pl-5">
                    <div class="row justify-content-end">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-12 text-right border-bottom mb-5">
                                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <span class="text-black">Subtotal</span>
                                </div>
                                <div class="col-md-6 text-right">
                                    <strong class="text-black">LSL{{ $subtotal }}.00</strong>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <span class="text-black">Total</span>
                                </div>
                                <div class="col-md-6 text-right">
                                    <strong class="text-black">LSL{{ $subtotal }}.00</strong>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='{{ route('checkout.index') }}'">Proceed To Checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>

    
</body>
</html>

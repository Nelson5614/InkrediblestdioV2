<html>

@include('layouts.header')
<body>
    
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
    <div class="container1">

        <main class="product-details1">
            <div class="image-gallery1">
                <img src="{{asset('images/wedo.png')}}" alt="Jewelry Image" class="main-image">
            </div>

            <div class="details1">
                <form action="{{route('cart.add')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <h2>{{$product->name}}</h2>
                        <p class="price1">{{$product->price}}.00</p>
                        <p class="description1">
                            {!!$product->description!!}
                        </p>
        
                        <!-- <div class="options1">
                            <div class="option1">
                                <label for="color">Color:</label>
                                <select id="color">
                                    <option value="gold">Gold</option>
                                    <option value="silver">Silver</option>
                                    <option value="rose-gold">Rose Gold</option>
                                </select>
                            </div>
        
                            <div class="option1">
                                <label for="size">Size:</label>
                                <select id="size">
                                    <option value="small">Small</option>
                                    <option value="medium">Medium</option>
                                    <option value="large">Large</option>
                                </select>
                            </div>
        
                            <div class="option1">
                                <label for="quantity">Quantity:</label>
                                <input type="number" id="quantity" value="1" min="1">
                            </div>
                        </div> -->
                   
    
                    <button type="submit" class="add-to-cart1">Add to Cart</button>
                </form>
            </div>
        </main>
    </div>

    @include('layouts.footer')
    <script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
</body>
</html>

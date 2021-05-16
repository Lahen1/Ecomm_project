@extends ('master')
@section('content')
    <div class="custom-product">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h4>Result for Products</h4>
                @foreach($products as $item)
                    <div class=" row searched-item cart-list-divider">
                        <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
                                <img class="trending-image" src="{{$item->gallery}}">
                            </a>
                        </div>
                        <div class="col-sm-4">
                                    <h2>{{$item->name}}</h2>
                                    <h5>{{$item->description}}</h5>
                        </div>
                        <div class="col-sm-3">
                           <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from the Cart</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

<div id="panel-cart">
    <div class="panel-cart-container">
        <div class="panel-cart-title">
            <h5 class="title">Your Cart</h5>
            <button class="close" data-toggle="panel-cart"><i class="ti ti-close"></i></button>
        </div>
        <div class="panel-cart-content">
            <table class="table-cart">
                @if(Session::has('cart'))
                    @foreach(Session::get('cart')->items as $item)
                        <tr>
                            <td class="title">
                                <span class="name"><a>{{$item['items']['name']}}</a></span>
                                <span class="caption text-muted">{{$item['items']['description']}}</span>
                            </td>
                            <td class="price">
                                <div class="input-group input-number-group">
                                    <div class="input-group-button">
                                        <span class="cart-decrement">-</span>
                                    </div>
                                    <input id="{{$item['items']['id']}}" class="input-number" type="number" value="{{$item['qty']}}" min="1" max="20"
                                           readonly>
                                    <div class="input-group-button">
                                        <span class="cart-increment">+</span>
                                    </div>
                                </div>
                            </td>
                            <td class="actions">
                                <a id="{{$item['items']['id']}}" href="" class="action-icon remove"><i class="ti ti-close"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @else

                @endif

            </table>
            <div class="cart-summary">
                <div class="row text-lg">
                    <div class="col-7 text-right text-muted">Total Order:</div>
                    <div class="col-5"><strong id="totalQty">{{Session::has('cart')?Session::get('cart')->totalQty:0}}</strong></div>
                </div>
            </div>
        </div>
    </div>
    <a href="{{url('order/confirm?restaurantId=1&orderTypeId=1')}}" class="panel-cart-action btn btn-secondary btn-block btn-lg"><span>Order</span></a>
</div>

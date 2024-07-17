@extends('layout.app')

@section('title', 'Trang chủ')

@section('content')
    <div class="main-content">
        <h1>SHOP QUẦN ÁO NAM ONLINE</h1>
        <div class="product-list">
            @if ($products->isNotEmpty())
                @foreach ($products as $product)
                    <div class="product-container">
                        <div class="product">
                            {{ $product->name }}
                            <div class="product-colors">
                                <img class="product-image" src="{{ asset('images/' . $product->thumnail) }}"
                                    alt="Product Image">
                            </div>
                            <p class="price">Giá: {{ number_format($product->price_sell) }} VNĐ</p>
                        </div>
                        <div class="button-container">
                            <a href="{{ route('product.detail', ['id' => $product->id]) }}" class="btn btn-primary">Chi tiết sản phẩm</a>
                        </div>
                    </div>
                @endforeach
            @else
                <p>Hiện không có sản phẩm nào.</p>
            @endif
        </div>

        <!-- Thêm liên kết phân trang -->
    </div>
    <div class="pagination">
            {{ $products->appends(request()->input())->links() }}
        </div>
@endsection
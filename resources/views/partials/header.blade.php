<!-- resources/views/partials/header.blade.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light py-2 px-4 sticky-top shadow">
    <a class="navbar-brand" href="/products">🛍️ ETE Store</a>
    <div class="d-flex ms-auto align-items-center">
        <div class="text-center bg-light p-3 rounded shadow-sm">
            @if (Auth::check())
                <p class="mb-0">👋 Chào mừng, <strong>{{ Auth::user()->name }}</strong>!</p>
            @else
                <p class="mb-0">Bạn chưa đăng nhập.</p>
            @endif
        </div>

        <form class="d-flex me-3" method="GET" action="/search">
            <input class="form-control me-2" type="search" name="query" placeholder="Tìm sản phẩm...">
            <button class="btn btn-outline-primary" type="submit">Tìm</button>
        </form>
        <a href="/cart" class="btn btn-outline-success me-3">Giỏ hàng</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-outline-danger">Đăng xuất</button>
        </form>
    </div>
</nav>

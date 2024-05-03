@php
    $currentRouteName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-md navbar-dark" style="background: linear-gradient(to right, #000000, #ffbb00);">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="fas fa-car me-2" style="color: #f8f9fa;"></i>AutoMart Exclusive Edition</a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon" style="color: #f8f9fa;"><i class="fas fa-bars"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link @if ($currentRouteName == 'home') active @endif" style="color: #f8f9fa;"><i class="fas fa-home-alt me-1"></i>Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('products.index') }}" class="nav-link @if ($currentRouteName == 'products.index') active @endif" style="color: #f8f9fa;"><i class="fas fa-car-side me-1"></i>Vehicles</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link @if ($currentRouteName == 'reviews') active @endif" style="color: #f8f9fa;"><i class="fas fa-comment-alt me-1"></i>Blog</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('profile') }}" class="nav-link @if ($currentRouteName == 'profile') active @endif" style="color: #f8f9fa;"><i class="fas fa-user me-1"></i>Account</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

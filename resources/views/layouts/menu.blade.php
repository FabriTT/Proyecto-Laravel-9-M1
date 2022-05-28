<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Principal</p>
    </a>
    <a href="{{ route('bank.index') }}" class="nav-link {{ Request::is('bank') ? 'active' : '' }}">
        <i class="nav-icon fas fa-dollar-sign"></i>
        <p>Cuentas</p>
    </a>
    <a href="{{ route('product.index') }}" class="nav-link {{ Request::is('product') ? 'active' : '' }}">
        <i class="nav-icon fas fa-store"></i>
        <p>Productos</p>
    </a>
</li>

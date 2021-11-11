<li class="nav-item">
    <a href="{{ route('boholWeathers.index') }}"
       class="nav-link {{ Request::is('boholWeathers*') ? 'active' : '' }}">
        <p>Bohol Weathers</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>



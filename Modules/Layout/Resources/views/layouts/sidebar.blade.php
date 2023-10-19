<ul class="menu">
    @foreach(getMenus() as $menu)
    <li
        class="sidebar-item  {{ request()->is($menu->url) ? 'active' : '' }} {{ $menu->menu_hassub == 1 ? 'has-sub' : '' }}">
        <a href="{{ $menu->menu_hassub == 1 ? '#' : url($menu->url) }}" class='sidebar-link'>
            <i class="{{$menu->icon}}"></i>
            <span>{{$menu->name}}</span>
        </a>
        @if(!$menu->subMenus->isEmpty())
        <ul class="submenu">
            @foreach ($menu->subMenus as $submenu)
            <li class="submenu-item  {{ request()->is($submenu->url) ? 'active' : '' }}">
                <a href="{{$submenu->url}}" class="submenu-link">{{$submenu->name}}</a>
            </li>
            @endforeach
        </ul>
        @endif
    </li>
    @endforeach
</ul>

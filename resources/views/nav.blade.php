<div class="contain-to-grid sticky">
    <nav class="top-bar" id="main-menu" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name">
                <h2 class="show-for-medium-up">
                    <a href="#">my site title show in large device</a>
                </h2>
            </li>
            <li class="toggle-topbar menu-icon">
                <a href="#">
                    <span>menu</span>
                </a>
            </li>
        </ul>
        <section class="top-bar-section text-right">
            <ul class="right">
                @foreach($items as $menu_item)
                    @php
                        $submenu = $menu_item->children;
                    @endphp
                    @if(count($submenu) >= 1)
                        <li class="has-dropdown">
                            <a href="{{ $menu_item->url }}">{{ $menu_item->title }}</a>
                            <ul class="dropdown">
                                @foreach($submenu as $item)
                                    <li><a href="{{$item->url}}">{{$item->title}} </a></li>
                                @endforeach
                            </ul>
                    @else
                        <li>
                            <a href="{{ $menu_item->url }}">{{ $menu_item->title }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </section>
    </nav>
</div>
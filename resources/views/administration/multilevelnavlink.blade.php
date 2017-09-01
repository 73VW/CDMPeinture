<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
        <i class="fa fa-fw fa-wrench"></i>
        <span class="nav-link-text">
            {{$name}}</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseComponents">
            @foreach ($links as $link)
            <li>
                <a href="{{$href.'/'.$link['href']}}">{{$link['name']}}</a>
            </li>
            @endforeach
        </ul>
    </li>

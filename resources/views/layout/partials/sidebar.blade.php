<nav class="sidebar" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="{{ asset('images/faces-clipart/pic-1.png') }}" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name">Demo Example</p>
                    <p class="designation">Administrator</p>
                </div>
                
            </a>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Home</span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
            </a>
        </li>
        <li class="nav-item nav-category"><span class="nav-link">Menu</span></li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('patchpanel')}}"/>
                <span class="menu-title">Patch Panel</span>
                <i class="icon-screen-tablet menu-icon"></i></a>

        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('manhole')}}">
                <span class="menu-title">Manholes</span>
                <i class="icon-settings menu-icon"></i>
            </a>
            
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('fibre_closure')}}">
                <span class="menu-title">Fibre Joint Closures</span>
                <i class="icon-energy menu-icon"></i>
            </a>
            
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="{{route('user')}}">
                <span class="menu-title">Users</span>
                <i class="icon-book-open menu-icon"></i>
            </a>
            
        </li>

       
    </ul>
</nav>

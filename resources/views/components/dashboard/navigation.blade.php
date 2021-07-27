<nav class="navbar">
    <div>
        <div class="title">
            <h1>
                Unity5 Address Book Application
            </h1>
        </div>
        <ul class="navbar-nav d-inline-block">
            @foreach($nav_items as $key => $value)
            <li class="nav-item">
                <a href="{{ $value }}" class="nav-link">{{ $key }}</a>
            </li>
            @endforeach
        </ul>
    </div>
    
</nav>

<style>

    .navbar h1 {
        padding:1rem;
        color:lightpink;
    }

    li.nav-item {
        padding:1rem;
        display:inline-block;
    
    }

    ul {
        color:white;

    }
    nav {
        background:#343434;
    }

    nav a {
        color:white;

    }

    nav a:hover {
        color:lightgrey;
    }
</style>
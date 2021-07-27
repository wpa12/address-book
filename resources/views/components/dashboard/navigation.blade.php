<nav class="navbar">
 
    <div>
        <ul>
            
            @foreach($nav_items as $key => $value)
            <li class="list-none"><a href="{{ $value }}">{{ $key }}</a></li>
            @endforeach
            
        </ul>
    </div>
    
</nav>
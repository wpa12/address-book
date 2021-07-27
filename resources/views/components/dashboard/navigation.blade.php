<div class="container">
    <ul>

        @foreach($nav_items as $key => $value)
            <li class="list-none"><a href="{{ $value }}">{{ $key }}</a></li>
        @endforeach

    </ul>
</div>



<style>
    li {
        display:inline-block;
        list-style: none;
    }
</style>

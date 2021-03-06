<div class="card p-5 m-3">
    <div class="image-container">
        @if($gender == 'male')
        <img src="{{ asset('images/avatar-male.png') }}" alt="" class="avatar">
        @elseif($gender == 'female')
        <img src="{{ asset('images/avatar-female.png') }}" alt="" class="avatar">
        @else
        <img src="{{ asset('images/avatar.png') }}" alt="" class="avatar">
        @endif
    </div>
    <div class="card-body">
        {{ $slot }}
    </div>
</div>

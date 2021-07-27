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


@push('css')

<style>
    
    .image-container {
        text-align: center;
    }

    .card {
        box-shadow:0px 0px 0px transparent;
        cursor:pointer;
        transition: .2s all ease-out;
    }
    .card:hover {
        box-shadow:5px 5px 5px 2px rgba(0,0,0,0.5);
        transform:scale(1.1);
        transition:.2s all ease-in-out;
    }
    
    img.avatar {
        border-radius:50%;
        height:150px;
        width:150px;
    }
</style>

@endpush
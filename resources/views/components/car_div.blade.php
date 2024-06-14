<div class="col-lg-4 col-md-4 col-sm-12 mb-3 mt-3">
    <img class="car_image img-fluid" src="{{ asset('storage/' . $car->image_path) }}" alt="car_image">
</div>

<div class="col-lg-3 col-md-3 col-sm-12 mt-5">
    <p>Názov automobilu</p>
    <p>Je registrované</p>
    <p>Číslo registrácie </p>
</div>

<div class="col-lg-3 col-md-3 col-sm-12 mt-5">
    <p><b>{{$car->name}}</b></p>
    @if($car->is_registered)
        <p><b>Áno</b></p>
    @else
        <p><b>Nie</b></p>
    @endif
    <p><b>{{$car->registration_number}}</b></p>
</div>


<div class="col-lg-2 col-md-2 col-sm-12 mt-5">
    @if(request()->is('/'))
        <a href="/detail/{{ $car->id }}" class="btn btn-primary btn-sm mb-2 w-100">Zobraziť viac</a>

        <form method="POST" action="{{ route('destroy_car', $car->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm mt-3 w-100">Odstrániť</button>
        </form>
    @endif

    @if(!request()->is('/'))
        <button type="button" onclick="edit()" class="btn btn-primary btn-sm mt-1">Aktualizovať</button>
    @endif
</div>

<script>
    function edit() {
        var divLeft = document.getElementById('left_non_edit');
        var divLeftEdit = document.getElementById('left_edit');

        divLeft.style.display = "none";
        divLeftEdit.style.display = "block";
    }
</script>

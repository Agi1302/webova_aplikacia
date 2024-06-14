<div class="col-lg-4 col-md-12 mt-4">
    @include('components.error_message')
    <form class="form_add"
          @if(request()->is('/'))
              action="{{ route('add_car') }}"
          @else
              action="{{ route('add_component') }}"
          @endif
          method="post" enctype="multipart/form-data">
        <p class="form_name">
            @if(request()->is('/'))
                PRIDAJ AUTOMOBIL
            @else
                PRIDAJ DIEL
            @endif
        </p>

        @csrf
        <label for="name" class="w-100 form_element">
            @if(request()->is('/'))
                Názov automobilu
            @else
                Názov dielu
            @endif
        </label>
        <input id="name" class="w-100" name="name" type="text" placeholder=
            @if(request()->is('/'))
                "Zadajte názov automobilu"
            @else
                "Zadajte názov dielu"
            @endif
        >

        @if(!request()->is('/'))
            <label for="serialnumber" class="w-100 form_element">Sériové číslo dielu</label>
            <input id="serialnumber" class="w-100" name="serialnumber" type="text" placeholder="Zadajte sériové číslo dielu">

            <input id="car_id" name="car_id" type="hidden" value="{{$car->id}}" readonly>

        @endif

        @if(request()->is('/'))
            <label for="is_registered" class="w-100 form_element">Automobil je registrovaný</label>
            <input type="hidden" name="is_registered" value="0">
            <input id="is_registered" class="w-10" name="is_registered" type="checkbox" value="1">

            <label for="registration_number" class="w-100 form_element">Číslo registrácie</label>
            <input id="registration_number" class="w-100" name="registration_number" type="text" placeholder="Zadajte číslo registrácie">

            <label for="image" class="w-100 form_element">Obrázok automobilu</label>
            <input id="image" type="file" name="image">
        @else
            <input id="car_id" class="w-100" name="car_id" type="hidden" value="{{$car->id}}">
        @endif

        <button class="btn mt-2 button_form" type="submit">Submit</button>
    </form>
</div>

<table class="table table-bordered table-responsive">
    <thead>
    <tr>
        <th>ID dielu</th>
        <th>Názov dielu</th>
        <th>Sériové číslo dielu</th>
        <th>ID automobilu</th>
        <th>Zmazať diel</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($car->parts as $part)
        <tr class="part_info">
            <td>{{ $part->id }}
                <input type="hidden" name="ids_parts[{{$part->id}}]" value="{{$part->id}}">
            </td>

            <td>
                <input type="text" name="names_parts[{{$part->id}}]" value="{{ $part->name }}" >
            </td>
            <td>
                <input type="text" name="ser_numbers_parts[{{$part->id}}]" value="{{ $part->serialnumber }}" >
            </td>
            <td>{{ $part->car_id }}</td>

            <td>
                {{--
                <form method="POST" action="{{ route('part_delete', ['part' => $part->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm ">Odstrániť</button>
                </form>--}}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<table class="table table-bordered table-responsive">
    <thead>
    <tr class="part_info">
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
            <td>{{ $part->id }}</td>
            <td>{{ $part->name }}</td>
            <td>{{ $part->serialnumber }}</td>
            <td>{{ $part->car_id }}</td>
            <td>
                <form method="POST" action="{{ route('part_delete', ['part' => $part->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm ">Odstrániť</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

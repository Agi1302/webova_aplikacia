@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <p class="error_message">{{ $error }}</p>
        @endforeach
    </div>
@endif

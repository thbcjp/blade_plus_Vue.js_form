@if(count($errors) > 0)
    <ul>
        @foraech($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
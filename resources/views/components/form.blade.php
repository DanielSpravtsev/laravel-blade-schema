<div>
    @foreach($schema as $component)
        {!! $component !!}
    @endforeach
    {{ $slot }}
</div>

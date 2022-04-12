<h1>Hello, <b> {{ $name ?? "Dolly" }} </b></h1>
<p>The current UNIX timestamp is {{ time() }}.</p>



@isset($records)
    @if (count($records) === 1)
            I have one record!
        @elseif (count($records) > 1)
            I have multiple records!
        @else
            I don't have any records!
    @endif
    @empty($records)
        Records is empty
    @endempty
@endisset


@switch($i)
    @case(1)
        <p>First case...</p>
        @break    
    @case(2)
        <p>Second case...</p>
        @break    
    @default
        <p>Default case...</p>
@endswitch





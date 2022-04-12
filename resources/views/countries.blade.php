<select>
    @foreach ($countries as $country)
        <option>{{ $country->name }}</option>
    @endforeach
</select>
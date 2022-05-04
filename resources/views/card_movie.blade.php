<ul>
    @foreach ($movies as $item)
        <li>{{ $item->title }}</li>
    @endforeach
</ul>
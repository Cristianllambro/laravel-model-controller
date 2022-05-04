<div class="container">
    @foreach ($movie as $item)
        <div class="card">
            <ul>
                <li>Title: {{ $item->title }}</li>
                <li>Origian title: {{ $item->original_title }}</li>
                <li>Nationality: {{ $item->nationality }}</li>
                <li>Release date: {{ $item->date }}</li>
                <li>Rating: {{ $item->vote }}</li>
            </ul>
        </div>
    @endforeach
</div>

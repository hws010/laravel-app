@props([
    'cardTitile',
    'cardBody',
    'route',
])

<a href="{{ $route }}">
    <div class="card bg-neutral text-neutral-content w-96">
        <div class="card-body">
            <h2 class="card-title">{{ $cardTitile }}</h2>
            <p>{{ $cardBody }}</p>
        </div>
    </div>
</a>
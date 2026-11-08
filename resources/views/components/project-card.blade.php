@props(['project', 'delay' => 0])

@php
    $hasImage = !empty($project['image']) && file_exists(public_path($project['image']));
    $payload = [
        'title' => $project['title'],
        'description' => $project['description'],
        'tech' => $project['tech'],
        'image' => $hasImage ? asset($project['image']) : null,
        'icon' => $project['icon'],
        'github' => $project['github'] ?? null,
    ];
@endphp

<article class="project-card" data-reveal style="--d: {{ $delay }}s">
    <div class="project-card__media">
        @if ($hasImage)
            <img src="{{ asset($project['image']) }}" alt="Screenshot of {{ $project['title'] }}" loading="lazy">
        @else
            <div class="project-card__placeholder" role="img" aria-label="Screenshot coming soon for {{ $project['title'] }}">
                <i class="{{ $project['icon'] }}"></i>
                <span>Screenshot coming soon</span>
            </div>
        @endif
    </div>

    <div class="project-card__body">
        <h3>{{ $project['title'] }}</h3>
        <p>{{ $project['description'] }}</p>

        <ul class="tags">
            @foreach ($project['tech'] as $tech)
                <li>{{ $tech }}</li>
            @endforeach
        </ul>

        <div class="project-card__actions">
            <button type="button" class="btn btn--sm" data-project="{{ json_encode($payload) }}">
                <i class="fa-regular fa-eye"></i> View Details
            </button>
            @if (!empty($project['github']))
                <a href="{{ $project['github'] }}" class="btn btn--sm btn--outline" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-github"></i> GitHub
                </a>
            @endif
        </div>
    </div>
</article>

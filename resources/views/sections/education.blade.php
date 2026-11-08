<section id="education" class="section section--alt">
    <div class="container">
        <h2 class="section-title" data-reveal>My Education</h2>

        <ol class="timeline">
            @foreach (config('portfolio.education') as $i => $edu)
                <li class="timeline__item" data-reveal style="--d: {{ $i * 0.1 }}s">
                    <span class="timeline__dot" aria-hidden="true"></span>
                    <div class="timeline__card">
                        <span class="timeline__year"><i class="fa-regular fa-calendar"></i> {{ $edu['year'] }}</span>
                        <h3>{{ $edu['course'] }}</h3>
                        <p><i class="fa-solid fa-building-columns"></i> {{ $edu['school'] }}</p>
                    </div>
                </li>
            @endforeach
        </ol>
    </div>
</section>

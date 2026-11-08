<section id="skills" class="section section--alt">
    <div class="container">
        <h2 class="section-title" data-reveal>My Technical Skills</h2>

        @foreach (config('portfolio.skills') as $group => $items)
            <div class="skill-group">
                <h3 class="skill-group__title" data-reveal>{{ $group }}</h3>
                <div class="skill-grid">
                    @foreach ($items as $i => $skill)
                        <article class="skill-card" data-reveal style="--d: {{ $i * 0.08 }}s">
                            <i class="{{ $skill['icon'] }}" aria-hidden="true"></i>
                            <span>{{ $skill['name'] }}</span>
                        </article>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</section>

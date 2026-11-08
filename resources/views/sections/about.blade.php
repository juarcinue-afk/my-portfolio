@php
    $about = config('portfolio.about');
    $photo = config('portfolio.profile_image');
    $hasPhoto = $photo && file_exists(public_path($photo));
@endphp

<section id="about" class="section">
    <div class="container">
        <h2 class="section-title" data-reveal>About Me</h2>

        <div class="about">
            <div class="about__photo" data-reveal>
                <div class="about__frame">
                    @if ($hasPhoto)
                        <img src="{{ asset($photo) }}" alt="Portrait of {{ config('portfolio.name') }}" loading="lazy">
                    @else
                        <div class="avatar__placeholder" role="img" aria-label="Profile picture placeholder">
                            <i class="fa-solid fa-user"></i>
                            <span>Your photo here</span>
                        </div>
                    @endif
                </div>
            </div>

            <div class="about__info" data-reveal style="--d:.12s">
                <p class="about__intro">{{ $about['intro'] }}</p>

                <dl class="about__list">
                    @foreach ($about['details'] as $d)
                        <div class="about__item">
                            <dt><i class="fa-solid {{ $d['icon'] }}"></i> {{ $d['label'] }}</dt>
                            <dd>{{ $d['value'] }}</dd>
                        </div>
                    @endforeach
                </dl>
            </div>
        </div>
    </div>
</section>

@php
    $email = config('portfolio.email');
    $social = config('portfolio.social');
@endphp

<section id="contact" class="section">
    <div class="container">
        <h2 class="section-title" data-reveal>Let's Connect</h2>

        <div class="contact">
            <div class="contact__info" data-reveal>
                <p class="contact__lead">Have a question, project idea, or opportunity? Feel free to get in touch!</p>

                <ul class="contact__list">
                    <li>
                        <i class="fa-regular fa-envelope"></i>
                        @if ($email)
                            <a href="mailto:{{ $email }}">{{ $email }}</a>
                        @else
                            <span class="muted">[Add your email in config/portfolio.php]</span>
                        @endif
                    </li>
                    <li>
                        <i class="fa-brands fa-github"></i>
                        @if ($social['github'])
                            <a href="{{ $social['github'] }}" target="_blank" rel="noopener noreferrer">GitHub profile</a>
                        @else
                            <span class="muted">GitHub link coming soon</span>
                        @endif
                    </li>
                    <li>
                        <i class="fa-brands fa-linkedin-in"></i>
                        @if ($social['linkedin'])
                            <a href="{{ $social['linkedin'] }}" target="_blank" rel="noopener noreferrer">LinkedIn profile</a>
                        @else
                            <span class="muted">LinkedIn link coming soon</span>
                        @endif
                    </li>
                </ul>
            </div>

            <form class="contact__form" method="POST" action="{{ route('contact.store') }}" id="contactForm" novalidate data-reveal style="--d:.1s">
                @csrf

                @if (session('contact_success'))
                    <div class="alert alert--success" role="status"><i class="fa-solid fa-circle-check"></i> {{ session('contact_success') }}</div>
                @endif
                @error('form')
                    <div class="alert alert--error" role="alert"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</div>
                @enderror

                {{-- Honeypot (hidden from people) --}}
                <div class="hp" aria-hidden="true">
                    <label for="website">Leave this empty</label>
                    <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                </div>

                <div class="field-row">
                    <div class="field">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" maxlength="100" required autocomplete="name"
                               @error('name') aria-invalid="true" @enderror>
                        @error('name') <small class="field__error">{{ $message }}</small> @enderror
                    </div>
                    <div class="field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" maxlength="150" required autocomplete="email"
                               @error('email') aria-invalid="true" @enderror>
                        @error('email') <small class="field__error">{{ $message }}</small> @enderror
                    </div>
                </div>

                <div class="field">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" value="{{ old('subject') }}" maxlength="150" required
                           @error('subject') aria-invalid="true" @enderror>
                    @error('subject') <small class="field__error">{{ $message }}</small> @enderror
                </div>

                <div class="field">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="6" maxlength="3000" required
                              @error('message') aria-invalid="true" @enderror>{{ old('message') }}</textarea>
                    @error('message') <small class="field__error">{{ $message }}</small> @enderror
                </div>

                <button type="submit" class="btn" id="contactSubmit"><i class="fa-regular fa-paper-plane"></i> Send Message</button>
            </form>
        </div>
    </div>
</section>

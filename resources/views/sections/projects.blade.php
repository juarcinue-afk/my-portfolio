<section id="projects" class="section">
    <div class="container">
        <h2 class="section-title" data-reveal>My Projects</h2>

        <div class="project-grid">
            @foreach (config('portfolio.projects') as $i => $project)
                <x-project-card :project="$project" :delay="($i % 2) * 0.1" />
            @endforeach
        </div>
    </div>
</section>

{{-- Details popup, filled by script.js --}}
<dialog class="modal" id="projectModal" aria-labelledby="projectModalTitle">
    <div class="modal__box">
        <button type="button" class="modal__close" data-modal-close aria-label="Close details"><i class="fa-solid fa-xmark"></i></button>
        <div class="modal__media" id="projectModalMedia"></div>
        <h3 id="projectModalTitle"></h3>
        <p id="projectModalDesc"></p>
        <ul class="tags" id="projectModalTags"></ul>
        <div class="project-card__actions" id="projectModalActions"></div>
    </div>
</dialog>

<div class="container">
    <div class="row justify-content-center gap-3">
        @foreach ($projects as $project)
            <div class="col d-flex justify-content-center">
                <div class="card h-100 w-100 m-2 glass" style="width: 18rem;">
                    <div class="card-img-top-container d-flex align-items-center justify-content-center">
                        <img src="{{ $project->image }}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $project->name }}</h5>
                        <p class="card-text">{{ $project->description }}</p>
                    </div>
                    <div class="d-flex align-items-center mb-3 ps-3 justify-self-end justify-content-center">
                        <a class="btn btn-primary me-3 add-cart-btn w-100 d-flex justify-content-center align-items-center"
                            href="{{ $project->url }}" target="_blank"><i class="fa-brands fa-github fs-2"></i>
                        </a>

                        @if (Route::getCurrentRoute()->uri == 'admin')
                            <a href="{{ route('admin.projects.edit', $project->id) }}"
                                class="btn btn-warning me-3 w-25 d-flex justify-content-center align-items-center"><i
                                    class="fa-solid fa-pen fs-5"></i></a>
                            <a href=""
                                class="btn btn-danger me-3 w-25 d-flex justify-content-center align-items-center"><i
                                    class="fa-solid fa-trash-can fs-5"></i></a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

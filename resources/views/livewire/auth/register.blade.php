<section>
    @push('pageTitle', 'Twinbit | Register')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h2>REGISTER</h2>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="registerStore">
                            <div class="mb-3">
                                <label for="exampleInputName" class="form-label">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                       id="exampleInputName" required wire:model.defer="name">
                                @error('name')<span class="invalid-feedback d-block">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                       id="exampleInputEmail1" aria-describedby="emailHelp" required wire:model.defer="email">
                                <div id="emailHelp" class="form-text">Email address has to be unique.</div>
                                @error('email')<span class="invalid-feedback d-block">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                       id="exampleInputPassword1" required wire:model.defer="password">
                                @error('password')<span class="invalid-feedback d-block">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                       id="exampleInputPassword2" required wire:model.defer="confirmPassword">
                                @error('password')<span class="invalid-feedback d-block">{{ $message }}</span>@enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h2>DASHBOARD</h2>
                    </div>
                    <div class="card-body">
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Link with href
                            </a>
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                Button with data-bs-target
                            </button>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

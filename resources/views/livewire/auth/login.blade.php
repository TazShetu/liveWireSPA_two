<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @elseif(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h2>LOGIN</h2>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="userLogin">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" id="exampleInputEmail1" wire:model.defer="email" required
                                       class="form-control @error('email') is-invalid @enderror {{session()->has('error') ? 'is-invalid' : ''}}">
                                @error('email')<span class="invalid-feedback d-block">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" id="exampleInputPassword1" required wire:model.defer="password"
                                       class="form-control @error('password') is-invalid @enderror {{session()->has('error') ? 'is-invalid' : ''}}">
                                @error('password')<span class="invalid-feedback d-block">{{ $message }}</span>@enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
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

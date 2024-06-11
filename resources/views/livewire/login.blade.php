<div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Login</h5>
            <form wire:submit="submit">
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" wire:model="form.email" class="form-control @error('form.email') is-invalid @enderror" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    @error('form.email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" wire:model="form.password" class="form-control @error('form.password') is-invalid @enderror">
                    @error('form.password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" wire:model="form.remember" class="form-check-input" id="checkRemember">
                    <label class="form-check-label" for="checkRemember">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

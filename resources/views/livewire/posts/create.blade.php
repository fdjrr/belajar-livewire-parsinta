<div>
    <x-flash-message />

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Create Post</h5>
            <form wire:submit="save">
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" wire:model="form.title" class="form-control @error('form.title') is-invalid @enderror">
                    @error('form.title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Body</label>
                    <textarea name="body" wire:model="form.body" placeholder="What's on your mind?" class="form-control @error('form.body') is-invalid @enderror"></textarea>
                    @error('form.body')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" wire:model="form.image" class="form-control">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" wire:model="form.published" value="1" class="form-check-input" id="checkPublished">
                    <label class="form-check-label" for="checkPublished">Publish</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

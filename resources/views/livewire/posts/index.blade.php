<div>
    @forelse ($posts as $post)
    <livewire:posts.block :post="$post" wire:key="{{ $post->id }}" />
    @empty
    @endforelse
</div>

<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Joined</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ( $users as $user)
            <tr wire:key="{{ $user->id }}">
                <th scope="row">{{ $users->firstItem() + $loop->index }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at->format('d F, Y') }}</td>
                <td>@mdo</td>
            </tr>
            @empty
            <tr>
                <td colspan="100%">Data not found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    {{ $users->links() }}
</div>

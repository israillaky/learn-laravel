<x-app-layout>
    <div class="note-container single-note py-12">
        <h1 class="text-3xl text-white mb-5">Note: {{$note->created_at}}</h1>
        <div class="note-buttons">
            <a href="{{ route('note.edit', $note)}}" class="note-edit-button">Edit</a>
            <form action="{{ route('note.destroy', $note)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="note-delete-button">Delete</button>
            </form>
        </div>
    </div>
    <div class="note">
        <div class="note-body">
            {{ $note->note }}
        </div>
    </div>
</x-app-layout>

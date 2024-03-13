<x-app-layout>>
     <div class="note-container single-note py-12">
        <h1 class="text-3xl text-white mb-5">Create new Note</h1>
        <form action="{{ route('note.store') }}" method="POST" class="note">
            @csrf
            <textarea name="note" id="note" cols="30" rows="10" class="note-body" placeholder="Enter your note here"></textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index')}}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
     </div>
    </x-app-layout>

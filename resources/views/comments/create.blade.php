<form method="POST" action="{{ route('books.addComment', $book->id) }}">
    @csrf
    <div class="mb-3">
        <label>Add Comment</label>
        <textarea name="content" class="form-control"></textarea>
    </div>
    <button class="btn btn-primary">Submit</button>
</form>

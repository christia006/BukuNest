<form method="POST" action="{{ route('profile.destroy') }}">
    @csrf
    @method('DELETE')

    <p class="mb-3">Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.</p>

    <button type="submit" class="btn btn-danger">Delete Account</button>
</form>

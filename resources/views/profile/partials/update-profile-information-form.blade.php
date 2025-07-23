<form method="POST" action="{{ route('profile.update') }}">
    @csrf
    @method('PATCH')

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input id="name" name="name" type="text" class="form-control"
               value="{{ old('name', auth()->user()->name) }}" required autofocus>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input id="email" name="email" type="email" class="form-control"
               value="{{ old('email', auth()->user()->email) }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>

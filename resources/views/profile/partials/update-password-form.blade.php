<form method="POST" action="{{ route('password.update') }}">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="current_password" class="form-label">Current Password</label>
        <input id="current_password" name="current_password" type="password" class="form-control" required>
        @if ($errors->has('current_password'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('current_password') }}
            </div>
        @endif
    </div>

    <div class="mb-3 position-relative">
        <label for="password" class="form-label">New Password</label>
        <input id="password" name="password" type="password" class="form-control" required>
        <button type="button"
            class="btn btn-sm btn-outline-secondary position-absolute top-50 end-0 translate-middle-y me-2"
            onclick="togglePassword('password')">
            Show
        </button>
        @if ($errors->has('password'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('password') }}
            </div>
        @endif
    </div>

    <div class="mb-3 position-relative">
        <label for="password_confirmation" class="form-label">Confirm Password</label>
        <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" required>
        <button type="button"
            class="btn btn-sm btn-outline-secondary position-absolute top-50 end-0 translate-middle-y me-2"
            onclick="togglePassword('password_confirmation')">
            Show
        </button>
        @if ($errors->has('password_confirmation'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('password_confirmation') }}
            </div>
        @endif
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>

<script>
function togglePassword(id) {
    const input = document.getElementById(id);
    input.type = input.type === "password" ? "text" : "password";
}
</script>

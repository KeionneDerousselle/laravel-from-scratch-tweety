<form method="POST" action="{{ $action }}">
  @csrf
  @method($method)

  <button
    type="submit"
    class="{{ $getButtonClasses()}}">
      {{ $buttonText }}
  </button>
</form>
@props([
  'type' => 'text',
  'value' => '',
  'name',
  'label',
  'options',
])

@switch($type)
  @case('checkbox')
    <div class="mb-3 form-check">
      <input type="{{ $type }}" class="form-check-input @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}" value="1" {{ old($name, $value) ? 'checked' : '' }} {{ $attributes }}>
      <label class="form-check-label" for="{{ $name }}">{{ $label }}</label>
      @error($name)
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    @break

  @case('textarea')
    <div class="mb-3">
      <label for="{{ $name }}" class="form-label">{{ $label }}</label>
      <textarea class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}" rows="3" {{ $attributes }}>{{ old($name, $value) }}</textarea>
      @error($name)
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    @break

  @case('select')
    <div class="mb-3">
      <label for="{{ $name }}" class="form-label">{{ $label }}</label>
      <select class="form-select @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}" {{ $attributes }}>
        <option></option>
        @foreach ($options as $option)
          <option value="{{ $option->id }}" {{ old($name, $value) == $option->id ? "selected" : '' }}>
            {{ $option->title }}
          </option>
        @endforeach
      </select>
      @error($name)
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    @break

  @default
    <div class="mb-3">
      <label for="{{ $name }}" class="form-label">{{ $label }}</label>
      <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $value) }}" {{ $attributes }}>
      @error($name)
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
@endswitch

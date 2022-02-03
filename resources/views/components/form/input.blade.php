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
      <input type="{{ $type }}" class="form-check-input" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $value) }}">
      <label class="form-check-label" for="{{ $name }}">{{ $label }}</label>
    </div>
    @break

  @case('textarea')
    <div class="mb-3">
      <label for="{{ $name }}" class="form-label">{{ $label }}</label>
      <textarea class="form-control" id="{{ $name }}" name="{{ $name }}" rows="3">{{ old($name, $value) }}</textarea>
    </div>
    @break

  @case('select')
    <div class="mb-3">
      <label for="{{ $name }}" class="form-label">{{ $label }}</label>
      <select class="form-select" id="{{ $name }}" name="{{ $name }}">
        <option></option>
        @foreach ($options as $option)
          <option value="{{ $option->id }}" {{ old($name, $value) == $option->id ? "selected" : '' }}>
            {{ $option->title }}
          </option>
        @endforeach
      </select>
    </div>
    @break

  @default
    <div class="mb-3">
      <label for="{{ $name }}" class="form-label">{{ $label }}</label>
      <input type="{{ $type }}" class="form-control" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $value) }}">
    </div>
@endswitch

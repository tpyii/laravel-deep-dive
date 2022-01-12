@props([
  'type' => 'text',
  'value' => '',
  'name',
  'label'
])

@switch($type)
  @case('checkbox')
    <div class="mb-3 form-check">
      <input type="{{ $type }}" class="form-check-input" id="{{ $name }}" name="{{ $name }}" value="{{ $value }}">
      <label class="form-check-label" for="{{ $name }}">{{ $label }}</label>
    </div>
    @break

  @case('textarea')
    <div class="mb-3">
      <label for="{{ $name }}" class="form-label">{{ $label }}</label>
      <textarea class="form-control" id="{{ $name }}" name="{{ $name }}" rows="3">{{ $value }}</textarea>
    </div>
    @break

  @default
    <div class="mb-3">
      <label for="{{ $name }}" class="form-label">{{ $label }}</label>
      <input type="{{ $type }}" class="form-control" id="{{ $name }}" name="{{ $name }}" value="{{ $value }}">
    </div>
@endswitch

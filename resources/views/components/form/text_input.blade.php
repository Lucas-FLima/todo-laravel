<div class="input_area">
    <label for="{{ $name }}">{{ $label ?? '' }}</label>
    <input type="{{ !empty($type) ? $type : 'text' }}" name="{{ $name }}" id="{{ $name }}"
        placeholder="{{ $placeholder ?? '' }}" {{ !empty($required) ? 'required' : '' }} />
</div>

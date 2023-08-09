<div class="input_area">
    <label for="{{ $name }}">{{ $label ?? '' }}</label>
    <textarea name="{{ $name }}" id="{{ $name }}" placeholder="{{ $placeholder ?? '' }}"
        cols="{{ $cols ?? '' }}" rows="{{ $rows ?? '' }}" {{ !empty($required) ? 'required' : '' }}></textarea>
</div>

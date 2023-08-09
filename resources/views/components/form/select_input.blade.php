<div class="input_area">
    <label for="{{ $name }}">{{ $label ?? '' }}</label>
    <select name="{{ $name }}" id="{{ $name }}" {{ !empty($required) ? 'required' : '' }}>
        <option selected disabled value="">Selecione um opção</option>
        {{ $slot }}
    </select>
</div>

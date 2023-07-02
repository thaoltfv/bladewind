@props([
    'value' => 'value',
    'label' => 'label',
    'selected' => 'false',
    'onselect' => '',
    'flag' => '',
    'image' => '',
])
@php $selected = filter_var($selected, FILTER_VALIDATE_BOOLEAN); @endphp
<div class="py-3 pl-4 pr-3 flex items-center text-base cursor-pointer hover:bg-slate-100/90 bw-select-item"
    data-label="{{ $label }}" data-value="{{ $value }}" 
    @if($selected) data-selected="true" @endif
    @if($onselect !== '') data-user-function="{{ $onselect }}"@endif>
    @if ($flag !== '' && $image == '')<i class="{{ $flag }} flag"></i>@endif
    @if ($image !== '')<x-bladewind::avatar size="small" class="!mt-0 !mr-4" image="{{ $image }}" />@endif
    <span class="grow text-left">{!! $label !!}</span>
    <x-bladewind::icon name="check-circle" class="text-slate-400 h-5 w-5 hidden svg-{{$value }}" />
</div>
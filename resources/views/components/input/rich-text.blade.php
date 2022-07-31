@props([
    'initialValue' => ''
])
<div
    class="mt-1"
    wire:ignore
    {{$attributes}}
    x-data
    @trix-blur="$dispatch('change', $event.target.value)"
>
    <input id="x"  :value="{{$initialValue}}" type="hidden">
    <trix-editor {{$attributes}} rows="3"
                 class="@error($attributes->first()) border-red-500 @enderror shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></trix-editor>
</div>

@props([
'label',
'for',
])
<label for="{{ $for}}" class="block mt-4 text-sm">
    <span class="text-gray-700 dark:text-gray-50">{{$label}}</span>
    {{$slot}}
</label>




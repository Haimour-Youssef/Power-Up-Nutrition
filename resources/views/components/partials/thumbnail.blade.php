@props([
    'src',
    'size',
    'class',
])

@if($src)
<img src="{{ $src }}" class="{{ $class }}" 
    @if (isset($size)) style="width: {{ $size }}px; height: {{ $size }}px;" @endif loading="lazy" />
@else
<div class="border rounded bg-light" style="width: 50px; height: 50px;"></div>
@endif
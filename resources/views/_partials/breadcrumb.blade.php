@php
$segments = request()->segments();
@endphp

<h4 class="fw-bold py-3 mb-4">
  @foreach($segments as $key => $segment)
  @if($key < count($segments) - 1)
    <span class="text-muted fw-light">{{ $segment }} /</span>
    @else
    {{ $segment }}
    @endif
    @endforeach
</h4>
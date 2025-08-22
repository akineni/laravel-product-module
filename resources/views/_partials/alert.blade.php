@if(session('class'))
  <div class="alert alert-{{ session('class') }}" role="alert">{!! session('message') !!}</div>
@endif
<div class="card {{ $status == 'active' ? 'active order-first md:order-none' : ''}}">
  <div class="card-body">
    {!! $status == 'active' ? '<div class="card-badge"><span>Best value – save 75%!</span></div>' : '' !!}
    <div class="card-description">
      <h3>{{ $months }} month plan</h3>
      <p>Billed every {{ $months }} months</p>
    </div>
    <div class="card-price">
      <div class="old-price">${{ $old }}</div>
      <div class="new-price">${{ $new }}</div>
      <p>per week</p>
    </div>
  </div>
  <div class="card-footer">
    <a href="/" class="btn btn-card">
      Get personality test
      <img src="/img/arrow-right.svg"/>
    </a>
  </div>
</div>
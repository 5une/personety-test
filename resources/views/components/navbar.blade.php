<nav class="navbar bg-white px-4 md:px-2 py-5 relative" x-data="{ open: false }">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
    <a href="/">
      <img src="/img/logo.svg" alt="Personety Logo" />
    </a>
    <button type="button" @click="open = ! open" class="block md:hidden">
      <img x-bind:src="`${open ? '/img/close.svg' : '/img/nav.svg'}`" width="18px" aria-hidden="true"/>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <a href="/" class="btn btn-secondary">Cancel membership</a>
      <a href="/" class="btn btn-primary">Login <img src="/img/user.svg"/></a>
    </div>
  </div>
  <div class="mobile-navbar" x-show="open">
    <div class="menu-body">
      <a href="/">Contact us</a>
      <a href="/">Privacy policy</a>
      <a href="/">Terms & Conditions</a>
      <a href="/">Cancel membership</a>
      <a href="/">Login</a>
    </div>
    <div class="divider"></div>
    <div class="menu-footer">
      <p>
        Have any questions?
      </p>
      <a href="mailto:support@brainety.com">support@brainety.com</a>
    </div>
  </div>
</nav>
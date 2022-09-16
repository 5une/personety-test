<footer>
  <div class="container justify-between items-center mx-auto px-4">
    <div class="mobile-footer-links">
      <a href="/">Contact us</a>
      <a href="/">Privacy policy</a>
      <a href="/">Terms & Conditions</a>
    </div>
    <p>
      Rebilita, UAB
    </p>
    <p>
      Gedimino str. 45-7, LT-44239, Kaunas
    </p>
    <p>
      Registration code: 304912714
    </p>
    <p>
      support@brainety.com
    </p>
    <p>
      +1 (352) 508-4041
    </p>
    <div class="footer-text" x-data="{collapsed: false}">
      <p class="mt-8" :style="collapsed ? '-webkit-line-clamp: 100;' : '-webkit-line-clamp: 2;'">
        <strong>
          Disclaimer:
        </strong>
        The Site cannot and does not contain professional or definitively accurate product/service advice and/or opinions. The product/service information and/or opinions are provided for entertainment and educational purposes only and is not a substitute for professional advice. Accordingly, before taking any actions based upon your scores, we encourage you to consult with the appropriate professionals. We do not provide any kind of professional or definitively accurate product/service advice. THE USE OF RELIANCE OF ANY INFORMATION CONTAINED ON THE SITE IS SOLELY AT YOUR OWN RISK.
      </p>
      <button class="font-semibold flex gap-2 items-center md:hidden" @click="collapsed = !collapsed">
        <span x-text="collapsed? 'Read less' : 'Read more'"></span>
        <img src="/img/collapse-arrow.svg" :style="collapsed && 'transform: rotate(180deg)'"/>
      </button>
    </div>
    <div class="links-section">
      <div class="links">
        <a href="/">Contact</a>
        <a href="/">Privacy policy</a>
        <a href="/">Terms & Conditions</a>
      </div>
      <div class="rights">
        <p>
          © 2022 Personety.  All rights reserved.
        </p>
      </div>
    </div>
  </div>
</footer>

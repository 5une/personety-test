<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      @vite('resources/css/app.scss')
      <title>Laravel</title>
      <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body>
      <x-navbar/>
        <div class="container mx-auto mt-5 md:mt-20 pb-20 px-4">
          <h1>Revealed – your true <span class="text-primary">Personality</span> type </h1>
          <div class="offer-cards">
            <x-offer-card months="3" old="9.00" new="2.25"/>
            <x-offer-card months="12" old="5.00" new="1.25" status="active"/>
            <x-offer-card months="6" old="7.00" new="1.75"/>
          </div>
          <div class="w-full flex justify-center flex-col gap-5 items-center">
            <div class="flex items-center" id="terms">
              <input id="terms-checkbox" type="checkbox" class="w-4 h-4">
              <label for="terms-checkbox" class="ml-2 text-sm font-medium">
                I agree to the <a href="/">T&Cs</a> and <a href="/">Privacy policy</a>
              </label>
            </div>
            <img src="/img/payments.svg" width="390px"/>
          </div>
        </div>
      <x-footer/>
      <script>
        var terms = document.getElementById('terms');
        document.querySelectorAll('.btn-card').forEach((btn) => {
          btn.addEventListener('click', (event) => {
            if (!document.getElementById('terms-checkbox').checked) {
              event.preventDefault();
              terms.classList.add('error');
              terms.addEventListener('animationend', () => {
                terms.classList.remove('error');
              });
            }
          });
        });
      </script>
    </body>
</html>

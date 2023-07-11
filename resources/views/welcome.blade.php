<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CSIS</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper">
            <div class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="">
            </div>
            <div class="text-center mt-4 name">
                Billing
            </div>
            <form class="p-3 mt-3" action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user" id="icon"></span>
                    <input class="text-center" type="text" name="" id="" value="Cashier" disabled>
                    <input class="text-dark text-center" type="hidden" name="username" id="userName" value="cashier" >
                </div>
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key" id="icon"></span>
                    <input class="text-center" type="password" name="password" id="pwd" placeholder="Password" focused="true">
                    
                </div>
                <div class="d-flex align-items-center d-none" id="caps">
                    <span class="mx-auto" >CapsLock On</span>
                </div>
                
                <button class="btn mt-3">
                    <span class="hover-underline-animation"> Login </span>
                    <i class="fas fa-long-arrow-alt-right " transform="translate(30)"></i>
                </button>
            </form>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
              var capsLockElement = document.getElementById('caps');
              var capsLockState = localStorage.getItem('capsLockState');
            
              function isCapsLockOn(event) {
                return event.getModifierState && event.getModifierState('CapsLock');
              }
          
              function showCapsLockIndicator() {
                capsLockElement.classList.remove('d-none');
              }
          
              function hideCapsLockIndicator() {
                capsLockElement.classList.add('d-none');
              }
          
              function toggleCapsLockIndicator(event) {
                if (isCapsLockOn(event)) {
                  showCapsLockIndicator();
                } else {
                  hideCapsLockIndicator();
                }
              }
          
              if (capsLockState === 'on') {
                showCapsLockIndicator();
              }
          
              document.addEventListener('keydown', function(event) {
                if (isCapsLockOn(event)) {
                  localStorage.setItem('capsLockState', 'on');
                  showCapsLockIndicator();
                }
              });
          
              document.addEventListener('keyup', function(event) {
                if (!isCapsLockOn(event)) {
                  localStorage.setItem('capsLockState', 'off');
                  hideCapsLockIndicator();
                }
              });
            });
        </script>
    </body>
</html>

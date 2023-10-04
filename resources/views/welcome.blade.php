<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')  }}" />
    
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}" />
    
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" />
    
        <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}" />
    
        <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}" />
    
        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}" />
    
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}" />
    
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
    
        <link rel="stylesheet" href="{{ asset('assets/css/theme-dark.css') }}" />
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        
        <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
            async defer>
        </script>
    
    
    
    <title>Plongeur Sous marin</title>
    
    <link rel="icon" type="image/png" href="{{ asset('images/plongeur_logo.jpeg') }}" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    
    {{-- @vite('resources/css/app.css') --}}
    <script src="https://www.google.com/recaptcha/api.js"></script>
       
    </head>
    <body >
        <div id="app">


        </div>
        <script src="{{ mix('js/app.js') }}"></script>

      
       <script>
        // Attendre que le document soit chargé
        document.addEventListener("DOMContentLoaded", function () {
        // Sélectionner l'élément à animer
        const bannerContent = document.querySelector(".banner-content");

        // Ajouter la classe "show" pour déclencher l'animation
        bannerContent.classList.add("show");
        });

       // Fonction pour vérifier si l'élément est visible dans la fenêtre
        function isElementInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
        }

        // Fonction pour gérer l'animation lorsque l'élément est visible
        function handleAnimation() {
        const aboutContent = document.querySelector(".about-content");
        
        if (isElementInViewport(aboutContent)) {
            aboutContent.classList.add("show");
            window.removeEventListener("scroll", handleAnimation);
        }
        }

        // Écouteur d'événement pour déclencher l'animation lorsque l'utilisateur fait défiler la page
        window.addEventListener("scroll", handleAnimation);


        

       </script>
          

        {{-- @vite('resources/js/app.js') --}}
        {{-- @vite(['resources/js/app.js','resources/js/meanmenu.js']) --}}


        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    
        {{-- <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script> --}}
    
        <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
    
        <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    
        <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    
        <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
    
        <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
    
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        
        
       
    </body>
</html>

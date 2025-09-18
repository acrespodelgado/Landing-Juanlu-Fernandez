(function ($) {
    $(document).ready(function () {

        const $navbar = $('#wrapper-navbar');

        // Evento al hacer scroll
        $(window).on('scroll', function () {
            actualizarNavbar();
        });

        // Función que actualiza clases de navbar y botones según el scroll
        function actualizarNavbar() {
            const scrolled = $(window).scrollTop() > 0;
        
            if (scrolled) {
                $navbar.removeClass('transparent');
            } else {
                $navbar.addClass('transparent');
            }
        }

        /* -- Botón ir -- */

        $('.scroll').click(function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $('#banners').offset().top - 100
            }, 800, 'swing');
        });
        
        const navToggle = document.getElementById('navToggle');
        const mainNav = document.getElementById('main-nav');

        // Abrir menu
        navToggle.addEventListener('click', function() {
            this.classList.toggle('is-active');
            mainNav.classList.toggle('active');
            document.body.classList.toggle('menu-open');
        });

        // Cerrar menu
        const menuLinks = mainNav.getElementsByTagName('a');
        Array.from(menuLinks).forEach(link => {
            link.addEventListener('click', () => {
                navToggle.classList.remove('is-active');
                mainNav.classList.remove('active');
                document.body.classList.remove('menu-open');
            });
        });

    });
})(jQuery);
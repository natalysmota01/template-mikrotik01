 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <header class="top-header">
        <div class="nav-menu">
            <figure class="logotipo">
                <a href="index" title="">
                    <img src="images/logotipo.png" alt="" title="" />
                </a>
            </figure>

            <button class="btn-menu">
                <figure>
                    <img src="images/menu.png" alt="Site - Menu" title="" />
                </figure>
            </button>

            <nav class="menu">
                <figure class="logotipo-menu">
                    <a href="index">
                        <img src="images/logotipo.png" alt="" title="" />
                    </a>
                </figure>

                <ul>
                    <li><a href="index" title="">Início</a></li>
                    <li><a href="sobre" title="">Quem Somos</a></li>
                    <li><a href="planos" title="">Planos</a></li>
                    <li><a href="login.html" title="">Login</a></li>
                    <li><a class="scroll" href="index#contact" title="">Contato</a></li>
                </ul>
            </nav>
        </div>

        <!-- JQUERY MENU MOBILE-->
        <script type="text/javascript">
            $(".btn-menu").click(function() {
                $(".menu").toggle(400);
            });
        </script>
        
        <!-- JQUERY ROLAGEM MENU -->
        <script type="text/javascript">
            var $doc = $('html, body');
            $('.scrollSuave').click(function() {
                $doc.animate({scrollTop: $( $.attr(this, 'href') ).offset().top}, 500);
                return false;
            });
	   </script>
    </header>
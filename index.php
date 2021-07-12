<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Nataly S. Mota">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Empresa especializada em prover internet de qualidade">
    <meta name="keywords" content="provedor, provedor de internet, internet, internet banda larga">
    <title>Empresa - Início</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
    <?php include ('header.php'); ?>
    
    <section class="slider">
        <ul>
            <li><img src="images/banner1.jpg" alt="" title="" /></li>
            <li><img src="images/banner2.jpg" alt="" title="" /></li>
            <li><img src="images/banner3.jpg" alt="" title="" /></li>
            <li><img src="images/banner2.jpg" alt="" title="" /></li>
        </ul>
    </section>

    <section class="welcome">
        <header>Hello!</header>
        <p>Texto demonstrativo. Texto demonstrativo. Texto demonstrativo. Texto demonstrativo. Texto demonstrativo. Texto demonstrativo. Texto demonstrativo. Texto demonstrativo. Texto demonstrativo. Texto demonstrativo. Texto demonstrativo. Texto demonstrativo. Texto demonstrativo.</p>
    </section>
    
    <div class="available-prices">        
        <section class="prices">
            <article class="price">
                <div class="type-plan">20</div>
                
                <div class="txt-mbps">
                    <p>mbps</p>
                </div>
                
                <h1>
                    Básico
                    <hr>
                </h1>
                
                <div class="price-plan">R$00,00</div>

                <div class="description-plan">
                    <p>Descrição do plano. Descrição do plano. Descrição do plano. Descrição do plano.</p>
                </div>
                
                <div class="btn-plans">
                    <a href="#" title="">Ver mais</a>
                </div>
            </article>
            
            <article class="price">
                <div class="type-plan">60</div>
                
                <div class="txt-mbps">
                    <p>mbps</p>
                </div>
                
                <h1>
                    Básico
                    <hr>
                </h1>
                
                <div class="price-plan">R$00,00</div>

                <div class="description-plan">
                    <p>Descrição do plano. Descrição do plano. Descrição do plano. Descrição do plano.</p>
                </div>
                
                <div class="btn-plans">
                    <a href="#" title="">Ver mais</a>
                </div>
            </article>
            
            <article class="price">
                <div class="type-plan">120</div>
                
                <div class="txt-mbps">
                    <p>mbps</p>
                </div>
                
                <h1>
                    Básico
                    <hr>
                </h1>
                
                <div class="price-plan">R$00,00</div>

                <div class="description-plan">
                    <p>Descrição do plano. Descrição do plano. Descrição do plano. Descrição do plano.</p>
                </div>
                
                <div class="btn-plans">
                    <a href="#" title="">Ver mais</a>
                </div>
            </article>
        </section>
    </div>
    
    <section class="about">
        <div class="txt-about">
            <header>Sobre</header>
            <hr>
            <p>Breve descrição da empresa. Breve descrição da empresa. Breve descrição da empresa. Breve descrição da empresa. Breve descrição da empresa. Breve descrição da empresa. Breve descrição da empresa.</p>
            
            <div class="btn-ler-mais">
                <a href="#" title="">Ler mais</a>
            </div>
        </div>
    </section>
    
    <section id="contact">
        <header>Entre em Contato</header>
        <hr>
        <p>Teremos prazer em ajudá-lo a escolher o plano perfeito para você.</p>
        
        <form class="form-contact" action="#" method="post">
            <input type="text" id="name-client" placeholder="Seu nome *" required />
            <input type="email" id="email-client" placeholder="Seu E-mail *" required style="float: right" />
            <textarea rows="5" id="txt-message" placeholder="Mensagem *" required></textarea>
            
            <input class="btn-enviar" type="submit" value="Enviar" />
        </form>
    </section>
    
    <?php include ('footer.php'); ?>
</body> 
</html>
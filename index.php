<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="styles/style.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">

      <header>
           <nav>
               <ul>
                   <li class="logo">Logo</li>
               </ul>
               <ul class="ul-menu">
                   <li class="li-menu"><a href="#registro">Registrate</a></li>
                   <li class="li-menu"><a href="#login">Login</a></li>
                   <li class="li-menu"><a href="preguntas">Preguntas Frecuentes</a></li>
                   <li class="li-menu"><a href="#contact">Contacto</a></li>
               </ul>
           </nav>
       </header>
       <div class="inicio"><!--de estos botones se van a registrar como vendedor y a subir sus productos o como usuario-->
         <section class="opcion">
           <h1>Crea tu feria americana</h1>
           <button type="button" name="button">Quiero vender!</button>
         </section>
         <section class="opcion">
           <h1>Recorre ferias y encontra lo que estas buscando</h1>
           <button type="button" name="button">Quiero comprar!</button>
         </section>
       </div>
      <main>
        <!--la idea aca es redireccionar a otra pagina donde esten las ferias que vendan productos de esa categoria .-->
        <h1>Categorias</h1>
        <div class="categorias">
        <article class="categoria" >
        <img src="images/ropa.jpg" alt="">
        <h2>Ropa</h2>
          </article>
          <article class="categoria">
            <img src="images/muebles.jpg" alt="">
            <h2>Muebles</h2>
          </article>
          <article class="categoria">
            <img src="images/vajilla.jpg" alt="">
            <h2>Articulos del hogar</h2>
          </article>
          </div>
          <div class="categorias">
            <article class="categoria" id="ropa">
              <img src="images/shoes.jpg" alt="">
              <h2>Calzado</h2>
            </article>
            <article class="categoria">
              <img src="images/juguetes.jpg" alt="">
              <h2>Juguetes</h2>
            </article>
            <article class="categoria">
              <img src="images/electro.jpg" alt="">
              <h2>Electrodomesticos</h2>
            </article>
          </div>
      </main>
      <footer>
       <h1>Contacto. Redes Sociales. </h1>
      </footer>

    </div>

  </body>
</html>

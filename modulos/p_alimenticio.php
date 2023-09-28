
<h1>Plan alimenticio</h1>
<p>En este espacio podremos tener acceso a un plan alimenticio creadso especialmente para ti</p>

<div class="p-5 mb-4 bg-body-tertiary rounded-3" id="desayunito">
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
     
      #desayunito{
        background-image: url(modulos/img/Breakfast.jpg);
        background-repeat: no-repeat;
        background-size: 100%;
        filter: brightness(0.6);
        position: relative;
      }

      #postre{
        background-image: url(modulos/img/dessert.jpg);
        background-repeat: no-repeat;
        background-size: 100%;
        filter: brightness(0.6);
      }

      #snack{
        background-image: url(modulos/img/snack.jpg);
        background-repeat: no-repeat;
        background-size: 100%;
        filter: brightness(0.6);
      }
    </style>
  
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold" style="color:#FFFFFF;">Platos principales</h1>
        <p class="col-md-8 fs-4" style="color:#FFFFFF;">Qué tal si para empezar hacemos un desayuno balanceado con bastantes calorías para tener energía a través de todo el día y para aumentar esos kilos que deseas.</p>
        <button class="btn btn-primary btn-lg" type="button">¡Vamos!</button>

      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-6" id="postre">
        <div class="h-100 p-5 text-bg-clear rounded-3">
          <h2 class="fw-bold">Postres</h2>
          <p>Acá está nuestra selección de postres altos en proteínas y bajos en grasas, para endulzar tu día.</p>
          <button class="btn btn-outline-light" type="button">¡Vamos!</button>
        </div>
      </div>
      <div class="col-md-6" id="snack">
        <div class="h-100 p-5 bg-clear-tertiary text-dark rounded-3">
          <h2 class="fw-bold">Snacks</h2>
          <p>Para cuando no es suficiente y quieres saciar esas ganas, acá hay todo tipo de snacks saludables y caseros.</p>
          <button class="btn btn-outline-secondary" type="button">¡Vamos!</button>
        </div>
      </div>
    </div>
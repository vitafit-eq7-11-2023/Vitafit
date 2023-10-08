        <li class="nav-item">
          <a class="nav-link" href="dashboard.php?mod=cuenta">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <box-icon type="regular" name="cog" color="black" size="22px"></box-icon>
            </div>
            <span class="nav-link-text ms-1">Perfil</span>
          </a>
        </li>
        <?php

        $admin= $_SESSION['rol'];
        if($admin==2){
          
        ?>
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php?mod=usuarios">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <box-icon type="regular" name="edit" color="black" size="22px"></box-icon>
            </div>
            <span class="nav-link-text ms-1">Usuarios</span>
          </a>
        </li>
        <?php
        }
        ?>
        <li class="nav-item">
          <a class="nav-link" href="salir.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <box-icon type="regular" name="exit" color="black" size="22px"></box-icon>
            </div>
            <span class="nav-link-text ms-1">Cerrar sesion<span>
          </a>
        </li>
<?php include('header.php'); ?>

<section class="seccion-verde">

    <div class="container entradas">
        <div class="px-4">
            <h1 class="titulo-1">¡Vas a asistir a chispas!</h1>
            <p class="parrafo-1 mt-2">Estamos deseando verte</p>
        </div>

        <div class="container mt-3 px-4  pb-4">
            <div class="paso-anterior mb-3">
                <h3 class="parrafo-6 ms-1">Entrada seleccionada</h3>
                <div class="selector-pase col-12 col-md-8 col-xl-6 d-flex justify-content-center align-items-start flex-column mt-1">
                    <h6 class="titulo-6">Pase 1 día</h6>
                </div>
            </div>

            <div class="paso-anterior mb-3">
                <h3 class="parrafo-6 ms-1">Venís a vernos</h3>
                <div class="selector-pase col-12 col-md-8 col-xl-6 d-flex justify-content-center align-items-start flex-column mt-1">
                    <h6 class="titulo-6">2 Personas</h6>
                </div>
            </div>

            <h2 class="titulo-2">¿Qué día venís?</h2>
            <div class="selector-pase col-12 col-md-8 col-xl-6 d-flex justify-content-center align-items-start flex-column">
            <input type="date" id="start" name="trip-start" value="2024-08-01" min="2024-08-01" max="2024-08-11"/>
            </div>
            
        </div>
        <div class="botones mt-3 p-3 pt-0 col-12 col-md-8 col-xl-6 d-flex justify-content-between">
            <a href="entradas-2.php" class="boton fill-negro">Volver atrás</a>
            <a href="entradas-4.php" class="boton fill-morado">Continuar</a>
        </div>
    </div>

</section>




<?php include('footer.php'); ?>

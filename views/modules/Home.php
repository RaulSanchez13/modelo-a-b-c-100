<div class="background-radial-gradient overflow-hidden"> 
    <div class="container center mt-2"> 
        <div class="row border-5"> 
            <div class="col-4"> 
                <img src="../img/Banner1.jpg" class="img-fluid" alt="Vista"> 
            </div> 
            <div class="col-4 d-flex align-items-center text-center"> 
                <p class="font-weight-bold h3">Modelo: a + b + c = 100%</p> 
            </div> 
        </div> 
    </div> 
    <div class="container"> 
        <div class="row justify-content-center"> 
            <div class="col-12 col-md-6 order-lg-1"> 
                <form method="POST" action="controllers/DataUsers.php">
                    <div class="mb-3"> 
                        <label for="inputNumber1" class="form-label">Ingresar dato 1</label> 
                        <input type="number" class="form-control" id="inputNumber1" name ="inputNumber1" placeholder="Ingresar un dato numérico"> 
                    </div> 
                    <div class="mb-3"> 
                        <label for="inputNumber2" class="form-label">Ingresar dato 2</label> 
                        <input type="number" class="form-control" id="inputNumber2" name ="inputNumber2"  placeholder="Ingresar un dato numérico"> 
                    </div> 
                    <div class="mb-3"> 
                        <label for="inputNumber3" class="form-label">Ingresar dato 3</label> 
                        <input type="number" class="form-control" id="inputNumber3" name ="inputNumber3"  placeholder="Ingresar un dato numérico"> 
                    </div> 
                    <div class="text-center"> 
                        <button type="submit" class="btn btn-primary">Confirmar datos</button> 
                    </div> 
                    <?php
                        if(isset($_GET['error']) && $_GET['error'] == 1){
                            echo '
                                <div class="alert alert-danger" id="alert_Error">
                                    Los datos que escribiste no suman cien
                                </div>
                            ';      
                        }
                        else if(isset($_GET['success']) && $_GET['success'] == 1){
                            echo '
                                <div class="alert alert-success" id="alert_Success">
                                    Tus datos son correctos
                                </div>
                            ';
                        }
                    ?>
                </form> 
            </div> 
            <div class="col-12 col-md-6 order-lg-1"> 
                <!-- Barra de opciones --> 
                <form method="POST" action="controllers/DataUsers.php">
                    <div class="row justify-content-start mb-3"> 
                        <div class="col-12"> 
                            <p class="font-weight-bold h5">¿Cómo prefieres ver los datos?</p> 
                            <select id="chartType" name="chartType" class="form-select form-control-sm" aria-label="Default select example"> 
                                <option selected>Selecciona la vista</option> 
                                <option value="1">Gráfica de barras</option> 
                                <option value="2">Gráfico de pastel</option> 
                                <option value="3">Tabla</option> 
                            </select> 
                        </div> 
                    </div> 
                    <div class="row justify-content-start"> 
                        <div class="col-12 text-center"> 
                            <button type="submit" class="btn btn-primary">Mostrar</button> 
                        </div> 
                    </div> 
                </form>
                <canvas id="myChart"></canvas>
            </div> 
        </div> 
    </div> 
</div>
<script src="views/js/alerts.js"></script>
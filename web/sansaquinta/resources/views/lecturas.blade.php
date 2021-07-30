@extends("layouts.master_home")

@section("contenido")

<div class="row mt-5" >
    <div class="col-12 col-md-6 col-lg-5 mx-auto">

        <div class="card">
            <div class="card-header bg-dark text-center text-warning">
                <span>Ingreso</span>
            </div>

            <div class="card-body bg-secondary">
                <div class="mb-3">
                    <label for="fecha_dt" class="form-label">Fecha</label>
                    <div>
                        <input class="form-control" type="date" id="fecha_dt">
                    </div>
                    
                </div>

                <div class="mb-3">
                    <label for="time" class="form-label">Tiempo</label>
                    <div>
                        <input class="form-control" type="text" id="time">
                    </div>
                    
                </div>

                <div class="mb-3">
                    <label for="medidor" class="form-label">Medidor</label>
                    <div>
                        <select class="form-select" aria-label="medidor">
                            <option selected>1</option>
                            <option value="1">2</option>
                            <option value="2">3</option>
                            <option value="3">4</option>
                            <option value="3">5</option>
                            <option value="3">6</option>
                            <option value="3">7</option>
                            <option value="3">8</option>
                            <option value="3">9</option>
                            <option value="3">10</option>
                        </select>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="direccion" class="form-label">Direccion</label>
                    <input class="form-control" type="text" id="time">
                </div>

                
                <div class="mb-3">
                    <label for="valor" class="form-label">Valor</label>
                    <div>
                        <input class="form-control" type="number" id="valor">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="medida" class="form-label">Medida</label>
                    <div>
                        <select class="form-select" aria-label="medida">
                            <option selected>Kilowatts</option>
                            <option value="1">Watts</option>
                            <option value="2">Temperatura</option>

                        </select>   
                    </div>
             
                </div>
                

            </div>
        </div>
        



    </div>

</div>

@endsection
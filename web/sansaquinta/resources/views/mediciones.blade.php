@extends("layouts.master_home")

@section("contenido")

<div class="row-mt-5">
    <div class="col-12 col-md-6 col-lg-5 mx-auto">

        <div class="card">
            <div class="card-header text-center text-ligth">
                <span>mediciones</span>
            </div>

            <div class="card-body">
                <div>
                    <table class="table table-dark">
                        <thead>
                          <tr>
                            <th scope="col">Fecha</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Medidor</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Acciones</th>
                          </tr>
                          </thead>
                    </table>
                </div>

            </div>

        </div>


    </div>


</div>


@endsection
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <hr>
                            <h2 class="intro-text text-center">Promociones</h2>
                            <hr>
                        </div>

                        <div class="col-lg-6">
                            Total dias trabajados : <label for="" id="total"></label> dias
                        </div>
                        <div>
                            <table border="1">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Funcionario</th>
                                    <th>Tipo de promocion</th>
                                    <th>Fecha inicio</th>
                                    <th>Fecha fin</th>
                                    <th>Dias trabajados</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $total=0; ?>
                                @foreach ($values as $value)
                                    <tr class="success">
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->funcionario->ci }}</td>
                                        <td>{{ $value->tipo_promocion }}</td>
                                        <td>{{ $value->fecha_inicio }}</td>
                                        <td>{{ $value->fecha_fin }}</td>
                                        <td>{{ Carbon\Carbon::parse($value->fecha_inicio)->diffInDays(Carbon\Carbon::parse($value->fecha_fin))  }} dias</td>
                                        <?php $total=$total+Carbon\Carbon::parse($value->fecha_inicio)->diffInDays(Carbon\Carbon::parse($value->fecha_fin))?>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
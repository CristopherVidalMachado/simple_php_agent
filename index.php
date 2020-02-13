<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <div class="container">

        <form class="well form-horizontal" action="/matriz/matriz.php" method="post" id="matriz">
            <fieldset>


                <legend>
                    <center>
                        <h2><b>Matriz de Jardim</b></h2>
                    </center>
                </legend><br>


                <div class="form-group">
                    <label class="col-md-4 control-label">Formigueiros</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select name="formigueiros" class="form-control selectpicker">
                                <option value="random">Aleatórios</option>
                                <option value="0.10">10%</option>
                                <option value="0.20">20%</option>
                                <option value="0.50">50%</option>
                            </select>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Tamanho da matriz</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select name="tamanho-matriz" class="form-control selectpicker">
                                <option value="4">4x4</option>
                                <option value="8">8x8</option>
                                <option value="12">12x12</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4"><br>
                        <button type="submit"
                            class="btn btn-primary">Criar matriz <span
                                class="glyphicon glyphicon-send"></span></button>
                           
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
    </div>
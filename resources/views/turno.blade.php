
@extends ('layout')

@section ('content')

    <div class="container">
        <form>
        <div class="form-row d-flex justify-content-center">
            <div class="col-">
                <label for="seleciona_dia">Selecione o dia</label> 
                <select class="custom-select mr-sm-2" id="seleciona_dia">
                    <option selected>Dia</option>
                    <option value="1">Segunda</option>
                    <option value="2">Terça</option>
                    <option value="3">Quarta</option>
                    <option value="4">Quinta</option>
                    <option value="5">Sexta</option>
                    <option value="6">Sábado</option>
                </select>
            </div>
            <div class="col-">
                <label for="seleciona_turno">Selecione o turno</label>
                <select class="custom-select mr-sm-2" id="seleciona_turno">
                    <option selected>Turno</option>
                    <option value="1">Manhã</option>
                    <option value="2">Tarde</option>
                    <option value="3">Noite</option>
                </select>
            </div>
        </div>
        </form>
        <div class="container" style="margin-top:50px">
            <div class="row d-flex justify-content-center">
                <button type="button" class="btn btn-outline-primary">Voltar</button>
            </div>
        </div>
    </div>

@endsection
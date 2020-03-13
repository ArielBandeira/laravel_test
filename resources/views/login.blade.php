
@extends ('layout')

@section ('content')
<div class="container">
    <div class="login-form">
        <form>    
        <div class="form-row d-flex justify-content-center">
            <div class="col-">

                <div class="form-group">
                    <label for="seleciona_dia">Email</label>
                    <input type="text" class="form-control" required="required">
                </div>

                <div class="form-group">
                    <label for="seleciona_dia">Senha</label>
                    <input type="password" class="form-control" required="required">
                </div>

                <div>
                    <a href="#">Esqueci minha senha</a>
                </div>

                <div class="form-group d-flex justify-content-center" style="margin-top:50px">
                    <button type="submit" class="btn btn-outline-primary">Logar</button>
                </div>   
            </div>     
        </form>
    </div>
</div>

@endsection
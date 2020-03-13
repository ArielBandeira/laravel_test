
@extends ('layout')

@section ('content')

<div class="container " style="margin-top:30px">
    <div class="row">
        <div class="col-md">
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">nome</th>
                <th scope="col">email</th>
                <th scope="col">senha</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                <td>{{ $user -> id }}</td>
                <td>{{ $user -> username }}</td>
                <td>{{ $user -> email }}</td>
                <td>{{ $user -> password }}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
<div class="container" style="margin-top:30px">
    <div class="row d-flex justify-content-between">
        <button type="button" class="btn btn-success">Gerar Presença</button>
        <button type="button" class="btn btn-outline-primary">Voltar</button>
    </div>
</div>


@endsection
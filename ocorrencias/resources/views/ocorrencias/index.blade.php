<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Ocorrências</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Registro de Ocorrências</h1>
        <form action="{{ route('ocorrencias.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <div class="form-group">
                  <textarea id="descricao" name="descricao" maxlength="200" rows="10" cols="27" required ></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="foto">Foto:</label>
                <!--input type="file" id="foto" name="foto" accept="image/*;capture=camera" required-->
                <input type="file" id="foto" name="foto" accept="image/*" capture="camera" required>
                <!--img id="foto2" width="300" height="300"-->
                
            </div>
            <button type="submit" class = "ui-btn ui-corner-all">Salvar</button>
        </form>
        <ul>
            @foreach($ocorrencias as $ocorrencia)
                <li>
                    {{ $ocorrencia->descricao }}
                    <img src="{{ $ocorrencia->foto }}" alt="Foto da ocorrência">
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/CSS" href="Formulário.CSS"/>
</head>
<body>
    <form action="recebeValor.php" method="post">
    <div>
    <h1 id="Titulo">Cadastro Net Design Perfect </h1>
    <p id="Subtitulo"><strong>Faça o seu cadastro.</strong></p>
    <br>
    </div>
            <fieldset class="">
            <label for="Nome"><strong>Digite seu nome</strong></label>
                <div>
                    <input type="text" name="Nome" id="Nome" required>
                </div>    
                <div>
                <label for="Idade"><strong>Quantos anos você tem?</strong></label>
                <input type="text" name="Idade" id="Idade" required>
                </div>
            <div>
            <label><strong>Qual cidade você mora?</strong></label>   
            <input type="text" name="Cidade" id="Cidade" required>
            </div>
            <details>         
            <summary><strong>Marque os estados que você já visitou:</strong></summary> 
    <input type="checkbox" id="ac" name="Estados[]" value="AC">
    <label for="ac">Acre</label><br>
    
    <input type="checkbox" id="al" name="Estados[]" value="AL">
    <label for="al">Alagoas</label><br>
    
    <input type="checkbox" id="ap" name="Estados[]" value="AP">
    <label for="ap">Amapá</label><br>
    
    <input type="checkbox" id="am" name="Estados[]" value="AM">
    <label for="am">Amazonas</label><br>
    
    <input type="checkbox" id="ba" name="Estados[]" value="BA">
    <label for="ba">Bahia</label><br>
    
    <input type="checkbox" id="ce" name="Estados[]" value="CE">
    <label for="ce">Ceará</label><br>
    
    <input type="checkbox" id="df" name="Estados[]" value="DF">
    <label for="df">Distrito Federal</label><br>
    
    <input type="checkbox" id="es" name="Estados[]" value="ES">
    <label for="es">Espírito Santo</label><br>
    
    <input type="checkbox" id="go" name="Estados[]" value="GO">
    <label for="go">Goiás</label><br>
    
    <input type="checkbox" id="ma" name="Estados[]" value="MA">
    <label for="ma">Maranhão</label><br>
    
    <input type="checkbox" id="mt" name="Estados[]" value="MT">
    <label for="mt">Mato Grosso</label><br>
    
    <input type="checkbox" id="ms" name="Estados[]" value="MS">
    <label for="ms">Mato Grosso do Sul</label><br>
    
    <input type="checkbox" id="mg" name="Estados[]" value="MG">
    <label for="mg">Minas Gerais</label><br>
    
    <input type="checkbox" id="pa" name="Estados[]" value="PA">
    <label for="pa">Pará</label><br>
    
    <input type="checkbox" id="pb" name="Estados[]" value="PB">
    <label for="pb">Paraíba</label><br>
    
    <input type="checkbox" id="pr" name="Estados[]" value="PR">
    <label for="pr">Paraná</label><br>
    
    <input type="checkbox" id="pe" name="Estados[]" value="PE">
    <label for="pe">Pernambuco</label><br>
    
    <input type="checkbox" id="pi" name="Estados[]" value="PI">
    <label for="pi">Piauí</label><br>
    
    <input type="checkbox" id="rj" name="Estados[]" value="RJ">
    <label for="rj">Rio de Janeiro</label><br>
    
    <input type="checkbox" id="rn" name="Estados[]" value="RN">
    <label for="rn">Rio Grande do Norte</label><br>
    
    <input type="checkbox" id="rs" name="Estados[]" value="RS">
    <label for="rs">Rio Grande do Sul</label><br>
    
    <input type="checkbox" id="ro" name="Estados[]" value="RO">
    <label for="ro">Rondônia</label><br>
    
    <input type="checkbox" id="rr" name="Estados[]" value="RR">
    <label for="rr">Roraima</label><br>
    
    <input type="checkbox" id="sc" name="Estados[]" value="SC">
    <label for="sc">Santa Catarina</label><br>
    
    <input type="checkbox" id="sp" name="Estados[]" value="SP">
    <label for="sp">São Paulo</label><br>
    
    <input type="checkbox" id="se" name="Estados[]" value="SE">
    <label for="se">Sergipe</label><br>
    
    <input type="checkbox" id="to" name="Estados[]" value="TO">
    <label for="to">Tocantins</label><br>
    </div>
    </fieldset>
    <input type="submit" value="Enviar"/>
    <input type="reset" value="Limpar"/>
</body>
</html>


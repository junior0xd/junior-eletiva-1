<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .required::after {
            content: " *";
            color: red;
        }
    </style>
</head>

<body class="bg-dark text-light">

    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Cadastro de Cliente</h4>
            </div>
            <div class="card-body">
                <form action="processa.php" method="POST">
                    <!-- Tipo de Pessoa -->
                    <div class="mb-3">
                        <label class="form-label required">Tipo de Pessoa</label>
                        <select id="tipoPessoa" name="tipo_pessoa" class="form-select" required>
                            <option value="">Selecione...</option>
                            <option value="fisica">Pessoa Física</option>
                            <option value="juridica">Pessoa Jurídica</option>
                        </select>
                    </div>

                    <!-- Nome / Nome Fantasia -->
                    <div class="mb-3" id="campoNome">
                        <label for="nome" class="form-label required" id="labelNome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>

                    <!-- CPF / CNPJ -->
                    <div class="mb-3" id="campoDocumento">
                        <label for="documento" class="form-label" id="labelDocumento">CPF</label>
                        <input type="text" class="form-control" id="documento" name="documento">
                    </div>

                    <!-- Telefone -->
                    <div class="mb-3">
                        <label for="telefone" class="form-label required">Telefone para Contato</label>
                        <input type="tel" class="form-control" id="telefone" name="telefone" required>
                    </div>

                    <!-- E-mails -->
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail para Contato</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="email_cobranca" class="form-label">E-mail de Cobrança</label>
                        <input type="email" class="form-control" id="email_cobranca" name="email_cobranca">
                    </div>

                    <!-- Endereço -->
                    <div class="row">
                        <div class="mb-3">
                            <label for="logradouro" class="form-label">Logradouro</label>
                            <input type="text" class="form-control" id="logradouro" name="logradouro">
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-3 mb-3">
                            <label for="bairro" class="form-label">Bairro</label>
                            <input type="text" class="form-control" id="bairro" name="bairro">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cep" class="form-label">CEP</label>
                            <input type="text" class="form-control" id="cep" name="cep">
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="tipo_imovel" class="form-label">Tipo do Imóvel</label>
                            <input type="text" class="form-control" id="tipo_imovel" name="tipo_imovel">
                        </div>
                    </div>
                    <!-- Tipo do Imóvel -->

                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS e lógica de alternância -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const tipoPessoa = document.getElementById('tipoPessoa');
        const labelNome = document.getElementById('labelNome');
        const labelDocumento = document.getElementById('labelDocumento');
        const nome = document.getElementById('nome');
        const documento = document.getElementById('documento');

        tipoPessoa.addEventListener('change', function() {
            if (this.value === 'fisica') {
                labelNome.textContent = "Nome";
                labelDocumento.textContent = "CPF";
                nome.placeholder = "Digite o nome completo";
                documento.placeholder = "000.000.000-00";
            } else if (this.value === 'juridica') {
                labelNome.textContent = "Nome Fantasia";
                labelDocumento.textContent = "CNPJ";
                nome.placeholder = "Digite o nome fantasia";
                documento.placeholder = "00.000.000/0000-00";
            } else {
                labelNome.textContent = "Nome";
                labelDocumento.textContent = "CPF ou CNPJ titular";
                nome.placeholder = "";
                documento.placeholder = "";
            }
        });
    </script>

</body>

</html>
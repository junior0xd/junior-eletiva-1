<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Ordem de Serviço</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .required::after {
            content: " *";
            color: red;
        }
    </style>
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Gerar Ordem de Serviço</h4>
        </div>
        <div class="card-body">
            <form action="processa_os.php" method="POST" enctype="multipart/form-data">
                
                <!-- Responsáveis -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="resp_gerar" class="form-label required">Responsável por Gerar a O.S</label>
                        <input type="text" class="form-control" id="resp_gerar" name="resp_gerar" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="resp_autorizar" class="form-label required">Responsável por Autorizar a O.S</label>
                        <input type="text" class="form-control" id="resp_autorizar" name="resp_autorizar" required>
                    </div>
                </div>

                <!-- Endereços -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="endereco_mult" class="form-label required">Endereço da Mult Filtros</label>
                        <input type="text" class="form-control" id="endereco_mult" name="endereco_mult" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="endereco_cliente" class="form-label required">Endereço do Cliente</label>
                        <input type="text" class="form-control" id="endereco_cliente" name="endereco_cliente" required>
                    </div>
                </div>

                <!-- Serviços -->
                <div class="mb-3">
                    <label for="servicos" class="form-label required">Serviços que serão realizados</label>
                    <textarea class="form-control" id="servicos" name="servicos" rows="3" required></textarea>
                </div>

                <!-- Equipamentos -->
                <div class="mb-3">
                    <label for="equipamento" class="form-label required">Equipamento do cliente que receberá manutenção</label>
                    <input type="text" class="form-control" id="equipamento" name="equipamento" required>
                </div>

                <!-- Peças substituídas -->
                <div class="mb-3">
                    <label for="pecas" class="form-label">Peças que serão substituídas</label>
                    <textarea class="form-control" id="pecas" name="pecas" rows="2"></textarea>
                </div>

                <!-- Valor total -->
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="valor_total" class="form-label required">Valor Total (R$)</label>
                        <input type="number" step="0.01" class="form-control" id="valor_total" name="valor_total" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="data_os" class="form-label required">Data da O.S</label>
                        <input type="date" class="form-control" id="data_os" name="data_os" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="data_manutencao" class="form-label required">Data da Manutenção</label>
                        <input type="date" class="form-control" id="data_manutencao" name="data_manutencao" required>
                    </div>
                </div>

                <!-- Observação -->
                <div class="mb-3">
                    <label for="observacao" class="form-label">Observações</label>
                    <textarea class="form-control" id="observacao" name="observacao" rows="3"></textarea>
                </div>

                <!-- Anexos -->
                <div class="mb-3">
                    <label for="anexos" class="form-label">Anexos</label>
                    <input type="file" class="form-control" id="anexos" name="anexos[]" multiple>
                    <div class="form-text">Você pode enviar múltiplos arquivos (imagens, PDFs, etc).</div>
                </div>

                <!-- Ordens vinculadas -->
                <div class="mb-3">
                    <label for="os_vinculadas" class="form-label">Ordens de Serviço Vinculadas</label>
                    <input type="text" class="form-control" id="os_vinculadas" name="os_vinculadas" placeholder="Ex: #0123, #0456">
                    <div class="form-text">Insira os números das O.S. separadas por vírgula, se houver.</div>
                </div>

                <button type="submit" class="btn btn-success">Gerar O.S</button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
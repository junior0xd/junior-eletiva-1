# MATÉRIA: Eletiva I – Programação WEB 
Fatecanos,

Este repositório contém exercícios resolvidos da disciplina de Programação WEB da FATEC Presidente Prudente no ano de 2025. Os arquivos estão organizados por listas e podem servir como referência para estudos e revisões.

## Conteúdo
- P1
    - Links do vídeo: 
        - [Youtube](https://youtu.be/Q4yZFVpAYSE)
        - [Google Drive](https://drive.google.com/file/d/1sLSA8W1o7OqqBoW7LWpaDvTrKzXz_GQs/view?usp=drive_link)
- Repositório acadêmico
- Exercícios resolvidos
- Material de apoio para estudantes

## Problemas

### Problema: PDOException: Could not find Driver
1. Se você instalou o apache através do XAMPP, baixe as extensões do MySQL para o PHP.
```bash
    sudo apt update
    sudo apt install php-mysql
```
2. Verifique se a extensão está habilitada no arquivo `php.ini`.\

    Na minha máquina está instalado a versão 8.3 do PHP e estou utilizando o editor Xed.
```bash
    sudo xed /etc/php/8.3/apache2/php.ini
```
\
    Procure por `extension=pdo_mysql` e remova o ponto e vírgula (`;`) no início da linha, se houver.\
    Adicione a linha `extension=pdo` se não estiver presente.


3. Reinicie o servidor Apache.
```bash
    sudo systemctl restart apache2
```
4. Verifique se o problema foi resolvido acessando sua aplicação novamente.


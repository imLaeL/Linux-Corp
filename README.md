# Linux-Corp

[![Licença](https://img.shields.io/badge/license-Unlicensed-red.svg)]()

## Descrição

Este projeto é uma aplicação web simples em PHP para gerenciamento de dados de clientes e manipulação de envios de formulários de contato. Ele inclui operações básicas de CRUD (Criar, Ler, Atualizar, Deletar) para registros de clientes e gerenciamento de mensagens, com um painel administrativo simples. A aplicação utiliza Bootstrap para estilização.

## Tabela de Conteúdos

- [Descrição](#descrição)
- [Funcionalidades](#funcionalidades)
- [Tecnologias](#tecnologias)
- [Instalação](#instalação)

## Funcionalidades

- **Gerenciamento de Clientes:**
  - Criar novos registros de clientes.
  - Listar registros de clientes existentes.
  - Atualizar registros de clientes existentes.
  - Deletar registros de clientes.

- **Gerenciamento do Formulário de Contato:**
  - Enviar mensagens através do formulário de contato.
  - Visualizar a lista de mensagens no painel administrativo.
  - Deletar mensagens do formulário de contato no painel administrativo.

- **Painel Administrativo:**
  - Fornece uma interface para gerenciamento de clientes e mensagens.

## Tecnologias

- **Linguagem:** PHP  
- **Framework:** Bootstrap  
- **Banco de Dados:** MySQL (via extensão `mysqli`)

## Instalação

1.  **Clonar o repositório:**
    ```bash
    git clone https://github.com/imLaeL/Linux-Corp.git
    cd Linux-Corp
    ```

2.  **Configuração do Banco de Dados:**
    - Crie um banco de dados MySQL chamado `linuxcorp`.
    - Atualize o arquivo `config.inc.php` com suas credenciais de banco de dados:

    ```php
    <?php

      $conexao = mysqli_connect("localhost","isaque","isaque");

      $bd = mysqli_select_db($conexao,"linuxcorp");
    ```

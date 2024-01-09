
# Projeto Pastelaria

Este projeto é uma aplicação web desenvolvida com o framework Laravel. Ele permite o gerenciamento de pedidos, clientes e produtos de uma pastelaria.

## Funcionalidades

- Gerenciamento de Clientes
- Gerenciamento de Produtos
- Criação e gerenciamento de Pedidos
- Envio de email para o cliente com detalhes do pedido

## Requisitos

- PHP >= 7.4
- Composer
- MySQL
- Laravel 8.x

## Instalação

Siga os passos abaixo para configurar o ambiente de desenvolvimento:

1. **Clonar o Repositório**
   ```sh
   git clone [URL_DO_REPOSITORIO]
   cd [NOME_DO_PROJETO]
   ```

2. **Instalar Dependências do Composer**
   ```sh
   composer install
   ```

3. **Configurar Arquivo `.env`**
   - Copie o arquivo `.env.example` para um novo arquivo chamado `.env`.
   - Atualize as variáveis de ambiente, especialmente as relacionadas ao banco de dados (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).

4. **Gerar Chave da Aplicação**
   ```sh
   php artisan key:generate
   ```

5. **Executar Migrações**
   ```sh
   php artisan migrate
   ```

6. **(Opcional) Semear Banco de Dados**
   ```sh
   php artisan db:seed
   ```

## Execução

Para iniciar o servidor de desenvolvimento:

```sh
php artisan serve
```

Acesse a aplicação em `http://localhost:8000`.

## Testes - a serem implementados

Execute os testes de exemplo com o seguinte comando:

```sh
php artisan test
```

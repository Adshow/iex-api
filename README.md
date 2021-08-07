
# IEX API

Desafio técnico.

## 1. Instalação

Após clonar o projeto, use o Composer para instalar as dependências.
```bash
composer install
```

## 2. Arquivo de configuração
Para configurar o serviço é so criar uma cópia do arquivo **'env.example'** e renomear para **'.env'** na raíz do projeto, e configurar o as configurações de banco de dados:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=complicadovet
DB_USERNAME=root
DB_PASSWORD=

BASE_URI=https://cloud.iexapis.com
TOKEN=chave publica obtida nesse endereco: 'https://iexcloud.io/console/tokens'
```

## 3. Criando as tabelas no banco
Após configurar o banco local, para criar as tabelas no banco de dados executar o comando abaixo:

```bash
php artisan migrate
```

## 4. Iniciando o serviço
Após criar as tabelas no banco, é so iniciar o serviço executando o comando abaixo na raíz do projeto

```bash
php artisan serve
```

## 5. Pesquisar empresa
Para acessar a tela de pesquisa das empresas é so acessar o seu localhost

```bash
http://127.0.0.1:8000
```
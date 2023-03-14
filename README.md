## Versões
- **PHP: 8.1.10**
- **Laravel: 9.52.4**
- **JWT: 2.0.0**

## Instalação
- ### Composer
  - **Como instalar:**
    - https://getcomposer.org/download/
- ### Aplicação
  - **Instalação das dependências:** `composer install`
  - **Fazer construção de arquivo .env com base no .env.example**
  - **Implmentação da chave JWT:** `php artisan jwt:secret`
  - **implementação da chave da aplicação:** `php artisan  key:generate`
  - **Construção da estrutura do banco de dados:** `php artisan migrate`
  - **Popular base de dados:** `php artisan db:seed`
  - **Executar aplicação** `php artisan serve`

## Ultilização
- ### Swagger
  - **Acessar Documentação do Swagger** `{server_host}/api/documentation`
  - **Utilizar endpoint de login com os seguintes dados:** `{"email": "usuario@teste.com.br","password": "senha123"}`
  - **Utilizar token do retorno no Login para efetuar a autorização, opção se encontra no topo da página.**
  - **Após  isso será possivel ultilizar os demais endpoints.**

<h1 align="center"> Crud using Laravel </h1>

<p align="center">
  <a href="#-tecnologias">Tecnologias</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-projeto">Projeto</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
</p>

<br>

<p align="center">
  <img alt="Blog Preview Card" src="./assets/images/preview.jpg" width="100%">
</p>

## 💻 Projeto

Este projeto é um sistema de e-commerce simples, onde usuários autenticados podem cadastrar, editar e visualizar seus próprios produtos. Cada produto é vinculado ao usuário que o cadastrou, garantindo que apenas o proprietário veja e gerencie seus itens.

## 🚀 Tecnologias

Esse projeto foi desenvolvido com as seguintes tecnologias:

- TailwindCSS
- PHP
- Laravel
- SQLite
- Git e Github

## Pré-requisitos

Antes de executar o projeto, certifique-se de ter instalado em sua máquina:

- PHP (versão 8.0 ou superior)
- Composer
- MySQL

## Instalação

Siga os passos abaixo para executar o projeto em sua máquina local:

1. **Clone o Repositório**

   ```bash
   git clone <URL do repositório>
   cd <nome-do-repositorio>

2. **Instale as Dependências**
    
    composer install
    npm install -D tailwindcss
    npx tailwindcss init

    Baixe também o SQLite

3. **Copie o Arquivo de Configuração**

    cp .env.example .env

4. **Gere a Chave de Aplicação**

    php artisan key:generate

5. **Execute as Migrações**

    php artisan migrate

6. **Inicie o Servidor Local**

    php artisan serve

7. **Observações**
    Você pode utilizar outro Banco de Dados, basta fazer as configurações necessárias no arquivo .env.

 <div class="attribution">
    Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>. 
    Coded by <a href="#">Andrew Raphael</a>.
  </div>
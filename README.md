

# Projeto Allcard Clientes

Este é um projeto que utiliza as tecnologias HTML, CSS, JavaScript, PHP e MySQL para criar um sistema de cadastro de usuários e login. Após o login, o sistema permite listar informações da tabela tbclientes e tbhistorico em uma tabela HTML.

## Pré-requisitos

- Servidor web (como Apache ou Nginx)
- PHP 7.0 ou superior
- MySQL

## Instalação

1. Clone o repositório para o seu servidor web:
   ```
   git clone https://github.com/seu-usuario/allcard-clientes.git
   ```
2. Crie um banco de dados MySQL e importe o arquivo `database.sql` para criar as tabelas necessárias.
3. Configure as informações de conexão com o banco de dados no arquivo `config.php`.
4. Inicie o servidor web e acesse o projeto através da URL correspondente.

## Uso

Ao acessar o sistema, você será redirecionado para a página de login. Se ainda não tiver um cadastro, clique em "Cadastrar" para criar uma conta. Após fazer login, você será redirecionado para a página principal, que lista as informações da tabela `tbclientes` e `tbhistorico`. Para sair do sistema, basta clicar em "Sair".

## Contribuindo

Sinta-se à vontade para contribuir com o projeto fazendo um fork e enviando suas melhorias através de pull requests.

## Licença

Este projeto está licenciado sob a Licença MIT - veja o arquivo [LICENSE](LICENSE) para detalhes.

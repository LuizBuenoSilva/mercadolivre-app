#Teste de integração com a API do Mercado Livre

## Descrição
Breve descrição do projeto e suas funcionalidades principais.

## Instalação

1. **Clone o repositório:**
   ```bash
   git clone https://github.com/seu-usuario/seu-repositorio.git](https://github.com/LuizBuenoSilva/mercadolivre-app.git)
   cd seu-repositorio
   ```

2. **Instale as dependências:**
   ```bash
   npm install
   ```

3. **Configure as variáveis de ambiente:**
   Crie um arquivo `.env` na raiz do projeto e adicione as seguintes variáveis:
   ```plaintext
   CLIENT_ID=seu_client_id
   CLIENT_SECRET=seu_client_secret
   REDIRECT_URI=sua_redirect_uri
   ```

## Configuração das Variáveis de Ambiente

Para integrar com o Mercado Livre, você precisará configurar algumas variáveis de ambiente:

- `CLIENT_ID`: Seu ID de cliente fornecido pelo Mercado Livre.
- `CLIENT_SECRET`: Seu segredo de cliente fornecido pelo Mercado Livre.
- `REDIRECT_URI`: A URI de redirecionamento configurada no Mercado Livre para o seu aplicativo.

## Autenticação via OAuth

Para gerar o token de acesso, siga os passos abaixo:

1. **Obtenha o código de autorização:**
   - Acesse a seguinte URL no seu navegador:
     ```
     https://auth.mercadolivre.com.br/authorization?response_type=code&client_id=SEU_CLIENT_ID&redirect_uri=SUA_REDIRECT_URI
     ```
   - Faça login e autorize o aplicativo. Você será redirecionado para a `REDIRECT_URI` com um parâmetro `code`.

2. **Troque o código de autorização pelo token de acesso:**
   - Faça uma requisição POST para o seguinte endpoint:
     ```
     https://api.mercadolibre.com/oauth/token
     ```
   - Com os seguintes parâmetros:
     - `grant_type`: `authorization_code`
     - `client_id`: Seu `CLIENT_ID`
     - `client_secret`: Seu `CLIENT_SECRET`
     - `code`: O código de autorização obtido no passo anterior
     - `redirect_uri`: Sua `REDIRECT_URI`

3. **Armazene o token de acesso:**
   - O token de acesso será retornado na resposta da requisição. Armazene-o para futuras requisições à API do Mercado Livre.

## Executando o Projeto

Após configurar as variáveis de ambiente e obter o token de acesso, você pode rodar o projeto com o seguinte comando:

    -php artisan serve

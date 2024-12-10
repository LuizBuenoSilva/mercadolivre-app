<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Mercado Livre Integrado') }}</title>

    <!-- Favicon (se necessário) -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Caso queira adicionar mais estilo inline, pode adicionar no próprio head -->
    <style>
body {
    font-family: 'Roboto', sans-serif;
    color: #333;
}

.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
}

.header {
    background-color: #FFCC00; /* Amarelo vibrante */
    padding: 20px;
    text-align: center;
}

h1 {
    color: #fff;
    font-size: 2em;
}

/* Estilo do formulário */
form {
    display: flex;
    flex-direction: column; /* Organiza os campos um abaixo do outro */
    gap: 15px; /* Espaçamento entre os campos */
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    margin: 20px auto;
}

h2 {
    text-align: center;
    color: #FF8C00; /* Cor amarela vibrante */
    margin-bottom: 20px;
}

input[type="text"], input[type="number"], textarea, select {
    width: 100%;
    padding: 12px;
    margin: 8px 0;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
    box-sizing: border-box;
}

/* Estilo do botão */
button {
    background-color: #FF8C00; /* Cor amarela vibrante */
    color: white;
    padding: 14px 20px;
    border: none;
    border-radius: 4px;
    width: 100%;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #e77f00; /* Cor de hover mais escura */
}

label {
    font-weight: bold;
    margin-top: 10px;
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse; /* Para evitar espaços extras entre as células */
    margin-top: 20px;
}

table th, table td {
    padding: 12px; /* Adiciona espaçamento interno nas células */
    text-align: left; /* Alinha o texto à esquerda */
    border: 1px solid #ddd; /* Define uma borda suave entre as células */
}

/* Para os cabeçalhos da tabela */
table th {
    background-color: #FFCC00;
    color: white;
}

/* Ajustando a largura das colunas */
table td:nth-child(1), table th:nth-child(1) { width: 20%; }
table td:nth-child(2), table th:nth-child(2) { width: 20%; }
table td:nth-child(3), table th:nth-child(3) { width: 15%; }
table td:nth-child(4), table th:nth-child(4) { width: 15%; }
table td:nth-child(5), table th:nth-child(5) { width: 20%; }
table td:nth-child(6), table th:nth-child(6) { width: 10%; }

/* Estilo comum para os botões */
.btn-action {
    background-color: #FF8C00; /* Cor amarela vibrante */
    color: white;
    padding: 14px 20px;
    border: none;
    border-radius: 4px;
    width: 100%; /* Faz os botões ocuparem o mesmo espaço */
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
    display: inline-block; /* Garante que os botões fiquem alinhados */
    text-align: center;
}

/* Alteração na cor ao passar o mouse */
.btn-action:hover {
    background-color: #e77f00; /* Cor de hover mais escura */
}

/* Ajuste para botões dentro de tabelas */
table td .btn-action {
    display: block; /* Faz os botões ficarem em linha vertical */
    width: auto; /* O botão ocupa o espaço necessário */
    margin: 5px auto; /* Espaçamento entre os botões e centraliza */
    padding: 8px 16px; /* Ajuste de tamanho */
}

/* Remover o fundo branco do botão de deletar */
table td .btn-action.delete-btn {
    background-color: #FF8C00; /* Cor amarela vibrante igual ao botão de editar */
    color: white; /* Cor do texto */
    border: none; /* Remover borda */
    padding: 10px 20px;
    border-radius: 4px;
}

table td .btn-action.delete-btn:hover {
    background-color: #e77f00; /* Cor de hover mais escura para o botão de deletar */
}

/* Garantir que o botão de deletar não tenha fundo branco */
form button[type="submit"] {
    background-color: transparent; /* Fundo transparente */
    color: #FF8C00; /* Cor do texto igual ao botão de editar */
    border: none; /* Remover borda */
    cursor: pointer;
    padding: 8px 16px; /* Ajuste do tamanho */
}

form button[type="submit"]:hover {
    background-color: #e77f00; /* Cor de hover mais escura */
}


    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        <h1>Mercado Livre - Gestão de Produtos</h1>
    </div>

    <!-- Conteúdo Dinâmico -->
    <div class="container">
        @yield('content') <!-- Este é o lugar onde o conteúdo do formulário será renderizado -->
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Outras bibliotecas e scripts -->
    @stack('scripts')
</body>
</html>

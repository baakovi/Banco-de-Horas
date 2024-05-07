# Banco de Horas

<div>

<img src="./assets/login_page.png" alt="Página inicial de login do sistema" />

<br>

## Estrutura do banco de dados
<ul>
    <li><b>Superior:</b> onde ele visualiza e cadastra novos funcionários, tendo acesso completo ao sistema.</li>
    <li><b>Funcionários:</b> "controlados" e monitorados pelo superior, onde são registrados pela primeira vez no sistema e computados seus banco de horas.</li>
    <li><b>Banco de horas:</b> tabela onde é calculado e visualizado a quantidade de horas que cada funcionário fez ao dia.</li>
</ul>

<br>

<h3>Tecnologias utilizadas:</h3>
<img src="" alt="HTML" />
<img src="" alt="CSS" />
<img src="" alt="PHP" />
<img src="" alt="MySQL" />

<br>

<h2>Anotações e Estudos</h2>

<ul>
    <li><code>$_SERVER</code>: é uma <b>Variável global/superglobal</b> - variável disponível em todos os escopos do script, podendo ser chamada sempre que necessário sem declará-la (<i>global $variable</i>) Geralmente escritas em letras maiúsculas. -. É uma <i>array</i> contendo varios índices, que podem resultar em resultados diferentes para cada ocasião.</li>
    <br>
    <li><b>MySQL</b> é um sistema de <b>gerenciamento de banco de dados relacional</b> que permite armazenar e manipular dados em tabelas. As <i>strings</i> são um tipo de dado comum em banco de dados MySQL e podem ser manipuladas com várias <u>funções de PHP</u>.</li>
    <br>
    <li><code>mysqli_real_escape_string</code>: uma das formas mais comuns do PHP para <b:>manipulação de string em banco de dados MySQL</b>. Usada para escapar caracteres especiais em uma string antes de ser inserida em uma consulta SQL, evitando a injeção de SQL. Importante para garantir a segurança do banco de dados e evitar vulnerabilidades de segurança.</li>
    <br>
    <li><code>query</code>: pedido de uma informação ou de um dado. Esse pedido também pode ser entendido como uma consulta, solicitação ou uma requisição. Executa uma consulta no banco de dados.</li>
    <br>
    <li><code>num_rows</code>: retorna o número de linhas no resultado, por exemplo, o número de linhas contidas em uma determinada tabela.</li>
    <br>
    <li><code>session_regenerate_id()</code>: atualiza/substitui o ID da sessão atual por um novo, mantendo as informações desta sessão. Não funciona corretamente com redes instáveis (móvel, WiFi, etc). O ID da sessão deve ser alterado em qualquer transição no estado de autenticação e apenas em transições de autenticação.</li>
    <br>
    <li><code>htmlspecialchars()</code>: converte caracteres especiais em entidades HTML, devolvendo uma string baseado nas conversões realizadas. Certos caracteres tem um significado especial em HTML e devem ser representados por entidades HTML, preservando seu significado.</li>
    <br>
    <li><code>connect_error</code>: retorna uma descrição/mensagem do último erro da tentativa de conexão. Não possui parâmetros. O valor retornado caso <b>true</b> é uma string que descreve o erro; <b>null</b> é retornado se nenhum erro tiver ocorrido.</li>
    <br>
    <li></li>
    <br>
    <li></li>
</ul>

<br>

<h3>Bibliografia</h3>

<ol>
    <li><a href="https://www.php.net/manual/pt_BR/reserved.variables.server.php">Variável $_SERVER</a> by <b>php.net</b></li>
    <br>
    <li><a href="https://blog.tiagomatos.com/dica-sobre-a-variavel-global-server-do-php/">Dica sobre a variável global $_SERVER do PHP</a> by <b>Tiago Matos</b></li>
    <br>
    <li><a href="https://pt.linkedin.com/pulse/manipula%C3%A7%C3%A3o-de-strings-php-em-mysql-e-matos-?utm_source=share&utm_medium=guest_desktop&utm_campaign=copy">Mainupulação de strings PHP em MySQL</a> by <b>E Matos</b></li>
    <br>
    <li><a href="https://www.hostinger.com.br/tutoriais/o-que-e-query">Query em Banco de Dados</a> by <b>Hostinger</b></li>
    <br>
    <li><a href="https://www.php.net/manual/pt_BR/mysqli-result.num-rows.php">mysqli_num_rows</a> by <b>php.net</b></li>
    <br>
    <li><a href="https://www.php.net/manual/pt_BR/function.session-regenerate-id.php">session_regenerate_id</a> by <b>php.net</b></li>
    <br>
    <li><a href="https://www.php.net/manual/en/function.htmlspecialchars.php">htmlspecialchars</a> by <b>php.net</b></li>
    <br>
    <li><a href="https://www.php.net/manual/pt_BR/mysqli.connect-error.php">mysqli_connect_error</a> by <b>php.net</b></li>
    <br>
    <li><a href=""></a></li>
    <br>
    <li><a href=""></a></li>
    <br>
    <li><a href=""></a></li>
    <br>
    <li><a href=""></a></li>
    <br>
    <li><a href=""></a></li>
    <br>
    <li><a href=""></a></li>
    <br>
    <li><a href=""></a></li>
    <br>
</ol>

</div>
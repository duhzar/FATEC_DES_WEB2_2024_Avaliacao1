Avaliação 01 .

Crie um cadastro em PHP de alunos que poderão fazer uso do estacionamento da Fatec Araras. Os campos que devem estar cadastrados são:

- Nome Completo
- Registro Acadêmico (R.A.)
- Placa do Carro ou Moto.

---

---

1. **DashBoard - Área de login/logout (40% da nota)**
- Com uso de sessões (sessions), criar uma área de login. Permitir encessar sessão (logout). Para realizar login/logout, necessário ter um único login e senha.
- Login: **portaria**
- Senha: **FatecAraras**


2. **Criar registro (30% da nota)**
- Cadastrar os campos supracitados em arquivo texto. **Será possível realizar o cadastro somente em uma sessão ativa**. Ao tentar cadastrar em uma sessão desativada, redirecionar para a área de login.
- No arquivo texto, o padrão de gravação deve ser: Nome, seguido de uma barra, RA,seguido de uma barra e a placa do carro.
- Os registros de veículos deverão ser salvos no arquivo texto **carros.txt**.
- Os registros de veículos deverão ser salvos no arquivo texto **motos.txt**.

Exemplo:

José da Silva|202311111111|ABC1234

Maria de Souza|202322222222|ABC1234

3. Ler todos os registros cadastrados (30% da nota)
- **Em uma área de sessão**, permitir ler todos os registros cadastrados nos arquivos texto. Caso não esteja em uma sessão ativa, redirecionar para a área de login.
- Seu sistema terá um botão "Visualizar carros". Ao clicar, deve carregar uma página php, que irá acessar todos os registros do arquivo texto **carros.txt** e apresentar ao usuário logado.
- Seu sistema terá um botão "Visualizar motos". Ao clicar, deve carregar uma página php, que irá acessar todos os registros do arquivo texto **motos.txt** e apresentar ao usuário logado.
- Tecnologias: PHP Estruturado.

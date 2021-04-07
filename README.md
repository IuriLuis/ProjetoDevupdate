# ProjetoDevupdate

Projeto teste desenvolvido visando uma vaga na empresa UalTec Sistemas 

Resumo do projeto 

Um sistema com níveis de acesso (administrador/usuário), em sua tela inicial é possível fazer o login no sistema ou criar uma conta, caso o usuário escolha criar uma conta ele será redirecionado para a página de cadastro no que poderá efetuar o seu, o cadastro de usuários feito antes de estar logado no sistema tem como permissão padrão a 1 – usuário, ou seja, qualquer pessoa que criar uma conta através da tela de login automaticamente terá sua conta com o nível mínimo de acesso. O login feito com o nível 1 – usuário é redirecionado para uma tela de boas-vindas onde sua única opção é deslogar do sistema. O login feito com o nível 0 – administrador é redirecionado para um painel de controle onde o mesmo tem a opção de visualizar os usuários cadastrados, atualizar cadastros, deletar cadastros, além de poder criar novos inclusive dando a permissão 0 – administrador para esses novos usuários.

Recursos Utilizados

O sistema foi desenvolvido seguindo o padrão mvc, foi utilizado 5 componentes instalados através do composer, além de seguir os padrões de projetos das psrs.

Erros identificados 

Após logado o nível 1 - usuário não consegue acessar o dashboard do nível 0 - administrador pela url, mas o oposto acontece (o 0 – admin consegue acessar o dash do 1 - user), tentei de tudo para bloquear esse acesso e não consegui.

Depois de iniciado a seção não tem a necessidade da pessoa logada acessar a tela de login novamente enquanto a seção estiver ativa, pelo fato de ser dois destinos diferentes depois de acessar o sistema eu não consegui achar uma solução correta para barrar o usuário caso ele tente acessar a tela de login com a seção iniciada, independente de qual seu nível de acesso, sendo assim pesquisando na internet encontrei um script js q redireciona o usuário para a página anterior, então fiz um if q se a seção existir e tentarem acessar a tela de login esse script manda o usuário de volta para sua pagina anterior, o erro em questão aqui é ter misturado os códigos, o js com o php.

Eu não consegui fazer criar a listagem de usuários para o administrador visualizar quando logado, eu tenho pouco domínio sobre o componente de abstração de banco que usei, por tanto não soube como listar os dados do banco em uma tabela, na visualização é possível ver somente os dados do próprio usuário logado.

Tenho mais 2 problemas com relação ao nível de acesso, problemas esses que passei cerca de 14:30 tentando encontrar e não consegui. O sistema não atualiza o nível de acesso de um usuário comum para administrador, só ao contrario e o sistema não criar cadastros de usuários administradores, somente comum, mesmo estando logado como admin.

Verifiquei por muito tempo o código para ver se achava o erro e não consegui, sei que um dos principais propósitos do teste era justamente o admin poder criar novos cadastros admins, mas não consegue implementar, na verdade implementei da forma incorreta.

#Sistema de Cadastros – CodeIgniter
O sistema de cadastro é uma pequena aplicação muito básica baseada em PHP e implementada com CodeIgniter, (Framework PHP), basicamente a aplicação tem a finalidade de tratar dados de usuários, possibilitando cadastrar, atualizar e deletar as informações salvas em seu banco de dados, na implementação foram utilizadas algumas tecnologias tanto para os layouts (Front-End) como também para as camadas mais baixas do sistema (Back-End).
Na parte das Views, que corresponde ao Front-End, foram aplicados os estilos da biblioteca de CSS Bootstrap e as bibliotecas de JavaScript, Jquery.
Na camada mais baixa, que corresponde ao Back-End, o sistema foi todo implementado com a framework CodeIgniter baseado em PHP e MYSQL para guardar e manipular toda as informações salvas.
Abaixo é possível ver alguns detalhes dos elementos e algumas maneiras de como navegar entra as páginas. 
Para começar, ao acessar o sistema ele apresentará uma tela de entrada, como uma espécie de tela de apresentação, na tela é apresentada uma ilustração e no topo da página, aparece uma navbar ou menu, como quiser...  neste “menu” é apresentado um nome fictício no canto esquerdo e um botão informando a palavra “entrar”, no canto direito, ao clicar neste botão, o usuário será direcionado para um dashboard contendo uma lista de usuários, como ação inicial, esta lista será apresentada em uma tabela de cadastrados, no lado esquerdo da tela o usuário  poderá ver um menu lateral contendo alguns botões brancos, quando clicado o botão fica da cor amarela,  indicando a sessão que o usuário se encontra, cada sessão permite que o usuário execute alguma ação dentro do sistema, lembrando que esse menu lateral é o navegador do sistema que permite navegar entre todas as páginas do sistema, então vamos a algumas descrições do botões,  são elas: 

-- O primeiro botão leva a página usuário, para visualização de lista de pessoas cadastradas (possível estado atual).

-- O segundo botão leva o usuário para uma tela de Cadastro, para cadastrar um novo usuário no sistema.
  
-- O terceiro botão possibilita o usuário fazer uma busca específica na tabela de usuários cadastrados procurando apenas o registro digitado no campo “Busca”, o sistema também possibilita trazer os dados semelhantes a esta mesma busca, caso o usuários não digite a informação completa.

-- O quarto botão é uma espécie de logout, leva o usuário para a tela de início do sistema   

Também é possível visualizar no lado direito em cada linha da tabela de cadastros que existe dois botões, um de edição e o outro de deletar o cadastro, 
Caso o usuário queira editar um cadastro basta clicar no ícone do Lápis e será levado a uma página de formulário preenchido com as informações atuais do usuário/cadastro selecionado, permitindo ser alterado e submetido como um novo conteúdo sobre aquele cadastro, assim gerando um update do item no banco de dados.
já para deletar, basta o usuário clicar no botão em formato de lixeira e o cadastro será excluído automaticamente, neste processo o usuário não será redirecionado para nenhuma página, no caso continuará na mesma página de lista de usuários e será possível notar que a lista de usuários da tabela é diminuída a cada delete.
Como citada no início do texto, esta aplicação é de nível muito básico, apenas para fins de testes, o maior objetivo do projeto é demostrar algumas técnicas aplicadas com a framework CodeIgniter, no código fonte existem farias explicações sobre cada bloco de código e as finalidades da aplicação.


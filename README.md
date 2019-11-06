# Desafio Front-end

Neste desafio você deve criar e implementar um front-end web, utilizando Bootstrap e JavaScript com jQuery ou Vue.js, para facilitar o agendamento da nossa sala de reunião.
Seu front-end deve conter duas telas:

1) Tela principal
2) Tela para agendar reunião

## Tela principal
Nessa tela, um grid com as reuniões agendadas para o dia dever ser exibido, permitindo a visualização ou o cancelamento de uma reunião. Além disso, essa tela deve conter um link para a tela de agendar reunião.

## Tela para agendar reunião
Nessa tela, um formulário com os campos abaixo deve ser exibido para o usuário permitindo o agendamento de uma reunião.

Selecionar uma sala de reunião (Sala 1, Sala 2, Sala 3) (name="room_id")

E-mail do solicitante (name="email")

Data e hora do início da reunião (name="start_at")

Data e hora do término da reunião (name="finished_at")

Descrição do agendamento (name="description")

Situação da reunião (type="hidden" name="situation" value="ativo")

## Requisitos
Não se preocupe com autenticação de usuário, essa funcionalidade não será necessária neste projeto.

Todos os campos do formulário são obrigatórios, uma mensagem de erro deve ser retornada ao usuário caso algum esteja em branco.

Trate e-mails e datas inválidas exibindo uma mensagem de erro para o usuário.

Trate descrições muito curtas exibindo uma mensagem de erro para o usuário.

O front-end precisa ser responsivo e apresentar uma boa visualização e navegação no mobile.

O front-end deve interagir com a nossa Web API.
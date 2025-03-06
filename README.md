# Formulário de Contato com Envio de E-mail

Este projeto consiste em um formulário de contato desenvolvido com PHP e Bootstrap, que permite a coleta de informações do usuário e o envio dessas informações por e-mail.

## Tecnologias Utilizadas
- PHP
- HTML
- CSS
- Bootstrap 5

## Funcionalidades
- Formulário responsivo para coleta de nome, e-mail, telefone e mensagem.
- Envio de dados via método POST.
- Processamento e envio de e-mail com as informações coletadas.
- Utilização de PHPMailer para um envio de e-mails mais seguro.
- Exibição de mensagens de erro e sucesso mais detalhadas.
- Validação de formulário no lado do cliente e servidor.

## Como Usar

### 1. Configuração do Servidor
Para executar o projeto, é necessário um servidor que suporte PHP. Caso esteja testando localmente, recomenda-se o uso do XAMPP, WAMP ou outro servidor local.

1. Clone ou baixe este repositório.
2. Coloque os arquivos na pasta raiz do servidor (‘htdocs’ para XAMPP, por exemplo).
3. Inicie o servidor Apache.

### 2. Configuração do E-mail de Destino
No arquivo `envia.php`, altere as configurações do PHPMailer para definir o e-mail de destino:
```php
$mail->Host = 'smtp.exemplo.com'; // Servidor SMTP
$mail->SMTPAuth = true;
$mail->Username = 'seuemail@example.com'; // Seu e-mail
$mail->Password = 'suasenha'; // Sua senha
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->setFrom('seuemail@example.com', 'Nome');
$mail->addAddress('destino@example.com', 'Destinatário');
```

### 3. Acesso ao Formulário
Abra o navegador e acesse:
```
http://localhost/seu-projeto/
```

## Estrutura do Projeto
```
/seu-projeto
│── index.html        
│── envia.php         
│── style.css            
```


## Licença
Este projeto está sob a licença MIT. Você pode usá-lo livremente, desde que mantenha os devidos créditos.

## Autor
Desenvolvido por Luana Karoline.


# MNX
Este documento é uma breve explicação do código feito :

Funcao carregarNoticias : 

Está função tem o objetivo de carregar as informações e exibir as notícias do feed RSS 

   ![image](https://github.com/user-attachments/assets/6492d90c-364a-4256-b810-9db31b94442c)

Verifica se o feed foi carregado corretamente. Se não foi, exibe uma mensagem de erro.

![image](https://github.com/user-attachments/assets/29ecdf29-68d8-4f7f-9819-45200006d703)

Exibição do Conteúdo do Feed :

Se o feed foi carregado com sucesso, essa parte exibe o título e a descrição do canal RSS

![image](https://github.com/user-attachments/assets/2c1fa6ed-a13f-42e8-a32b-908b14cc638c)

Loop para Listar as Notícias :

![image](https://github.com/user-attachments/assets/cce57baa-ac50-4fa4-9a28-c3b807ef6603)

Exibe o título da notícia como um link, usando o URL {$item->link} para redirecionar o usuário ao site
da notícia original. O link é configurado com target="_blank" para abrir em uma nova aba.

Chama a função para exibir as notícias :

![image](https://github.com/user-attachments/assets/fa4fef90-33e3-4607-935a-730341b39cc6)


O restantate do código possui somente estilização feito com CSS

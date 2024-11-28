# 📚 Biblioteca Online - BookOn

O site **BookOn** foi desenvolvido com o objetivo de oferecer clareza e objetividade, apresentando um design simples e direto, acessível para todas as idades.

---

## 🌐 Front-End

O front-end foi desenvolvido utilizando:

- **HTML5**
- **CSS3**

As cores da marca foram aplicadas em um design amigável, com formas arredondadas para proporcionar uma experiência visual agradável e moderna.

---

## 💻 Back-End

A parte de back-end foi desenvolvida com:

- **PHP (versão 8.1)**
- **MySQL**

Funções principais:
- Processamento de dados e regras de negócio.
- Comunicação com o banco de dados.
- Gerenciamento de segurança e autenticação.

O back-end foi implementado para criar um sistema robusto e escalável, garantindo funcionalidade e desempenho.

---

## 📖 Integração com a API do Google Books

A **BookOn** utiliza a API do Google Books para buscar informações detalhadas sobre livros, como título, autor, descrição, capa, entre outros. 

### Principais funcionalidades:
- **Acesso a um vasto catálogo de livros via JSON.**
- **Busca eficiente por identificadores únicos (`volumeID`).**
- **Recuperação de metadados e pré-visualizações quando disponíveis.**

### Exemplos de uso:
- **Pesquisa abrangente:**
  - `https://www.googleapis.com/books/v1/volumes?q=diario-de-um-banana`  
  Retorna um JSON com até 10 itens (limite estabelecido pela API).
  
- **Pesquisa precisa:**
  - `https://www.googleapis.com/books/v1/volumes/fR_0AwAAQBAJ`  
  Retorna um JSON com os detalhes do livro correspondente ao ID `fR_0AwAAQBAJ`.

---

## ⚡ Otimização com JSON

O uso de **JSON** otimizou o carregamento dos livros em destaque, reduzindo o tempo de carregamento de **17,54 segundos** para **instantâneo**, melhorando significativamente a experiência do usuário e reduzindo o consumo de recursos no servidor.

---

## 🗄️ Banco de Dados

O **MySQL** foi escolhido para gerenciar o banco de dados, devido à sua confiabilidade e desempenho. 

### Funções no projeto:
- Gerenciamento de favoritos: ao clicar em "Adicionar aos Favoritos", um registro com o ID do livro é criado.
- Estrutura planejada com:
  - **Chaves primárias e estrangeiras.**
  - **Índices para otimizar consultas.**

---

## 🔧 Programação em PHP

O **PHP 8.1** foi utilizado por suas melhorias e integração eficiente com o MySQL e JSON. 

### Funcionalidades implementadas:
- Sistema seguro de autenticação de usuários.
- Gerenciamento de requisições à API do Google Books.
- Armazenamento de dados dos livros favoritos.
- Sistema de cache para desempenho otimizado.

---

## 🚀 Sobre o Projeto

A **BookOn** é um exemplo de como integrar tecnologias modernas e boas práticas de desenvolvimento para criar uma aplicação eficiente, funcional e acessível. 

Esperamos que você aproveite esta biblioteca tanto quanto nós gostamos de desenvolvê-la! 😊

---

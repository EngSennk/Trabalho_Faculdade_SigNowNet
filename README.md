# Trabalho_Faculdade_SigNowNet 

 DIEGO SENA  

PORTIFÓLIO–RELATÓRIO AULA PRÁTICA: 
Programação Web 


Relatório de Aula Prática: Programação Web 

Prof. Renan Cleverson Laureano Flor da Rosa  

          Atividade proposta:  
Criar uma página frontend com um formulário contendo um campo para inserção da data de nascimento e um botão para realizar consulta de signo 
Desenvolver uma página frontend que contenha o resultado da consulta ao signo zodiacal; 
Desenvolver a lógica necessária para realizar a consulta a um arquivo XML que contenha as informações de cada signo; 
Desenvolver a estilização das páginas: formulário e resultado. 
Testar a aplicação. 


 BAHIA 2026  

Relatório de Aula Prática: Programação Web 

Disciplina: Programação Web 

Atividade: Unidade 4 - Seção 4.3 

Projeto: SigNowNet - Sistema de Consulta Zodiacal Dinâmico 
 
Este relatório detalha o desenvolvimento de uma aplicação web dinâmica e interativa, denominada SigNowNet. O projeto foi concebido para identificar o signo zodiacal do usuário a partir da sua data de nascimento. A solução integra tecnologias front-end modernas com processamento back-end em PHP, utilizando um arquivo XML como base de dados estruturada para as informações astrológicas, dispensando a necessidade de um banco de dados relacional complexo para esta finalidade. 

Objetivos Alcançados 

Interface de Entrada: Desenvolvimento de um formulário responsivo e intuitivo para a inserção da data de nascimento, utilizando validações de HTML5. 

Exibição de Resultados: Criação de uma página de destino dinâmica que apresenta o signo, descrição personalizada e características essenciais. 

Persistência e Leitura de Dados (XML): Estruturação e consumo de um arquivo signos.xml contendo os períodos (dia/mês) e metadados de cada um dos 12 signos. 

Estilização e UX Avançada: Implementação de um design "Dark/Astral" utilizando Bootstrap 5 e CSS3, com foco em usabilidade e estética moderna (Glassmorphism). 

Lógica de Datas: Implementação de algoritmos de comparação cronológica para garantir a precisão dos resultados, incluindo o tratamento de signos que cruzam o ano civil. 

Metodologia e Infraestrutura 

Para a execução e teste do projeto, foram utilizadas as seguintes ferramentas: 

Editor de Código: Visual Studio Code (VS Code). 

Servidor Local: XAMPP (Apache para processamento PHP). 

Linguagens: PHP 8.x, HTML5, CSS3. 

Framework Visual: Bootstrap 5.2.0. 

Formato de Dados: XML (Extensible Markup Language). 


Desenvolvimento do Projeto / Estrutura de Arquivos e Modularização 

O projeto foi organizado de forma modular para facilitar a manutenção e o reaproveitamento de código: 

index.php: Página principal contendo o formulário de consulta. 

show_zodiac_sign.php: Script responsável pela lógica de negócio e exibição do resultado. 

signos.xml: Arquivo de dados com a estrutura: <signo>, <dataInicio>, <dataFim>, <signoNome>, etc. 

/layouts/header.php: Arquivo de cabeçalho global contendo as meta-tags e links de estilo. 

/assets/css/style.css: Folha de estilo personalizada para o tema escuro. 

 
Lógica de Programação e Integração XML 

A integração foi realizada através da função simplexml_load_file do PHP. O maior desafio técnico foi a comparação de intervalos de datas sem a presença do ano no banco de dados XML. 

Solução: As datas foram tratadas como objetos da classe DateTime, permitindo a comparação precisa no formato m-d. 

Tratamento de Exceção (Capricórnio): Foi implementada uma condicional específica para períodos que iniciam em dezembro e terminam em janeiro, assegurando que a lógica de "range" não falhe na virada do ciclo anual. 


Design e Interface (UX/UI) 

A aplicação adotou uma estética mística e tecnológica: 

Glassmorphism: Cards com fundo semitransparente (rgba) e efeito de desfoque (backdrop-filter). 

Paleta de Cores: Gradientes radiais entre tons de azul profundo e roxo (#7b2cbf). 

Feedback Visual: Uso de animações @keyframes (Zoom In/Fade In) para a transição dos resultados, aumentando o engajamento do usuário. 

 
 Resultados e Testes 

Foram realizados testes exaustivos para validar a aplicação: 

Teste de Integridade: Envio do formulário com datas correspondentes a cada signo (ex: 21/03 para Áries, 05/01 para Capricórnio). 

Teste de Responsividade: A interface manteve a integridade visual em dispositivos móveis e desktops via Grid do Bootstrap. 

Teste de Validação: O campo de data impediu o envio de formulários vazios através do atributo required. 

Evidências de Funcionamento 

 
Conclusão 

A atividade prática cumpriu integralmente todos os requisitos do roteiro. A experiência demonstrou a eficiência do PHP na manipulação de dados estruturados em XML 
e a importância de um front-end bem estruturado com Bootstrap para a experiência do usuário. O sistema SigNowNet apresenta-se como uma aplicação robusta, funcional e
com alto valor estético, consolidando os conhecimentos de integração front-end e back-end. 

 

 

 

 

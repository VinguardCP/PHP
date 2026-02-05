# Desafio 11 – Cálculo de Reajuste Percentual em PHP

## Descrição

No décimo primeiro desafio do Curso de PHP Moderno, ministrado por Gustavo Guanabara, o objetivo é desenvolver uma aplicação capaz de calcular o reajuste percentual de um valor monetário informado pelo usuário.

O desafio inicia com a compreensão conceitual de porcentagem, utilizando exemplos visuais e situações do cotidiano, como descontos, aumentos e divisões proporcionais. A partir dessa base teórica, o exercício avança para a implementação prática envolvendo PHP, HTML, CSS e JavaScript, promovendo uma aplicação dinâmica e interativa.

---

## Objetivo

Criar uma aplicação em PHP que permita ao usuário:

Informar o valor original de um produto  
Selecionar o percentual de reajuste por meio de um controle deslizante  

E que apresente:

O valor do aumento aplicado  
O novo valor final do produto após o reajuste  

---

## Tecnologias Utilizadas

PHP  
HTML  
CSS  
JavaScript  
Formulários HTML  
Servidor local  

---

## Estrutura dos Arquivos

desafio-11/  
│  
├ desafio11.php  
├ style.css  
└ README.md  

---

## Funcionamento da Aplicação

O funcionamento do sistema ocorre da seguinte forma:

O usuário informa o valor do produto no formulário  
O percentual de reajuste é escolhido por meio de um input do tipo range  
O JavaScript atualiza dinamicamente o valor exibido do percentual selecionado  
Os dados são enviados ao servidor utilizando o método GET  
O PHP captura os valores com a superglobal $_REQUEST, definindo valores padrão  
O cálculo do aumento é feito com base na fórmula de porcentagem  
O novo preço é obtido somando o valor original ao valor do reajuste  
Os valores monetários são formatados corretamente utilizando number_format  
O resultado final é exibido de forma clara e objetiva ao usuário  

---

## Conceitos Praticados

Cálculo de porcentagem  
Manipulação de formulários HTML  
Uso de input do tipo range  
Interação entre JavaScript e HTML  
Captura de dados com $_REQUEST  
Operador de coalescência nula  
Cálculos matemáticos em PHP  
Formatação de valores monetários com number_format  
Integração entre PHP, HTML e JavaScript  

---

## Observações Importantes

O formulário aceita valores mínimos e incrementos controlados para o preço  
O percentual de reajuste varia de 0 a 100  
O JavaScript é utilizado apenas para melhorar a experiência do usuário  
A lógica principal de cálculo é realizada no servidor com PHP  

---

## Aprendizados Reforçados

Compreensão prática do conceito de porcentagem  
Uso combinado de linguagens no desenvolvimento web  
Importância da formatação correta de valores financeiros  
Criação de interfaces interativas e responsivas  
Separação entre lógica de processamento e interface  

---

## Considerações Finais

Este desafio consolida um dos conceitos matemáticos mais utilizados em sistemas reais, como reajustes, descontos e comissões. Ele reforça a importância de compreender a lógica por trás dos cálculos e demonstra como diferentes tecnologias podem trabalhar juntas para criar aplicações funcionais, organizadas e amigáveis ao usuário.

---

Autor  
Vinicius Carmello Peliçari  
Estudante de Análise e Desenvolvimento de Sistemas – FATEC Americana

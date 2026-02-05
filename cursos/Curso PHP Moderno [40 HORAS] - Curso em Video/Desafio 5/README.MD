# Desafio 05 – Analisador de Número Real

Este desafio tem como objetivo a criação de um analisador de números reais utilizando formulários HTML e processamento no PHP. A aplicação recebe um número com casas decimais informado pelo usuário e realiza a separação entre a parte inteira e a parte fracionária, exibindo os resultados de forma clara e formatada.

O desafio faz parte do Curso de PHP Moderno, Módulo 01, ministrado por Gustavo Guanabara na plataforma Curso em Vídeo.

---

## Objetivo do Desafio

Capturar um número real informado pelo usuário  
Permitir a entrada de valores com até três casas decimais  
Separar o número em parte inteira e parte fracionária  
Exibir os valores formatados corretamente para o usuário  

---

## Tecnologias Utilizadas

PHP  
HTML  
CSS  
Servidor local com XAMPP  

---

## Estrutura dos Arquivos

desafio-05/  
│  
├ desafio5.html  
├ numero.php  
├ style.css  
└ README.md  

---

## Descrição do Funcionamento

O usuário informa um número real por meio de um formulário HTML configurado para aceitar valores decimais utilizando o atributo step. O valor é enviado via método POST para um script PHP responsável pelo processamento.

No PHP, o número recebido é formatado para exibição com três casas decimais. Em seguida, é feita a separação da parte inteira por meio de conversão de tipo e o cálculo da parte fracionária utilizando uma subtração lógica entre o valor original e a parte inteira.

Os resultados são exibidos de forma organizada, destacando o número analisado, sua parte inteira e sua parte fracionária.

---

## Conceitos Praticados

Uso de formulários HTML para captura de dados  
Configuração de input numérico com casas decimais  
Envio de dados via método POST  
Manipulação de dados recebidos no PHP  
Formatação numérica com number_format  
Conversão de tipos utilizando cast  
Separação de parte inteira e fracionária de números reais  
Organização de arquivos em desafios práticos  

---

## Aprendizados Importantes

O atributo step permite controlar a precisão de valores decimais em formulários  
A conversão de tipo é essencial para separar corretamente partes de um número  
A função number_format melhora a apresentação de dados numéricos  
O tratamento correto de entradas do usuário evita erros lógicos no código  

---

## Observações

Este desafio reforça o trabalho com números reais no PHP, consolidando conceitos fundamentais de entrada de dados, processamento no back-end e apresentação adequada de informações ao usuário.

---

Autor  
Vinicius Carmello Peliçari  
Estudante de Análise e Desenvolvimento de Sistemas – FATEC Americana


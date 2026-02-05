# Desafio 09 – Cálculo de Média Simples e Média Ponderada em PHP

## Descrição

Este desafio faz parte do Curso de PHP Moderno, ministrado por Gustavo Guanabara, e tem como objetivo implementar o cálculo de médias aritméticas, abordando a diferença entre média simples e média ponderada.

O exercício enfatiza a importância de compreender o conceito matemático por trás das médias, especialmente a média ponderada, muito utilizada em contextos reais como avaliações escolares, onde cada valor possui um peso diferente.

---

## Objetivo

Desenvolver uma aplicação em PHP que permita ao usuário informar:

Dois valores numéricos  
Os respectivos pesos de cada valor  

E exibir como resultado:

A média aritmética simples  
A média aritmética ponderada  

Com os valores devidamente formatados.

---

## Tecnologias Utilizadas

PHP  
HTML  
CSS  
Formulários HTML com método GET  
Servidor local ou ambiente Online PHP  

---

## Estrutura dos Arquivos

desafio-09/  
│  
├ desafio9.php  
├ style.css  
└ README.md  

---

## Funcionamento da Aplicação

O fluxo da aplicação ocorre da seguinte forma:

O usuário informa dois valores e seus respectivos pesos  
Os dados são enviados por meio de um formulário HTML utilizando o método GET  
O formulário é retroalimentado, mantendo os valores preenchidos após o envio  
O PHP captura os dados utilizando a superglobal $_GET com operador de coalescência  
A média simples é calculada somando os valores e dividindo pela quantidade  
A média ponderada é calculada considerando o peso de cada valor  
Os resultados são formatados utilizando number_format  
As médias calculadas são exibidas de forma clara ao usuário  

---

## Conceitos Praticados

Média aritmética simples  
Média aritmética ponderada  
Uso correto de parênteses para controle da ordem das operações  
Captura de dados com $_GET  
Operador de coalescência nula  
Formulários retroalimentados  
Formatação de valores numéricos com number_format  
Integração entre PHP e HTML  

---

## Aprendizados Importantes

A média simples considera todos os valores com o mesmo peso  
A média ponderada permite atribuir maior importância a determinados valores  
A organização das operações matemáticas é essencial para resultados corretos  
A formatação adequada melhora a legibilidade dos resultados  
A média ponderada é amplamente utilizada em situações reais, como cálculo de notas  

---

## Considerações Finais

Este desafio reforça a aplicação prática de conceitos matemáticos fundamentais no desenvolvimento em PHP, demonstrando como cálculos simples podem ser adaptados para cenários mais realistas por meio do uso de pesos. Ele contribui para o desenvolvimento do raciocínio lógico e da clareza na escrita de expressões matemáticas no código.

---

Autor  
Vinicius Carmello Peliçari  
Estudante de Análise e Desenvolvimento de Sistemas – FATEC Americana

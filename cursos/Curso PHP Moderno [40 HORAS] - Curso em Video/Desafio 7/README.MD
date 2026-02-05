# Desafio 07 – Cálculo de Salários Mínimos em PHP

## Descrição

Este desafio integra o Curso de PHP Moderno, Módulo 01, ministrado por Gustavo Guanabara, na plataforma Curso em Vídeo. O objetivo é desenvolver uma aplicação capaz de calcular quantos salários mínimos completos estão contidos no salário informado pelo usuário, além de exibir o valor restante após essa divisão.

A proposta utiliza exemplos do cotidiano para reforçar a diferença entre divisão real e divisão inteira, mostrando como a divisão inteira descarta valores decimais e como o resto da divisão pode ser utilizado para obter informações adicionais relevantes.

---

## Objetivo

Permitir que o usuário informe seu salário atual e receba como resultado:

A quantidade de salários mínimos completos contidos no valor informado  
O valor restante que não completa um salário mínimo adicional  

Utilizando operações matemáticas adequadas e apresentando os valores formatados corretamente.

---

## Tecnologias Utilizadas

PHP  
HTML  
CSS  
Formulários HTML com método GET  
Servidor local ou ambiente Online PHP  

---

## Estrutura dos Arquivos

desafio-07/  
│  
├ desafio7.php  
├ style.css  
└ README.md  

---

## Funcionamento da Aplicação

O funcionamento da aplicação segue o fluxo abaixo:

O usuário informa o valor do salário por meio de um formulário HTML  
O formulário é retroalimentado para manter o valor informado após o envio  
O PHP captura o valor utilizando o método GET  
O valor do salário mínimo é definido diretamente no código  
A divisão inteira é utilizada para calcular quantos salários mínimos completos cabem no valor informado  
O valor restante é calculado por meio de uma operação aritmética  
Os valores são formatados utilizando number_format para atender ao padrão monetário brasileiro  
O resultado final é exibido de forma clara e objetiva ao usuário  

---

## Conceitos Praticados

Divisão inteira em PHP utilizando intdiv  
Cálculo de valores restantes após divisão  
Diferença entre divisão real e divisão inteira  
Uso de operadores aritméticos  
Formulários retroalimentados  
Validação e definição de valores padrão  
Formatação de valores monetários com number_format  
Integração entre PHP e HTML  
Apresentação clara de resultados ao usuário  

---

## Aprendizados Importantes

A divisão inteira permite trabalhar apenas com valores inteiros, descartando casas decimais  
O cálculo do valor restante pode ser feito por meio de operações matemáticas simples  
A formatação correta de valores monetários melhora a legibilidade e a experiência do usuário  
Testar o código de forma incremental ajuda a evitar erros lógicos  
Mesmo aplicações simples podem aplicar boas práticas de organização e clareza  

---

## Considerações Finais

Este desafio consolida conceitos matemáticos e lógicos fundamentais aplicados ao PHP, mostrando como operações simples podem ser transformadas em soluções úteis e compreensíveis. Ele reforça a importância da clareza na apresentação dos resultados e do uso correto de operações matemáticas no desenvolvimento de aplicações web.

---

Autor  
Vinicius Carmello Peliçari  
Estudante de Análise e Desenvolvimento de Sistemas – FATEC Americana

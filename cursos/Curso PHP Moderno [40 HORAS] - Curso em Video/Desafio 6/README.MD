# Desafio 06 – Divisão Inteira em PHP

## Descrição

Este desafio faz parte do Curso de PHP Moderno, Módulo 01, ministrado por Gustavo Guanabara, na plataforma Curso em Vídeo. O objetivo é explorar de forma prática a anatomia de uma divisão inteira, compreendendo como calcular corretamente o quociente e o resto entre dois números inteiros utilizando PHP.

A proposta vai além do simples cálculo matemático, abordando validação de dados, tratamento de casos especiais como divisão por zero, e a apresentação clara e organizada dos resultados para o usuário, simulando a estrutura de uma divisão manual.

---

## Objetivo

Permitir que o usuário informe um dividendo e um divisor por meio de um formulário HTML e exibir de forma dinâmica:

O valor do dividendo  
O valor do divisor  
O quociente da divisão inteira  
O resto da divisão  

Garantindo que os dados sejam válidos e evitando erros matemáticos e lógicos.

---

## Tecnologias Utilizadas

PHP  
HTML  
CSS  
Formulários HTML com método GET  
Servidor local ou ambiente Online PHP  

---

## Estrutura dos Arquivos

desafio-06/  
│  
├ desafio6.php  
├ style.css  
└ README.md  

---

## Funcionamento da Aplicação

O funcionamento do sistema ocorre da seguinte forma:

O usuário informa o dividendo e o divisor em um formulário HTML  
O formulário é retroalimentado, mantendo os valores digitados após o envio  
O PHP captura os valores utilizando o método GET  
É realizada a validação básica do divisor para evitar divisão por zero  
O quociente é calculado utilizando a função intdiv  
O resto da divisão é obtido com o operador módulo (%)  
Os resultados são exibidos de forma textual e também em formato de tabela  
A tabela representa visualmente a estrutura da divisão inteira  

---

## Conceitos Praticados

Divisão inteira em PHP  
Uso da função intdiv  
Uso do operador módulo (%)  
Validação de dados de entrada  
Tratamento de casos especiais como divisor igual a zero  
Formulários retroalimentados com PHP  
Uso da variável $_SERVER para reaproveitamento do script  
Integração entre PHP e HTML  
Exibição organizada de resultados  
Estruturação visual com tabelas em HTML e CSS  

---

## Aprendizados Importantes

A divisão inteira retorna apenas o quociente sem considerar casas decimais  
O operador módulo permite obter o resto da divisão  
A validação de dados é essencial para evitar erros de execução  
Formulários retroalimentados melhoram a experiência do usuário  
A apresentação visual ajuda a compreender melhor a lógica do cálculo  
Mesmo códigos simples podem ser organizados de forma profissional  

---

## Considerações Finais

Este desafio reforça conceitos fundamentais de lógica matemática e programação em PHP, mostrando como transformar operações simples em aplicações didáticas, seguras e bem estruturadas. Ele também evidencia a importância de validar dados, organizar a saída e pensar na experiência do usuário desde os primeiros projetos.

---

Autor  
Vinicius Carmello Peliçari  
Estudante de Análise e Desenvolvimento de Sistemas – FATEC Americana

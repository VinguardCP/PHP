# Desafio 02 – Sorteador de Números Aleatórios

Este desafio consiste na criação de um sistema simples em PHP capaz de gerar números aleatórios de forma dinâmica utilizando funções nativas da linguagem. O objetivo é apresentar ao usuário um valor aleatório dentro de um intervalo definido e permitir a geração de novos valores sem a necessidade de atualizar manualmente a página.

O desafio faz parte do Curso de PHP Moderno Módulo 01 ministrado por Gustavo Guanabara na plataforma Curso em Vídeo.

---

## Objetivo do Desafio

Gerar um número aleatório entre valores definidos  
Exibir o número gerado na tela  
Permitir a geração de um novo número por meio de interação do usuário  

---

## Tecnologias Utilizadas

PHP  
HTML  
CSS  
JavaScript  
Servidor local com XAMPP  

---

## Estrutura dos Arquivos

desafio-02/
│
├ desafio2.php  
├ style.css  
└ README.md  

---

## Descrição do Funcionamento

Ao acessar a página, o sistema gera automaticamente um número aleatório utilizando a função mt_rand. O valor gerado é exibido diretamente na tela por meio de código PHP integrado ao HTML. Um botão permite que a página seja recarregada utilizando JavaScript, possibilitando a geração de um novo número aleatório de forma dinâmica.

---

## Conceitos Praticados

Geração de números aleatórios em PHP  
Uso das funções rand, mt_rand e random_int  
Diferença entre funções antigas, rápidas e seguras  
Integração entre PHP e HTML  
Execução de código PHP no lado do servidor  
Uso de JavaScript para recarregar a página  
Organização de arquivos em desafios  
Separação entre lógica e apresentação  

---

## Aprendizados Importantes

A função rand utiliza um algoritmo antigo e possui desempenho inferior  
A função mt_rand utiliza o algoritmo Mersenne Twister, sendo mais rápida e recomendada para usos gerais  
A função random_int é indicada para contextos que exigem maior segurança, como geração de senhas e tokens  

---

## Observações

Este desafio reforça conceitos importantes sobre aleatoriedade, desempenho e segurança no PHP, além de introduzir boas práticas na construção de pequenas aplicações web dinâmicas.

---

Autor  
Vinicius Carmello Peliçari  
Estudante de Análise e Desenvolvimento de Sistemas – FATEC Americana


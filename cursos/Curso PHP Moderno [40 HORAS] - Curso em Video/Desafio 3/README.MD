# Desafio 03 – Conversor de Moedas e Formatação Monetária

Este desafio consiste na criação de um conversor de moedas em PHP, onde o usuário informa um valor em reais e o sistema exibe o valor equivalente em dólares utilizando uma cotação fixa. O foco principal do exercício não está apenas no cálculo matemático, mas na correta formatação de valores monetários e na utilização de recursos de internacionalização no PHP.

O desafio faz parte do Curso de PHP Moderno Módulo 01 ministrado por Gustavo Guanabara na plataforma Curso em Vídeo.

---

## Objetivo do Desafio

Capturar um valor monetário informado pelo usuário  
Realizar a conversão de reais para dólares utilizando cotação fixa  
Exibir valores monetários formatados corretamente  
Aplicar conceitos de internacionalização no PHP  

---

## Tecnologias Utilizadas

PHP  
HTML  
CSS  
JavaScript  
Biblioteca intl do PHP  
Servidor local com XAMPP  

---

## Estrutura dos Arquivos

desafio-03/
│
├ desafio3.html  
├ cad.php  
├ style.css  
└ README.md  

---

## Descrição do Funcionamento

O usuário informa o valor em reais por meio de um formulário HTML. Os dados são enviados via método GET para o script PHP responsável pelo processamento. O sistema realiza a conversão do valor utilizando uma cotação fixa definida diretamente no código e exibe o resultado formatado corretamente em reais e dólares.

A formatação monetária é realizada utilizando a biblioteca intl do PHP, que permite adaptar a exibição dos valores de acordo com a localidade e a moeda informada, garantindo um padrão mais profissional e compatível com aplicações reais.

---

## Conceitos Praticados

Criação e processamento de formulários HTML  
Envio de dados utilizando o método GET  
Cálculo de conversão de moedas  
Formatação de valores monetários  
Uso da função number_format  
Uso da biblioteca intl para internacionalização  
Formatação de moedas com NumberFormatter  
Configuração de localidade e moeda  
Integração entre PHP e HTML  
Separação entre lógica e apresentação  

---

## Aprendizados Importantes

A formatação correta de valores monetários é essencial para aplicações profissionais  
A função number_format permite formatações manuais de números  
A biblioteca intl oferece uma solução mais robusta e internacionalizada  
O uso de internacionalização permite adaptar aplicações para diferentes regiões e moedas  
A extensão intl deve estar habilitada no servidor local para funcionamento correto  

---

## Observações

Neste desafio foi necessário habilitar a extensão intl no arquivo php.ini e reiniciar o servidor local para utilizar os recursos de internacionalização. Essa biblioteca é padrão em servidores profissionais e fundamental para aplicações globais.

---

Autor  
Vinicius Carmello Peliçari  
Estudante de Análise e Desenvolvimento de Sistemas – FATEC Americana


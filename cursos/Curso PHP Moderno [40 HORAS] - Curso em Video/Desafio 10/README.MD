# Desafio 10 – Cálculo de Idade com Ano de Referência em PHP

## Descrição

No décimo desafio do Curso de PHP Moderno, ministrado por Gustavo Guanabara, o objetivo é desenvolver um programa capaz de calcular a idade de uma pessoa a partir do ano de nascimento e de um ano de referência informado pelo usuário.

Embora o cálculo matemático seja simples, o desafio introduz conceitos importantes, como a obtenção dinâmica do ano atual diretamente do servidor, a retroalimentação de formulários e a preparação do código para validações futuras.

---

## Objetivo

Criar uma aplicação em PHP que permita ao usuário:

Informar o ano de nascimento  
Informar o ano em que deseja saber a idade  

E que exiba:

A idade atual considerando o ano corrente do servidor  
A idade correspondente ao ano de referência informado  

---

## Tecnologias Utilizadas

PHP  
HTML  
CSS  
Formulários HTML com método GET  
Função date do PHP  

---

## Estrutura dos Arquivos

desafio-10/  
│  
├ desafio10.php  
├ style.css  
└ README.md  

---

## Funcionamento da Aplicação

O funcionamento do sistema ocorre da seguinte forma:

O PHP obtém automaticamente o ano atual do servidor utilizando a função date("Y")  
O formulário HTML é carregado com valores padrão para o ano de nascimento e o ano desejado  
Os dados são enviados pelo método GET  
O formulário é retroalimentado, mantendo os valores preenchidos após o envio  
O PHP captura os dados com a superglobal $_GET utilizando o operador de coalescência nula  
A idade é calculada subtraindo o ano de nascimento do ano de referência  
Também é calculada a idade atual com base no ano corrente do servidor  
Os resultados são exibidos de forma clara ao usuário  

---

## Conceitos Praticados

Função date do PHP  
Captura de dados com $_GET  
Operador de coalescência nula  
Formulários retroalimentados  
Cálculo de diferença entre anos  
Integração entre PHP e HTML  

---

## Observações Importantes

O código ainda não realiza validações lógicas completas  
Caso o usuário informe um ano de referência anterior ao nascimento, o resultado será uma idade negativa  
Essas validações serão tratadas futuramente com estruturas condicionais  
O foco do desafio é a prática de formulários e manipulação básica de dados  

---

## Aprendizados Reforçados

Como obter dados dinâmicos do servidor  
Importância de valores padrão para evitar erros  
Uso prático de formulários retroalimentados  
Separação entre lógica PHP e estrutura HTML  
Preparação de código para evolução futura  

---

## Considerações Finais

Este desafio demonstra como um problema simples pode ser enriquecido com boas práticas de programação, como o uso de dados dinâmicos do servidor e formulários bem estruturados. Ele prepara o aluno para desafios mais avançados, onde validações e estruturas condicionais serão aplicadas para tornar o sistema mais robusto.

---

Autor  
Vinicius Carmello Peliçari  
Estudante de Análise e Desenvolvimento de Sistemas – FATEC Americana

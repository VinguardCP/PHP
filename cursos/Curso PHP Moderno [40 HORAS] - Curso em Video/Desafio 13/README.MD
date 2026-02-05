# Desafio 13 – Simulador de Caixa Eletrônico em PHP

## Descrição

O décimo terceiro desafio marca o encerramento do Módulo 1 do Curso de PHP Moderno, ministrado por Gustavo Guanabara. O objetivo deste desafio é desenvolver um simulador de caixa eletrônico capaz de calcular automaticamente a quantidade de notas necessárias para realizar um saque, com base em um valor informado pelo usuário.

O desafio consolida conceitos fundamentais de lógica de programação, matemática aplicada e manipulação de números em PHP, além de introduzir boas práticas de organização de arquivos e apresentação visual dos resultados.

---

## Objetivo

Criar uma aplicação em PHP que permita ao usuário:

Informar um valor inteiro para saque  

E que o sistema:

Calcule a quantidade de notas de cada valor disponível  
Exiba o resultado de forma clara e organizada  
Utilize imagens das notas para tornar a visualização mais intuitiva  

---

## Notas Disponíveis

O sistema trabalha com as seguintes cédulas e moedas:

R$ 100  
R$ 50  
R$ 20  
R$ 10  
R$ 5  
R$ 2  
Moeda de R$ 1  

---

## Tecnologias Utilizadas

PHP  
HTML  
CSS  
Formulários HTML  
Servidor local ou ambiente online  
Imagens para representação visual das notas  

---

## Estrutura do Projeto

desafio-13/  
│  
├ desafio13.php  
├ style.css  
├ imagens/  
│  ├ 100-reais.jpg  
│  ├ 50-reais.jpg  
│  ├ 20-reais.jpg  
│  ├ 10-reais.jpg  
│  ├ 5-reais.jpg  
│  ├ 2-reais.jpg  
│  └ 1-real.jpg  
└ README.md  

---

## Funcionamento da Aplicação

O funcionamento do sistema segue uma lógica sequencial:

O usuário informa o valor que deseja sacar  
O valor é enviado ao servidor via formulário HTML  
O PHP captura o valor utilizando $_REQUEST  
O sistema inicia o cálculo pelas notas de maior valor  
Para cada nota, é utilizada divisão inteira para obter a quantidade  
O restante do valor é reaproveitado para o próximo cálculo  
O processo continua até chegar à moeda de R$ 1  
O resultado final é exibido com texto e imagens correspondentes  

---

## Conceitos e Técnicas Aplicadas

Divisão inteira  
Cálculo de resto com operador módulo (%)  
Uso da função floor() para arredondamento para baixo  
Reaproveitamento de valores residuais  
Operadores de atribuição  
Organização lógica de cálculos sequenciais  
Formulários retroalimentados  
Exibição dinâmica de resultados  

---

## Destaques do Desafio

Uso prático de conceitos matemáticos em programação  
Aplicação de lógica semelhante aos desafios anteriores  
Integração entre PHP, HTML e CSS  
Organização visual do resultado com imagens  
Código limpo e de fácil leitura  

---

## Aprendizados Reforçados

Raciocínio lógico aplicado a problemas reais  
Importância da ordem correta dos cálculos  
Uso eficiente de operações matemáticas em PHP  
Construção de aplicações interativas  
Organização de arquivos em projetos web  

---

## Considerações Finais

Este desafio encerra o primeiro módulo do curso demonstrando como conceitos básicos, quando bem compreendidos, permitem a construção de aplicações úteis e bem estruturadas. O simulador de caixa eletrônico é um excelente exemplo de como lógica, matemática e programação caminham juntas no desenvolvimento de sistemas reais.

---

Autor  
Vinicius Carmello Peliçari  
Estudante de Análise e Desenvolvimento de Sistemas – FATEC Americana

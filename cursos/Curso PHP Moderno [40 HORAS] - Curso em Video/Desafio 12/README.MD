# Desafio 12 – Conversão de Tempo em PHP

## Descrição

No décimo segundo desafio do Curso de PHP Moderno, ministrado por Gustavo Guanabara, o objetivo é desenvolver uma aplicação capaz de converter um valor total em segundos, informado pelo usuário, em semanas, dias, horas, minutos e segundos.

Apesar de parecer um problema simples, o desafio exige atenção ao raciocínio lógico e ao uso correto de operações matemáticas, especialmente divisão inteira e cálculo de restos. A proposta reforça a importância de compreender a base matemática antes da implementação do código.

---

## Objetivo

Criar uma aplicação em PHP que permita ao usuário:

Informar um valor total em segundos  

E que apresente:

O equivalente desse valor em semanas  
Dias restantes  
Horas restantes  
Minutos restantes  
Segundos finais  

---

## Conceitos Matemáticos Utilizados

1 minuto = 60 segundos  
1 hora = 3.600 segundos  
1 dia = 86.400 segundos  
1 semana = 604.800 segundos  

Esses valores são utilizados como base para a conversão progressiva do tempo, sempre utilizando o valor restante após cada cálculo.

---

## Tecnologias Utilizadas

PHP  
HTML  
CSS  
Formulários HTML  
Servidor local  

---

## Estrutura dos Arquivos

desafio-12/  
│  
├ desafio12.php  
├ style.css  
└ README.md  

---

## Funcionamento da Aplicação

O funcionamento do sistema ocorre em etapas bem definidas:

O usuário informa o total de segundos no formulário  
O valor é enviado ao servidor pelo método GET  
O PHP captura o valor utilizando $_REQUEST, definindo um valor padrão  
O cálculo começa pelas semanas, utilizando divisão inteira  
O restante da divisão é reaproveitado para calcular os dias  
O mesmo processo é repetido para horas, minutos e segundos  
Cada unidade de tempo é obtida de forma sequencial  
O resultado final é exibido de forma organizada em uma lista  

---

## Conceitos Praticados

Divisão inteira  
Cálculo de resto com operador módulo (%)  
Conversão de unidades de tempo  
Uso de variáveis auxiliares para controle de sobra  
Formulários retroalimentados  
Manipulação de dados com PHP  
Formatação de números com number_format  
Organização lógica de cálculos sequenciais  

---

## Observações Importantes

O cálculo segue uma ordem hierárquica, da maior para a menor unidade de tempo  
O valor restante após cada divisão é fundamental para o cálculo correto  
O uso de constantes numéricas torna o código mais legível  
A aplicação aceita apenas valores inteiros e positivos  

---

## Aprendizados Reforçados

Raciocínio lógico aplicado à programação  
Importância do planejamento antes da codificação  
Uso prático da divisão inteira em problemas reais  
Conversão de unidades de forma estruturada  
Clareza na apresentação de resultados ao usuário  

---

## Considerações Finais

Este desafio consolida o uso de operações matemáticas básicas em um contexto real e muito comum em sistemas computacionais. Ele reforça a importância de entender o problema antes de programar e mostra como pequenas decisões lógicas impactam diretamente a corretude do resultado final.

---

Autor  
Vinicius Carmello Peliçari  
Estudante de Análise e Desenvolvimento de Sistemas – FATEC Americana

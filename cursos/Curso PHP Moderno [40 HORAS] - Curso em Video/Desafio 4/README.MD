# Desafio 04 – Conversor de Moedas Avançado em PHP

## Descrição

Este desafio integra o Curso de PHP Moderno, Módulo 01, ministrado por Gustavo Guanabara, do Curso em Vídeo. O objetivo é desenvolver um conversor de moedas que utilize a cotação oficial do dólar em tempo real, obtida por meio da API pública do Banco Central do Brasil, substituindo o uso de valores fixos por dados reais e atualizados.

O exercício representa um avanço significativo em relação aos desafios anteriores, pois introduz conceitos fundamentais de integração com serviços externos, consumo de APIs e tratamento de dados no formato JSON, aproximando o aluno de cenários reais do desenvolvimento web profissional.

---

## Objetivo

Permitir que o usuário informe um valor em reais e receba automaticamente o valor correspondente em dólares, utilizando a cotação comercial oficial mais recente disponibilizada pelo Banco Central do Brasil, com atualização automática baseada na data atual.

---

## Conceitos e Tecnologias Aplicadas

Durante a implementação do desafio, foram utilizados os seguintes recursos e conceitos:

Consumo de API pública do Banco Central do Brasil  
Construção dinâmica de URLs com base em datas atuais  
Manipulação de datas com as funções date e strtotime  
Requisições HTTP utilizando file_get_contents  
Decodificação de dados JSON com json_decode  
Extração de informações de arrays multidimensionais  
Conversão de valores monetários  
Internacionalização e formatação de moedas com a biblioteca intl  
Utilização da classe NumberFormatter  
Criação e processamento de formulários HTML com método GET  

---

## API Utilizada

A aplicação consome a API PTAX do Banco Central do Brasil, configurada para:

Consultar um período de sete dias  
Ordenar os resultados de forma decrescente, priorizando a cotação mais recente  
Retornar apenas a cotação de compra do dólar e a data da cotação  
Fornecer os dados no formato JSON  

---

## Funcionamento da Aplicação

O fluxo da aplicação ocorre da seguinte forma:

O usuário informa o valor em reais por meio de um formulário HTML  
O PHP gera dinamicamente a data inicial e final para consulta da API  
A URL da API do Banco Central é montada com os parâmetros corretos  
A requisição é realizada e o retorno em JSON é capturado  
Os dados são decodificados para um array associativo  
A cotação mais recente do dólar é extraída  
O valor informado é convertido de real para dólar  
O resultado é exibido com formatação monetária adequada  

---

## Exemplo de Código Utilizado

```php
$inicio = date("m-d-Y", strtotime("-7 days"));
$fim = date("m-d-Y");

$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/' .
       'CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?' .
       '@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'' .
       '&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

$dados = json_decode(file_get_contents($url), true);
$cotacao = $dados["value"][0]["cotacaoCompra"];

$dolar = $real / $cotacao;
```
---

## Aprendizados

A realização deste desafio proporcionou os seguintes aprendizados:

Integração do PHP com serviços externos em tempo real
Consumo e interpretação de APIs REST
Manipulação de dados no formato JSON
Aplicação de boas práticas para exibição de dados financeiros
Utilização de fontes oficiais para garantir confiabilidade das informações
Desenvolvimento de aplicações web mais dinâmicas e profissionais

---

## Considerações Finais

Este desafio demonstra como o PHP pode ser utilizado para além de formulários simples, permitindo a integração com serviços públicos, o tratamento de dados em tempo real e a construção de aplicações mais robustas, confiáveis e alinhadas com práticas profissionais de desenvolvimento web.

Autor
Vinicius Carmello Peliçari
Estudante de Análise e Desenvolvimento de Sistemas – FATEC Americana

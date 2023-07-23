<br/>
<p align="center">
  <a href="https://liberfly.com.br/" target="_blank">
    <img width="50%" src="https://dompixel.wolftechti.com.br/images/DompixelShop.png" alt="DomPixel Logo">
  </a>
</p>

<br/>

# DomPixel Shop

## Descrição
Gerencie seus produtos de forma rápida e fácil com o app DomPixel Shop! Nosso aplicativo é projetado para simplificar a gestão do seu inventário, permitindo que você mantenha um controle completo sobre seus produtos em um único lugar.
<br>
Com o DomPixel Shop, você pode cadastrar novos itens em poucos cliques, definindo detalhes importantes como nome, descrição, preço e quantidade disponível. Além disso, é possível adicionar imagens dos produtos para dar uma aparência mais atraente às suas listagens.
<br>
Atualizar informações também é uma tarefa simples. Basta acessar a página do produto e fazer as alterações necessárias. Você pode ajustar preços, atualizar estoques ou até mesmo adicionar novas imagens de forma rápida e intuitiva.
<br>
Nossa interface amigável e funcionalidades inteligentes permitem que você gerencie o seu negócio de forma mais eficiente, economizando tempo e reduzindo possíveis erros. Deixe o trabalho pesado para o DomPixel Shop e concentre-se no crescimento do seu negócio!
<br>
Experimente o DomPixel Shop agora mesmo e descubra como é fácil manter o controle dos seus produtos e impulsionar suas vendas. Simplifique a sua rotina e leve a gestão do seu estoque para um novo patamar com o DomPixel Shop!
<br>

## Levantando APP
1. Clone o repositório: `git clone https://github.com/Ajada/dom-pixel.git dompixel-shop`
2. Acesse o diretório do projeto: `cd dompixel-shop`
4. Instale as dependências do laravel: `composer install` 
5. Instale as dependências do vue: `npm install` ou `yarn` 
6. Crie e configure o arquivo `.env`, após isso rode `php artisan key:generate`
6. Por fim rode as migrations `php artisan migrate`
7. Suba o servidor: `php artisan serve` e `yarn dev` ou `npm run dev`

## Produção
- O app pode ser acessado através do link: `https://dompixel.wolftechti.com.br/` com o usuario `test@example.com` e senha `password`.
- Em ambiente de produção, você pode convidar outros usuarios para usar o app, visto que o sistema utiliza o jetstream para gerenciar equipes e times.

## Dificuldade
- Gostaria de destacar que não tive dificuldades para a criação do app, estou abituado em gerenciar bancos e criar CRUD's.
- Apenas gostaria de mais tempo para melhorar algumas coisas, como otimizar um pouco mais o código, porem todos os requisitos funcionais foram implementados.

## Considerações
O app foi criado com o intuito de gerenciar produtos, tendo o CRUD básico de uma aplicação.
<br>
O layout foi criado utilizando o tailwind, para que o app tivesse um visual mais amigável e moderno.
<br>
Optei por não utilizar o docker, visto que não seria uma aplicação com varias regras de negócio.
<br>
A versão final, que esta em produção no link `https://dompixel.wolftechti.com.br/`, esta rodando com um banco em MySql, mas fique a vontade para usar o Postgres se desejar.
<br>

## Licença
[MIT](https://opensource.org/licenses/MIT)
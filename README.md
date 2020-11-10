### Projeto Condovid
login com rede social (github, facebook ou twitter) e pegar dados de uma api feita em laravel sobre regras/noticias de condominios sobre covid-19.

### Como rodar:
- Clone o Projeto Condovid e sua API [CondividAPI](https://github.com/VictordaSilvaf/CondoVid)
- Abra o CMD (ou outro da sua preferencia), com todas as dependencias do laravel instaladas, rode o comando `npm install`
- Depois de carregar rode o comando `composer install`, apos baixar as dependencias do projeto
- Rode seu XAMPP ou correlacionados e rode o MySQL na porta 3306 ou a que você definiu no .env
- Sé não houver a pasta `.env` faça uma copia do arquivo `.env.exemple` e remova o `.exemple`, crie um banco de dados para cada um, e renomei de acordo na pasta .env colocando junto o login e senha da sua conexão com o DB
- rode o comando `php artisan key:generate`
- Gere e coloque as `keys` (Facebook, Github e twitter) em seus devidos locais na pasta .env
- Após ter feito todos os passos acima rode o comando `php artisan migrate` nos dois para gerar as tables, e depois o comando `php artisan serve` no site e `php artisan serve --port=5005`
- Abra o localhost:8000 no seu navegar e pronto.

### Imagens:
<a href="https://imgur.com/b2oFrBj"><img src="https://i.imgur.com/b2oFrBj.png" title="source: imgur.com" /></a>

<a href="https://imgur.com/cuMcWDm"><img src="https://i.imgur.com/cuMcWDm.png" title="source: imgur.com" /></a>

<a href="https://imgur.com/no2kOZr"><img src="https://i.imgur.com/no2kOZr.png" title="source: imgur.com" /></a>

<a href="https://imgur.com/OI3OHnO"><img src="https://i.imgur.com/OI3OHnO.png" title="source: imgur.com" /></a>

<a href="https://imgur.com/b95F3XK"><img src="https://i.imgur.com/b95F3XK.png" title="source: imgur.com" /></a>


### Feito em
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>



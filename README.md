# bg-newepisodes

Esse projeto tem por objetivo facilitar as operações durante o acompanhamento de algum anime, mostrando as informações necessárias que procuramos na hora de baixar um novo episódio. O projeto consegue entrar em um diretório e dizer qual foi o último episódio baixado e, a partir disso, consegue mostrar quantos episódios você ainda precisa baixar.

Requisitos Mínimos

1) Você precisa criar uma pasta em qualquer lugar do seu computador com um nome genérico ("Animes" por exemplo). Nessa pasta, crie também pastas de um anime específico ("Code Geass", "Dragon Ball Z", etc).

![alt text](https://github.com/bprojects/bg-newepisodes/blob/master/gh-img/Screenshot%20from%202017-12-06%2021-51-06.png?raw=true)

No meu caso, criei todas em meu HD externo (E:/ no Windows)

2) Temos dois arquivos PHP na pasta: "index.php" e "config.php". Abra o "config.php" com o Bloco de Notas e altere os dados. Na imagem abaixo, temos 15 animes. O número 1 sempre representará aquele anime específico, o 2 é outro anime, e por aí vai. É como se fosse o código daquele anime.

2.1) URL das páginas onde aparecem os links de download dos episódios. Por exemplo, eu baixo do Saikô Animes, então coloquei o endereço correspondente ao anime 1 no primeiro, ao anime 2 no segundo. Se você deseja baixar de outro site, terá que alterar mais coisas em "index.php", pois cada site tem sua tag diferente da outra. Dica: utilize o da Saikô!

![alt text](https://github.com/bprojects/bg-newepisodes/blob/master/gh-img/Screenshot%20from%202017-12-06%2021-59-26.png?raw=true)

2.2) Nesse passo, altere o nome exato que você renomeou as suas pastas específicas. Por exemplo, dentro da pasta "Animes" você criou "Code Geass", então coloque apenas o nome dessa pasta. Observação: no Passo 1 você colocou o URL do anime X no código 1, então coloque no código 1 o nome da pasta correspondente a esse mesmo anime!

![alt text](https://github.com/bprojects/bg-newepisodes/blob/master/gh-img/Screenshot%20from%202017-12-06%2022-04-25.png?raw=true)

2.3) Aqui você coloca o título que você quer que apareça no site. Em relação a pasta do "Code Geass", aqui você pode colocar "Code", "Code!!!" etc.

![alt text](https://github.com/bprojects/bg-newepisodes/blob/master/gh-img/Screenshot%20from%202017-12-06%2022-04-40.png?raw=true)

2.4) Esse passo é importante visualmente, pois criei a opção de poder visualizar as imagens dos animes. Você bate o olho e já o reconhece. Esse projeto tem uma pasta chamada fall-season-2017 onde coloquei todas as imagens que eu baixei da internet (todas com a mesma extensão .jpg). Você pode criar uma outra pasta (Leia 2.4.1) ou você pode colocar suas imagens nessa pasta mesmo.

![alt text](https://github.com/bprojects/bg-newepisodes/blob/master/gh-img/Screenshot%20from%202017-12-06%2022-04-57.png?raw=true)

![alt text](https://github.com/bprojects/bg-newepisodes/blob/master/gh-img/Screenshot%20from%202017-12-06%2022-16-26.png?raw=true)

2.4.1) Crie uma pasta com o nome que desejar dentro do projeto. Depois, edite "index.php" com o Bloco de Notas e altere onde está <img src='novonomedapasta'/'...

![alt text](https://github.com/bprojects/bg-newepisodes/blob/master/gh-img/Screenshot%20from%202017-12-06%2022-19-46.png?raw=true)

![alt text](https://github.com/bprojects/bg-newepisodes/blob/master/gh-img/Screenshot%20from%202017-12-06%2022-20-44.png?raw=true)

Não se esqueça de alterar os campos $img[codigodoanime] com os nomes que você renomeou as imagens.

2.5) Abra "index.php" no Bloco de Notas e altere o caminho da pasta que você criou para guardar todas as pastas. Por exemplo a pasta "Animes". 

![alt text](https://github.com/bprojects/bg-newepisodes/blob/master/gh-img/Screenshot%20from%202017-12-06%2021-41-07.png?raw=true)

No meu caso, E:/Animes é o meu HD externo e "Animes" é a minha pasta principal onde estão as outras. Por fim, ".mp4" pois todos os episódios que costumo baixar têm essa extensão. Se você colocou na pasta Vídeos, por exemplo, então o caminho aqui será "C:/users/nomedousuario/videos/Animes/"

IMPORTANTE:

Não esqueça, se você colocou no "config.php" uns 3 animes, então altere a linha de código a seguir dentro do "index.php" de 15 para 3:

![alt text](https://github.com/bprojects/bg-newepisodes/blob/master/gh-img/Screenshot%20from%202017-12-06%2022-34-29.png?raw=true)

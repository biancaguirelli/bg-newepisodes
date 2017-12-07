# bg-newepisodes

Esse projeto tem por objetivo facilitar as operações durante o acompanhamento de algum anime, mostrando as informações necessárias que procuramos na hora de baixar um novo episódio. O projeto consegue entrar em um diretório e dizer qual foi o último episódio baixado e, a partir disso, consegue mostrar quantos episódios você ainda precisa baixar.

Requisitos Mínimos

1) Você precisa criar uma pasta em qualquer lugar do seu computador com um nome genérico ("Animes" por exemplo). Nessa pasta, crie também pastas de um anime específico ("Code Geass", "Dragon Ball Z", etc).

![alt text](https://github.com/bprojects/bg-newepisodes/blob/master/gh-img/Screenshot%20from%202017-12-06%2021-51-06.png?raw=true)

No meu caso, criei todas em meu HD externo (E:/ no Windows)

2) Temos dois arquivos PHP na pasta: "index.php" e "config.php". Abra o "config.php" com o Bloco de Notas e altere os dados. Na imagem abaixo, temos 15 animes. O número 1 sempre representará aquele anime específico, o 2 é outro anime, e por aí vai. É como se fosse o código daquele anime.

2.1) URL das páginas onde aparecem os links de download dos episódios. Por exemplo, eu baixo do Saikô Animes, então coloquei o endereço correspondente ao anime 1 no primeiro, ao anime 2 no segundo...

![alt text](https://github.com/bprojects/bg-newepisodes/blob/master/gh-img/Screenshot%20from%202017-12-06%2021-59-26.png?raw=true)

2.2) Nesse passo, altere o nome exato que você renomeou as suas pastas específicas. Por exemplo, dentro da pasta "Animes" você criou "Code Geass", então coloque apenas o nome dessa pasta. Observação: no Passo 1 você colocou o URL do anime X no código 1, então coloque no código 1 o nome da pasta correspondente a esse mesmo anime!

![alt text](https://github.com/bprojects/bg-newepisodes/blob/master/gh-img/Screenshot%20from%202017-12-06%2022-04-25.png?raw=true)

2.3) Aqui você coloca o título que você quer que apareça no site. Em relação a pasta do "Code Geass", aqui você pode colocar "Code", "Code!!!" etc.

![alt text](https://github.com/bprojects/bg-newepisodes/blob/master/gh-img/Screenshot%20from%202017-12-06%2022-04-40.png?raw=true)

2.4) Esse passo é importante visualmente, pois criei a opção de poder visualizar as imagens dos animes. Você bate o olho e já o reconhece. Esse projeto tem uma pasta chamada fall-season-2017 onde coloquei todas as imagens que eu baixei da internet (todas com a mesma extensão .jpg). Você pode criar uma outra pasta (Leia 2.4.1) ou você pode colocar suas imagens nessa pasta mesmo (Leia 2.4.2).

![alt text](https://github.com/bprojects/bg-newepisodes/blob/master/gh-img/Screenshot%20from%202017-12-06%2022-04-57.png?raw=true)

<html>
    <head>
        <title>[BG] New Episodes - Winter Season 2018</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="principal">
    <?php
        ini_set('max_execution_time', 200);

        //mostra titulo do site
        echo "<p class='site_titulo'>Anime Winter Season 2018</p>";
        echo "<table border='0' cellpadding='20'>";

        require_once('config.php');

        //percorre todos os animes
        for($a=1;$a<=9;$a++){

            //pega todo conteudo de cada site
            $u = file_get_contents($url[$a]);

            //cria uma array para guardar os dados encontrados
            $episodes = array();

            //dá 'match' nos links e pega o numero do ep dentro da tag <a>
            $match = preg_match_all('!<a href="https:\/\/www.4sync.com\/video\/(.*?)" class="btn-.*?" target="blank">(\d{2})<\/a>!', $u, $matches);

            //coloca os links encontrados dentro da array link
            //coloca os numeros encontrados dentro da array number
            $episodes['link'] = $matches[1];
            $episodes['number'] = $matches[2];

            //variaveis auxiliares
            $ultimo_baixado=0;
            $ultimo_lancado=0;
            $qtd_novos=0;

            //verifica se tem ep novo para baixar
            $ultimo_lancado = max($episodes['number']);

            //procurando na pasta E:/Animes
            //aqui procura o último episódio baixado
            for($i=1 ; $i <= $ultimo_lancado; $i++){
                if($i < 10){
                    $arquivo = "E:/Animes/".$an[$a]."/0".$i.".mp4";

                }else{
                    $arquivo = "E:/Animes/".$an[$a]."/".$i.".mp4";
                }

                if(file_exists($arquivo)){
                    $ultimo_baixado++;
                }
            }

            $qtd_novos = $ultimo_lancado - $ultimo_baixado;

            //auxiliares
            $num_epi = 1;

            //se não houver epi novo nem aparece o anime
            if($qtd_novos != 0){
                echo '
                <tr>
                    <td>
                        <img src="winter-season-2018/'.$img[$a].'.jpg" class="anime_img">
                    </td>
                    <td>
                        <p class="anime_novos">NOVOS EPISÓDIOS</p>
                        <p class="anime_title">'.$tit[$a].'</p>
                        <p class="ultimo_baixado">Último episódio baixado: '.$ultimo_baixado.'</p>
                        <p class="qtd_novos">Episódios novos: '.$qtd_novos.'</p>
                        <p class="novos_links">Links:</p>';
                        foreach($episodes['link'] as $value){
                            echo "Ep. ".$num_epi.": ";
                            echo "<a href='https://www.4sync.com/video/".$value."' target='_blank'>Baixar</a> ";
                            if($num_epi == $ultimo_lancado){
                                $num_epi = 0;
                                echo "<br>";
                            }
                            $num_epi++;
                        }
                    '</td>
                </tr>             
                ';
            }    
        }       
        echo "</table>";
    ?>
    </div>
    </body>
</html>
<?php
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.sympla.com.br/public/v3/events');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
            's_token: 13cbe49b9403e5a4fadfa7da0c81987308e86459b3a63e237b193debe9180d9e',
    ]);

    $response = curl_exec($ch);
    curl_close($ch);
    $jsonArray = json_decode($response, true);

    $content = "<html !DOCTYPE>
        <head>
            <title>Cursos</title>
            <style>";
    $contentstyle = "
                .cursos {
                    max-width: 100%;
                    height: 100%;
                    padding: 8%;
                    display: grid;
                    grid-template-columns: repeat(auto-fill, minmax(270px, 1fr));
                    grid-gap: 30px;
                    padding-top: 50px;
                    justify-content: space-between;
                    margin-top: -45px;
                }

                .cursox {
                    height: 300px;
                    border-radius: 15px;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: space-around;
                    background-color: #f0eeee;
                    position: relative;
                }

                .cursotexto {
                    height: 30%;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: space-around;
                }

                .linktexto {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    text-decoration: none;
                }
         ";
    $content .= $contentstyle;
    $content .= "</style>
        </head>
        <body>";
    $content .= "<div class='cursos'>";
    for ( $i = 0; $i < $jsonArray['data']; $i++ ) {
        $content .= "
            <div class='cursox'>
                <a></a>
                <img>
                <div>
                </div>
            </div>
        ";
    }
    $content .= "</div>
        </body>
        </html>";
    echo $content;
?>

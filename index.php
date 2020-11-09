<?php

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WF Veículos</title>

    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/jquery.css">
    <link rel="stylesheet" href="./css/tabela.css">

</head>

<body>
    <div class="topo">
  
        <div class="header">
            <div class="header1">
                <div class="container">
                    
                        <p class="titulo">  
                                
                        </p>
                           
                        <header>
                            <div class="logo">
                                
                                <p id="titulo">  WF Veículos</p> 
                            </div>
                            <nav>
                                <ul>
                                    <li><a href="#">Inicio</a></li>
                                    <li class="sub-menu"><a href="#">Carros</a>
                                        <ul>
                                            <li><a href="./adicionar.html"> Adicionar </a></li>
                                            </ul>
                                    </li>
                                </ul>
                            </nav>
                            <div class="menu-toggle"><img class="fa fa-bars" src="./img/menu.png" alt=""></div>
                        </header>

                        </div>
                </div>
            </div>

                        <div class="texto">
                            <div class="caixa-texto">
                                <div class="textos">
                                    <h2 class="text"><a href="./index.html" class="titulo-text">WF Veículos</a></h2>
                                    <p class="text">Site feito para você encontra carros das suas marcas favoritas, e também adicionar para ajudar outras pessoas.</p></div>
                                </div>
                    </div>
                    <main>
                        <p id="InfPesquisa">Pesquisa</p>
                        <section id="Pesquisa">
                            <form action="" id="form1">
                                <div id="Ano">
                                    <label for="Ano" id="labelAno">Ano: </label>
                                    <input id="inputAno" name="InputAno" type="text"  required>
                
                                    <button type="submit" form="form1" id="buttonPesquisar">Pesquisar</button>
                                </div>
                                
                                <div id="divEscolhaMarca">
                                    <div class="divInputLabel">
                                        <input type="radio" name="inputEscolha" required>
                                        <label for="dd">Audi</label>
                                    </div>
                                    <div  class="divInputLabel">
                                        <input type="radio" name="inputEscolha" required>
                                        <label>Ford</label>
                                    </div>
                                    <div  class="divInputLabel">
                                        <input type="radio" name="inputEscolha" required>
                                        <label>Nissan</label>
                                    </div>
                                    <div class="divInputLabel">
                                        <input type="radio" name="inputEscolha" required>
                                        <label>volkswagen</label>
                                    </div>
                                    <div >
                                        <div class="divInputLabel">
                                        <input type="radio" name="inputEscolha" required>
                                        <label>Toyota</label>
                                    </div>
                                </div>
                                
                    
                            </form>
                
                        </section>
                
                        <p id="InfResultado">Resultado </p>
                        <section id="resultado">
                            <div id="divPrincipal">
                                <div class="divResultado">
                                    <div class="divDivResultado">
                                        <h5>Modelo</h5>
                                        <p id="pModelo" class="pdivDivResultado">A7</p>
                                    </div>
                                    <div class="divDivResultado">
                                        <h5>Marca</h5>
                                        <p id="pMarca" class="pdivDivResultado">Audi</p>
                                    </div>
                                    <div class="divDivResultado">
                                        <h5>Ano</h5>
                                        <p id="pAno" class="pdivDivResultado">2020</p>
                                    </div>
                                </div>    
                                <div class="divResultado">
                                    <div class="divDivResultado">
                                        <h5>Carroceria</h5>
                                        <p id="pCarroceria" class="pdivDivResultado">Sedan</p>
                                    </div>
                                    <div class="divDivResultado">
                                        <h5>Publico Alvo</h5>
                                        <p id="pPublicoAlvo" class="pdivDivResultado">Carro Premium</p>
                                    </div>
                                    <div class="divDivResultado">
                                        <h5>Versão</h5>
                                        <p id="pVersão" class="pdivDivResultado">erformance 55 TFSI quattro S tronic</p>
                                    </div>
                                </div>
                                <div  class="divResultado">
                                    <div class="divDivResultado">
                                        <div class="divDivResultado">
                                            <h5>Comentar</h5>
                                            <textarea  id="Comentar"></textarea>
                                            <label for="Comentar" class="labelComentario">Você</label>
                                        </div>
                                        <h5>Comentarios</h5>
                                        <textarea disabled id="Comentario1">Elegante</textarea>
                                        <label for="Comentario1" class="labelComentario">Pedro Joao</label>
                                    </div>
                                    <div class="divDivResultado">
                                        <h5>Comentarios</h5>
                                        <textarea disabled id="Comentario2">Bom carro</textarea>
                                        <label for="Comentario2" class="labelComentario">Kaio Santos</label>
                                    </div>
                                    <div class="divDivResultado">
                                        <h5>Comentarios</h5>
                                        <textarea disabled id="Comentario3">Os textos nessa tabela servem apenas para ilustrar os dados que futuramente virao do banco...</textarea>
                                        <label for="Comentario3" class="labelComentario">Felipe Sergio</label>
                                    </div>
                                </div>
                                <button class="buttonComentar">Comentar</button>
                            </div>
                
                            <div id="divPrincipal">
                                <div class="divResultado">
                                    <div class="divDivResultado">
                                        <h5>Modelo</h5>
                                        <p id="pModelo" class="pdivDivResultado">A3</p>
                                    </div>
                                    <div class="divDivResultado">
                                        <h5>Marca</h5>
                                        <p id="pMarca" class="pdivDivResultado">Audi</p>
                                    </div>
                                    <div class="divDivResultado">
                                        <h5>Ano</h5>
                                        <p id="pAno" class="pdivDivResultado">2020</p>
                                    </div>
                                </div>    
                                <div class="divResultado">
                                    <div class="divDivResultado">
                                        <h5>Carroceria</h5>
                                        <p id="pCarroceria" class="pdivDivResultado">Sedan</p>
                                    </div>
                                    <div class="divDivResultado">
                                        <h5>Publico Alvo</h5>
                                        <p id="pPublicoAlvo" class="pdivDivResultado">Carro Premium</p>
                                    </div>
                                    <div class="divDivResultado">
                                        <h5>Versão</h5>
                                        <p id="pVersão" class="pdivDivResultado">2.0tfsi</p>
                                    </div>
                                </div>
                                <div  class="divResultado">
                                    <div class="divDivResultado">
                                        <h5>Comentar</h5>
                                        <textarea  id="Comentar"></textarea>
                                        <label for="Comentar" class="labelComentario">Você</label>
                                    </div>
                                    <div class="divDivResultado">
                                        <h5>Comentarios</h5>
                                        <textarea disabled id="Comentario1">Muito Bom!</textarea>
                                        <label for="Comentario1" class="labelComentario">Marcos Souza</label>
                                    </div>
                                    <div class="divDivResultado">
                                        <h5>Comentarios</h5>
                                        <textarea disabled id="Comentario2">Pelo preço ate valeu a pena!</textarea>
                                        <label for="Comentario2" class="labelComentario">Joao Mendes</label>
                                    </div>
                                    <div class="divDivResultado">
                                        <h5>Comentarios</h5>
                                        <textarea disabled id="Comentario3">Os textos nessa tabela servem apenas para ilustrar os dados que futuramente virao do banco...</textarea>
                                        <label for="Comentario3" class="labelComentario">Pedro Santos</label>
                                    </div>
                                </div>
                                <button class="buttonComentar">Comentar</button>
                            </div>
                            
                        </section>
                    </main>
               
                    <div class="footer">
                        <div class="container">
                            <div class="row ">
                
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 ">
                                    <div class="footer-widget">
                                        <h3 class="footer-title"><strong> Desenvolvedores</strong></h3>
                                        <p class="nomes">Felipe Silva</p>
                                        <div class="ft-contact-info"> <img class="rs" src="./img/instagram2.png" alt=""> <span class="ft-contact-text"> <a href="https://instagram.com/felipe_silwa"> @felipe_silwa</a> </span></div>
                                        <div class="ft-contact-info"> <img class="rs" src="./img/gmail.png" alt=""> <span  class="ft-contact-text"> <a href="https://gmail.com"> felipeemerick0@gmail.com</a> </span></div>
                                        <div class="ft-contact-info"> <img class="rs" src="./img/whatsapp.png" alt=""> <span  class="ft-contact-text"> <a > +55 (63) 9282-7019</a> </span>
                                    
                                        <p class="nomes">Wallison Moreira</p>
                                        <div class="ft-contact-info"> <img class="rs" src="./img/instagram2.png" alt=""> <span class="ft-contact-text"> <a href="https://instagram.com/wmsagazz"> @wmsagazz</a> </span></div>
                                        <div class="ft-contact-info"> <img class="rs" src="./img/gmail.png" alt=""> <span  class="ft-contact-text"> <a href="https://gmail.com"> wallison981@gmail.com</a> </span></div>
                                        <div class="ft-contact-info"> <img class="rs" src="./img/whatsapp.png" alt=""> <span  class="ft-contact-text"> <a > +55 (63) 9267-8534</a> </span>
                                    
                                    </div>
                                </div>
                
                            </div>
                        </div>
                    </div> 
                    

                </div>
            </div>
        </div>

        
        <a href="javascript:" id="return-to-top"><i><img src="./img/seta.png" alt="" id="seta"></i></a>
        
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="./js/script.js"></script>
        <script src="./js/return-to-top.js"></script>
    </div>
</body>

</html>
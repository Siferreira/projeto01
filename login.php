<!DOCTYPE html>
<html lang="pt_br">
<head>
    <title>Projeto Senac</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script charset="utf-8" src="public/js/style.js" language="JavaScript" type="text/javascript"></script>
    <!--Inserindo os CSS-->
    <link href="public/css/style.css" rel="stylesheet" type="text/css" media="screen"/>
</head>
<body>
    <div id="page">
        <!--Início do cabeçalho-->
        <header class="ef-box">
            <div class="row black">
                <div class="container">
                    <div class="col-left">
                        <div class="contact-phone">
                            <ul>
                                <li><b> Telefone:</b><a rel="nofollow" alt="Clique e ligue" title="Clique e ligue" href="11 9999-0000">(11) 9999-0000</a></li>
                                <li><strong>WhatsApp:</strong><a rel="nofollow" alt="Clique e ligue" title="Clique e ligue" href="https://api.whatsapp.com/send?1=pt_BR&amp;phone=5511999990000 "target="_blank">(11) 99999-0000</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-right">
                        <div class="user-login">
                            <ul>
                                <li><a rel="" href="login.php" alt="" title="" ><i class="ico-login"><span>Login</span></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="col-left">
                        <div id="logo"><h1><span>Logotipo</span></h1></div>
                        <div class="text-top">
                            <h2>Lorem ipsum in sed donec euismod.</h2>
                            <p>Lorem ipsum in sed donec euismod.</p>
                        </div>
                    </div>
                    <div class="col-right">
                        <div class="ico-social">
                            <ul>
                                <li><i class="ico-facebook"><span>Facebook</span></i></li>
                                <li><i class="ico-twitter"><span>Twitter</span></i></li>
                            </ul>
                        </div>
                        <div class="search">
                            <form action="busca.php" method="get" class="frm">
                                <label for="busca">Buscar</label>
                                <input type="search" id="search" class="txt-search" name="search" placeholder="Buscar..." required>
                                <button type="submit" class="btn sucesso">Buscar</button>
                            </form>
                        </div>
                        <!--Controle do menu responsivo-->
                        <input type="checkbox" id="controle-nav">
                        <label for="controle-nav" class="controle-nav"></label>
                        <label for="controle-nav" class="controle-nav-fecha"></label>
                        <nav>
                            <ul class="menu list-auto"><!--Inserir o class List-auto-->
                                <li><a href="#" alt="" title="">Home</a></li>
                                <li><a href="#" alt="" title="">Quem Somos</a></li>
                                <li><a href="#" alt="" title="">Produtos</a>
                                    <ul class="dropdown">
                                        <li><a href="#" alt="" title="">Produto 01</a></li>
                                        <li><a href="#" alt="" title="">Produto 02</a>
                                            <ul>
                                                <li><a href="#" alt="" title="">Produto 02.1</a></li>
                                                <li><a href="#" alt="" title="">Produto 02.2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#" alt="" title="">Clientes e Parceiros</a></li>
                                <li><a href="#" alt="" title="">Contato</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!--Fim do cabeçalho-->
        <!--Início do corpo-->
        <main>
            <!--linha 1-->
            <div class="row">
                <div class="banner" id="banner">
                    <figure>
                        <span class="trs next"></span>
                        <span class="trs prev"></span>
                        <div id="slider">
                            <a href="#" class="trs"><img src="public/img/banner01.jpg" alt="Legenda da imagem 1"></a>
                            <a href="#" class="trs"><img src="public/img/banner02.jpg" alt="Legenda da imagem 2"></a>
                            <a href="#" class="trs"><img src="public/img/banner03.jpg" alt="Legenda da imagem 3"></a>
                        </div>
                        <figcaption></figcaption>
                    </figure>
                </div>
            </div>
            <!--linha 2-->
            <div class="row container">
                <div class="title-content"><h2>Login</h2></div>
                <form name="frm-login" action="autentica.php" method="post">
                    <label>Login:</label>
                    <input type="text" name="login" require><br>
                    <label>Senha:</label>
                    <input type="password" name="senha" require><br>
                    <input type="submit" value="entrar">
                </form>
            </div>
        </main>
        <!--Fim do corpo-->
        <!--Início do Rodapé-->
        <footer>
            <div class="row">
                <div class="container">
                    <div class="col-4">
                        <img src="public/img/logo.png" alt="" title="">
                        <p>Lorem ipsum in sed donec euismod.Lorem ipsum in sed donec euismod.Lorem ipsum in sed donec euismod.</p>
                        <ul>
                            <li><i class="ico-facebook"><span>Facebook</span></i></li>
                            <li><i class="ico-twitter"><span>Twitter</span></i></li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <h3>Endereço</h3>
                        <p>Lorem ipsum in sed donec euismod.</p>
                        <h3>Telefone</h3>
                            <ul>
                                <li><b> Telefone:</b><a rel="nofollow" alt="Clique e ligue" title="Clique e ligue" href="11 9999-0000">11 9999-0000</a></li>
                                <li><strong>WhatsApp:</strong><a rel="nofollow" alt="Clique e ligue" title="Clique e ligue" href="https://api.whatsapp.com/send?1=pt_BR&amp;phone=5511999990000 "target="_blank">11 99999-0000</a></li>
                            </ul>
                        <h3>Email</h3>
                        <p><a href="mail:contato@teste.com.br">contato@teste.com.br</a></p>
                    </div>
                    <div class="col-4 mapSite">
                        <h3>MapSite</h3>
                        <nav>
                            <ul>
                                <li><a href="#" alt="" title="">Home</a></li>
                                <li><a href="#" alt="" title="">Quem Somos</a></li>
                                <li><a href="#" alt="" title="">Produtos</a></li>
                                <li><a href="#" alt="" title="">Clientes e Parceiros</a></li>
                                <li><a href="#" alt="" title="">Contato</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-4">
                        <h3>Newsletter</h3>
                            <form action="newsletter.php" method="post" class="frm">
                                <input type="text" id="name" class="txt" placeholder="Nome" name="nome" required><br>
                                <input type="text" id="email" class="txt" placeholder="Email" name="email" required><br>
                                <button type="submit" class="btn sucesso">Assinar</button><br>
                            </form>
                    </div>
                </div>
            </div>
            <div class="row container">
                <div class="copyright-content"><p>Copyright © 2019-2019. Todos os direitos reservados.</p></div>
            </div>
        </footer>
        <!--Fim do Rodapé-->
    </div>
</body>
</html>
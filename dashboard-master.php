
<?php $idLogin = "1";
?>
<!doctype html>
<html>
<head>
    <title>Dashboard - Master</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="public/js/script.js" language="javaScript" type="text/javaScript"></script>
        
        <!-- Inserindo os CSS -->
        <link href="public/css/style.css" rel="stylesheet" type="text/css" media="screen">
        <link href="public/css/dashboard.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
    <div id="page">
        <!-- Inicio do Cabeçalho -->
        <header class="ef-box">
            <div class="row black">
                <!-- Solução da Lara-->
                <div class="container">
                    <div class="col-left">
                        <div class="contact-phone">
                                
                            <ul>
                                <li><h2>Usuário válido - MASTER</h2></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-right">
                        <div class="user-login">
                            <ul>
                                <li><a rel="nofollow" href="logout.php" alt="" title="" style="color:#fff">sair</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Solução da Lara-->
                <div class="container">
                    <div class="col-left">
                        <div id="logo"><h1><span>Logotipo</span></h1></div>
                        <div class="text-top">
                            <h2>Lorem Ipsum is simply dummy text</h2>
                            <p>Lorem Ipsum is simply dummy text</p>
                        </div>
                    </div>
                    <div class="col-right">
                       
                        <div class="search" style="margin-top:50px">
                            <form action="busca.php" method="get" class="frm">
                                <label for="search">Buscar</label>
                                <input type="search" id="search" class="txt-search" name="search" placeholder="Buscar..." required>
                                <button type="submit" class="btn sucesso">Buscar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Fim do Cabeçalho -->
        <!-- Inicio do Corpo -->
        <main id="dashboard">
            <nav id="menu-dashboard">
                <ul>
                    <li>Nivel de Acesso
                        <ul>
                            <li><a href="#">Cadastro</a></li>
                            <li><a href="#">Consulta</a></li>
                        </ul>
                    </li>
                    <li>Usuários
                        <ul>
                            <li><a href="#">Cadastro</a></li>
                            <li><a href="#">Consulta</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="content-dashboard">
                <div>
                    <h2>Cadastro de ALC</h2>
                    <form action="#" method="post" name="frm-cadastra">
                        <label>ACL</label>
                        <input type="text" name="nivel-acesso">
                        <input type="submit" value="Gravar">
                    </form>
                </div>
                <div>
                    <table>
                    <h2>Consulta de ACL</h2>
                        <tr>
                            <td>id</td>
                            <td>ACL</td>
                            <td>Alterar</td>
                        </tr>
                        <tr>
                            <td>id Dado</td>
                            <td>ACL Dado</td>
                            <td><a href="alterar-usuario.php?idlogin=<?=$idLogin?>">Alterar</a></td>
                        </tr>
                    </table>
                </div>
                <div>
                    <h2>Cadastro de Usuário</h2>
                    <form action="#" method="post" name="frm-cadastra">
                        <label>Login</label>
                        <input type="text" name="login">
                        <label>Senha</label>
                        <input type="password" name="senha">
                        <label>ACL</label>
                        <input type="text" name="nivel-acesso">
                        <input type="submit" value="Gravar">
                    </form>
                </div>
                <div>
                    <h2>Alterar de Usuário</h2>
                    <form action="#" method="post" name="frm-alterar">
                        <label>Login</label>
                        <input type="text" name="login">
                        <label>Senha</label>
                        <input type="password" name="senha">
                        <label>ACL</label>
                        <input type="text" name="nivel-acesso">
                        <input type="submit" value="Alterar">
                    </form>
                </div>
                <div>
                    <h2>Excluir de Usuário</h2>
                    <form action="#" method="post" name="frm-alterar">
                        <label>idLogin</label>
                        <input type="text" name="idlogin">
                        <label>Usuário</label>
                        <input type="text" name="login">
                        <label>ACL</label>
                        <input type="text" name="login">
                        <input type="submit" value="Alterar">
                    </form>
                </div>
                <div>
                    <table>
                    <h2>Consulta de Usuários</h2>
                        <tr>
                            <td>id</td>
                            <td>Usuário</td>
                            <td>ACL</td>
                            <td>Alterar</td>
                            <td>Excluir</td>
                        </tr>
                        <tr>
                            <td>id Dado</td>
                            <td>Usuário Dado</td>
                            <td>ACL Dado</td>
                            <td><a href="alterar-usuario.php?idlogin=<?=$idLogin?>">Alterar</a></td>
                            <td><a href="excluir-usuario.php?idlogin=<?=$idLogin?>">Excluir</a></td>
                        </tr>
                    </table>
                </div>
                
            </div>
        </main>
        <!-- Fim do Corpo -->
        <!-- Inicio do Rodapé -->
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
            <!-- Fim do rodapé -->
    </div>
</body>
</html>

<br>

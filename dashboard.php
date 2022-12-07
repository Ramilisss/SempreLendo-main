<?php
// Inicia sessões
session_start();

// Verifica se existe os dados da sessão de login
if(!isset($_SESSION["adm"]))
{
    // Usuário não logado! Redireciona para a página de login
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Admin</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <a class="navbar-brand" href="index.html">
                <img src="assets/images/oculos.webp" width="50px" alt="Logo" style="margin-bottom: 20px;">
            </a>
        </div>
        <!--Secciones-del-tablero-->
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"><span class="las la-home"></span>
                        <span>Início</span></a>
                </li>
                <li>
                    <a href=""><span class="lab la-phoenix-squadron"></span>
                        <span>Livros</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label> Início
            </h2>

            <div class="user-wrapper">
                <div>
                    <a href="php/authenticate/logout.php"><h4>Lougout</h4></a>
                </div>
            </div>
        </header>

        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>5</h1>
                        <span style="margin-top: 15px;">Livros Atuais</span>
                    </div>
                    <div>
                        <span class="las la-search"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>12</h1>
                        <span style="margin-top: 15px;">Livros Comentados</span>
                    </div>
                    <div>
                        <span class="las la-comment-dots"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>25</h1>
                        <span style="margin-top: 15px;">Livros Sinalizados</span>
                    </div>
                    <div>
                        <span class="las la-bell"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>2</h1>
                        <span style="margin-top: 15px;">Livros Lidos</span>
                    </div>
                    <div>
                        <span class="las la-laugh-beam"></span>
                    </div>
                </div>
            </div>
            <!--Tabla-->
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Livros</h3>
                            <button>Mostrar todos <span class="las la-arrow-right"></span></button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Nome</td>
                                            <td>Gênero</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>A Rainha Vermelha</td>
                                            <td>Jovens e Adolescentes</td>
                                            <td><span class="status green"></span> Lendo</td>
                                        </tr>
                                        <tr>
                                            <td>Acotar</td>
                                            <td>Fantasia</td>
                                            <td><span class="status red"></span> Lido</td>
                                        </tr>
                                        <tr>
                                            <td>Os Dois Morrem no Final</td>
                                            <td>Jovens e Adolescentes</td>
                                            <td><span class="status yellow"></span> Análise</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>Bookstans</h3>
                            <button>Mostrar todos <span class="las la-arrow-right">
                                </span></button>
                        </div>
                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <div>
                                        <h4>@kleysla_</h4>
                                        <small>kleysla@gmail.com</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <a href=""><span class="las la-user-circle"></span></a>
                                    <a href="#"><span class="lab la-whatsapp"></span></a>
                                    <a href="#"><span class="lab la-instagram"></span></a>
                                </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <div>
                                        <h4>@neto25</h4>
                                        <small>neto@gmail.com</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <a href=""><span class="las la-user-circle "></span></a>
                                    <a href="#"><span class="lab la-whatsapp "></span></a>
                                    <a href="#"><span class="lab la-instagram"></span></a>
                                </div>
                            </div>                 
                        </div>
                    </div>
                </div> 
            </div>
        </main>
    </div>
</body>
</html>
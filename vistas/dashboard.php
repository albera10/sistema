<?php
    require_once '../config/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../public/styles.css">
</head>

<body>

    <input type="checkbox" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span class="ti-unlink"></span>
                <span>Sistema</span>
            </h3>
            <label for="sidebar-toggle" class="ti-menu-alt"></label>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="">
                        <span class="ti-home"></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="ti-face-smile"></span>
                        <span>Teams</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="ti-agenda"></span>
                        <span>Tasks</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="ti-clipboard"></span>
                        <span>Leaves</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="ti-folder"></span>
                        <span>Projects</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="ti-time"></span>
                        <span>Timesheet</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="ti-book"></span>
                        <span>Contact</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="ti-settings"></span>
                        <span>cuentas</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <div class="search-wrapper">
                <span class="ti-search"></span>
                <input type="search" placeholder="Buscar">
            </div>

            <div class="social-icons">
                <span class="ti-bell"></span>
                <span class="ti-comment"></span>
                <div></div>
            </div>
        </header>

        <main>

            <h2 class="dash-title">Overview</h2>
            <div class="dash-cards">

                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-briefcase"></span>
                        <div>
                            <h5>Acconunt Balance</h5>
                            <h4>$30, 659.45</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="">Ver mas</a>
                    </div>
                </div>

                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-reload"></span>
                        <div>
                            <h5>Acconunt Balance</h5>
                            <h4>$19, 659.45</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="">Ver mas</a>
                    </div>
                </div>

                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-check-box"></span>
                        <div>
                            <h5>Procesos</h5>
                            <h4>$20, 659.45</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="">Ver mas</a>
                    </div>
                </div>

            </div>

            <section class="recent">
                <div class="activity-grid">
                    <div class="activity-card">
                        <h3>Recent activity</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>Proyectos</th>
                                    <th>Fecha incio</th>
                                    <th>Fecha termino</th>
                                    <th>Teams</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>App Development</td>
                                    <td>15 May, 2021</td>
                                    <td>30 May, 2021</td>
                                    <td class="td-team">
                                        <div class="img-1"></div>
                                        <div class="img-2"></div>
                                        <div class="img-3"></div>
                                    </td>
                                    <td>
                                        <span class=" badge success">Terminado</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Front-end Design</td>
                                    <td>15 May, 2021</td>
                                    <td>30 May, 2021</td>
                                    <td class="td-team">
                                        <div class="img-1"></div>
                                        <div class="img-2"></div>
                                        <div class="img-3"></div>
                                    </td>
                                    <td>
                                        <span class=" badge warning">Procesandose</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Web Development</td>
                                    <td>15 May, 2021</td>
                                    <td>30 May, 2021</td>
                                    <td class="td-team">
                                        <div class="img-1"></div>
                                        <div class="img-2"></div>
                                        <div class="img-3"></div>
                                    </td>
                                    <td>
                                        <span class=" badge success">Terminado</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Logo Design</td>
                                    <td>15 May, 2021</td>
                                    <td>30 May, 2021</td>
                                    <td class="td-team">
                                        <div class="img-1"></div>
                                        <div class="img-2"></div>
                                        <div class="img-3"></div>
                                    </td>
                                    <td>
                                        <span class="badge warning">Procesandose</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="summary">
                        <div class="summary-card">
                            <div class="summary-single">
                                <span class="ti-id-badge"></span>
                                <div>
                                    <h5>196</h5>
                                    <small>Number of staff</small>
                                </div>
                            </div>
                            <div class="summary-single">
                                <span class="ti-calendar"></span>
                                <div>
                                    <h5>16</h5>
                                    <small>Number of leave</small>
                                </div>
                            </div>
                            <div class="summary-single">
                                <span class="ti-face-smile"></span>
                                <div>
                                    <h5>12</h5>
                                    <small>Profile update request</small>
                                </div>
                            </div>
                        </div>

                        <div class="bday-card">
                            <div class="bday-flex">
                                <div class="bday-img"></div>
                                <div class="bday-info">
                                    <h5>Alberto Bernal</h5>
                                    <small>Cumpleaños</small>
                                </div>
                            </div>
                            <div class="text-center">
                                <button>
                                    <span class="ti-gift"></span>
                                    Wish him
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

</body>

</html>
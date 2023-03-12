<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    
    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/46f8b2561d.js" crossorigin="anonymous"></script>

    <title>Productos - Heladitos Gourmet</title>
</head>
<body>
    <!-- Top -->
    <header>
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">Ayuda</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">Soporte</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="home.php" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Heladitos</span>Gourmet</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="home.php" class="nav-item nav-link">Inicio</a>
                        <a href="productos.php" class="nav-item nav-link active">Productos</a>
                    </div>
                    <a href="home.php" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Heladitos</span>Gourmet</h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">
                        <a href="ventas.php" class="nav-item nav-link">Ventas</a>
                        <a href="###" class="nav-item nav-link">Usuarios</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    </header>

    <!-- Titulo -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Productos</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Helados</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Paletas</p>
            </div>
        </div>
    </div>

    <!-- Boton de agregar -->
    <div class="container">
        <h1 class="section-title position-relative text-center mb-5">Agregar nuevo producto</h1>
        <div class="d-flex justify-content-evenly">
            <!-- BOTÓN MODAL **AGREGAR** -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#agregarProducto">
            AGREGAR
            </button>

            <!-- MODAL **AGREGAR** -->
            <div class="modal fade" id="agregarProducto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Agregar producto</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form class="" method="POST">
                                    <?php
                                    include "php/registro_paletas.php";
                                    ?>
                                <div>
                                    <label for="exampleInputEmail1" class="form-label">Sabor</label>
                                    <input type="text" class="form-control" id="sabor" name="sabor">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Costo</label>
                                    <input type="number" class="form-control" id="Costo" name="Costo">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Precio</label>
                                    <input type="number" class="form-control" id="Precio" name="Precio">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Precio al Mayoreo</label>
                                    <input type="number" class="form-control" id="Precio_m" name="Precio_m">
                                </div> 
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-primary">Editar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

            <!-- MODAL **EDITAR** -->
            <div class="modal fade" id="editarProducto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Editar producto</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid row">
                                <form class="" method="POST">
                                    <?php
                                    include "php/registro_paletas.php";
                                    ?>
                                <div>
                                    <label for="exampleInputEmail1" class="form-label">Sabor</label>
                                    <input type="text" class="form-control" id="sabor" name="sabor">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Costo</label>
                                    <input type="number" class="form-control" id="Costo" name="Costo">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Precio</label>
                                    <input type="number" class="form-control" id="Precio" name="Precio">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Precio al Mayoreo</label>
                                    <input type="number" class="form-control" id="Precio_m" name="Precio_m">
                                </div> 
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancelar</button>
                                                    <button type="button" class="btn btn-primary">Editar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

            <!-- MODAL **ELIMINAR** -->
            <div class="modal fade" id="eliminarProducto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Eliminar producto</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ¿Estás seguro que deseas eliminar este producto?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Productos / TABLA -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Productos</h1>
                </div>

                <script>
                    function eliminar(){
                    var respuesta=confirm("¿Estas seguro que deseas eliminar?");
                    return respuesta
                     }        
                </script>

                <?php
                    include "conexion.php";
                    include "php/eliminar_c.php";
                ?>

                <table class="table table-striped table-hover">
                    <thead class=bg-info>
                        <tr class="fila">
                            <style>
                                .fila {
                                    background-color: #30E3DF
                                }
                            </style>
                            <th scope="col">ID</th>
                            <th scope="col">Sabor</th>
                            <th scope="col">Costo</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Precio AL Mayoreo</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            include "conexion.php";
                            $sql=$conn->query("SELECT * FROM paletas");
                            while($datos=$sql->fetch_object()) { ?>
                            <tr>
                                <td><?= $datos->ID_Paleta ?></td>
                                <td><?= $datos->sabor ?></td>
                                <td><?= $datos->Costo ?></td>
                                <td><?= $datos->Precio ?></td>
                                <td><?= $datos->Precio_m ?></td>
                                <td>
                                    <button href="modificar_producto.php?id=<?= $datos->ID_Paleta ?>" type="button" class="btn btn-warning fa-solid fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#editarProducto"></button>
                                    <a onclick="return eliminar()" href="productos.php?id=<?= $datos->ID_Paleta ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>   
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="container-fluid footer bg-light py-5" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <a href="index.html" class="navbar-brand m-0">
                        <h1 class="m-0 mt-n2 display-4 text-primary"><span class="text-secondary">Heladitos</span>Gourmet</h1>
                    </a>
                </div>
                <div class="col-12 mb-4">
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-youtube"></i></a>
                </div>
                <div class="col-12 mt-2 mb-4">
                    <div class="row">
                        <div class="col-sm-6 text-center text-sm-right border-right mb-3 mb-sm-0">
                            <h5 class="font-weight-bold mb-2">Sede Principal</h5>
                            <p class="mb-2">Av. Central Barrio de Santa Ana </p>
                            <p class="mb-2">Campeche, Campeche, México</p>
                            <p class="mb-0">+52 981 234 5678</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-left">
                            <h5 class="font-weight-bold mb-2">Horas de servicio</h5>
                            <p class="mb-2">Lunes – Sábado, 10 AM – 6PM</p>
                            <p class="mb-0">Domingo: Cerrado</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <p class="m-0">&copy; <a href="#">UNID</a>. Todos los derechos reservados. Materia: <a href="">Programación Estructurada</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
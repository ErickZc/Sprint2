<?php

session_start();

if (isset($_SESSION["usuario"])) {
   
    if (isset($_GET["cerrar"]) && $_GET["cerrar"] == "true") {
        cerrarSesion();
    } else if(isset($_GET["ver"]) && $_GET["ver"] == "plato") {
        mostrarPlato();
    } else if(isset($_GET["ver"]) && $_GET["ver"] == "restaurante" && isset($_GET['id'])) {
        mostrarRestaurante();
    }else{
        
        login();
    }
} else if (isset($_POST["pers"]) && isset($_POST["password"])) {
    ingresar();
} else if(isset($_POST['addUs'])){
    agregarCliente();
} else {
    index();
}

mostrarRestaurante(){

    
}

function mostrarPlato(){
    require_once('../dao/PlatoDao.php');
    $plato = new Plato();
    $platoDao = new PlatoDao();

    $_SESSION['platos'] = $platoDao->mostrar();
    //var_dump($_SESSION['platos']);
    header('Location: ../view/plato.php');
}


function agregarCliente(){
    require_once("../dao/ClienteDao.php");
    $cliente = new Cliente();
    $cliente->nombre_cliente = $_POST['addNombre'];
    $cliente->apellido_cliente = $_POST['addApellido'];
    $cliente->direccion_cliente = $_POST['addDireccion'];
    $cliente->correo_cliente = $_POST['addCorreo'];
    $cliente->password_cliente = $_POST['addPassword'];
    

    $clienteDao = new ClienteDao();
    if($clienteDao->agregar($cliente) > 0){
        login();
    }else{
        index();
    }

}

function ingresar(){
    require_once('../dao/ClienteDao.php');
    $cliente = new cliente();
    $cliente->correo_cliente = $_POST['pers'];
    $cliente->password_cliente = $_POST['password'];
    $clienteDao = new clienteDao();
    if($clienteDao->verificarCliente($cliente)){

        if($clienteDao->mostrarCod_Rol($cliente) == 1){
            $_SESSION['usuario'] = 'TRUE';
            $_SESSION['cod_rol'] = 1;
            principal();
        }else if($clienteDao->mostrarCod_Rol($cliente) == 2){
            $_SESSION['usuario'] = 'TRUE';
            $_SESSION['cod_rol'] = 2;
            rol_cliente();
        }else if($clienteDao->mostrarCod_Rol($cliente) == 3){
            $_SESSION['usuario'] = 'TRUE';
            $_SESSION['cod_rol'] = 3;
            rol_admin_restaurante();
        }else{
            login();
        }

       //echo "string"; 

    }else{
        login();
    }
    
}

function rol_cliente(){
    header('Location:../view/cliente.php');
}

function rol_admin_restaurante(){
    header('Location:../view/restaurante.php');
}

function index(){
    header('Location:../index.php');
}
function principal(){
    header('Location: ../view/admin.php');
}

function login(){
    header('Location: ../view/login.php');
}


function cerrarSesion(){
    session_start();
    session_destroy();
    index();

}

?>
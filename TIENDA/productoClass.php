<?php
//incluyo el archivo que contiene los datos de la conexion
require_once("database.php");

//Cre la clase Producto - Esta controlará todas las acciones del CRUD
class Producto{
    //propiedades
    private $id;
    private $nombre;
    private $descripcion;
    private $precio;

    //propiedad que maneja la conexión a la BD
    protected $conn;

    //Método constructor
    public function __construct($id=0, $nombre="", $descripcion="", $precio=""){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;

        //cremos la conexión a la BD
        $this->conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD);
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    //Metodos setter para cada propiedad
    public function setId($id){
        $this->id = $id;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    public function setPrecio($precio){
        $this->precio = $precio;
    }

    //Metodos getters para cada propiedad
    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getPrecio(){
        return $this->precio;
    }

    //Metodo para insertar en la BD
    public function insertarDatos(){
        try{
            $stm = $this->conn->prepare("INSERT INTO productos (nombre, descripcion, precio) VALUES (?,?,?)");
            $stm->execute([$this->nombre, $this->descripcion, $this->precio]);
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    //Metodo para traer todos los productos de la BD
    public function traerTodos(){
        try{
            $stm = $this->conn->prepare("SELECT * FROM productos");
            $stm->execute();
            return $stm->fetchAll();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    //Metodo para buscar un producto por Id
    public function traerUno(){
        try{
            $stm = $this->conn->prepare("SELECT * FROM productos WHERE id=?");
            $stm->execute([$this->id]);
            return $stm->fetchAll();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    //Metodo para actualizar un producto
    public function actualizar(){
        try{
            $stm = $this->conn->prepare("UPDATE productos SET nombre=?, descripcion=?, precio=? WHERE id=?");
            $stm->execute([$this->nombre, $this->descripcion, $this->precio, $this->id]);
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    //Metodo para iliminar un producto
    public function eliminar(){
        try{
            $stm = $this->conn->prepare("DELETE FROM  productos WHERE id=?");
            $stm->execute([$this->id]);
            return $stm->fetchAll();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }
    
}

?>
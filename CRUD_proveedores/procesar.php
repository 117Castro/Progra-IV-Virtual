
<?php
    include('../configuracion/configuracion.php');
    extract($_REQUEST);
    $proveedor = isset($proveedor) ? $proveedor : '[]';
    $accion = isset($accion) ? $accion : '';

    $objProveedor = new Proveedor($conexion);
    if($accion=='consultar'){
        print_r( json_encode($objProveedor->obtener_datos()) );
    }else if($accion=='eliminar'){
        print_r( json_encode($objProveedor->eliminar_datos()) );
    }else{
        print_r( $objProveedor->recibir_datos($proveedor) );
    }
    
    class Proveedor{
        private $datos=[], $db;
        public $resp = ['msg'=>'ok'];

        public function __construct($db){
            $this->db=$db;
        }
        public function obtener_datos(){
            $this->db->consultas('SELECT * FROM proveedor');
            return $this->db->obtener_datos();
        }
        public function eliminar_datos(){
            global $idProveedor;
            return $this->db->consultas('
                DELETE proveedor FROM proveedor
                WHERE idProveedor=?', $idProveedor

            );
        }
        public function recibir_datos($proveedor){
            $this->datos = json_decode($proveedor, true);
            return $this->validar_datos();
        }
        private function validar_datos(){
            if( empty($this->datos['marca']) ){
                $this->resp['msg'] = 'Por favor ingrese el nombre del Proveedor';
            } 
            if( empty($this->datos['descripcion']) ){
                $this->resp['msg'] = 'Por favor ingrese una descripcion del producto';
            }
            if( empty($this->datos['cantidad']) ){
                $this->resp['msg'] = 'Por favor ingrese una cantidad del producto';
            }
            if( empty($this->datos['fecha']) ){
                $this->resp['msg'] = 'Por favor ingrese una fecha';
            }
            return $this->administrar_proveedor();
        }
        private function administrar_proveedor(){
            global $accion;
            if( $this->resp['msg']=='ok' ){
                if( $accion=='nuevo' ){
                    return $this->db->consultas('
                        INSERT INTO proveedor (marca, descripcion, cantidad, fecha)
                        VALUES(?,?,?,?)',$this->datos['marca'], $this->datos['descripcion'],
                        $this->datos['cantidad'], $this->datos['fecha']
                    );
                }else if( $accion=='modificar' ){
                    return $this->db->consultas('
                        UPDATE proveedor SET marca=?, descripcion=?, cantidad=?, fecha=?
                        WHERE idProveedor=?', $this->datos['marca'], $this->datos['descripcion'],
                        $this->datos['cantidad'], $this->datos['fecha'], $this->datos['idProveedor']
                    );
                }
            }else{
                return $this->resp;
            }

        }
    }
?>
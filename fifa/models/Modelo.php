<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexion
 *
 * @author Oscar
 */
class Modelo extends Conexion {

    public $db;

    function Modelo() {
        parent::Conexion();
    }

    public function consulta_datos() {
        $rs = $this->db->Execute('SELECT * from ' . $this->nombre_tabla);
        $this->get_error($rs, 'Error en consulta datos');
        return $rs;
    }

    public function consulta_sql($sql) {
        $rs = $this->db->Execute($sql);
        $this->get_error($rs, 'Error en consulta datos');
        return $rs;
    }

    public function inserta($rs) {
        $sql_insert = $this->db->GetInsertSQL($this->nombre_tabla, $rs);
        return $this->get_error($this->db->Execute($sql_insert), 'Error en Modelo.inserta');
    }

    public function get_error($result, $tipo_error) {
        if ($result === false) {
            die('Redireccionar a la pagina de error: '. $DB->ErrorMsg() .' '. $tipo_error);
            return false;
        } else {
            return true;
        }
    }

    public function show_grid($select = '*', $where = ' ', $num = '10') {
        $sql = "SELECT " . $select . " 
                FROM " . $this->nombre_tabla . " 
                " . $where;
        $grid = new ADODB_Pager($this->db, $sql);
        $grid->Render($rows_per_page = $num);
    }

    public function actualiza($id) {
        if (is_integer($id)) {
            $sql = "SELECT * FROM  " . $this->nombre_tabla . " 
                WHERE id = " . $id;

            $record = $this->db->Execute($sql);
            $rs = array();
            $rs['nombre'] = 'PEDROOOOOOO';
            $rs['email'] = 'pedroo@nnnnn.mmm';
            $rs['password'] = '0000000';

            $sql_update = $this->db->GetUpdateSQL($record, $rs);
            $this->get_error($this->db->Execute($sql_update), 'Error al actualizar');
        } else {
            die('OJO ');
        }
    }

    public function elimina($where = 'null') {

        if ($where == 'null')
            $sql = "DELETE FROM " . $this->nombre_tabla;
        else
            $sql = "DELETE FROM " . $this->nombre_tabla . "
                    WHERE " . $where;

        return $this->get_error($this->db->Execute($sql), "Error al eliminar");
    }

    public function getDropDown($tabla,$name,$id,$idop,$nombre,$where = ' '){
        $rs = $this->consulta_sql(" select ".$idop.",".$nombre." from $tabla ".$where);
        $rows = $rs->GetArray();
        $dropDown = '<select class="form-control" id="'.$id.'" name="'.$name.'">';
        foreach ($rows as $key => $value) {
            $dropDown.= '<option value="'.$value[$idop].'">'.utf8_encode($value[$nombre]).'</option>';
        }
        $dropDown.= '</select>'; 
        return $dropDown;
        }

 public function IntegrantesLibres(){
        $rs = $this->consulta_sql("select i.id_integrante, i.nombre,i.apellido  from Integrante i left join jugador j on (j.id_integrante=i.id_integrante) left join entrenador
         e on e.id_integrante=i.id_integrante where j.id_jugador is null and e.id_entrenador is null ");
        $rows = $rs->GetArray();
        $dropDown = '<select class="form-control" id="id_integrante" name="id_integrante">';
        if (count($rows)>0){
        foreach ($rows as $key => $value) {
            $dropDown.= '<option value="'.$value['id_integrante'].'">'.utf8_encode($value['nombre']." ".$value['apellido']).'</option>';
        }
        }else{
            $dropDown.= '<option>No se han registrado jugadores</option>';
        }
        $dropDown.= '</select>'; 
        return $dropDown;
        }


    public function ListaEquipos($select , $tabla, $where  ) {
        $sql = "SELECT " . $select . " 
                FROM " . $tabla . " 
                " . $where;
        $resultado = $this->consulta_sql($sql);
        $filas = $resultado->GeTArray();
        $cadena = "<table class='CSSTableGenerator'>";
        $cadena.= "<tr>";
        $cadena.= "<th>Equipo</th>";
        $cadena.= "<th>Escudo</th>";
        $cadena.= "</tr>";
        for ($i=0; $i < count($filas); $i++) { 
            $cadena.= "<tr>";
            $cadena.= "<td>".$filas[$i][0]."</td>";
            $cadena.= "<td><img class='escudo' src='../archivos/".$filas[$i][1]."'/></td>";
            $cadena.= "</tr>";
        }
        $cadena.="</table>";
        echo $cadena;
    }
    
    public function Jugadores() {
        $sql = "select (select nombre from equipo where id_equipo = i.id_equipo), apellido,foto from integrante i inner join jugador j on j.id_integrante=i.id_integrante";
        $resultado = $this->consulta_sql($sql);
        $filas = $resultado->GeTArray();
        $cadena = "<table class='CSSTableGenerator'>";
        $cadena.= "<tr>";
        $cadena.= "<th>Equipo</th>";
        $cadena.= "<th>Nombre</th>";
        $cadena.= "<th>Foto</th>";
        $cadena.= "</tr>";
        for ($i=0; $i < count($filas); $i++) { 
            $cadena.= "<tr>";
            $cadena.= "<td>".$filas[$i][0]."</td>";
            $cadena.= "<td>".$filas[$i][1]."</td>";
            $cadena.= "<td><img class='foto' src='../archivos/".$filas[$i][2]."'/></td>";
            $cadena.= "</tr>";
        }
        $cadena.="</table>";
        echo $cadena;
    }
    
    public function Entrenadores() {
        $sql = "select (select nombre from equipo where id_equipo = i.id_equipo), apellido,foto from integrante i inner join entrenador j on j.id_integrante=i.id_integrante";
        $resultado = $this->consulta_sql($sql);
        $filas = $resultado->GeTArray();
        $cadena = "<table class='CSSTableGenerator'>";
        $cadena.= "<tr>";
        $cadena.= "<th>Equipo</th>";
        $cadena.= "<th>Nombre</th>";
        $cadena.= "<th>Foto</th>";
        $cadena.= "</tr>";
        for ($i=0; $i < count($filas); $i++) { 
            $cadena.= "<tr>";
            $cadena.= "<td>".$filas[$i][0]."</td>";
            $cadena.= "<td>".$filas[$i][1]."</td>";
            $cadena.= "<td><img class='foto' src='../archivos/".$filas[$i][2]."'/></td>";
            $cadena.= "</tr>";
        }
        $cadena.="</table>";
        echo $cadena;
    }
    

}
?>
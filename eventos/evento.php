<?php

class Evento {

    function __construct() {
        $this->evento_id = 0;
        $this->titulo = '';
		$this->textocorto = '';
		$this->textolargo = '';
		$this->img = '';
		$this->textolink = '';
		$this->linkeo = '';
      
    }
      
    public function save() {
        if($this->evento_id == 0) {
            $sql = "INSERT INTO evento (titulo,textocorto,textolargo,img,textolink,linkeo) VALUES (?,?,?,?,?,?)";
            $data = array("ssssss", "{$this->titulo}", "{$this->textocorto}", "{$this->textolargo}", 
			"{$this->img}", "{$this->textolink}", "{$this->linkeo}");
            $this->evento_id = DBObject::ejecutar($sql, $data);
        } else {
            $sql = "UPDATE evento SET titulo = ?, textocorto = ?, textolargo = ?, img = ?,
			textolink = ?, linkeo = ? WHERE evento_id = ?";
            $data = array("ssssssi", "{$this->titulo}", "{$this->textocorto}", "{$this->textolargo}", 
			"{$this->img}", "{$this->textolink}", "{$this->linkeo}", "{$this->evento_id}");
            DBObject::ejecutar($sql, $data);
        }
    }
        
    public function get() {
        $sql = "SELECT titulo,textocorto,textolargo,img,textolink,linkeo FROM evento WHERE evento_id = ? ";
        $data = array("i", "{$this->evento_id}");
        $fields = array("titulo" => "", "textocorto" => "", "textolargo" => "", "img" => "", "textolink" => "", "linkeo" => "");
        DBObject::ejecutar($sql, $data, $fields);
        $this->titulo = $fields['titulo'];
		$this->textocorto = $fields['textocorto'];
		$this->textolargo = $fields['textolargo'];
		$this->img = $fields['img'];
		$this->textolink = $fields['textolink'];
		$this->linkeo = $fields['linkeo'];
    }
    
    public function destroy() {
        $sql = "DELETE FROM evento WHERE evento_id = ?";
        $data = array("i", "{$this->evento_id}");
        DBObject::ejecutar($sql, $data);
    }
    
}


class ColeccionEventos {

    function __construct() {
        $this->eventos = array();
    }
    
    function add_evento(Evento $evento) {
        $this->eventos[] = $evento;
    }
    
    function get_coleccion() {
        $sql = "SELECT evento_id FROM evento WHERE evento_id <> ?  ORDER BY evento_id DESC";
        $data = array("i", "0");
        $fields = array("evento_id"=>"");
        $registros = DBObject::ejecutar($sql, $data, $fields);
        foreach($registros as $array) {
            $eve = new Evento();
            $eve->evento_id = $array['evento_id'];
            $eve->get();
            $this->add_evento($eve);
        }
    }

}


?>

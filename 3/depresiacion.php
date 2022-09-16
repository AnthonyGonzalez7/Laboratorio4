<?php

class depresiacion{
    public $po, $vidau,$dep, $i, $res1, $res2;

    public function getpo(){
        return $this->po;
    }
    public function getvidau(){
        return $this->vidau;
    }
    public function setpo($po){
        $this->po=$po;
    }
    public function setvidau($vidau){
        $this->vidau=$vidau;
    }
    
    public function Procesos(){
        $this->dep = $this-> po / $this-> vidau;
        $this->res1 = $this->po;
        $this->res2 = 0;

        for($this->i=0; $this->i <= $this->vidau; $this->i++){
            
            echo '
                <tr>
                    <th scope="row"><center>'.$this->i.'</center></th>
                    <td><center>'.$this->res1.'</center></td>
                    <td><center>'.$this->res2.'</center></td>
                </tr>

                ';

                $this->res1 = $this->res1 - $this->dep;
                $this->res2 = $this->res2 + $this->dep;

        }
    }

}


?>
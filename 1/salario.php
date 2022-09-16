<?php

    class salario{
        public $ht;
        public $ppht;
        public $sn;
        public $sb;
        public $desc;
        public function getht(){
            return $this->ht;
        }
        public function getppht(){
            return $this->ppht;
        }
        public function setht($ht){
            $this->ht=$ht;
        }
        public function setppht($ppht){
            $this->ppht=$ppht;
        }
            
        
        public function Procesos(){
            $this->sb=$this->ht*$this->ppht;
            $this->desc=0.2*$this->sb;
            $this->sn=$this->sb*$this->desc;
            return '    <td>'.$this->sb.'</td>
                        <td>'.$this->desc.'</td>
                        <td>'.$this->sn.'</td>
            ';
            
        }
    }

    
?>
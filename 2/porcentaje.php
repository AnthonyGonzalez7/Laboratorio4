<?php 

class porcentaje{
    public $cantam;
    public $cantaf;
    public $pam;
    public $paf;
    public $totalest;
    
    public function getcantam(){
        return $this->cantam;
    }
    public function getcantaf(){
        return $this->cantaf;
    }
    public function setcantam($cantam){
        $this->cantam=$cantam;
    }
    public function setcantaf($cantaf){
        $this->cantaf=$cantaf;
    }

    public function Procesos(){
        $this->totalest=$this->cantam+$this->cantaf;
        $this->pam=($this->cantam/$this->totalest)*100;
        $this->paf=($this->cantaf/$this->totalest)*100;

        if($this->pam < 61){
            $color1="secundary";
            }elseif($this->pam >= 61 & $this->pam<= 70){
                $color1="danger";
                }elseif($this->pam >= 71 & $this->pam <=80){
                    $color1="warning";
                    }elseif($this->pam >= 81 & $this->pam <=90){
                        $color1="info";
                        }elseif($this->pam > 90){
                            $color1="success";
                            }

        if($this->paf < 61){
            $color="secundary";
            }elseif($this->paf  >= 61 & $this->paf  <= 70){
                $color="danger";
                }elseif($this->paf >= 71 & $this->paf  <=80){
                    $color="warning";
                    }elseif($this->paf >= 81 & $this->paf<=90){
                        $color="info";
                        }elseif($this->paf  > 90){
                            $color="success";
                            }                   

        return '<tr>

                    <th scope="row">Masculino</th>
                    <td>'.$this->cantam.'</td>
                    <td>'.round($this->pam, 2).'%</td>
                    <td><div class="progress">
                    <div class="progress-bar bg-'. $color1.' progress-bar-striped progress-bar-animated" role="progressbar" style="width:'. $this->pam.'%;" aria-valuenow="'.$this->cantam.'" aria-valuemin="0" aria-valuemax="100">'. round($this->pam, 2).'%</div>
                    </div></td>

                </tr>  

                <tr>

                    <th scope="row">Femenino</th>
                    <td>'.$this->cantaf.'</td>
                    <td>'.round($this->paf,2).'%</td>
                    <td><div class="progress">
                    <div class="progress-bar bg-'. $color.' progress-bar-striped progress-bar-animated" role="progressbar" style="width:'.$this->paf.'%;" aria-valuenow="'.$this->paf.'" aria-valuemin="0" aria-valuemax="100">'. round($this->paf, 2).'%</div>
                    </div></td>

                </tr>';
    }


}


?>
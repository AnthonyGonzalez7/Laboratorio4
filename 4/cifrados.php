<?php

class cifrados{
    public $texto, $salt, $c1base64, $c2md5, $c3sha1, $c4crc32, $c5crypt, $c6hsha224, $c7hsha512, $c8hwhirlpool, $c9hsnefru, $c10hhaval1283, $c11hhaval1285;


    public function gettexto(){
        return $this->texto;
    }
    public function getsalt(){
        return $this->salt;
    }
    public function settexto($texto){
        $this->texto=$texto;
    }
    public function setsalt($salt){
        $this->salt=$salt;
    }
    public function Proceso1(){
        $this->c1base64 = base64_encode( $this->salt.$this->texto );
        return '<tr>
                    <th scope="row">Base64</th>
                    <td>'.$this->c1base64.'</td>
                </tr>';


    }
    public function Proceso2(){
        $this->c2md5 = md5( $this->salt.$this->texto );
        return '<tr>
                    <th scope="row">Md5</th>
                    <td>'.$this->c2md5.'</td>
                </tr>';
    }
    public function Proceso3(){
        $this->c3sha1 = sha1( $this->salt.$this->texto );
        return '<tr>
                    <th scope="row">Sha1</th>
                    <td>'.$this->c3sha1.'</td>
                </tr>';
    }
    public function Proceso4(){
        $this->c4crc32= crc32( $this->salt.$this->texto );
        return '<tr>
                    <th scope="row">Crc32</th>
                    <td>'.$this->c4crc32.'</td>
                </tr>';
    }
    public function Proceso5(){
        $this->c5crypt= crypt( $this->salt,$this->texto );
        return '<tr>
                    <th scope="row">Crypt</th>
                    <td>'.$this->c5crypt.'</td>
                </tr>';
    }
    public function Proceso6(){
        $this->c6hsha224= hash('sha224', $this->salt.$this->texto );
        return '<tr>
                    <th scope="row">Hash-sha234</th>
                    <td>'.$this->c6hsha224.'</td>
                </tr>';
    }
    public function Proceso7(){
        $this->c7hsha512= hash('sha512', $this->salt.$this->texto );
        return '<tr>
                    <th scope="row">Hash-sha512</th>
                    <td>'.$this->c7hsha512.'</td>
                </tr>';
    }
    public function Proceso8(){
        $this->c8hwhirlpool= hash('whirlpool', $this->salt.$this->texto );
        return '<tr>
                    <th scope="row">Hash-whirlpool</th>
                    <td>'.$this->c8hwhirlpool.'</td>
                </tr>';
    }
    public function Proceso9(){
        $this->c9hsnefru= hash('snefru', $this->salt.$this->texto );
        return '<tr>
                    <th scope="row">Hash-snefru</th>
                    <td>'.$this->c9hsnefru.'</td>
                </tr>';
    }
    public function Proceso10(){
        $this->c10hhaval1283= hash('haval128,3', $this->salt.$this->texto );
        return '<tr>
                    <th scope="row">Hash-haval128,3</th>
                    <td>'.$this->c10hhaval1283.'</td>
                </tr>';
    }
    public function Proceso11(){
        $this->c11hhaval1285= hash('haval128,5', $this->salt.$this->texto );
        return '<tr>
                    <th scope="row">Hash-haval128,5</th>
                    <td>'.$this->c11hhaval1285.'</td>
                </tr>';
    }


}

?>
<?php

    class componentes{

        public static function myModal($texto_boton, $color_boton, $titulo_modal, $texto_cuerpo, $texto_bt_cerrar, $texto_bt_ir, $vinculo_bt_ir){
            return '
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-'.$color_boton.'" data-bs-toggle="modal" data-bs-target="#exampleModal">
               '.$texto_boton.'
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog        ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">'.$titulo_modal.'</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            '.$texto_cuerpo.'
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">'.$texto_bt_cerrar.'</button>
                            <a href="'.$vinculo_bt_ir.'"><button type="button" class="btn btn-primary">'.$texto_bt_ir.'</button>
                        </div>
                    </div>
                </div>
            </div> 
            ';         
        }

        public static function myAlert($color_alert, $texto_alert){
            return' 
            <div class="alert alert-'.$color_alert.'" role="alert">
                '.$texto_alert.'
            </div>
            ';
            
        }

        public static function myBadge($texto1_badge, $texto2_badge){
            return '

            <h1>'.$texto1_badge.' <span class="badge bg-secondary">'.$texto2_badge.'</span></h1>

            ';
        }

        public static function myBreadcrumb($texto1_bc, $texto2_bc, $texto3_bc){
            return '

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">'.$texto1_bc.'</a></li>
                    <li class="breadcrumb-item"><a href="#">'.$texto2_bc.'</a></li>
                    <li class="breadcrumb-item active" aria-current="page">'.$texto3_bc.'</li>
                </ol>
            </nav>
            ';


        }


    }
?>

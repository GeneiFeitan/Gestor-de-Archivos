<?php 

  require('../Modelo/lib/pdf/mpdf.php');
  require('../Controlador/getMinuta.php');

 
    while ($productos[] = $datos->fetch(PDO::FETCH_ASSOC));

     $html = ' <header class="clearfix">
     
      <div id="logo">
        <img src="../img/inifap.png" width="300" height="90">
      </div>
      <h1>Minuta</h1>
      <div id="company" class="clearfix">
        <div>INIFAP,<br />CENID-PAVET , MEX</div>
        <div>(777) 319-2860</div>
      </div>
      <div id="project">
        <div><span>INSTITUCION</span> Instituto Nacional de Investigaciones Forestales, Agricolas y Pecuarias</div>
        <div><span>DIRECTOR</span> Dr. Julio Vicente Figueroa Millan</div>
        <div><span>DIRECCION</span> Carretera Federal Cuernavaca Cuautla 8534, 62574 Jiutepec, Mor.</div>
        <div><span>CORREO</span> <a href="mailto:ejemplo@inifap.gob.mx">ejemplo@inifap.gob.mx</a></div>
      </div>
    </header>
    <main>
      
            <p><Strong>Id Minuta:</Strong></p>';
        foreach ($productos as $producto) {
            $html.= '<p>'.$producto['id_minuta'].'</p>';
        }

       $html.='<p class="mainP"><Strong>Nombre:</Strong></p>';
           foreach ($productos as $producto) {
            $html.= '
                        <p>'.$producto['nombreMin'].'</p>
                      ';
        }


       $html.='<p class="mainP"><Strong>Fecha:</Strong></p>';

       foreach ($productos as $producto) {
            $html.= '
                        <p id="campo">'.$producto['fecha'].'</p>
                     ';
        }

       $html.='<p class="mainP"><Strong>Asistentes:</Strong></p>';
       foreach ($productos as $producto) {
            $html.= '
                        <p id="campo">'.$producto['asistentes'].'</p>
                      ';
        }

        $html.='<p class="mainP"><Strong>Informes:</Strong></p>';
       foreach ($productos as $producto) {
            $html.= '
                        <p id="campo">'.$producto['informes'].'</p>
                      ';
        }

        $html.='<p class="mainP"><Strong>Motivo:</Strong></p>';
       foreach ($productos as $producto) {
            $html.= '
                        <p id="campo">'.$producto['motivo'].'</p>
                      ';
        }

        $html.='<p class="mainP"><Strong>Anuncios:</Strong></p>';
       foreach ($productos as $producto) {
            $html.= '
                        <p id="campo">'.$producto['anuncios'].'</p>
                      ';
        }

         $html.='<p class="mainP"><Strong>Área:</Strong></p>';
        foreach ($productos as $producto) {
            $html.= '
                        <p id="campo">'.$producto['NomArea'].'</p>
                      ';
        }


         foreach ($productos as $producto) {
           $html.= '
    <div class="flex-container">        
   <div>
   <br><br>

   <table style="position: absolute;
  left: 150%;
  top: 150%; ">

    <tr>
    <th>'.$producto['resp1'].'</th>
    <th>'.$producto['resp2'].'</th>
    </tr>

    <tr>
     <td>'.$producto['puesto1'].'</td>
    <td>'.$producto['puesto2'].'</td>
    </tr>
        

    <tr>
    <th>'.'<br> <br>'.'</th>
    <th>'.'<br> <br>'.'</th>
    
    </tr>
    <tr>
    <th>'.'<br> <br>'.'</th>
    <th>'.'<br> <br>'.'</th>
    
    </tr>

    <tr>
    <th>'.'<br> <br>'.'</th>
    <th>'.'<br> <br>'.'</th>
    
    </tr>

    <tr>
 </tr>
    <tr>
    <th>'.$producto['resp3'].'</th>
    <th>'.$producto['resp4'].'</th>
    </tr>
    <tr>
     <td>'.$producto['puesto3'].'</td>
    <td>'.$producto['puesto4'].'</td>
    </tr>

    <tr>
    <th>'.'<br> <br>'.'</th>
    <th>'.'<br> <br>'.'</th>
    
    </tr>
    <tr>
    <th>'.'<br> <br>'.'</th>
    <th>'.'<br> <br>'.'</th>
    
    </tr>

    <tr>
    <th>'.'<br> <br>'.'</th>
    <th>'.'<br> <br>'.'</th>
    
    </tr>

    
    <tr>
    <th>'.$producto['resp5'].'</th>
    <th>'.$producto['resp6'].'</th>
    </tr>
    <tr>
     <td>'.$producto['puesto5'].'</td>
    <td>'.$producto['puesto6'].'</td>
    </tr>
        

    <tr>
    <th>'.'<br> <br>'.'</th>
    <th>'.'<br> <br>'.'</th>
    
    </tr>
    <tr>
    <th>'.'<br> <br>'.'</th>
    <th>'.'<br> <br>'.'</th>
    
    </tr>

    <tr>
    <th>'.'<br> <br>'.'</th>
    <th>'.'<br> <br>'.'</th>
    
    </tr>

    <tr>
    <th>'.$producto['resp7'].'</th>
    <th>'.$producto['resp8'].'</th>
    </tr>
    <tr>
     <td>'.$producto['puesto7'].'</td>
    <td>'.$producto['puesto8'].'</td>
    </tr>

   </table>
    
    </div>
   </div>';
         }

   $html.= '

   
    </main>';


    $mpdf = new mPDF('c','A4');
    $css = file_get_contents('../css/reporteMin.css');
    $mpdf->writeHTML($css, 1);  
    $mpdf->writeHTML($html);
    $mpdf->Output('reporteMinuta.pdf','I');
?>
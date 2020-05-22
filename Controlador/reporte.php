<?php

    require('../Modelo/lib/pdf/mpdf.php');
    require('../Modelo/evento.php');

    $evento = new Evento();
    $datos = $evento->selectM();

    while ($productos[] = $datos->fetch(PDO::FETCH_ASSOC));

     $html = ' <header class="clearfix">
      <div id="logo">
        <img src="../img/inifap.png" width="300" height="90">
      </div>
      <h1>REPORTE DE EVENTOS</h1>
       <div id="company" class="clearfix">
        <div>INIFAP,<br />CENID-PAVET , MEX</div>
        <div>(777) 319-2860</div>
      </div>
      <div id="project">
        <div><span>INSTITUCION</span> Instituto Nacional de Investigaciones Forestales, Agricolas y Pecuarias</div>
        <div><span>DIRECTOR</span> DR. Julio Vicente Figueroa Millan</div>
        <div><span>DIRECCION</span> Carretera Federal Cuernavaca Cuatla 8534, 62574 Jiutepec Mor.</div>
        <div><span>CORREO</span> <a href="mailto:ejemplo@inifap.gob.mx">ejemplo@inifap.gob.mx</a></div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">Id Evento</th>
            <th class="desc">Nombre Evento</th>
            <th>Fecha</th>
            <th>Ubicación</th>
            <th>Área</th>
          </tr>
        </thead>
        <tbody>';

        foreach ($productos as $producto) {
            $html.= '<tr>
                        <td class="service">'.$producto['id_evento'].'</td>
                        <td class="desc">'.$producto['nombre_evento'].'</td>
                        <td class="unit">'.$producto['fecha_evento'].'</td>
                        <td class="qty">'.$producto['ubicacion'].'</td>
                        <td class="total">'.$producto['NomArea'].'</td>
                      </tr>';
        }

   $html.= '
        </tbody>
      </table>
    </main>';


    $mpdf = new mPDF('c','A4');
    $css = file_get_contents('../css/reporte.css');
    $mpdf->writeHTML($css, 1);  
    $mpdf->writeHTML($html);
    $mpdf->Output('reporteEventos.pdf','I');



?>
<?php 

$cliente        ="Fabis ";
$usuario        =" The wild tiger";

$destinatario   = '19040069@alumno.utc.edu.mx';
$asunto         = utf8_decode("COrreo BOnito")."";
$cuerpoEmail    = ' 
<table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
    <tr>
        <td style="padding: 0">
            <img style="padding: 0; display: block" src="https://royalcanin48horas.com.co/Registro48Horas/images/banneremailv2.jpg" width="100%">
        </td>
    </tr>
    
    <tr>
        <td style="background-color: #ffffff;">
            <div style="color: #34495e; margin: 4% 10% 2%; text-align: center;font-family: sans-serif">
                <h2 style="color: #333; margin: 0 0 7px">Hola Felicitaciones..!, '.$cliente.' te informo que el cliente <strong> '.$usuario.' </h2>
                <p style="margin: 2px; font-size: 18px"> ha recibido un códigos de descuento..
                <p>&nbsp;</p> 
                <p>Gracias por visitar mi canal <strong>WebDeveloper</strong>...</p>
                <p>&nbsp;</p>
            </div>
        </td>
    </tr>

    <tr>
        <td style="padding: 0;">
            <img style="padding: 0; display: block" src="https://royalcanin48horas.com.co/Registro48Horas/images/footeremail2.jpg" width="100%">
        </td>
    </tr>
</table>

'; 

$headers  = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$headers .= "From: The Wild Tiger <faviangamerx@gmail.com>\r\n"; 
$headers .= "Reply-To: "; 
$headers .= "Return-path:"; 
$headers .= "Cc:"; 
$headers .= "Bcc:"; 
$EnvioCriador    = mail($destinatario,$asunto,$cuerpoEmail,$headers);

?>

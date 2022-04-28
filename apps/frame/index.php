<?php 

require_once 'cdn.html';
?>

<!doctype html>
<html ng-app="todoApp">
  <head>
      <link rel="icon" href="images/logo.png" />

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
      <style type="text/css">
    body{

    }
    section{
      margin-top: -2px;
    }
  </style>
   <script src="todo.js"></script>
    <link rel="stylesheet" href="todo.css">
  </head>
  <body>
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark  aqua-gradient">

      <a class="navbar-brand" href="#"><img src="images/logo.png"width= "60" height="60"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
      aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" ><i class="fas fa-code"></i> Frameworks
            <span class="sr-only">(current)</span>
          </a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto nav-flex-icons">

          <li class="nav-item">
          <a class="nav-link waves-effect waves-light">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect waves-light">
            <i class="fab fa-facebook"></i>
          </a>
        </li> 
        
      </ul>
    </div>
  </nav>
   <section>
  <div class=" my-11 p-5 z-depth-10 unique-color-dark">


    <!--Section: Content-->
    <section class="text-center white-text">

      <!-- Section heading -->
      <h3 class="font-weight-bold mb-4 pb-2 text-uppercase"><i class="fas fa-code"></i> Frameworks</h3> <br>
      <!-- Section description -->
      <div class="row">
        <!-- Grid column -->
        <div class="col">
          <i class="fas fa-code-branch fa-3x purple-text"></i>
          <h5 class="font-weight-bold my-4 text-uppercase">AngularJS</h5>
          <p class=" mb-md-0 mb-5" align="left">AngularJS es Javascript. Es un proyecto de código abierto, realizado en Javascript que contiene un conjunto de librerías útiles para el desarrollo de aplicaciones web y propone una serie de patrones de diseño para llevarlas a cabo. En pocas palabras, es lo que se conoce como un framework para el desarrollo, en esta caso sobre el lenguaje Javascript con programación del lado del cliente.</p> 
           <p class=" mb-md-0 mb-5" align="text-center">Ejemplo: </p>
           <br>
<div class="container">
      <label>Nombre :</label>
   <input type="text" ng-model="yourName" placeholder="Ingresa tu nombre">
      <hr>
      <h4>Bienvenido {{yourName}}!</h4>

      </div>
        </div>
          <div class="col">
           <i class="fas fa-cogs fa-3x purple-text"></i>
            <h5 class="font-weight-bold my-4 text-uppercase">Lavarel</h5>
            <p class=" mb-md-0 mb-5" align="left">Laravel es uno de los frameworks de código abierto más fáciles de asimilar para PHP. Es simple, muy potente y tiene una interfaz elegante y divertida de usar. Fue creado en 2011 y tiene una gran influencia de frameworks como Ruby on Rails, Sinatra y ASP.NET MVC.</p>
            <p class=" mb-md-0 mb-5" align="text-center">Ejemplo: </p>
           <br>
             
 <div ng-controller="TodoListController as todoList">
      <span>{{todoList.remaining()}} de {{todoList.todos.length}} tareas</span>
      [ <a href="" ng-click="todoList.archive()">Archivar</a> ]
      <ul class="unstyled">
        <li ng-repeat="todo in todoList.todos">
          <label class="checkbox">
            <input type="checkbox" ng-model="todo.done">
            <span class="done-{{todo.done}}">{{todo.text}}</span>
          </label>
        </li>
      </ul>
      <form ng-submit="todoList.addTodo()">
        <input type="text" ng-model="todoList.todoText"  size="30"
               placeholder="agraga una nueva tarea">
        <input class="btn-primary" type="submit" value="add">
      </form>
</div>
          </div>
          <br>
          <br>
          <br>
          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col">

            <i class="fas fa-cubes fa-3x purple-text"></i>
              <h5 class="font-weight-bold my-4 text-uppercase">Node.JS </h5>
              <p class="mb-md-0 mb-5" align="left">Node.js es un entorno de tiempo de ejecución de JavaScript (de ahí su terminación en .js haciendo alusión al lenguaje JavaScript). Este entorno de tiempo de ejecución en tiempo real incluye todo lo que se necesita para ejecutar un programa escrito en JavaScript. También aporta muchos beneficios y soluciona muchísimos problemas, por lo que sería más que interesante realizar nuestro curso de Node.js para obtener las bases, conceptos y habilidades necesarias que nos motiven a profundizar en sus opciones e iniciar la programación. 
              </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col">

              <i class="fab fa-playstation fa-3x purple-text"></i>              <h5 class="font-weight-bold my-4 text-uppercase">Spring</h5>

              <p class="mb-md-0 mb-5"align="left">Spring se considera un framework, pero este es un concepto que en ocasiones da pie a equívocos, así que vamos a ver qué es un framework.
<br>
Una librería es un conjunto de clases, de funciones y de utilidades que nos permiten realizar algunos procesos. Un buen ejemplo de librería sería una librería matemática, a la cual le podemos dar muchos datos y nos puede calcular, por ejemplo, la desviación típica, o le podríamos plantear una integral y la podría resolver.
              </p>

            </div>
           
        
          </div>
          <!-- Grid row -->

        </section>
        <!--Section: Content-->


      </div>

    </section>



       <table style="max-width: 600px; padding: 10px; margin:1 auto; border-collapse: collapse;">
    <tr>
        <td style="padding: 0">
         <img style="padding: 0; display: block" src="https://images.vexels.com/media/users/3/215592/isolated/preview/49f9c03c3222f2d98af97badb58d5c08-encaje-floreciente-del-borde-del-corazon.png" width="500px">
        </td>
    </tr>
    
    <tr>
        <td style="background-color: #ffffff;">
            <div style="color: #34495e; margin: 4% 10% 2%; text-align: center;font-family: sans-serif">
                <h2 style="color: #333; margin: 0 0 7px">Hola la persona:  '.$subject.' Con el email <strong> '.$email.' </h2>
                <p style="margin: 2px; font-size: 18px"> Ha dejado el siguiente mensaje: '.$mensaje.' 
                <p>&nbsp;</p> 
                <p>&nbsp;</p>
            </div>
        </td>
    </tr>

    <tr>
        <td style="padding: 0;">
            <img style="padding: 0; display: block" src="https://images.vexels.com/media/users/3/215592/isolated/preview/49f9c03c3222f2d98af97badb58d5c08-encaje-floreciente-del-borde-del-corazon.png" width="500px">
        </td>
    </tr>
</table>



  </body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="telephone=no" name="format-detection">
    <title></title>
  
</head>

<body>
    <div class="es-wrapper-color">
    
        <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td class="esd-email-paddings" valign="top">
                        <table cellpadding="0" cellspacing="0" class="es-content esd-header-popover" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center" bgcolor="#f8f9fd" style="background-color: #f8f9fd;">
                                        <table bgcolor="transparent" class="es-content-body" align="center" cellpadding="0" cellspacing="0" width="600" style="background-color: transparent;">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p20t es-p10b es-p20r es-p20l" align="left">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="560" class="esd-container-frame" align="center" valign="top">
                                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-text es-p10b">
                                                                                        <h1>¡Espacio de contacto!</h1>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-text es-p10t es-p10b">
                                                                                        <p>La persona con el nombre: fabis, con el email: fabis@, ha dejado el siguiente mensaje:&nbsp; xd.</p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="esd-structure es-p15t es-m-p15t es-m-p0b es-m-p0r es-m-p0l" align="left">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="600" class="esd-container-frame" align="center" valign="top">
                                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-image" style="font-size: 0px;"><a target="_blank"><img class="adapt-img" src="https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/3991592481152831.png" alt style="display: block;" width="600"></a></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table cellpadding="0" cellspacing="0" class="es-content esd-footer-popover" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center" bgcolor="#071f4f" style="background-color: #071f4f; background-image: url(https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/10801592857268437.png); background-repeat: no-repeat; background-position: center top;" background="https://uxyja.stripocdn.email/content/guids/CABINET_1ce849b9d6fc2f13978e163ad3c663df/images/10801592857268437.png">
                                        <table bgcolor="#ffffff" class="es-content-body" align="center" cellpadding="0" cellspacing="0" width="600">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p40t es-p40b es-p30r es-p30l" align="left">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="540" class="esd-container-frame" align="center" valign="top">
                                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-spacer" height="20"></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="left" class="esd-block-text es-p10b">
                                                                                        <h1 style="text-align: center; color: #ffffff;">Mesaje de contacto</h1>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
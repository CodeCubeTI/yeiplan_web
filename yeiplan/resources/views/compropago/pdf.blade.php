<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Donación</title>
    <link rel="stylesheet" href="css/pdf.css" media="all" />


  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="images/logo.png">
      </div>
      <div id="company">
        <h2 class="name">Yeiplan</h2>
        <div>León Guanajuato, México</div>
        <div>477-247-74-07</div>
        <div><a href="yeiplane@gmail.com">yeiplan@gmail.com</a></div>
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <h1>Datos de la compra</h1>
          <div class="date">Fecha : {{$date}}</div>

        </div>
      </div>
       <div >
          <center>
            <h1>Instrucciones</h1>
            </center>

        </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="desc">DESCRIPCIÓN</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="no">01</td>
            <td class="desc"><h3>{{$objResponse['instructions']['step_1']}}</h3></td>

          </tr>
          <tr>
            <td class="no">02</td>
            <td class="desc"><h3>{{$objResponse['instructions']['step_2']}}</h3></td>

          </tr>
          <tr>
            <td class="no">03</td>
            <td class="desc"><h3>{{$objResponse['instructions']['step_3']}}</h3></td>

          </tr>
        </tbody>
        <tfoot>


          <tr>
            <td colspan="2"></td>
            <td colspan="2"> TOTAL</td>
            <td>{{$objResponse['instructions']['details']['amount']}}0</td>
          </tr>
        </tfoot>
      </table>
      <div>

        <p>{{$objResponse['instructions']['note_expiration_date']}} </p>
      </div>
      <div id="notices">
           <div id="thanks">Gracias por tu donación, la cual hace posible que continuemos ocupados en seguir impulsando nuestra economía local y próximamente la de nuestro México.</div>
      </div>
    </main>

  </body>
</html>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cronometro com Javascript</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway" />

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</head>

<body>
    <header style="background: #222; padding-top: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 style="color: #fff;">Cronometro</h1>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section>
            <div class="container">
                <br /><br />
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 text-center" style="background: #141414;">
                        <p style="color: #fff; font-size: 45pt; margin-bottom: 0px;">
                            
                            <span id="timer_minutos">00</span> :
                            <span id="timer_segundos">00</span> 
                           
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <br />
                        <button id="btnIniciar" onclick="iniciarCronometro();" 
                            style="width: 100%;">INICIAR</button>
                        <button id="btnZerar" onclick="zerarCronometro();" 
                            style="width: 100%; display: none;">ZERAR</button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script type="text/javascript">
        
        
    	
		


        function iniciarCronometro(){
        var cronometro_id = 0;
            
        	
            document.getElementById("btnIniciar").style.display = 'none';
            document.getElementById("btnZerar").style.display = 'inline';


            
            var timer_minutos = document.getElementById("timer_minutos");
            var timer_segundos = document.getElementById("timer_segundos");
           

            var  m = 0; s = 0;

            cronometro_id = setInterval(function () {
               
                timer_minutos.innerHTML = m < 10 ? '0' + m : m;
                timer_segundos.innerHTML = s < 10 ? '0' + s : s;
              

                if(s < 59) { s += 1; }
                else if(m < 59) { s = 0; m += 1; };
             
            }, 1000);


        }

        function zerarCronometro(){
            document.getElementById("btnIniciar").style.display = 'inline';
            document.getElementById("btnZerar").style.display = 'none';

            clearInterval(cronometro_id);

            
            document.getElementById("timer_minutos").innerHTML = "00";
            document.getElementById("timer_segundos").innerHTML = "00";
            
        }




    </script>
</body>
</html>


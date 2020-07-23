var siguiente = 0;
            var pregunta = 0;
            var respuesta = 0;
            var contador = 0;

            function contaSiguiente(){
                siguiente = siguiente + 1;
                pregunta = pregunta + 1;
                cambioPregunta();
            }

            function respuesta1(){
                respuesta = 1;
                verificarRespuesta();
                contaSiguiente();
            }
            function respuesta2(){
                respuesta = 2;
                verificarRespuesta();
                contaSiguiente();
            }
            function respuesta3(){
                respuesta = 3;
                verificarRespuesta();
                contaSiguiente();
            }
            function respuesta4(){
                respuesta = 4;
                verificarRespuesta();
                contaSiguiente();
            }
            function verificarRespuesta()
            {
                if(pregunta.id==1)
                {
                    if(respuesta.respuesta1)
                        {
                            document.getElementById("correcto").innerHTML = "CORRECTO!";
                            contador = contador + 1;
                            document.getElementById("conta").innerHTML = contador;
                        }
                        else
                        {
                            document.getElementById("correcto").innerHTML = "INCORRECTO!";
                        }
                }
                else if (pregunta==2)
                {
                    if(respuesta == 2)
                        {
                            document.getElementById("correcto").innerHTML = "CORRECTO!";
                            contador = contador + 1;
                            document.getElementById("conta").innerHTML = contador;
                        }
                        else
                        {
                            document.getElementById("correcto").innerHTML = "INCORRECTO!";
                        }
                }
                else if(pregunta ==3)
                {
                    if(respuesta == 2)
                        {
                            document.getElementById("correcto").innerHTML = "CORRECTO!";
                            contador = contador + 1;
                            document.getElementById("conta").innerHTML = contador;
                        }
                        else
                        {
                            document.getElementById("correcto").innerHTML = "INCORRECTO!";
                        }
                }
                else if(pregunta ==4)
                {
                    if(respuesta == 2){
                            document.getElementById("correcto").innerHTML = "CORRECTO!";
                            contador = contador + 1;
                            document.getElementById("conta").innerHTML = contador;
                        }
                        else{
                            document.getElementById("correcto").innerHTML = "INCORRECTO!";
                        }
                }
                else if(pregunta ==5)
                {
                    if(respuesta == 4){
                            document.getElementById("correcto").innerHTML = "CORRECTO!";
                            contador = contador + 1;
                            document.getElementById("conta").innerHTML = contador;
                        }
                        else{
                            document.getElementById("correcto").innerHTML = "INCORRECTO!";
                        }
                }
            }

            function cambioPregunta(){
                    if(pregunta == 1)
                    {
                        document.getElementById("preguntas").innerHTML = "¿Cuál es el lugar más frío de la tierra?";
                        document.getElementById("parrafo1").innerHTML = "La Antártida";
                        document.getElementById("parrafo2").innerHTML = "Yellowknife/Canada";
                        document.getElementById("parrafo3").innerHTML = "Greolandia";
                        document.getElementById("parrafo4").innerHTML = "Yakutsk/Siberia";
                        respuesta = 0;
                    }
                    else if(pregunta == 2)
                    {
                        document.getElementById("preguntas").innerHTML = "¿Cuántas esferas del dragon existen en la tierra?";
                        document.getElementById("parrafo1").innerHTML = "5";
                        document.getElementById("parrafo2").innerHTML = "7";
                        document.getElementById("parrafo3").innerHTML = "9";
                        document.getElementById("parrafo4").innerHTML = "8";
                        respuesta = 0;
                    }
                    else if(pregunta == 3)
                    {
                        document.getElementById("preguntas").innerHTML = "¿Cuántas personas habitan Colombia?";
                        document.getElementById("parrafo1").innerHTML = "10'000.000";
                        document.getElementById("parrafo2").innerHTML = "49'000.000";
                        document.getElementById("parrafo3").innerHTML = "39'000.000";
                        document.getElementById("parrafo4").innerHTML = "28'000.000";
                        respuesta = 0;
                    }
                    else if(pregunta == 4)
                    {
                        document.getElementById("preguntas").innerHTML = "¿De qué colores es la bandera de México?";
                        document.getElementById("parrafo1").innerHTML = "verde, negro y blanco";
                        document.getElementById("parrafo2").innerHTML = "verde, blanco y rojo";
                        document.getElementById("parrafo3").innerHTML = "verde, amarillo y rojo";
                        document.getElementById("parrafo4").innerHTML = "verde, azul y blanco";
                        respuesta = 0;
                    }
                    else if(pregunta == 5)
                    {
                        document.getElementById("preguntas").innerHTML = "¿Quién pintó “la última cena”?";
                        document.getElementById("parrafo1").innerHTML = "Pablo Picaso";
                        document.getElementById("parrafo2").innerHTML = "Salvador Dalí";
                        document.getElementById("parrafo3").innerHTML = "Vincent van Gogh";
                        document.getElementById("parrafo4").innerHTML = "Leonardo da Vinci";
                        respuesta = 0;
                    }
            }
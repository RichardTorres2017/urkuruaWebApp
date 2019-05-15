
var found = true;

var numberA = getRandomNumber();
var numberB = getRandomNumber();
var text = 'Cuanto es ' + numberA + ' + ' + numberB + '?';
var response;
 var recognition;
var recognizing = false;
// ask the problem
 
var seconds = 20;
function secondPassed() {
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds;  
    }
/* eslint-disable no-undef*/
    document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
    if (seconds == 0) {
        clearInterval(countdownTimer);
        document.getElementById('countdown').innerHTML = "";
         var s ="Error";
           
             score =score-5;
             if(score<0){
                score=0;
            }
           // setTimeout('Redirect()', 100);
            var queryString = "?Message=" +s;
          //  window.location.href = "secondScene.php" + queryString +"&score="+score;
            response = 'Incorrecto! ' + numberA + ' + ' + numberB + ' no es ' + answer + '.';
            speak(response);
            document.getElementById('result').innerHTML = response;
        
    } else {
        seconds--;
    }
}
 
var countdownTimer = setInterval('secondPassed()', 1000);
function registrar(usuario,varpunt,correcto) {
   
      
        var xmlhttp = new XMLHttpRequest();
      /*  xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert( this.responseText);
            }
        };*/
       xmlhttp.open("GET", "Control/insertarjuego.php?nombre="+usuario+"&punt="+varpunt+"&correcto="+correcto , true);
  
        xmlhttp.send();
    
}

/* eslint-disable no-console */
/* eslint-disable no-redeclare */
ask(text, function (err, result) {
    console.log(result);
    console.log("paso por aqui 2");
    
 
   
        var answer = parseInt(result.transcript);
        if (answer == numberA + numberB) {
            response = 'Correcto! ' + numberA + ' + ' + numberB + ' es ' + answer + '.';
            speak(response);
          
            score =score+20;
            registrar(correo,score,1);
            var score2 = "?Message=" +score;
            var s ="felicidades";
          
            var queryString = "?Message=" +s;
            document.getElementById('result').innerHTML = response;
          setTimeout(function(){window.location.href = "FirstScene.php" + queryString +"&score="+score;}, 5000);
        //    <img src="bomb.images/bomb1">
        } else {
             var s ="Error";
           console.log(s);
             score =score-5;
            registrar(correo,score,0);
             if(score<0){
                score=0;
            }
           // setTimeout('Redirect()', 100);
            var queryString = "?Message=" +s;
          response = 'Incorrecto! ' + numberA + ' + ' + numberB + ' no es ' + answer + '.';
            speak(response);
            document.getElementById('result').innerHTML = response;
             setTimeout(function(){window.location.href = "secondScene.php" + queryString +"&score="+score;}, 5000);
            
            
        }
    
    
    
    
})
 
// Numero random entre 1 y 10
function getRandomNumber() {
    console.log("paso por aqui 1")
    return Math.floor((Math.random() * 10) + 1);
}
 
 
// Pregunta una pregunta y tiene una respuesta
function ask(text, callback) {
    console.log("paso por aqui 4");
    console.log(text);
   
    console.log("pasa por aqui ahorita");
    // Pregunta una pregunta
    speak(text, function () {
        // Tiene una respuesta
       recognition = new webkitSpeechRecognition();
        recognition.lang ="es-EC";
        console.log(recognition);
        recognition.continuous = false;
        recognition.interimResults = false;
 
        recognition.onend = function (e) {
            if (callback) {
                callback('no results');
            }
        };
 
        recognition.onresult = function (e) {
           
            // cancel onend handler
            recognition.onend = null;
            if (callback) {
                console.log(callback);
                callback(null, {
                    transcript: e.results[0][0].transcript,
                    confidence: e.results[0][0].confidence
                });
            }
        }
 
        // Empieza reconocimiento
        recognition.start();
    });
}
 
 
// say a message
function speak(text, callback) {
    console.log("pasa por aqui 3")
    
    var u = new SpeechSynthesisUtterance();
    u.text = text;
    u.lang = 'es-EC';
 
    u.onend = function () {
        if (callback) {
            callback();
        }
    };
 
    u.onerror = function (e) {
        if (callback) {
            callback(e);
        }
    };
 
    speechSynthesis.speak(u);
}
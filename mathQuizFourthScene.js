var text = 'Quieres jugar de nuevo, responde Si';
var response;
 var recognition;
var recognizing = false;
// ask the problem
 


ask(text, function (err, result) {
    console.log(result);
    console.log("paso por aqui 2");
  
        var answer = result.transcript;
        if (answer == ("sí" || "si") ){
            response = 'Urra';
            speak(response);
         
          
            var score2 = "?Message=" +score;
            var s ="felicidades";
           // setTimeout('Redirect()', 100);
            var queryString = "?Message=" +s;
            document.getElementById('result').innerHTML = response;
                 setTimeout(function(){window.location.href = "firstScene.php" + queryString +"&score="+score;}, 5000);
           
      
        } 
    
    
})
 
 
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
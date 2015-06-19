/**
 * Created by noronha on 23/04/2015.
 */

// Função para carregamento assíncrono
function loadScript() {
    var script = document.createElement(“script”);
    script.type = “text/javascript”;
    script.src =”http://maps.googleapis.com/maps/api/js?key=AIzaSyBQpYwJ2bbfvnMV-gl7NxmhoXF4ie3gJNQY&sensor=true_or_false&callback=initialize”;

        document.body.appendChild(script);
}

window.onload = loadScript;
'use strict';

var Events = function(){};

Events.prototype.start = function(){

    $('#toolbar').submit(this.onSubmitForm);// on surveille l'envoi du formulaire

    this.redraw();

};

Events.prototype.onSubmitForm = function(event){

    event.preventDefault();// le formulaire reste au javascript

    let data = $(this).serialize() + "&ajax=true"; // on recupère les données

    let arrayData = ($(this).serializeArray());

    console.log(arrayData[8].value);

    if(arrayData[8].value === "clear")
    {
        console.log('dede');
        $("#chart").empty();
    }
    else {
        $.getJSON('', data, function(data){ //->On recupere le echo du php

            var svg = document.createElementNS('http://www.w3.org/2000/svg', data['type']);

            let entries = (Object.entries(data));

            for (let k in entries) {

                svg.setAttribute(entries[k][0], entries[k][1]);
            }

            $('svg').append(svg); // on ajoute le echo du php au Svg
        });
    }
};

Events.prototype.redraw = function(){

    $.getJSON('', 'redraw=true', function(data) {

        for (let j in data) {

            let array = (JSON.parse(data[j]));

            var svg = document.createElementNS('http://www.w3.org/2000/svg', array['type']);

            let entries = (Object.entries(array));

            for (let k in entries) {

                svg.setAttribute(entries[k][0], entries[k][1]);
            }
            $('svg').append(svg); // on ajoute le echo du php au Svg

        }
    });

}

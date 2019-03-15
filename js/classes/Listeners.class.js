'use strict';

var Events = function(){};

Events.prototype.start = function(){

    $('#toolbar').submit(this.onSubmitForm);// on surveille l'envoi du formulaire

};

Events.prototype.onSubmitForm = function(){

    event.preventDefault();// le formulaire reste au javascript

    let data = $(this).serialize() + "&ajax=true"; // on recupère les données

    //requete ajax => on envoie le formulaire au php

    $.get('', data, function(newShape){ //->On recupere le echo du php

        $('svg').append(newShape); // on ajoute le echo du php au Svg
    });

};

Events.prototype.onAjaxSubmitForm = function(newShape){

    $('svg').append(newShape); // on ajoute le echo du php au Svg
};

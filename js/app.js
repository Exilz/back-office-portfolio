// MAXIMEBERTONNIER.FR

    var current_id = null;
    var previous_id = null;

$(document).ready(function() {
    $('.console-underscore').blink(); // Underscore pres 

    /* HOVER COMPETENCES */

    $('.block-skills').mouseover(function(){
        $("h3, .block-icon", this).css('color', '#39b54a');
    }).mouseleave(function(){
        $("h3, .block-icon", this).css('color', '#666666');
    });

    $('.block-studies').mouseover(function(){
        $("h3, .block-icon", this).css('color', '#39b54a');
    }).mouseleave(function(){
        $("h3, .block-icon", this).css('color', '#666666');
    });

    $('.block-hobbys').mouseover(function(){
        $("h3, .block-icon", this).css('color', '#39b54a');
    }).mouseleave(function(){
        $("h3, .block-icon", this).css('color', '#666666');
    });


});

$(function(){
        $(".main-job").typed({
        strings: ["Développement et design web", "HTML5 / CSS3", "PHP / MySQL", "Javascript / jQuery / AJAX", "Node.js / Socket.io <3"],
        typeSpeed: 0,
        backDelay: 3000,
        loop: true
        });
    
        $(".about-typed").typed({
        strings: [ "Apprenez à me connaître !", "Mes compétences", "Mes études", "Mes hobbys"],
        typeSpeed: 25,
        backDelay: 7500,
        loop: true
        });
    
        $(".works-typed").typed({
        strings: [ "Sites web", "Designs", "Projets personnels", "Prototypes"],
        typeSpeed: 25,
        backDelay: 5000,
        loop: true
        });
    
        $(".contact-typed").typed({
        strings: [ "Besoin de quoi que ce soit ?"],
        typeSpeed: 5,
        backDelay: 5000
        });
    });


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
        strings: ["Web development and design", "HTML5 / CSS3", "PHP / MySQL", "Javascript / jQuery / AJAX", "Node.js / Socket.io <3"],
        typeSpeed: 0,
        backDelay: 3000,
        loop: true
        });
    
        $(".about-typed").typed({
        strings: [ "Get to know me !", "My awesome skills", "My studies", "My hobbys"],
        typeSpeed: 25,
        backDelay: 7500,
        loop: true
        });
    
        $(".works-typed").typed({
        strings: [ "Websites", "Designs", "Personnal projects", "Prototypes"],
        typeSpeed: 25,
        backDelay: 5000,
        loop: true
        });
    
        $(".contact-typed").typed({
        strings: [ "Need anything ?", "Feel free to contact me !"],
        typeSpeed: 5,
        backDelay: 5000
        });
    });


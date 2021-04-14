define([
    'jquery',
    'underscore',
    'ko'
], function ($, _, ko) { 
    return function (config, element) {
        console.log(element);
        $(element).html("hola mundo");
        console.log(config['prueba-parametro']);
        var blogs = "res/V1/blogs?searchCriteria"
        $.ajax({
            url:blogs
        }).done(function(response){
            console.log(response);
        });
        }
})
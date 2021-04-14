/*requirejs([
    'jquery'
], function($){
   var blogs = "/rest/V1/blogs?searchCriteria";
   $.ajax({
       url: blogs
   }).done(function(response){
        console.log(response);
   });
})*/
/*
define([
    'jquery'
], function($){
    return function(){
        var blogs = "/rest/V1/blogs?searchCriteria";
        $.ajax({
            url: blogs
        }).done(function(response){
             console.log(response);
        });
    }

})*/

/*
define([
    'jquery'
], function($){
    return function(config){
        console.log(config['prueba-param']);
        var blogs = "/rest/V1/blogs?searchCriteria";
        $.ajax({
            url: blogs
        }).done(function(response){
             console.log(response);
        });
    }

})*/
/*
define([
    'jquery',
    'underscore',
    'ko',
    'uiComponent'
], function($, _, ko, Component){
    return Component.extend({
        defaults: {
            variable: ko.observable(false),
            tracks: {
                segundaVAriable: false,
            }
        },
        initialize: function(){
            this._super();
            console.log(this);
            console.log(this.variable());
            this.variable.subscribe(function(value){
                console.log(value);
            });
            var self = this;
            var blogs = "/rest/V1/blogs?searchCriteria";
            $.ajax({
                url: blogs
            }).done(function(response){
                self.variable(true);
                 console.log(response);
            });
            return this;
        }
    });
})*/

define([
    'jquery',
    'underscore',
    'ko',
    'uiComponent',
    'mage/url',
    'mage/storage',
], function($, _, ko, Component, url, storage){
    return Component.extend({
        defaults: {
            blogs: ko.observableArray([]),
            template:'OmniPro_Attributes/prueba'
        },
        initialize: function(){
            this._super();
            var self = this;
            //console.log(costumerData.get('car')());
            var blogs = "/rest/V1/blogs?searchCriteria";
            storage.get(blogs).done(function(response){
                self.blogs(response.items);
                console.log(self.blogs());
            });
            return this;
        }
    });
})
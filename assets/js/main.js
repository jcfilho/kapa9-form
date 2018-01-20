requirejs.config({
    baseUrl : 'assets/js/lib',
    paths:{
        site : '../site'
    }
});

requirejs(['jquery','site/app'],function($){
   'use strict';

    $(document).ready(function(){
        var Congreso = new App.Congreso();
        Congreso.init();
    });
});
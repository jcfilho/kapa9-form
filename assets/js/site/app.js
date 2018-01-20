var App = App || {};

App.Congreso = function () {
    this.selectorForm = 'body #id-form-congreso'
};

requirejs(['jquery','blockui','blockui','validate'],function ($,blockUi) {
    App.Congreso.prototype = {
        init:function(){
            this.validateForm();
        },
        validateForm : function () {
            var self = this;
            $(self.selectorForm).validate({
                rules:{
                    titulo : 'required',
                    autor_1_nombre : 'required',
                    autor_1_apellido : 'required',
                    adscripcion : 'required',
                    ciudad : 'required',
                    email : {
                        required : true,
                        email: true
                    },
                    resumen : {
                        required : true,
                        maxlength : 250
                    }


                },
                messages:{
                    titulo : 'Este campo es requerido.',
                    autor_1_nombre : 'Este campo es requerido.',
                    autor_1_apellido : 'Este campo es requerido.',
                    adscripcion : 'Este campo es requerido.',
                    ciudad : 'Este campo es requerido.',
                    email : {
                        required : 'Este campo es requerido.',
                        email: 'Introduzca una dirección email valida.'
                    },
                    resumen : {
                        required : 'Este campo es requerido.',
                        maxlength : 'Maximo 250 Caracteres.'
                    }


                },
                submitHandler: function(form) {
                    // some other code
                    // maybe disabling submit button
                    // then:
                    //$(form).submit();
                    //console.log('asdasdasd');
                    $(self.selectorForm).block({ message: 'Procesando, por favor espere.' });
                    $(self.selectorForm).unblock();
                    console.log('asdasdasd asdasdasd');
                }
            });
        }
    };
});
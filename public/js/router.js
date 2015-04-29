App.Router = Backbone.Router.extend({
    routes: {
        '': 'index'
    },
    
    index: function(){
        window.console.log('the index page');
    }
});



App.Models.Contact = Backbone.Model.extend({
    validate: function(attrs){
        if( ! attrs.first_name ||! attrs.last_name) {
            return 'A name is required!';
        }
        
        if( ! attrs.email_address) {
            return 'Email address is required!';
        }
    }
});

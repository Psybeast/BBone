<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel BackBone</title>

</head>
<body>


<script src="http://code.jquery.com/jquery.js"></script>
<script src="http://underscorejs.org/underscore.js"></script>
<script src="http://backbonejs.org/backbone.js"></script>
<script>
    (function(){
        window.App = {
            Models: {},
            Collections: {},
            Views: {}
        };

        App.Models.Task = Backbone.Model.extend({
            defaults: {
                title: '',
                completed: 0
            },

            urlRoot: 'tasks'
        })

    })();
</script>
</body>
</html>

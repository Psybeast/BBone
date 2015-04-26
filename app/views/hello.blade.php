<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel BackBone</title>

</head>
<body>
    <h1>Hey mon, long time no see!</h1>

<script src="../app/js/jquery.js"></script>
<script src="../app/js/underscore.js"></script>
<script src="../app/js/backbone.js"></script>
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
            }
        });

        App.Collections.Tasks = Backbone.Collection.extend({
            model: App.Models.Task,
            url: '/BBone/public/tasks'
        });

        App.Views.Tasks = Backbone.View.extend({
            tagName: 'ul',

            initialize: function(){
                this.collection.on('add', this.addOne, this);
            },

            render: function(){
                this.$el.empty();
                this.collection.each(this.addOne, this);
                return this;
            },

            addOne: function(task){
                var task = new App.Views.Task({ model: task });
                this.$el.append( task.render().el);
            }
        });

        App.Views.Task = Backbone.View.extend({
            tagName: 'li',

            initialize: function(){
                this.model.on('destroy', this.remove, this);
            },

            render: function(){
                this.$el.html( this.model.get('title'));
                return this;
            }
        });

    })();

    var tasksCollection = new App.Collections.Tasks;
    tasksCollection.fetch();
    var tasksView = new App.Views.Tasks({ collection: tasksCollection });
    tasksView.render();
    $(document.body).append(tasksView.el);

</script>
</body>
</html>

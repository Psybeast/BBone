<!doctype html>
<html>
    <head>
        <title>Contacts Manager</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            table thead td { font-weight: bold}
            .addContactForm {margin-bottom: 2em}
        </style>
    </head>
    <body>
        <main>
            <header><h1>Contact Manager</h1></header>
            <section class="addContactForm">
                <form id="addContact">
                    <div>
                        <label for="first_name">First Name: </label>
                        <input type="text" id="first_name" name="first_name" autofocus />
                    </div>
                    <div>
                        <label for="last_name">Last Name: </label>
                        <input type="text" id="last_name" name="last_name" />
                    </div>
                    <div>
                        <label for="email_address">Email Address: </label>
                        <input type="text" id="email_address" name="email_address" />
                    </div>
                    <div>
                        <label for="description">You should know: </label>
                        <textarea id="description" name="description"></textarea>
                    </div>
                    <div>
                        <input type="submit" value="Add Contact" />
                    </div>
                </form>
            </section>
         
            <section class="contacts">
                <table id="allContacts">
                    <thead>
                        <tr>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>E-mail Address</td>
                            <td>Description</td>
                        </tr>
                    </thead>
                </table>
            </section>
                
        </main>
        <script id="allContactsTemplate" type="text/template">
            <td><%= first_name %></td>
            <td><%= last_name %></td>
            <td><%= email_address %></td>
            <td><%= description %></td>
        </script>
        
        <script src="../public/js/jquery.js"></script>
        <script src="../public/js/underscore.js"></script>
        <script src="../public/js/backbone.js"></script>       
        <script src="../public/js/main.js"></script>
        <script src="../public/js/models.js"></script>
        <script src="../public/js/collections.js"></script>
        <script src="../public/js/views.js"></script>
        <script src="../public/js/router.js"></script>
        
        <script>
            new App.Router;
            Backbone.history.start();
            
            App.contacts = new App.Collections.Contacts;
            App.contacts.fetch().then(function(){
                new App.Views.App({ collection: App.contacts });
            });
        </script>
    </body>
</html>




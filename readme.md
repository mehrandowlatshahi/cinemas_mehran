cinemas
=======

cinemas and movies

This application provides http based web services for the following requests:


url: /cinemas (GET request)
return json encoded list of cinemas' names

url: /cinema/details/name of cinema
returns json encoded detials of cinema

url: /cinema/movies/name of cinema
returns json encoded names of all the movies shown in this cinema

url: /cinema/movies/name of cinema/earlier date and time/later date and time/after
returns json encoded names of all the movies shown in this cinema after earlier date and before later date (not tested)

for geo location based requests I would first create a list of cinemas' names within a given radius and 
would then use whereIn() method to find the list of movies in those cinemas (not implemented)

Most of the processing of the request is done by the invocation of models methods.

Authentication is not added but I would be able to attach the auth.basic to the Routes and adding a specific post route for json or html based login




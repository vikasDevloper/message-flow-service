<<<<<<< HEAD
# message-service


We are Masters of Art company. We provide a service for people to buy and sell art via the internet.
Recently we did some research and decided that people would like to communicate within our
portal. We decided to develop this feature and we need a service to be created.

Task
Create a service that will store and control information about users&#39; messages.

POST /messages:
{
&quot;data&quot;: {
&quot;to&quot;: &quot;8a7290c4-970d-4285-b18d-d62b581f2061&quot;,
&quot;from&quot;: &quot;010cc5dc-51ee-4da0-a5e3-9cd704fc9be6&quot;,
&quot;message&quot;: {
&quot;content&quot;: &quot;Hi! I am impressed with your painting, I want to
propose more for it!&quot;
}
}
}
{
&quot;data&quot;: {
&quot;to&quot;: &quot;010cc5dc-51ee-4da0-a5e3-9cd704fc9be6&quot;,
&quot;from&quot;: &quot;8a7290c4-970d-4285-b18d-d62b581f2061&quot;,
&quot;message&quot;: {
&quot;content&quot;: &quot;Wow, cool, how much?&quot;
}
}
}

GET /messages/010cc5dc-51ee-4da0-a5e3-9cd704fc9be6/recipients {
&quot;data&quot;: {
&quot;recipients&quot;: [
{
&quot;id&quot;: &quot;8a7290c4-970d-4285-b18d-d62b581f2061&quot;,
&quot;count&quot;: 1
}
]

}
}

GET /messages/010cc5dc-51ee-4da0-a5e3-9cd704fc9be6/recipients/8a7290c4-
970d-4285-b18d-d62b581f2061
{
&quot;data&quot;: {
&quot;messages&quot;: [
{
&quot;id&quot;: &quot;b9f8e794-3b18-402b-907b-69dc1926248e&quot;,
&quot;from&quot;: &quot;010cc5dc-51ee-4da0-a5e3-9cd704fc9be6&quot;,
&quot;to&quot;: &quot;8a7290c4-970d-4285-b18d-d62b581f2061&quot;,
&quot;content&quot;: &quot;Wow, cool, how much?&quot;,
&quot;created_at&quot;: &quot;2022-01-20 15:13:00&quot;,
&quot;updated_at&quot;: &quot;2022-01-20 15:13:00&quot;
},
{
&quot;id&quot;: &quot;c4ab78e8-ebd3-4e34-af4f-69655c50221d&quot;,
&quot;from&quot;: &quot;8a7290c4-970d-4285-b18d-d62b581f2061&quot;,
&quot;to&quot;: &quot;010cc5dc-51ee-4da0-a5e3-9cd704fc9be6&quot;,
&quot;content&quot;: &quot;Hi! I am impressed with your painting, I want to
propose more for it!&quot;,
&quot;created_at&quot;: &quot;2022-01-20 14:20:00&quot;,
&quot;updated_at&quot;: &quot;2022-01-20 14:20:00&quot;
}
],
&quot;count&quot;: 2
}
}

Technical Requirements

■ symfony
■ doctrine
■ postgresql
■ docker
■ nginx
■ phpunit

Additional:
■ for GET /messages/&lt;id1&gt;/recipients/&lt;id1&gt;
■ we need to have possibility to specify date_from, date_to as a query parameters to
filter by created_at
■ we need to have pagination options by passing per_page, page_number as a query
parameters

■ service should handle 50M records without (or close to without) performance degradation
■ readme should contain the project description and guidance to run it via docker compose up
■ functionality should be covered with functional tests



Next, put your Symfony application into symfony folder and do not forget to add symfony.localhost in your /etc/hosts file.

Make sure you adjust database_host in parameters.yml to the database container alias "db" (for Symfony < 4) Make sure you adjust DATABASE_URL in env to the database container alias "db" (for Symfony >= 4)

Then, run:

$ docker-compose up
You are done, you can visit your Symfony application on the following URL: http://symfony.localhost 

Note : you can rebuild all Docker images by running:

$ docker-compose build


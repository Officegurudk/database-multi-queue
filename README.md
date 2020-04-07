# Extension to Laravel's database connector

This extension will allow the user to push a job (or event) to multiple queues at the same time.

## How to use

Instead of using `database` as the `QUEUE_CONNECTION`, use `database-multi`. This works just like the `database` 
connector, except you can use an array as an events `$broadcastQueue` property.
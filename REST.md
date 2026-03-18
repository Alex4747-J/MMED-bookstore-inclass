# Rest APIs

What are they?
they are the defacto standard for API implementations on the web.

REST = REpresentational State Transfer

API = Application Programming Interface

## WHat principles does REST implement? (Is my application considered "RESTful"?)

-Client-Server Architecture
    -"Client" as in a piece of software, not someone who pays you.
    -A separated "Client" (web broswer, Postman, etc.) and a "Server" that act and can be developed independently
-Statelessness
    -Each request contains ALL the info needed to perform whatever action it is trying to accomplish; it CANNOT use any leftover or stored data from a previous request.
    -This is _different_ from storing stuff in a darabase; databases are not considered "state" for an API
-Cacheablitity
    -Responses can be cached (stored temporarily for performance)
-Uniform Interface
    -API URLs and endpoints follow a standard convention / format.
-Layered System
    -Clients (not the people who pay you) cannot determine if they are directly connected to the server or if they have gone through one or more intermediaries
-Code on Demand
    -Servers can _optionally_ send code that can be executed
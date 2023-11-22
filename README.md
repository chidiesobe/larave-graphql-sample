## Just a simple CRUD application with lighthouse-php

The queries below are the the basic lighthouse-php graphql query, showcasing how to carry out CRUD activities with lighthouse-php and laravel 10
we start with a simple welcome query as shown below. All queries are run via the lighthouse playground.

```graphql
{
  welcome
}
```

Followed by the CRUD queries 

## Create query 
- Create a new user and return id, email and password 

```graphql
mutation {
   create_user(name:"Night wing",email: "nightwing@testing.com", password:"password123")
  {
    id
    name
    email
  }
}
```

## Read query 
- Returns all users 
```graphql
query {
    all_users {
	id
 	name
  }
}
```

- Returns paginated users
```graphql
query {
   users(first: 2){
    data{
      id
      name
      email
    }
    paginatorInfo{
      currentPage
      lastPage
      hasMorePages
    }
  }
}
```

- Return a single user based on the ID
```graphql
query{
  user(id: 12){
    name
    email
  }
}
```
## Update query
- Update a specific user based on their id and return the updated record 
```graphql
mutation {
   update_user(id: 2, name: "Robin Hood", email: "robinhood@testing.com")
  {
    id
    name
    email
  }
}
```

## Delete query
- Delete a specific user based on ID
```graphql
 mutation{
  delete_user(id: 11){
    id
  }
}
```
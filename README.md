# simple-Laravel-crud-api
Simple Rest API Capable of CRUD Operation on a resource e.g person using Laravel PHP/MYSQL


## Request/response format of the APIs

### READ All Persons: 
Fetching details of all the persons in the Databse, using GET method in postman
#### Request Format: 
http://www.waxworks.name.ng/api
#### Response Format:
{"data":[{"id":"1","name":"Uzoigwe Christian","dateAdded":"2023-09-14 13:36:55"},{"id":"2","name":"Obi Ebuka","dateAdded":"2023-09-14 13:36:55"},{"id":"3","name":"Miriam Nkechi Ekeocha","dateAdded":"2023-09-14 18:49:38"}],"message":"Data Fetched Successfully","status_code":200}

### READ a Single Person: 
Fetching details of a single persons in the Databse, using GET method in postman
#### Request Format: 
http://www.waxworks.name.ng/api/user_id        e.g of user_id = 1
#### Response Format:
{"data":[{"id":"1","name":"Uzoigwe Christian","dateAdded":"2023-09-14 13:36:55"}],"message":"Data Fetched Successfully","status_code":200}


### Create Person: 
Adding person's details to the Databse, using POST method in postman
#### Request Format: 
http://www.waxworks.name.ng/api
body: {
        "name":"Uzoigwe Christian"
      }
#### Response Format:
    {"message":"Data Created Successfully","status_code":201}
 

### Update Person: 
Updating or modifying a person's details in the Databse, using PUT method in postman
#### Request Format: 
http://www.waxworks.name.ng/api/user_id    eg of user_id=1
body: {
        "name":"Uzoigwe Christian"
      }
#### Response Format:
    {"message":"Data Updated Successfully","status_code":200}


### Delete Person: 
Deleting a person's details in the Databse, using Delete method in postman
#### Request Format: 
http://www.waxworks.name.ng/api/user_id    eg of user_id=1
#### Response Format:
    {"message":"Data Deleted Successfully","status_code":200}

### Displaying Users Slack details: 
This Endpoint is done in stage 1, it accepts slack name and track of an intern and displays his/her details, using GET method in postman
#### Request Format: 
GET: http://www.waxworks.name.ng/api.php?slack_name=chriswax&track=backend
#### Response Format:
   {
    "slack_name": "chriswax",
    "current_day": "Thursday",
    "utc_time": "2023-09-14T21:35:50Z",
    "track": "backend",
    "github_file_url": "https://github.com/chriswax/hngx/blob/main/api.php",
    "github_repo_url": "https://github.com/chriswax/hngx",
    "status_code": 200
 }




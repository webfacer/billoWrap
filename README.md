# Billomat API

billoWrap
=========

Used to retrive data from billom.net and change it for your individual Application.

Parameters
----------

### bmId

* Param: string

Description:
This is your billomID  which you use to login in your right Domain


### bmApiKey

* Param: string

Description:
This is the billomat API Key.
Here you can find how to activate your API Key under the Headline Authentication.
Here you can find it http://www.billomat.com/en/api/basics/


### dataType

* Param: boolen
* Default: TRUE

Description:
Output data in JSON-Object, false otherwise for XML-Object. Also you can use NULL to output data in HTML.


### convertData

Param: boolen
Default: FALSE

Converts the dataobject if "TRUE" to Array. Use "NULL" for get HTML header.

### useSocket

Notice: not yet ready for usage

* Param: boolen
* Defaul: FALSE

Description:
If true the request is done by socket, otherwise by curl.


## Usage Example

Now take a look how we retrive Data from the "billomat API" we choose for this example to get all our Clients

        require_once 'billowrap.php';

        $bmId = 'YourBillomatID'; // this is your billomatID you use to login
        $bmApiKey = 'YourApiKey'; // the API Key you will got it from billomat settings check the explanation http://www.billomat.com/en/api/basics/
        $dataType = true; // Set to true, to output JSON Object, false otherwise for XML Object
        $convertData = false; // Convert the JSON or XML data to Array, false otherwise for not converting the object 

    
        $billoWrap = new billoWrap($bmId, $bmApiKey, $dataType, $convertData);
        

### Read Method for special data or List all.
Datatype will be which you set in the param 'dataType' (look the description of variable $dataType):

        $id = 12345; // the id for special Client you want to show
    
    	// Output all data from Client output will be which you deside in $dataType
        $singleData = $billoWrap->getSingleClient($id); 
        print_r($singleData);
    
    	// Output all data from Client
        $allData = $billoWrap->getAllClients(); 
        print_r($allData);


### Adding Method for a special data:
        
        // string for datatransfer you are using JSON or XML which you predefined on dataType for reques type data
        $data = '{
            
            "client" : {
                "first_name"    : "Max",
                "last_name"     : "Mustermann"
            }
            
        }';
        
        $billoWrap->addClient($data);
        
### Edit Method for a data:

        // special client id integer
        $clientID = 1234;
        
        // send data which you want to edit same es add for dataType
        $data = '{
            
            "client" : {
                "first_name"    : "Mustermann",
                "last_name"     : "Max"
            }
            
        }';
        
        $billoWrap->editClient($clientID, $data);
        
### Delete Method for deleting the data:
        
        $clientID = 1234;
        
        // just say which client id you want to delete and it is done
        $billoWrap->delClient($clientID);

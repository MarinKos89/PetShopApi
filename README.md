# Pet Shop Api
Api calls for [PetShop](http://petstore.swagger.io/#/)

### Prerequisites
* PHP 7.1.3 or higher
* [Composer](https://getcomposer.org/)
* Database that is supported by [Doctrine](http://www.doctrine-project.org/)
* Setup symfony for project [Symfony](https://symfony.com/doc/current/setup.html)

### Installing

1. Clone repository

Use your favorite IDE and get checkout from GitHub or just use following command

git clone https://github.com/MarinKos89/PetShopApi.git

2. Dependencies installation

Next phase is to install all needed dependencies. This you can do with following
command, in your project folder:

```open terminal in PhpStorm
composer install
```

### Web-server environment

Open terminal and go to project root directory and run following command to
start standalone server.
```
php ./bin/console server:start
```


### Code example 

Function from PetService that add new pet to store

```
 /**
     * @param array $petData
     * @return Response
     */
    public function addPetToStore(array $petData)
    {

        $pet = new Pet();
        $pet->setName($petData['name']);
        $pet->setCategory($petData['category']);
        $pet->setPhotoUrls($petData['photoUrls']);
        $pet->setTags($petData['tags']);
        $pet->setStatus($petData['status']);

        $this->entityManager->persist($pet);
        $this->entityManager->flush();

        return new Response('Successful operation ', 200);
    }

```
A function that handle informations and data from service
```
  /**
     * @param ToStoreAddPetCommand $petData
     * @return Response
     */
    public function handlePet(ToStoreAddPetCommand $petData)
    {
        return $this->service
            ->addPetToStore($petData->toArray());
    }
```
Controller that handle call
    
```
 /**
     * @param Request $request
     * @return Response
     */
    public function __invoke(Request $request): Response
    {
        $command = ToStoreAddPetCommand::deserialize(
            (array)json_decode($request->getContent(false))
        );

        $success = $this->handler->handlePet($command);

        if ($success) {
            return new Response('Successful operation ' . $success, 200);
        }

        return new Response('Invalid input ', 400);
    }
    
```
### Postman testing calls

To test calls install [Postman](https://www.getpostman.com/docs/v6/postman/launching_postman/installation_and_updates)

![createuser](https://user-images.githubusercontent.com/26500980/39410916-f41cc9f4-4bff-11e8-88e8-23f3b1b1cb97.PNG)







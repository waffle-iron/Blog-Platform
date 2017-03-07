[![Stories in Ready](https://badge.waffle.io/RyanHipkiss/Blog-Platform.png?label=ready&title=Ready)](https://waffle.io/RyanHipkiss/Blog-Platform)
# Blog-Platform
Blog CMS using Doctrine ORM (for learning purposes)

##To-do

* Refactor code to decouple Doctrine (Interface for getting data /w a DoctrineEntityRepository that does the heavy load
* Refactor code to decouple League Routing
* Refactor code to decouple League Container

Possible directory structure:

    config/
      AppInterface.php  <- Generic methods for any container
      LeagueAppRepository.php <- League Container method.
    routes/
      RouteInterface.php        <- Generic methods for any router
      LeagueRouteRepository.php <- League Route method
    src/
      Entity/
        Post.php <- Entity.
      EntityInterface/
        PostInterface.php <- Generic methods for post features
      EntityRepository/
        PostRepository.php <- extends DoctrineEntityRepository & implements PostInterface
      Controllers/
        PostController.php
    public/
      views/
        post-detail.php
  
  
  

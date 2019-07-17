<?php
// Naming conventions are very important in CakePHP. By naming our Table object ArticlesTable, CakePHP can automatically infer that this Table object will be used in the ArticlesController, and will be tied to a database table called articles.
namespace App\Model\Table;
use Cake\ORM\Table;

/**
 * This class is responsible for adding, updating, deleting and providing list of products 
 * from database
 * 
 *      <?php
 *      new Products;
 */
class Products extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp'); //It will help to store created datetime in db
    }
}
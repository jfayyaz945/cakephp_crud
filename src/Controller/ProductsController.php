<?php
namespace App\Controller;

/**
 * Product Controller contains products CRUD functionality. It contains index, add, edit, view and 
 * delete methods.
 *
 * Following is the implementation
 * 
 *      <?php
 *      new Product;
 */
class ProductsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');
        $this->viewBuilder()->layout('frontend');
    }

        /**
     * Return list of products
     *
     * @return product view
     */
    public function index()
    {
        //$this->layout = 'frontend';
        $this->set('products', $this->Products->find('all'));             
    }
    
    /**
     * Retrieve all products from model list method
     *
     * @return products list in json format
     */
    public function view($id = null)
    {
        //$this->layout = false;    
        $products = $this->Products->get($id);
        $this->set(compact('products'));
    }
    
        /**
     * Add new product into database by using model method
     *
     * @return newly added product data in json format
     */
    public function add()
    {
            
        //$this->layout = false;
        $product = $this->Products->newEntity();
        //Entity is a set of one record of table and their relational table, on that you can perform operation without touch of database and encapsulate property of entity (fields of table) as you want.
        if ($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->data);    
            $product->created_at = date('Y-m-d H:i:s');     
            if ($this->Products->save($product)) {
                $this->Flash->success(__('Your product has     been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your product.'));
        }
        $this->set('product', $product);
    }  
    
    /**
     * Update already exixts products
     *
     * @return updated model data into json format
     */
    public function edit($id = null)
    {
        //$this->layout = false;
        $product = $this->Products->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Products->patchEntity($product, $this->request->data);
            if ($this->Products->save($product)) {
                $this->Flash->success(__('Your product has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your product.'));
        }
        $this->set('product', $product);
    }

    /**
     * Delete specific product
     *
     * @return deleted model data
     */
    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The product with id: {0} has been deleted.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }        
    
}
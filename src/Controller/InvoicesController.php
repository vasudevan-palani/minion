<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class InvoicesController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Invoices');

    }

    /**
     * add
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function add()
    {
        
        try{
            $this->validate($this->request->data,array('invoice_id'));
            $this->Invoices->add($this->request->data);
        }
        catch(Exception $e) {
            $this->ajaxResponse->code = $e->code;
            $this->ajaxResponse->msg = $e->msg;

        }
    }

    /**
     * gets the total on a po across invoices
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function getTotalInvoicesByPo()
    {
        
        try{
            $this->validate($this->request->data,array('po_id'));
            $this->ajaxResponse->data = $this->Invoices->getTotalInvoicesByPo($this->request->data);
        }
        catch(Exception $e) {
            $this->ajaxResponse->code = $e->code;
            $this->ajaxResponse->msg = $e->msg;

        }
    }


    /**
     * search
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function search()
    {
        
        try{
            $this->validate($this->request->data,array());
            $this->ajaxResponse->data = $this->Invoices->search($this->request->data);
        }
        catch(Exception $e) {
            $this->ajaxResponse->code = $e->code;
            $this->ajaxResponse->msg = $e->msg;

        }
    }

}

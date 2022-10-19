<?php


namespace App\Controller;

use Cake\Controller\Component\AuthComponent;
use Cake\Controller\Controller;
use Cake\Event\Event;


/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {


        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'senha'
                    ]
                ]
            ],

            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ],

            'loginRedirect' => [
                'controller' => 'Users',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'index'
            ],

        ]);
        // $this->viewBuilder()->setLayout('bootstrap');
        $this->viewBuilder()->setLayout('default');
    }

    public function isAuthorized($user)
    {
        // Admin pode acessar todas as actions
        if (isset($user['role_id']) && $user['role_id'] == '1') {
            return true;
        }

        // Bloqueia acesso por padrão
        return false;
    }


    public function beforeFilter(Event $event)
    {

        parent::beforeFilter($event);
        $this->Auth->allow(['add', 'login', 'index', 'livraria']);
        $this->set('email', $this->Auth->user('email'));
    }
}

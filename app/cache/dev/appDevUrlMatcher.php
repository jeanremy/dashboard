<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // flyd_dashboard_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'flyd_dashboard_homepage');
            }

            return array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ProjectController::indexAction',  '_route' => 'flyd_dashboard_homepage',);
        }

        if (0 === strpos($pathinfo, '/client')) {
            // client_list
            if ($pathinfo === '/clients') {
                return array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ClientController::indexAction',  '_route' => 'client_list',);
            }

            // client_add
            if ($pathinfo === '/client/add') {
                return array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ClientController::addAction',  '_route' => 'client_add',);
            }

            // client_show
            if (preg_match('#^/client/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_show')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ClientController::showAction',));
            }

            // client_edit
            if (preg_match('#^/client/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_edit')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ClientController::editAction',));
            }

            // client_delete
            if (preg_match('#^/client/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_delete')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ClientController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/supplier')) {
            // supplier_list
            if ($pathinfo === '/suppliers') {
                return array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\SupplierController::indexAction',  '_route' => 'supplier_list',);
            }

            // supplier_add
            if ($pathinfo === '/supplier/add') {
                return array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\SupplierController::addAction',  '_route' => 'supplier_add',);
            }

            // supplier_get_form
            if ($pathinfo === '/supplier/getform') {
                return array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\SupplierController::getFormAction',  '_route' => 'supplier_get_form',);
            }

            // supplier_show
            if (preg_match('#^/supplier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supplier_show')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\SupplierController::showAction',));
            }

            // supplier_edit
            if (preg_match('#^/supplier/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supplier_edit')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\SupplierController::editAction',));
            }

            // supplier_delete
            if (preg_match('#^/supplier/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supplier_delete')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\SupplierController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_list
            if ($pathinfo === '/users') {
                return array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\UserController::indexAction',  '_route' => 'user_list',);
            }

            // user_add
            if ($pathinfo === '/user/add') {
                return array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\UserController::addAction',  '_route' => 'user_add',);
            }

            // user_ajax_add
            if ($pathinfo === '/user/getform') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_ajax_add;
                }

                return array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\UserController::getFormAction',  '_route' => 'user_ajax_add',);
            }
            not_user_ajax_add:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\UserController::showAction',));
            }

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\UserController::editAction',));
            }

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\UserController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/contact')) {
            // contact_ajax_getform
            if ($pathinfo === '/contact/getform') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_contact_ajax_getform;
                }

                return array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ContactController::getformAction',  '_route' => 'contact_ajax_getform',);
            }
            not_contact_ajax_getform:

            // contact_ajax_add
            if ($pathinfo === '/contact/add') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_contact_ajax_add;
                }

                return array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ContactController::addAction',  '_route' => 'contact_ajax_add',);
            }
            not_contact_ajax_add:

            // contact_ajax_delete
            if ($pathinfo === '/contact/delete') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_contact_ajax_delete;
                }

                return array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ContactController::deleteAction',  '_route' => 'contact_ajax_delete',);
            }
            not_contact_ajax_delete:

        }

        if (0 === strpos($pathinfo, '/address')) {
            // address_ajax_getform
            if ($pathinfo === '/address/getform') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_address_ajax_getform;
                }

                return array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\AddressController::getformAction',  '_route' => 'address_ajax_getform',);
            }
            not_address_ajax_getform:

            // address_ajax_add
            if ($pathinfo === '/address/add') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_address_ajax_add;
                }

                return array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\AddressController::addAction',  '_route' => 'address_ajax_add',);
            }
            not_address_ajax_add:

            // address_ajax_delete
            if ($pathinfo === '/address/delete') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_address_ajax_delete;
                }

                return array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\AddressController::deleteAction',  '_route' => 'address_ajax_delete',);
            }
            not_address_ajax_delete:

        }

        if (0 === strpos($pathinfo, '/need')) {
            // need_list
            if ($pathinfo === '/needs') {
                return array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\NeedController::indexAction',  '_route' => 'need_list',);
            }

            // need_ajax_add
            if ($pathinfo === '/need/ajaxadd') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_need_ajax_add;
                }

                return array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\NeedController::ajaxaddAction',  '_route' => 'need_ajax_add',);
            }
            not_need_ajax_add:

        }

        // need_add
        if (0 === strpos($pathinfo, '/client') && preg_match('#^/client/(?P<id>[^/]++)/need/add$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_need_add;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'need_add')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\NeedController::addAction',));
        }
        not_need_add:

        if (0 === strpos($pathinfo, '/need')) {
            // need_show
            if (preg_match('#^/need/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'need_show')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\NeedController::showAction',));
            }

            // need_edit
            if (preg_match('#^/need/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'need_edit')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\NeedController::editAction',));
            }

            // need_delete
            if (preg_match('#^/need/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'need_delete')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\NeedController::deleteAction',));
            }

            // need_ajax_delete
            if (preg_match('#^/need/(?P<id>[^/]++)/ajaxdelete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'need_ajax_delete')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\NeedController::ajaxdeleteAction',));
            }

        }

        // project_list
        if ($pathinfo === '/projects') {
            return array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ProjectController::indexAction',  '_route' => 'project_list',);
        }

        // project_add
        if (0 === strpos($pathinfo, '/need') && preg_match('#^/need/(?P<id>[^/]++)/project/add$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_add')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ProjectController::addAction',));
        }

        if (0 === strpos($pathinfo, '/project')) {
            // project_show
            if (preg_match('#^/project/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_show')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ProjectController::showAction',));
            }

            // project_edit
            if (preg_match('#^/project/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_edit')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ProjectController::editAction',));
            }

            // project_delete
            if (preg_match('#^/project/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_delete')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ProjectController::deleteAction',));
            }

            // project_ajax_add_supplier
            if (preg_match('#^/project/(?P<id>[^/]++)/ajaxaddsupplier$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_ajax_add_supplier')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ProjectController::ajaxaddsupplierAction',));
            }

            // project_ajax_remove_supplier
            if (preg_match('#^/project/(?P<id>[^/]++)/remove/supplier$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_project_ajax_remove_supplier;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_ajax_remove_supplier')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ProjectController::ajaxremovesupplierAction',));
            }
            not_project_ajax_remove_supplier:

            // project_ajax_add_user
            if (preg_match('#^/project/(?P<id>[^/]++)/ajaxadduser$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_project_ajax_add_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_ajax_add_user')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ProjectController::ajaxadduserAction',));
            }
            not_project_ajax_add_user:

            // project_ajax_remove_user
            if (preg_match('#^/project/(?P<id>[^/]++)/remove/user$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_project_ajax_remove_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_ajax_remove_user')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ProjectController::ajaxremoveuserAction',));
            }
            not_project_ajax_remove_user:

            // project_ajax_add_ptu
            if (preg_match('#^/project/(?P<id>[^/]++)/ajaxaddptu$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_project_ajax_add_ptu;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_ajax_add_ptu')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ProjectController::ajaxaddptuAction',));
            }
            not_project_ajax_add_ptu:

            // project_ajax_remove_ptu
            if (preg_match('#^/project/(?P<id>[^/]++)/remove/ptu$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_project_ajax_remove_ptu;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_ajax_remove_ptu')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ProjectController::ajaxremoveptuAction',));
            }
            not_project_ajax_remove_ptu:

            // project_ajax_reorder_ptus
            if (preg_match('#^/project/(?P<id>[^/]++)/reorderptus$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_project_ajax_reorder_ptus;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_ajax_reorder_ptus')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ProjectController::ajaxreorderptusAction',));
            }
            not_project_ajax_reorder_ptus:

            // project_ajax_update_status
            if (preg_match('#^/project/(?P<id>[^/]++)/updatestatus$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_project_ajax_update_status;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_ajax_update_status')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ProjectController::ajaxupdatestatusAction',));
            }
            not_project_ajax_update_status:

            if (0 === strpos($pathinfo, '/projectcanvas')) {
                // projectcanvas_list
                if ($pathinfo === '/projectcanvas') {
                    return array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ProjectCanvasController::indexAction',  '_route' => 'projectcanvas_list',);
                }

                // projectcanvas_add
                if ($pathinfo === '/projectcanvas/add') {
                    return array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ProjectCanvasController::addAction',  '_route' => 'projectcanvas_add',);
                }

                // projectcanvas_ajax_add_task
                if (preg_match('#^/projectcanvas/(?P<id>[^/]++)/addtask$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_projectcanvas_ajax_add_task;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'projectcanvas_ajax_add_task')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ProjectCanvasController::ajaxaddtaskAction',));
                }
                not_projectcanvas_ajax_add_task:

                // projectcanvas_show
                if (preg_match('#^/projectcanvas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'projectcanvas_show')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ProjectCanvasController::showAction',));
                }

                // projectcanvas_edit
                if (preg_match('#^/projectcanvas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'projectcanvas_edit')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ProjectCanvasController::editAction',));
                }

                // projectcanvas_delete
                if (preg_match('#^/projectcanvas/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'projectcanvas_delete')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ProjectCanvasController::deleteAction',));
                }

                // projectcanvas_ajax_delete_task
                if (preg_match('#^/projectcanvas/(?P<id>[^/]++)/deletetask$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_projectcanvas_ajax_delete_task;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'projectcanvas_ajax_delete_task')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ProjectCanvasController::ajaxdeletetaskAction',));
                }
                not_projectcanvas_ajax_delete_task:

                // projectcanvas_ajax_reorder_tasks
                if (preg_match('#^/projectcanvas/(?P<id>[^/]++)/reordertasks$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_projectcanvas_ajax_reorder_tasks;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'projectcanvas_ajax_reorder_tasks')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ProjectCanvasController::ajaxreordertasksAction',));
                }
                not_projectcanvas_ajax_reorder_tasks:

            }

            // projecttaskuser_ajax_edit_ptu
            if (0 === strpos($pathinfo, '/projecttaskuser') && preg_match('#^/projecttaskuser/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projecttaskuser_ajax_edit_ptu')), array (  '_controller' => 'Flyd\\DashboardBundle\\Controller\\ProjectTaskUserController::editAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/media/cache')) {
            // _imagine_miniature
            if (preg_match('#^/media/cache/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__imagine_miniature;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_miniature')), array (  '_controller' => 'imagine.controller:filter',  'filter' => 'miniature',));
            }
            not__imagine_miniature:

            // _imagine_demi
            if (preg_match('#^/media/cache/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__imagine_demi;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_demi')), array (  '_controller' => 'imagine.controller:filter',  'filter' => 'demi',));
            }
            not__imagine_demi:

            // _imagine_small
            if (preg_match('#^/media/cache/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__imagine_small;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_small')), array (  '_controller' => 'imagine.controller:filter',  'filter' => 'small',));
            }
            not__imagine_small:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

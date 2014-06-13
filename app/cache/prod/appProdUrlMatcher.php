<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/back')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/back') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/back/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/back/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/back/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/back/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/back/core/get-short-object-description') && preg_match('#^/back/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/back/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            if (0 === strpos($pathinfo, '/back/s')) {
                // sonata_admin_search
                if ($pathinfo === '/back/search') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
                }

                if (0 === strpos($pathinfo, '/back/sonata/user')) {
                    if (0 === strpos($pathinfo, '/back/sonata/user/user')) {
                        // admin_sonata_user_user_list
                        if ($pathinfo === '/back/sonata/user/user/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_list',  '_route' => 'admin_sonata_user_user_list',);
                        }

                        // admin_sonata_user_user_create
                        if ($pathinfo === '/back/sonata/user/user/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_create',  '_route' => 'admin_sonata_user_user_create',);
                        }

                        // admin_sonata_user_user_batch
                        if ($pathinfo === '/back/sonata/user/user/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_batch',  '_route' => 'admin_sonata_user_user_batch',);
                        }

                        // admin_sonata_user_user_edit
                        if (preg_match('#^/back/sonata/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_edit',));
                        }

                        // admin_sonata_user_user_delete
                        if (preg_match('#^/back/sonata/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_delete',));
                        }

                        // admin_sonata_user_user_show
                        if (preg_match('#^/back/sonata/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_show',));
                        }

                        // admin_sonata_user_user_export
                        if ($pathinfo === '/back/sonata/user/user/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_export',  '_route' => 'admin_sonata_user_user_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/back/sonata/user/group')) {
                        // admin_sonata_user_group_list
                        if ($pathinfo === '/back/sonata/user/group/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',  '_route' => 'admin_sonata_user_group_list',);
                        }

                        // admin_sonata_user_group_create
                        if ($pathinfo === '/back/sonata/user/group/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',  '_route' => 'admin_sonata_user_group_create',);
                        }

                        // admin_sonata_user_group_batch
                        if ($pathinfo === '/back/sonata/user/group/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',  '_route' => 'admin_sonata_user_group_batch',);
                        }

                        // admin_sonata_user_group_edit
                        if (preg_match('#^/back/sonata/user/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',));
                        }

                        // admin_sonata_user_group_delete
                        if (preg_match('#^/back/sonata/user/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',));
                        }

                        // admin_sonata_user_group_show
                        if (preg_match('#^/back/sonata/user/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',));
                        }

                        // admin_sonata_user_group_export
                        if ($pathinfo === '/back/sonata/user/group/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_export',  '_route' => 'admin_sonata_user_group_export',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/back/gestion/core')) {
                if (0 === strpos($pathinfo, '/back/gestion/core/a')) {
                    if (0 === strpos($pathinfo, '/back/gestion/core/agence')) {
                        // admin_gestion_core_agence_list
                        if ($pathinfo === '/back/gestion/core/agence/list') {
                            return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\AgenceAdminController::listAction',  '_sonata_admin' => 'sonata.agence.admin',  '_sonata_name' => 'admin_gestion_core_agence_list',  '_route' => 'admin_gestion_core_agence_list',);
                        }

                        // admin_gestion_core_agence_create
                        if ($pathinfo === '/back/gestion/core/agence/create') {
                            return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\AgenceAdminController::createAction',  '_sonata_admin' => 'sonata.agence.admin',  '_sonata_name' => 'admin_gestion_core_agence_create',  '_route' => 'admin_gestion_core_agence_create',);
                        }

                        // admin_gestion_core_agence_batch
                        if ($pathinfo === '/back/gestion/core/agence/batch') {
                            return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\AgenceAdminController::batchAction',  '_sonata_admin' => 'sonata.agence.admin',  '_sonata_name' => 'admin_gestion_core_agence_batch',  '_route' => 'admin_gestion_core_agence_batch',);
                        }

                        // admin_gestion_core_agence_edit
                        if (preg_match('#^/back/gestion/core/agence/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_agence_edit')), array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\AgenceAdminController::editAction',  '_sonata_admin' => 'sonata.agence.admin',  '_sonata_name' => 'admin_gestion_core_agence_edit',));
                        }

                        // admin_gestion_core_agence_delete
                        if (preg_match('#^/back/gestion/core/agence/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_agence_delete')), array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\AgenceAdminController::deleteAction',  '_sonata_admin' => 'sonata.agence.admin',  '_sonata_name' => 'admin_gestion_core_agence_delete',));
                        }

                        // admin_gestion_core_agence_show
                        if (preg_match('#^/back/gestion/core/agence/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_agence_show')), array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\AgenceAdminController::showAction',  '_sonata_admin' => 'sonata.agence.admin',  '_sonata_name' => 'admin_gestion_core_agence_show',));
                        }

                        // admin_gestion_core_agence_export
                        if ($pathinfo === '/back/gestion/core/agence/export') {
                            return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\AgenceAdminController::exportAction',  '_sonata_admin' => 'sonata.agence.admin',  '_sonata_name' => 'admin_gestion_core_agence_export',  '_route' => 'admin_gestion_core_agence_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/back/gestion/core/activite')) {
                        // admin_gestion_core_activite_list
                        if ($pathinfo === '/back/gestion/core/activite/list') {
                            return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\ActiviteAdminController::listAction',  '_sonata_admin' => 'gestion_core.admin.activite',  '_sonata_name' => 'admin_gestion_core_activite_list',  '_route' => 'admin_gestion_core_activite_list',);
                        }

                        // admin_gestion_core_activite_create
                        if ($pathinfo === '/back/gestion/core/activite/create') {
                            return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\ActiviteAdminController::createAction',  '_sonata_admin' => 'gestion_core.admin.activite',  '_sonata_name' => 'admin_gestion_core_activite_create',  '_route' => 'admin_gestion_core_activite_create',);
                        }

                        // admin_gestion_core_activite_batch
                        if ($pathinfo === '/back/gestion/core/activite/batch') {
                            return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\ActiviteAdminController::batchAction',  '_sonata_admin' => 'gestion_core.admin.activite',  '_sonata_name' => 'admin_gestion_core_activite_batch',  '_route' => 'admin_gestion_core_activite_batch',);
                        }

                        // admin_gestion_core_activite_edit
                        if (preg_match('#^/back/gestion/core/activite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_activite_edit')), array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\ActiviteAdminController::editAction',  '_sonata_admin' => 'gestion_core.admin.activite',  '_sonata_name' => 'admin_gestion_core_activite_edit',));
                        }

                        // admin_gestion_core_activite_delete
                        if (preg_match('#^/back/gestion/core/activite/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_activite_delete')), array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\ActiviteAdminController::deleteAction',  '_sonata_admin' => 'gestion_core.admin.activite',  '_sonata_name' => 'admin_gestion_core_activite_delete',));
                        }

                        // admin_gestion_core_activite_show
                        if (preg_match('#^/back/gestion/core/activite/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_activite_show')), array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\ActiviteAdminController::showAction',  '_sonata_admin' => 'gestion_core.admin.activite',  '_sonata_name' => 'admin_gestion_core_activite_show',));
                        }

                        // admin_gestion_core_activite_export
                        if ($pathinfo === '/back/gestion/core/activite/export') {
                            return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\ActiviteAdminController::exportAction',  '_sonata_admin' => 'gestion_core.admin.activite',  '_sonata_name' => 'admin_gestion_core_activite_export',  '_route' => 'admin_gestion_core_activite_export',);
                        }

                        if (0 === strpos($pathinfo, '/back/gestion/core/activitetype')) {
                            // admin_gestion_core_activitetype_list
                            if ($pathinfo === '/back/gestion/core/activitetype/list') {
                                return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\ActiviteTypeAdminController::listAction',  '_sonata_admin' => 'gestion_core.admin.activite_type',  '_sonata_name' => 'admin_gestion_core_activitetype_list',  '_route' => 'admin_gestion_core_activitetype_list',);
                            }

                            // admin_gestion_core_activitetype_create
                            if ($pathinfo === '/back/gestion/core/activitetype/create') {
                                return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\ActiviteTypeAdminController::createAction',  '_sonata_admin' => 'gestion_core.admin.activite_type',  '_sonata_name' => 'admin_gestion_core_activitetype_create',  '_route' => 'admin_gestion_core_activitetype_create',);
                            }

                            // admin_gestion_core_activitetype_batch
                            if ($pathinfo === '/back/gestion/core/activitetype/batch') {
                                return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\ActiviteTypeAdminController::batchAction',  '_sonata_admin' => 'gestion_core.admin.activite_type',  '_sonata_name' => 'admin_gestion_core_activitetype_batch',  '_route' => 'admin_gestion_core_activitetype_batch',);
                            }

                            // admin_gestion_core_activitetype_edit
                            if (preg_match('#^/back/gestion/core/activitetype/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_activitetype_edit')), array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\ActiviteTypeAdminController::editAction',  '_sonata_admin' => 'gestion_core.admin.activite_type',  '_sonata_name' => 'admin_gestion_core_activitetype_edit',));
                            }

                            // admin_gestion_core_activitetype_delete
                            if (preg_match('#^/back/gestion/core/activitetype/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_activitetype_delete')), array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\ActiviteTypeAdminController::deleteAction',  '_sonata_admin' => 'gestion_core.admin.activite_type',  '_sonata_name' => 'admin_gestion_core_activitetype_delete',));
                            }

                            // admin_gestion_core_activitetype_show
                            if (preg_match('#^/back/gestion/core/activitetype/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_activitetype_show')), array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\ActiviteTypeAdminController::showAction',  '_sonata_admin' => 'gestion_core.admin.activite_type',  '_sonata_name' => 'admin_gestion_core_activitetype_show',));
                            }

                            // admin_gestion_core_activitetype_export
                            if ($pathinfo === '/back/gestion/core/activitetype/export') {
                                return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\ActiviteTypeAdminController::exportAction',  '_sonata_admin' => 'gestion_core.admin.activite_type',  '_sonata_name' => 'admin_gestion_core_activitetype_export',  '_route' => 'admin_gestion_core_activitetype_export',);
                            }

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/back/gestion/core/famille')) {
                    // admin_gestion_core_famille_list
                    if ($pathinfo === '/back/gestion/core/famille/list') {
                        return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\FamilleAdminController::listAction',  '_sonata_admin' => 'gestion_core.admin.famille',  '_sonata_name' => 'admin_gestion_core_famille_list',  '_route' => 'admin_gestion_core_famille_list',);
                    }

                    // admin_gestion_core_famille_create
                    if ($pathinfo === '/back/gestion/core/famille/create') {
                        return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\FamilleAdminController::createAction',  '_sonata_admin' => 'gestion_core.admin.famille',  '_sonata_name' => 'admin_gestion_core_famille_create',  '_route' => 'admin_gestion_core_famille_create',);
                    }

                    // admin_gestion_core_famille_batch
                    if ($pathinfo === '/back/gestion/core/famille/batch') {
                        return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\FamilleAdminController::batchAction',  '_sonata_admin' => 'gestion_core.admin.famille',  '_sonata_name' => 'admin_gestion_core_famille_batch',  '_route' => 'admin_gestion_core_famille_batch',);
                    }

                    // admin_gestion_core_famille_edit
                    if (preg_match('#^/back/gestion/core/famille/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_famille_edit')), array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\FamilleAdminController::editAction',  '_sonata_admin' => 'gestion_core.admin.famille',  '_sonata_name' => 'admin_gestion_core_famille_edit',));
                    }

                    // admin_gestion_core_famille_delete
                    if (preg_match('#^/back/gestion/core/famille/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_famille_delete')), array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\FamilleAdminController::deleteAction',  '_sonata_admin' => 'gestion_core.admin.famille',  '_sonata_name' => 'admin_gestion_core_famille_delete',));
                    }

                    // admin_gestion_core_famille_show
                    if (preg_match('#^/back/gestion/core/famille/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_famille_show')), array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\FamilleAdminController::showAction',  '_sonata_admin' => 'gestion_core.admin.famille',  '_sonata_name' => 'admin_gestion_core_famille_show',));
                    }

                    // admin_gestion_core_famille_export
                    if ($pathinfo === '/back/gestion/core/famille/export') {
                        return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\FamilleAdminController::exportAction',  '_sonata_admin' => 'gestion_core.admin.famille',  '_sonata_name' => 'admin_gestion_core_famille_export',  '_route' => 'admin_gestion_core_famille_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/back/gestion/core/membre')) {
                    // admin_gestion_core_membre_list
                    if ($pathinfo === '/back/gestion/core/membre/list') {
                        return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\MembreAdminController::listAction',  '_sonata_admin' => 'gestion_core.admin.membre',  '_sonata_name' => 'admin_gestion_core_membre_list',  '_route' => 'admin_gestion_core_membre_list',);
                    }

                    // admin_gestion_core_membre_create
                    if ($pathinfo === '/back/gestion/core/membre/create') {
                        return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\MembreAdminController::createAction',  '_sonata_admin' => 'gestion_core.admin.membre',  '_sonata_name' => 'admin_gestion_core_membre_create',  '_route' => 'admin_gestion_core_membre_create',);
                    }

                    // admin_gestion_core_membre_batch
                    if ($pathinfo === '/back/gestion/core/membre/batch') {
                        return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\MembreAdminController::batchAction',  '_sonata_admin' => 'gestion_core.admin.membre',  '_sonata_name' => 'admin_gestion_core_membre_batch',  '_route' => 'admin_gestion_core_membre_batch',);
                    }

                    // admin_gestion_core_membre_edit
                    if (preg_match('#^/back/gestion/core/membre/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_membre_edit')), array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\MembreAdminController::editAction',  '_sonata_admin' => 'gestion_core.admin.membre',  '_sonata_name' => 'admin_gestion_core_membre_edit',));
                    }

                    // admin_gestion_core_membre_delete
                    if (preg_match('#^/back/gestion/core/membre/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_membre_delete')), array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\MembreAdminController::deleteAction',  '_sonata_admin' => 'gestion_core.admin.membre',  '_sonata_name' => 'admin_gestion_core_membre_delete',));
                    }

                    // admin_gestion_core_membre_show
                    if (preg_match('#^/back/gestion/core/membre/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_membre_show')), array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\MembreAdminController::showAction',  '_sonata_admin' => 'gestion_core.admin.membre',  '_sonata_name' => 'admin_gestion_core_membre_show',));
                    }

                    // admin_gestion_core_membre_export
                    if ($pathinfo === '/back/gestion/core/membre/export') {
                        return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\MembreAdminController::exportAction',  '_sonata_admin' => 'gestion_core.admin.membre',  '_sonata_name' => 'admin_gestion_core_membre_export',  '_route' => 'admin_gestion_core_membre_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/back/gestion/core/gallerie')) {
                    // admin_gestion_core_gallerie_list
                    if ($pathinfo === '/back/gestion/core/gallerie/list') {
                        return array (  '_controller' => 'GestionCoreBundle:GallerieAdmin:list',  '_sonata_admin' => 'gestion_core.admin.gallerie',  '_sonata_name' => 'admin_gestion_core_gallerie_list',  '_route' => 'admin_gestion_core_gallerie_list',);
                    }

                    // admin_gestion_core_gallerie_create
                    if ($pathinfo === '/back/gestion/core/gallerie/create') {
                        return array (  '_controller' => 'GestionCoreBundle:GallerieAdmin:create',  '_sonata_admin' => 'gestion_core.admin.gallerie',  '_sonata_name' => 'admin_gestion_core_gallerie_create',  '_route' => 'admin_gestion_core_gallerie_create',);
                    }

                    // admin_gestion_core_gallerie_batch
                    if ($pathinfo === '/back/gestion/core/gallerie/batch') {
                        return array (  '_controller' => 'GestionCoreBundle:GallerieAdmin:batch',  '_sonata_admin' => 'gestion_core.admin.gallerie',  '_sonata_name' => 'admin_gestion_core_gallerie_batch',  '_route' => 'admin_gestion_core_gallerie_batch',);
                    }

                    // admin_gestion_core_gallerie_edit
                    if (preg_match('#^/back/gestion/core/gallerie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_gallerie_edit')), array (  '_controller' => 'GestionCoreBundle:GallerieAdmin:edit',  '_sonata_admin' => 'gestion_core.admin.gallerie',  '_sonata_name' => 'admin_gestion_core_gallerie_edit',));
                    }

                    // admin_gestion_core_gallerie_delete
                    if (preg_match('#^/back/gestion/core/gallerie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_gallerie_delete')), array (  '_controller' => 'GestionCoreBundle:GallerieAdmin:delete',  '_sonata_admin' => 'gestion_core.admin.gallerie',  '_sonata_name' => 'admin_gestion_core_gallerie_delete',));
                    }

                    // admin_gestion_core_gallerie_show
                    if (preg_match('#^/back/gestion/core/gallerie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_gallerie_show')), array (  '_controller' => 'GestionCoreBundle:GallerieAdmin:show',  '_sonata_admin' => 'gestion_core.admin.gallerie',  '_sonata_name' => 'admin_gestion_core_gallerie_show',));
                    }

                    // admin_gestion_core_gallerie_export
                    if ($pathinfo === '/back/gestion/core/gallerie/export') {
                        return array (  '_controller' => 'GestionCoreBundle:GallerieAdmin:export',  '_sonata_admin' => 'gestion_core.admin.gallerie',  '_sonata_name' => 'admin_gestion_core_gallerie_export',  '_route' => 'admin_gestion_core_gallerie_export',);
                    }

                    // admin_gestion_core_gallerie_test
                    if (preg_match('#^/back/gestion/core/gallerie/(?P<id>[^/]++)/test$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_gallerie_test')), array (  '_controller' => 'GestionCoreBundle:GallerieAdmin:test',  '_sonata_admin' => 'gestion_core.admin.gallerie',  '_sonata_name' => 'admin_gestion_core_gallerie_test',));
                    }

                }

                if (0 === strpos($pathinfo, '/back/gestion/core/membretype')) {
                    // admin_gestion_core_membretype_list
                    if ($pathinfo === '/back/gestion/core/membretype/list') {
                        return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\MembreTypeAdminController::listAction',  '_sonata_admin' => 'gestion_core.admin.membre_type',  '_sonata_name' => 'admin_gestion_core_membretype_list',  '_route' => 'admin_gestion_core_membretype_list',);
                    }

                    // admin_gestion_core_membretype_create
                    if ($pathinfo === '/back/gestion/core/membretype/create') {
                        return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\MembreTypeAdminController::createAction',  '_sonata_admin' => 'gestion_core.admin.membre_type',  '_sonata_name' => 'admin_gestion_core_membretype_create',  '_route' => 'admin_gestion_core_membretype_create',);
                    }

                    // admin_gestion_core_membretype_batch
                    if ($pathinfo === '/back/gestion/core/membretype/batch') {
                        return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\MembreTypeAdminController::batchAction',  '_sonata_admin' => 'gestion_core.admin.membre_type',  '_sonata_name' => 'admin_gestion_core_membretype_batch',  '_route' => 'admin_gestion_core_membretype_batch',);
                    }

                    // admin_gestion_core_membretype_edit
                    if (preg_match('#^/back/gestion/core/membretype/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_membretype_edit')), array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\MembreTypeAdminController::editAction',  '_sonata_admin' => 'gestion_core.admin.membre_type',  '_sonata_name' => 'admin_gestion_core_membretype_edit',));
                    }

                    // admin_gestion_core_membretype_delete
                    if (preg_match('#^/back/gestion/core/membretype/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_membretype_delete')), array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\MembreTypeAdminController::deleteAction',  '_sonata_admin' => 'gestion_core.admin.membre_type',  '_sonata_name' => 'admin_gestion_core_membretype_delete',));
                    }

                    // admin_gestion_core_membretype_show
                    if (preg_match('#^/back/gestion/core/membretype/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_membretype_show')), array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\MembreTypeAdminController::showAction',  '_sonata_admin' => 'gestion_core.admin.membre_type',  '_sonata_name' => 'admin_gestion_core_membretype_show',));
                    }

                    // admin_gestion_core_membretype_export
                    if ($pathinfo === '/back/gestion/core/membretype/export') {
                        return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\MembreTypeAdminController::exportAction',  '_sonata_admin' => 'gestion_core.admin.membre_type',  '_sonata_name' => 'admin_gestion_core_membretype_export',  '_route' => 'admin_gestion_core_membretype_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/back/gestion/core/quotient')) {
                    // admin_gestion_core_quotient_list
                    if ($pathinfo === '/back/gestion/core/quotient/list') {
                        return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\QuotientAdminController::listAction',  '_sonata_admin' => 'gestion_core.admin.quotient',  '_sonata_name' => 'admin_gestion_core_quotient_list',  '_route' => 'admin_gestion_core_quotient_list',);
                    }

                    // admin_gestion_core_quotient_create
                    if ($pathinfo === '/back/gestion/core/quotient/create') {
                        return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\QuotientAdminController::createAction',  '_sonata_admin' => 'gestion_core.admin.quotient',  '_sonata_name' => 'admin_gestion_core_quotient_create',  '_route' => 'admin_gestion_core_quotient_create',);
                    }

                    // admin_gestion_core_quotient_batch
                    if ($pathinfo === '/back/gestion/core/quotient/batch') {
                        return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\QuotientAdminController::batchAction',  '_sonata_admin' => 'gestion_core.admin.quotient',  '_sonata_name' => 'admin_gestion_core_quotient_batch',  '_route' => 'admin_gestion_core_quotient_batch',);
                    }

                    // admin_gestion_core_quotient_edit
                    if (preg_match('#^/back/gestion/core/quotient/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_quotient_edit')), array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\QuotientAdminController::editAction',  '_sonata_admin' => 'gestion_core.admin.quotient',  '_sonata_name' => 'admin_gestion_core_quotient_edit',));
                    }

                    // admin_gestion_core_quotient_delete
                    if (preg_match('#^/back/gestion/core/quotient/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_quotient_delete')), array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\QuotientAdminController::deleteAction',  '_sonata_admin' => 'gestion_core.admin.quotient',  '_sonata_name' => 'admin_gestion_core_quotient_delete',));
                    }

                    // admin_gestion_core_quotient_show
                    if (preg_match('#^/back/gestion/core/quotient/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_quotient_show')), array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\QuotientAdminController::showAction',  '_sonata_admin' => 'gestion_core.admin.quotient',  '_sonata_name' => 'admin_gestion_core_quotient_show',));
                    }

                    // admin_gestion_core_quotient_export
                    if ($pathinfo === '/back/gestion/core/quotient/export') {
                        return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\QuotientAdminController::exportAction',  '_sonata_admin' => 'gestion_core.admin.quotient',  '_sonata_name' => 'admin_gestion_core_quotient_export',  '_route' => 'admin_gestion_core_quotient_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/back/gestion/core/remboursement')) {
                    // admin_gestion_core_remboursement_list
                    if ($pathinfo === '/back/gestion/core/remboursement/list') {
                        return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\RemboursementAdminController::listAction',  '_sonata_admin' => 'gestion_core.admin.remboursement',  '_sonata_name' => 'admin_gestion_core_remboursement_list',  '_route' => 'admin_gestion_core_remboursement_list',);
                    }

                    // admin_gestion_core_remboursement_create
                    if ($pathinfo === '/back/gestion/core/remboursement/create') {
                        return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\RemboursementAdminController::createAction',  '_sonata_admin' => 'gestion_core.admin.remboursement',  '_sonata_name' => 'admin_gestion_core_remboursement_create',  '_route' => 'admin_gestion_core_remboursement_create',);
                    }

                    // admin_gestion_core_remboursement_batch
                    if ($pathinfo === '/back/gestion/core/remboursement/batch') {
                        return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\RemboursementAdminController::batchAction',  '_sonata_admin' => 'gestion_core.admin.remboursement',  '_sonata_name' => 'admin_gestion_core_remboursement_batch',  '_route' => 'admin_gestion_core_remboursement_batch',);
                    }

                    // admin_gestion_core_remboursement_edit
                    if (preg_match('#^/back/gestion/core/remboursement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_remboursement_edit')), array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\RemboursementAdminController::editAction',  '_sonata_admin' => 'gestion_core.admin.remboursement',  '_sonata_name' => 'admin_gestion_core_remboursement_edit',));
                    }

                    // admin_gestion_core_remboursement_delete
                    if (preg_match('#^/back/gestion/core/remboursement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_remboursement_delete')), array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\RemboursementAdminController::deleteAction',  '_sonata_admin' => 'gestion_core.admin.remboursement',  '_sonata_name' => 'admin_gestion_core_remboursement_delete',));
                    }

                    // admin_gestion_core_remboursement_show
                    if (preg_match('#^/back/gestion/core/remboursement/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_remboursement_show')), array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\RemboursementAdminController::showAction',  '_sonata_admin' => 'gestion_core.admin.remboursement',  '_sonata_name' => 'admin_gestion_core_remboursement_show',));
                    }

                    // admin_gestion_core_remboursement_export
                    if ($pathinfo === '/back/gestion/core/remboursement/export') {
                        return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\RemboursementAdminController::exportAction',  '_sonata_admin' => 'gestion_core.admin.remboursement',  '_sonata_name' => 'admin_gestion_core_remboursement_export',  '_route' => 'admin_gestion_core_remboursement_export',);
                    }

                    // admin_gestion_core_remboursement_precalc
                    if ($pathinfo === '/back/gestion/core/remboursement//precalc') {
                        return array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\RemboursementAdminController::precalcAction',  '_sonata_admin' => 'gestion_core.admin.remboursement',  '_sonata_name' => 'admin_gestion_core_remboursement_precalc',  '_route' => 'admin_gestion_core_remboursement_precalc',);
                    }

                    // admin_gestion_core_remboursement_paiement
                    if (preg_match('#^/back/gestion/core/remboursement/(?P<id>[^/]++)/paiement$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gestion_core_remboursement_paiement')), array (  '_controller' => 'Gestion\\CoreBundle\\Controller\\RemboursementAdminController::paiementAction',  '_sonata_admin' => 'gestion_core.admin.remboursement',  '_sonata_name' => 'admin_gestion_core_remboursement_paiement',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/back/log')) {
                if (0 === strpos($pathinfo, '/back/login')) {
                    // sonata_user_admin_security_login
                    if ($pathinfo === '/back/login') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                    }

                    // sonata_user_admin_security_check
                    if ($pathinfo === '/back/login_check') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                    }

                }

                // sonata_user_admin_security_logout
                if ($pathinfo === '/back/logout') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin/_thrace-media')) {
            // thrace_media_file_upload
            if (0 === strpos($pathinfo, '/admin/_thrace-media/file-upload') && preg_match('#^/admin/_thrace\\-media/file\\-upload(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_thrace_media_file_upload;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thrace_media_file_upload')), array (  '_controller' => 'Thrace\\MediaBundle\\Controller\\FileController::uploadAction',  '_format' => 'json',));
            }
            not_thrace_media_file_upload:

            if (0 === strpos($pathinfo, '/admin/_thrace-media/image-')) {
                // thrace_media_image_upload
                if (0 === strpos($pathinfo, '/admin/_thrace-media/image-upload') && preg_match('#^/admin/_thrace\\-media/image\\-upload(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_thrace_media_image_upload;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'thrace_media_image_upload')), array (  '_controller' => 'Thrace\\MediaBundle\\Controller\\ImageController::uploadAction',  '_format' => 'json',));
                }
                not_thrace_media_image_upload:

                // thrace_media_image_render_temporary
                if ($pathinfo === '/admin/_thrace-media/image-render-temporary') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_thrace_media_image_render_temporary;
                    }

                    return array (  '_controller' => 'Thrace\\MediaBundle\\Controller\\ImageController::renderTemporaryAction',  '_route' => 'thrace_media_image_render_temporary',);
                }
                not_thrace_media_image_render_temporary:

            }

            // thrace_media_render_temporary
            if ($pathinfo === '/admin/_thrace-media/render-temporary') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_thrace_media_render_temporary;
                }

                return array (  '_controller' => 'Thrace\\MediaBundle\\Controller\\FileController::renderTemporaryAction',  '_route' => 'thrace_media_render_temporary',);
            }
            not_thrace_media_render_temporary:

            if (0 === strpos($pathinfo, '/admin/_thrace-media/image-')) {
                // thrace_media_image_crop
                if (0 === strpos($pathinfo, '/admin/_thrace-media/image-crop') && preg_match('#^/admin/_thrace\\-media/image\\-crop(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_thrace_media_image_crop;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'thrace_media_image_crop')), array (  '_controller' => 'Thrace\\MediaBundle\\Controller\\ImageController::cropAction',  '_format' => 'json',));
                }
                not_thrace_media_image_crop:

                if (0 === strpos($pathinfo, '/admin/_thrace-media/image-r')) {
                    // thrace_media_image_rotate
                    if (0 === strpos($pathinfo, '/admin/_thrace-media/image-rotate') && preg_match('#^/admin/_thrace\\-media/image\\-rotate(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_thrace_media_image_rotate;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'thrace_media_image_rotate')), array (  '_controller' => 'Thrace\\MediaBundle\\Controller\\ImageController::rotateAction',  '_format' => 'json',));
                    }
                    not_thrace_media_image_rotate:

                    // thrace_media_image_reset
                    if (0 === strpos($pathinfo, '/admin/_thrace-media/image-reset') && preg_match('#^/admin/_thrace\\-media/image\\-reset(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_thrace_media_image_reset;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'thrace_media_image_reset')), array (  '_controller' => 'Thrace\\MediaBundle\\Controller\\ImageController::resetAction',  '_format' => 'json',));
                    }
                    not_thrace_media_image_reset:

                }

            }

        }

        if (0 === strpos($pathinfo, '/_thrace-media')) {
            // thrace_media_file_download
            if ($pathinfo === '/_thrace-media/file-download') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_thrace_media_file_download;
                }

                return array (  '_controller' => 'Thrace\\MediaBundle\\Controller\\FileController::downloadAction',  '_route' => 'thrace_media_file_download',);
            }
            not_thrace_media_file_download:

            // thrace_media_render
            if ($pathinfo === '/_thrace-media/render') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_thrace_media_render;
                }

                return array (  '_controller' => 'Thrace\\MediaBundle\\Controller\\FileController::renderAction',  '_route' => 'thrace_media_render',);
            }
            not_thrace_media_render:

            // thrace_media_image_render
            if ($pathinfo === '/_thrace-media/image-render') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_thrace_media_image_render;
                }

                return array (  '_controller' => 'Thrace\\MediaBundle\\Controller\\ImageController::renderAction',  '_route' => 'thrace_media_image_render',);
            }
            not_thrace_media_image_render:

            // thrace_media_original_image_render
            if ($pathinfo === '/_thrace-media/original-image-render') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_thrace_media_original_image_render;
                }

                return array (  '_controller' => 'Thrace\\MediaBundle\\Controller\\ImageController::renderOriginalAction',  '_route' => 'thrace_media_original_image_render',);
            }
            not_thrace_media_original_image_render:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

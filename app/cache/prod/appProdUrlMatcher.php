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

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_dash
            if ($pathinfo === '/admin/admin') {
                return array (  '_controller' => 'App\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_dash',);
            }

            // home
            if ($pathinfo === '/admin/home') {
                return array (  '_controller' => 'App\\AdminBundle\\Controller\\DefaultController::frontConnexionAction',  '_route' => 'home',);
            }

            if (0 === strpos($pathinfo, '/admin/field')) {
                // field
                if (0 === strpos($pathinfo, '/admin/field/list') && preg_match('#^/admin/field/list(?:/(?P<sCodeLangue>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_field;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'field')), array (  'sCodeLangue' => 'FR',  '_controller' => 'App\\AdminBundle\\Controller\\FieldController::indexAction',));
                }
                not_field:

                // field_create
                if ($pathinfo === '/admin/field/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_field_create;
                    }

                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\FieldController::createAction',  '_route' => 'field_create',);
                }
                not_field_create:

                // field_new
                if ($pathinfo === '/admin/field/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_field_new;
                    }

                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\FieldController::newAction',  '_route' => 'field_new',);
                }
                not_field_new:

                // field_show
                if (preg_match('#^/admin/field/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_field_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'field_show')), array (  '_controller' => 'App\\AdminBundle\\Controller\\FieldController::showAction',));
                }
                not_field_show:

                // field_edit
                if (preg_match('#^/admin/field/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_field_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'field_edit')), array (  '_controller' => 'App\\AdminBundle\\Controller\\FieldController::editAction',));
                }
                not_field_edit:

                // field_update
                if (preg_match('#^/admin/field/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_field_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'field_update')), array (  '_controller' => 'App\\AdminBundle\\Controller\\FieldController::updateAction',));
                }
                not_field_update:

                // field_delete
                if (preg_match('#^/admin/field/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_field_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'field_delete')), array (  '_controller' => 'App\\AdminBundle\\Controller\\FieldController::deleteAction',));
                }
                not_field_delete:

                if (0 === strpos($pathinfo, '/admin/field/delete')) {
                    // field_delete_list
                    if (preg_match('#^/admin/field/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'field_delete_list')), array (  '_controller' => 'App\\AdminBundle\\Controller\\FieldController::deleteFieldListAction',));
                    }

                    // delete_field_from_list
                    if (0 === strpos($pathinfo, '/admin/field/delete/field') && preg_match('#^/admin/field/delete/field/(?P<iId>[^/]++)/(?P<iLangue>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_field_from_list')), array (  '_controller' => 'App\\AdminBundle\\Controller\\FieldController::deleteFieldFromListAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/fieldtranslation')) {
                    // fieldtranslation
                    if (rtrim($pathinfo, '/') === '/admin/fieldtranslation') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fieldtranslation;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'fieldtranslation');
                        }

                        return array (  '_controller' => 'App\\AdminBundle\\Controller\\FieldTranslationController::indexAction',  '_route' => 'fieldtranslation',);
                    }
                    not_fieldtranslation:

                    // fieldtranslation_create
                    if ($pathinfo === '/admin/fieldtranslation/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_fieldtranslation_create;
                        }

                        return array (  '_controller' => 'App\\AdminBundle\\Controller\\FieldTranslationController::createAction',  '_route' => 'fieldtranslation_create',);
                    }
                    not_fieldtranslation_create:

                    // fieldtranslation_new
                    if ($pathinfo === '/admin/fieldtranslation/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fieldtranslation_new;
                        }

                        return array (  '_controller' => 'App\\AdminBundle\\Controller\\FieldTranslationController::newAction',  '_route' => 'fieldtranslation_new',);
                    }
                    not_fieldtranslation_new:

                    // fieldtranslation_show
                    if (preg_match('#^/admin/fieldtranslation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fieldtranslation_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fieldtranslation_show')), array (  '_controller' => 'App\\AdminBundle\\Controller\\FieldTranslationController::showAction',));
                    }
                    not_fieldtranslation_show:

                    // fieldtranslation_edit
                    if (preg_match('#^/admin/fieldtranslation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fieldtranslation_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fieldtranslation_edit')), array (  '_controller' => 'App\\AdminBundle\\Controller\\FieldTranslationController::editAction',));
                    }
                    not_fieldtranslation_edit:

                    // fieldtranslation_update
                    if (preg_match('#^/admin/fieldtranslation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_fieldtranslation_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fieldtranslation_update')), array (  '_controller' => 'App\\AdminBundle\\Controller\\FieldTranslationController::updateAction',));
                    }
                    not_fieldtranslation_update:

                    // fieldtranslation_delete
                    if (preg_match('#^/admin/fieldtranslation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_fieldtranslation_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fieldtranslation_delete')), array (  '_controller' => 'App\\AdminBundle\\Controller\\FieldTranslationController::deleteAction',));
                    }
                    not_fieldtranslation_delete:

                }

            }

            if (0 === strpos($pathinfo, '/admin/hermesuser')) {
                // users_hermes_list
                if (rtrim($pathinfo, '/') === '/admin/hermesuser') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_users_hermes_list;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'users_hermes_list');
                    }

                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\HermesUserController::indexAction',  '_route' => 'users_hermes_list',);
                }
                not_users_hermes_list:

                // hermesuser_generate
                if ($pathinfo === '/admin/hermesuser/generate') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_hermesuser_generate;
                    }

                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\HermesUserController::generateAction',  '_route' => 'hermesuser_generate',);
                }
                not_hermesuser_generate:

                // users_hermes_reponse
                if ($pathinfo === '/admin/hermesuser/reponses') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_users_hermes_reponse;
                    }

                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\HermesUserController::reponsesAction',  '_route' => 'users_hermes_reponse',);
                }
                not_users_hermes_reponse:

                // hermesuser_create
                if ($pathinfo === '/admin/hermesuser/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_hermesuser_create;
                    }

                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\HermesUserController::createAction',  '_route' => 'hermesuser_create',);
                }
                not_hermesuser_create:

                // hermesuser_new
                if ($pathinfo === '/admin/hermesuser/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_hermesuser_new;
                    }

                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\HermesUserController::newAction',  '_route' => 'hermesuser_new',);
                }
                not_hermesuser_new:

                // hermesuser_show
                if (preg_match('#^/admin/hermesuser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_hermesuser_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hermesuser_show')), array (  '_controller' => 'App\\AdminBundle\\Controller\\HermesUserController::showAction',));
                }
                not_hermesuser_show:

                // hermesuser_edit
                if (preg_match('#^/admin/hermesuser/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_hermesuser_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hermesuser_edit')), array (  '_controller' => 'App\\AdminBundle\\Controller\\HermesUserController::editAction',));
                }
                not_hermesuser_edit:

                // hermesuser_update
                if (preg_match('#^/admin/hermesuser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_hermesuser_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hermesuser_update')), array (  '_controller' => 'App\\AdminBundle\\Controller\\HermesUserController::updateAction',));
                }
                not_hermesuser_update:

                // hermesuser_delete
                if (preg_match('#^/admin/hermesuser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_hermesuser_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hermesuser_delete')), array (  '_controller' => 'App\\AdminBundle\\Controller\\HermesUserController::deleteAction',));
                }
                not_hermesuser_delete:

                // delete_userHermes_from_list
                if (0 === strpos($pathinfo, '/admin/hermesuser/delete') && preg_match('#^/admin/hermesuser/delete/(?P<iIdHermesUser>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'delete_userHermes_from_list');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_userHermes_from_list')), array (  '_controller' => 'App\\AdminBundle\\Controller\\HermesUserController::deleteQuestionListAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/langue')) {
                // langue
                if (rtrim($pathinfo, '/') === '/admin/langue') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_langue;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'langue');
                    }

                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\LangueController::indexAction',  '_route' => 'langue',);
                }
                not_langue:

                // langue_create
                if ($pathinfo === '/admin/langue/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_langue_create;
                    }

                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\LangueController::createAction',  '_route' => 'langue_create',);
                }
                not_langue_create:

                // langue_new
                if ($pathinfo === '/admin/langue/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_langue_new;
                    }

                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\LangueController::newAction',  '_route' => 'langue_new',);
                }
                not_langue_new:

                // langue_show
                if (preg_match('#^/admin/langue/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_langue_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'langue_show')), array (  '_controller' => 'App\\AdminBundle\\Controller\\LangueController::showAction',));
                }
                not_langue_show:

                // langue_edit
                if (preg_match('#^/admin/langue/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_langue_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'langue_edit')), array (  '_controller' => 'App\\AdminBundle\\Controller\\LangueController::editAction',));
                }
                not_langue_edit:

                // langue_update
                if (preg_match('#^/admin/langue/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_langue_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'langue_update')), array (  '_controller' => 'App\\AdminBundle\\Controller\\LangueController::updateAction',));
                }
                not_langue_update:

                // langue_delete
                if (preg_match('#^/admin/langue/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_langue_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'langue_delete')), array (  '_controller' => 'App\\AdminBundle\\Controller\\LangueController::deleteAction',));
                }
                not_langue_delete:

                // langue_delete_custom
                if (0 === strpos($pathinfo, '/admin/langue/deletelangue') && preg_match('#^/admin/langue/deletelangue/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'langue_delete_custom')), array (  '_controller' => 'App\\AdminBundle\\Controller\\LangueController::deleteLangueAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/media')) {
                // media
                if (rtrim($pathinfo, '/') === '/admin/media') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_media;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'media');
                    }

                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\MediaController::indexAction',  '_route' => 'media',);
                }
                not_media:

                // media_create
                if ($pathinfo === '/admin/media/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_media_create;
                    }

                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\MediaController::createAction',  '_route' => 'media_create',);
                }
                not_media_create:

                // media_new
                if ($pathinfo === '/admin/media/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_media_new;
                    }

                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\MediaController::newAction',  '_route' => 'media_new',);
                }
                not_media_new:

                // media_show
                if (preg_match('#^/admin/media/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_media_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_show')), array (  '_controller' => 'App\\AdminBundle\\Controller\\MediaController::showAction',));
                }
                not_media_show:

                // media_edit
                if (preg_match('#^/admin/media/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_media_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_edit')), array (  '_controller' => 'App\\AdminBundle\\Controller\\MediaController::editAction',));
                }
                not_media_edit:

                // media_update
                if (preg_match('#^/admin/media/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_media_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_update')), array (  '_controller' => 'App\\AdminBundle\\Controller\\MediaController::updateAction',));
                }
                not_media_update:

                // media_delete
                if (preg_match('#^/admin/media/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_media_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_delete')), array (  '_controller' => 'App\\AdminBundle\\Controller\\MediaController::deleteAction',));
                }
                not_media_delete:

                // media_crop
                if ($pathinfo === '/admin/media/crop') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_media_crop;
                    }

                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\MediaController::cropAction',  '_route' => 'media_crop',);
                }
                not_media_crop:

                // admin_media_library
                if ($pathinfo === '/admin/media-library') {
                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\MediaLibraryController::indexAction',  '_route' => 'admin_media_library',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/question')) {
                // list_questions
                if (0 === strpos($pathinfo, '/admin/question/list') && preg_match('#^/admin/question/list(?:/(?P<sCodeLangue>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_list_questions;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_questions')), array (  'sCodeLangue' => 'fr',  '_controller' => 'App\\AdminBundle\\Controller\\QuestionController::indexAction',));
                }
                not_list_questions:

                // question_create
                if ($pathinfo === '/admin/question/creer') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_question_create;
                    }

                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\QuestionController::createAction',  '_route' => 'question_create',);
                }
                not_question_create:

                // question_new
                if ($pathinfo === '/admin/question/ajouter') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_question_new;
                    }

                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\QuestionController::newAction',  '_route' => 'question_new',);
                }
                not_question_new:

                // question_json
                if ($pathinfo === '/admin/question/json') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_question_json;
                    }

                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\QuestionController::jsonAction',  '_route' => 'question_json',);
                }
                not_question_json:

                // question_excel
                if ($pathinfo === '/admin/question/excel') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_question_excel;
                    }

                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\QuestionController::excelAction',  '_route' => 'question_excel',);
                }
                not_question_excel:

                // question_show
                if (preg_match('#^/admin/question/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_question_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'question_show')), array (  '_controller' => 'App\\AdminBundle\\Controller\\QuestionController::showAction',));
                }
                not_question_show:

                // question_edit
                if (preg_match('#^/admin/question/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_question_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'question_edit')), array (  '_controller' => 'App\\AdminBundle\\Controller\\QuestionController::editAction',));
                }
                not_question_edit:

                // question_update
                if (preg_match('#^/admin/question/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_question_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'question_update')), array (  '_controller' => 'App\\AdminBundle\\Controller\\QuestionController::updateAction',));
                }
                not_question_update:

                // question_delete
                if (preg_match('#^/admin/question/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_question_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'question_delete')), array (  '_controller' => 'App\\AdminBundle\\Controller\\QuestionController::deleteAction',));
                }
                not_question_delete:

                if (0 === strpos($pathinfo, '/admin/question/delete')) {
                    // question_delete_translation
                    if (preg_match('#^/admin/question/delete/(?P<id>[^/]++)(?:/(?P<sEcraseAll>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'question_delete_translation')), array (  'sEcraseAll' => false,  '_controller' => 'App\\AdminBundle\\Controller\\QuestionController::deleteQuestionListAction',));
                    }

                    // delete_translation_by_langue_id
                    if (0 === strpos($pathinfo, '/admin/question/delete/translate') && preg_match('#^/admin/question/delete/translate/(?P<iIdQuestion>[^/]++)/(?P<iIdLangue>[^/]++)/?$#s', $pathinfo, $matches)) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'delete_translation_by_langue_id');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_translation_by_langue_id')), array (  '_controller' => 'App\\AdminBundle\\Controller\\QuestionController::deleteQuestionTranslateByLangue',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/reponse')) {
                // list_reponses
                if (rtrim($pathinfo, '/') === '/admin/reponse') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_list_reponses;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'list_reponses');
                    }

                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\ReponseController::indexAction',  '_route' => 'list_reponses',);
                }
                not_list_reponses:

                // reponse_create
                if ($pathinfo === '/admin/reponse/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_reponse_create;
                    }

                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\ReponseController::createAction',  '_route' => 'reponse_create',);
                }
                not_reponse_create:

                // reponse_new
                if ($pathinfo === '/admin/reponse/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_reponse_new;
                    }

                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\ReponseController::newAction',  '_route' => 'reponse_new',);
                }
                not_reponse_new:

                // reponse_show
                if (preg_match('#^/admin/reponse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_reponse_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reponse_show')), array (  '_controller' => 'App\\AdminBundle\\Controller\\ReponseController::showAction',));
                }
                not_reponse_show:

                // reponse_edit
                if (preg_match('#^/admin/reponse/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_reponse_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reponse_edit')), array (  '_controller' => 'App\\AdminBundle\\Controller\\ReponseController::editAction',));
                }
                not_reponse_edit:

                // reponse_update
                if (preg_match('#^/admin/reponse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_reponse_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reponse_update')), array (  '_controller' => 'App\\AdminBundle\\Controller\\ReponseController::updateAction',));
                }
                not_reponse_update:

                // reponse_delete
                if (preg_match('#^/admin/reponse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_reponse_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reponse_delete')), array (  '_controller' => 'App\\AdminBundle\\Controller\\ReponseController::deleteAction',));
                }
                not_reponse_delete:

            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // user_list
                if (rtrim($pathinfo, '/') === '/admin/user') {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                        goto not_user_list;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user_list');
                    }

                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\Users\\UserController::indexAction',  '_route' => 'user_list',);
                }
                not_user_list:

                // user_create
                if ($pathinfo === '/admin/user/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_user_create;
                    }

                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\Users\\UserController::createAction',  '_route' => 'user_create',);
                }
                not_user_create:

                // user_new
                if ($pathinfo === '/admin/user/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_new;
                    }

                    return array (  '_controller' => 'App\\AdminBundle\\Controller\\Users\\UserController::newAction',  '_route' => 'user_new',);
                }
                not_user_new:

                // user_show2
                if (preg_match('#^/admin/user(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_show2;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show2')), array (  'id' => 1,  '_controller' => 'App\\AdminBundle\\Controller\\Users\\UserController::showAction',));
                }
                not_user_show2:

                // user_edit
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_user_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'App\\AdminBundle\\Controller\\Users\\UserController::editAction',));
                }
                not_user_edit:

                // user_update
                if (preg_match('#^/admin/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_user_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'App\\AdminBundle\\Controller\\Users\\UserController::updateAction',));
                }
                not_user_update:

                // user_delete
                if (preg_match('#^/admin/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'App\\AdminBundle\\Controller\\Users\\UserController::deleteAction',));
                }
                not_user_delete:

                // delete_user_from_list
                if (0 === strpos($pathinfo, '/admin/user/delete') && preg_match('#^/admin/user/delete/(?P<iIdUser>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'delete_user_from_list');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_user_from_list')), array (  '_controller' => 'App\\AdminBundle\\Controller\\Users\\UserController::deleteQuestionListAction',));
                }

            }

        }

        // root
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'root');
            }

            return array (  '_controller' => 'App\\AdminBundle\\Controller\\Users\\UserController::indexAction',  'path' => '/',  'permanent' => true,  '_route' => 'root',);
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

        if (0 === strpos($pathinfo, '/group')) {
            // fos_user_group_list
            if ($pathinfo === '/group/list') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_list;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::listAction',  '_route' => 'fos_user_group_list',);
            }
            not_fos_user_group_list:

            // fos_user_group_new
            if ($pathinfo === '/group/new') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::newAction',  '_route' => 'fos_user_group_new',);
            }

            // fos_user_group_show
            if (preg_match('#^/group/(?P<groupName>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_show')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::showAction',));
            }
            not_fos_user_group_show:

            // fos_user_group_edit
            if (preg_match('#^/group/(?P<groupName>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_edit')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::editAction',));
            }

            // fos_user_group_delete
            if (preg_match('#^/group/(?P<groupName>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_delete')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::deleteAction',));
            }
            not_fos_user_group_delete:

        }

        if (0 === strpos($pathinfo, '/e')) {
            // ef_connect
            if ($pathinfo === '/efconnect') {
                return array (  '_controller' => 'FM\\ElfinderBundle\\Controller\\ElfinderController::loadAction',  '_route' => 'ef_connect',);
            }

            // elfinder
            if ($pathinfo === '/elfinder') {
                return array (  '_controller' => 'FM\\ElfinderBundle\\Controller\\ElfinderController::showAction',  '_route' => 'elfinder',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

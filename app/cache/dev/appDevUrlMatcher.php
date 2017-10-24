<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

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
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

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
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

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

        // mooc_profil_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mooc_profil_homepage');
            }

            return array (  '_controller' => 'Mooc\\ProfilBundle\\Controller\\DefaultController::indexAction',  '_route' => 'mooc_profil_homepage',);
        }

        // mooc_profil_home
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'Mooc\\ProfilBundle\\Controller\\HomeController::HomeAction',  '_route' => 'mooc_profil_home',);
        }

        // mooc_profil_alluser
        if ($pathinfo === '/alluser') {
            return array (  '_controller' => 'Mooc\\ProfilBundle\\Controller\\HomeController::alluserAction',  '_route' => 'mooc_profil_alluser',);
        }

        // mooc_profil_otheruser
        if (preg_match('#^/(?P<id>\\d+)/otheruser$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_profil_otheruser')), array (  '_controller' => 'Mooc\\ProfilBundle\\Controller\\HomeController::otheruserAction',));
        }

        // mooc_profil_addorganism
        if ($pathinfo === '/addorganism') {
            return array (  '_controller' => 'Mooc\\ProfilBundle\\Controller\\HomeController::addAction',  '_route' => 'mooc_profil_addorganism',);
        }

        // mooc_profil_disable
        if (preg_match('#^/(?P<id>\\d+)/disable$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_profil_disable')), array (  '_controller' => 'Mooc\\ProfilBundle\\Controller\\HomeController::disableAction',));
        }

        // mooc_profil_certifuser
        if ($pathinfo === '/certifuser') {
            return array (  '_controller' => 'Mooc\\ProfilBundle\\Controller\\HomeController::certifuserAction',  '_route' => 'mooc_profil_certifuser',);
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // hwi_oauth_service_redirect
        if (0 === strpos($pathinfo, '/connect') && preg_match('#^/connect/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',));
        }

        // hwi_oauth_connect
        if (rtrim($pathinfo, '/') === '/login') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hwi_oauth_connect');
            }

            return array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_route' => 'hwi_oauth_connect',);
        }

        // pidev_mail_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_mail_homepage')), array (  '_controller' => 'MoocMailBundle:Default:index',));
        }

        // my_app_mail_succ
        if ($pathinfo === '/succ') {
            return array (  '_controller' => 'Mooc\\MailBundle\\Controller\\MailController::indexAction',  '_route' => 'my_app_mail_succ',);
        }

        // my_app_mail_form
        if ($pathinfo === '/mail') {
            return array (  '_controller' => 'Mooc\\MailBundle\\Controller\\MailController::newAction',  '_route' => 'my_app_mail_form',);
        }

        // my_app_mail_sendpage
        if ($pathinfo === '/sendmail') {
            return array (  '_controller' => 'Mooc\\MailBundle\\Controller\\MailController::sendMailAction',  '_route' => 'my_app_mail_sendpage',);
        }

        if (0 === strpos($pathinfo, '/home')) {
            // pidev_mooc_homepage
            if ($pathinfo === '/home/home') {
                return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\DefaultController::indexAction',  '_route' => 'pidev_mooc_homepage',);
            }

            // pidev_mooc_affichage
            if ($pathinfo === '/home/index') {
                return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\DefaultController::indexAction',  '_route' => 'pidev_mooc_affichage',);
            }

            if (0 === strpos($pathinfo, '/home/video')) {
                // pidev_mooc_videoconference
                if ($pathinfo === '/home/videoconference') {
                    return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\videoconferenceController::videoAction',  '_route' => 'pidev_mooc_videoconference',);
                }

                // pidev_mooc_videoconferenceShow
                if ($pathinfo === '/home/videoList') {
                    return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\videoconferenceController::videoshowAction',  '_route' => 'pidev_mooc_videoconferenceShow',);
                }

                // pidev_mooc_videoconferenceEdit
                if (0 === strpos($pathinfo, '/home/videoEdit') && preg_match('#^/home/videoEdit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_mooc_videoconferenceEdit')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\videoconferenceController::editAction',));
                }

                // pidev_mooc_videoconferenceDelete
                if (0 === strpos($pathinfo, '/home/videoDelete') && preg_match('#^/home/videoDelete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_mooc_videoconferenceDelete')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\videoconferenceController::deleteAction',));
                }

            }

            // pidev_mooc_videoconferenceParticipate
            if (0 === strpos($pathinfo, '/home/participate') && preg_match('#^/home/participate/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_mooc_videoconferenceParticipate')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\videoconferenceController::participateAction',));
            }

            // pidev_mooc_videoconferenceRecherche
            if ($pathinfo === '/home/rechercheCour') {
                return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\coursesController::CourSearchAction',  '_route' => 'pidev_mooc_videoconferenceRecherche',);
            }

            // pidev_mooc_about
            if ($pathinfo === '/home/about') {
                return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\DefaultController::aboutAction',  '_route' => 'pidev_mooc_about',);
            }

            // pidev_mooc_terms
            if ($pathinfo === '/home/terms') {
                return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\DefaultController::termAction',  '_route' => 'pidev_mooc_terms',);
            }

            if (0 === strpos($pathinfo, '/home/video')) {
                // pidev_mooc_videoconferenceYoutube
                if (0 === strpos($pathinfo, '/home/videoy') && preg_match('#^/home/videoy/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_mooc_videoconferenceYoutube')), array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\videoconferenceController::videoyoutubeAction',));
                }

                // pidev_mooc_videoconferenceShowApp
                if ($pathinfo === '/home/videoListApp') {
                    return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\videoconferenceController::videoshowAppAction',  '_route' => 'pidev_mooc_videoconferenceShowApp',);
                }

            }

            if (0 === strpos($pathinfo, '/home/s')) {
                if (0 === strpos($pathinfo, '/home/search')) {
                    // pidev_mooc_videoconferenceRechercheVideo
                    if ($pathinfo === '/home/search') {
                        return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\videoconferenceController::VideoSearchAction',  '_route' => 'pidev_mooc_videoconferenceRechercheVideo',);
                    }

                    // pidev_mooc_videoconferenceRechercheVideoApp
                    if ($pathinfo === '/home/searchApp') {
                        return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\videoconferenceController::VideoSearchAppAction',  '_route' => 'pidev_mooc_videoconferenceRechercheVideoApp',);
                    }

                }

                // pidev_mooc_videoconferenceStat
                if ($pathinfo === '/home/stat') {
                    return array (  '_controller' => 'Mooc\\MoocBundle\\Controller\\StatVideoController::StatAction',  '_route' => 'pidev_mooc_videoconferenceStat',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/pi')) {
                if (0 === strpos($pathinfo, '/admin/pi/category')) {
                    // admin_pi_category_list
                    if ($pathinfo === '/admin/pi/category/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_pi_category_list',  '_route' => 'admin_pi_category_list',);
                    }

                    // admin_pi_category_create
                    if ($pathinfo === '/admin/pi/category/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_pi_category_create',  '_route' => 'admin_pi_category_create',);
                    }

                    // admin_pi_category_batch
                    if ($pathinfo === '/admin/pi/category/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_pi_category_batch',  '_route' => 'admin_pi_category_batch',);
                    }

                    // admin_pi_category_edit
                    if (preg_match('#^/admin/pi/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pi_category_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_pi_category_edit',));
                    }

                    // admin_pi_category_delete
                    if (preg_match('#^/admin/pi/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pi_category_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_pi_category_delete',));
                    }

                    // admin_pi_category_show
                    if (preg_match('#^/admin/pi/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pi_category_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_pi_category_show',));
                    }

                    // admin_pi_category_export
                    if ($pathinfo === '/admin/pi/category/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_pi_category_export',  '_route' => 'admin_pi_category_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/pi/blogpost')) {
                    // admin_pi_blogpost_list
                    if ($pathinfo === '/admin/pi/blogpost/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.blog_post',  '_sonata_name' => 'admin_pi_blogpost_list',  '_route' => 'admin_pi_blogpost_list',);
                    }

                    // admin_pi_blogpost_create
                    if ($pathinfo === '/admin/pi/blogpost/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.blog_post',  '_sonata_name' => 'admin_pi_blogpost_create',  '_route' => 'admin_pi_blogpost_create',);
                    }

                    // admin_pi_blogpost_batch
                    if ($pathinfo === '/admin/pi/blogpost/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.blog_post',  '_sonata_name' => 'admin_pi_blogpost_batch',  '_route' => 'admin_pi_blogpost_batch',);
                    }

                    // admin_pi_blogpost_edit
                    if (preg_match('#^/admin/pi/blogpost/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pi_blogpost_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.blog_post',  '_sonata_name' => 'admin_pi_blogpost_edit',));
                    }

                    // admin_pi_blogpost_delete
                    if (preg_match('#^/admin/pi/blogpost/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pi_blogpost_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.blog_post',  '_sonata_name' => 'admin_pi_blogpost_delete',));
                    }

                    // admin_pi_blogpost_show
                    if (preg_match('#^/admin/pi/blogpost/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pi_blogpost_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.blog_post',  '_sonata_name' => 'admin_pi_blogpost_show',));
                    }

                    // admin_pi_blogpost_export
                    if ($pathinfo === '/admin/pi/blogpost/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.blog_post',  '_sonata_name' => 'admin_pi_blogpost_export',  '_route' => 'admin_pi_blogpost_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/pi/users')) {
                    // admin_pi_users_list
                    if ($pathinfo === '/admin/pi/users/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.users',  '_sonata_name' => 'admin_pi_users_list',  '_route' => 'admin_pi_users_list',);
                    }

                    // admin_pi_users_create
                    if ($pathinfo === '/admin/pi/users/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.users',  '_sonata_name' => 'admin_pi_users_create',  '_route' => 'admin_pi_users_create',);
                    }

                    // admin_pi_users_batch
                    if ($pathinfo === '/admin/pi/users/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.users',  '_sonata_name' => 'admin_pi_users_batch',  '_route' => 'admin_pi_users_batch',);
                    }

                    // admin_pi_users_edit
                    if (preg_match('#^/admin/pi/users/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pi_users_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.users',  '_sonata_name' => 'admin_pi_users_edit',));
                    }

                    // admin_pi_users_delete
                    if (preg_match('#^/admin/pi/users/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pi_users_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.users',  '_sonata_name' => 'admin_pi_users_delete',));
                    }

                    // admin_pi_users_show
                    if (preg_match('#^/admin/pi/users/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pi_users_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.users',  '_sonata_name' => 'admin_pi_users_show',));
                    }

                    // admin_pi_users_export
                    if ($pathinfo === '/admin/pi/users/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.users',  '_sonata_name' => 'admin_pi_users_export',  '_route' => 'admin_pi_users_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/pi/courses')) {
                    // admin_pi_courses_list
                    if ($pathinfo === '/admin/pi/courses/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.courses',  '_sonata_name' => 'admin_pi_courses_list',  '_route' => 'admin_pi_courses_list',);
                    }

                    // admin_pi_courses_create
                    if ($pathinfo === '/admin/pi/courses/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.courses',  '_sonata_name' => 'admin_pi_courses_create',  '_route' => 'admin_pi_courses_create',);
                    }

                    // admin_pi_courses_batch
                    if ($pathinfo === '/admin/pi/courses/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.courses',  '_sonata_name' => 'admin_pi_courses_batch',  '_route' => 'admin_pi_courses_batch',);
                    }

                    // admin_pi_courses_edit
                    if (preg_match('#^/admin/pi/courses/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pi_courses_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.courses',  '_sonata_name' => 'admin_pi_courses_edit',));
                    }

                    // admin_pi_courses_delete
                    if (preg_match('#^/admin/pi/courses/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pi_courses_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.courses',  '_sonata_name' => 'admin_pi_courses_delete',));
                    }

                    // admin_pi_courses_show
                    if (preg_match('#^/admin/pi/courses/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pi_courses_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.courses',  '_sonata_name' => 'admin_pi_courses_show',));
                    }

                    // admin_pi_courses_export
                    if ($pathinfo === '/admin/pi/courses/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.courses',  '_sonata_name' => 'admin_pi_courses_export',  '_route' => 'admin_pi_courses_export',);
                    }

                }

            }

            // pi_homepage
            if (0 === strpos($pathinfo, '/admin/hello') && preg_match('#^/admin/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pi_homepage')), array (  '_controller' => 'PiBundle\\Controller\\DefaultController::indexAction',));
            }

            // accueil
            if ($pathinfo === '/admin/accueil') {
                return array (  '_controller' => 'PiBundle\\Controller\\UsersController::chartAction',  '_route' => 'accueil',);
            }

            // test
            if ($pathinfo === '/admin/test') {
                return array (  '_controller' => 'PiBundle\\Controller\\UsersController::indexAction',  '_route' => 'test',);
            }

            // ajout_organisme
            if (0 === strpos($pathinfo, '/admin/accueil') && preg_match('#^/admin/accueil/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajout_organisme')), array (  '_controller' => 'PiBundle\\Controller\\UsersController::AccepterOrganismeAction',));
            }

            if (0 === strpos($pathinfo, '/admin/profil')) {
                // profil_organisme
                if (preg_match('#^/admin/profil/(?P<surname>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'profil_organisme')), array (  '_controller' => 'PiBundle\\Controller\\UsersController::ProfilOrganismeAction',));
                }

                // admin_user_liste
                if ($pathinfo === '/admin/profil') {
                    return array (  '_controller' => 'PiBundle\\Controller\\UsersController::ListeUsersAction',  '_route' => 'admin_user_liste',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/quizz')) {
            // mooc_quizz_homepage
            if (0 === strpos($pathinfo, '/quizz/hello') && preg_match('#^/quizz/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_quizz_homepage')), array (  '_controller' => 'Mooc\\QuizzBundle\\Controller\\DefaultController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/quizz/addqu')) {
                if (0 === strpos($pathinfo, '/quizz/addquizz')) {
                    // mooc_quizz_add
                    if (preg_match('#^/quizz/addquizz/(?P<id_chapter>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_quizz_add')), array (  '_controller' => 'Mooc\\QuizzBundle\\Controller\\QuizzController::addQuizzAction',));
                    }

                    // mooc_quizz_addnm
                    if (0 === strpos($pathinfo, '/quizz/addquizznm') && preg_match('#^/quizz/addquizznm/(?P<id_course>[^/]++)/(?P<id_chapter>[^/]++)/(?P<chapterNumber>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_quizz_addnm')), array (  '_controller' => 'Mooc\\QuizzBundle\\Controller\\QuizzController::addQuizzNonMandatoryAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/quizz/addquestion/(idQuizz}/(questionNumber}')) {
                    // mooc_question_add
                    if (preg_match('#^/quizz/addquestion/\\(idQuizz\\}/\\(questionNumber\\}/(?P<id_course>[^/]++)/(?P<id_chapter>[^/]++)/(?P<chapterNumber>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_question_add')), array (  '_controller' => 'Mooc\\QuizzBundle\\Controller\\QuizzController::addQuestionAction',));
                    }

                    // mooc_question_addM
                    if ($pathinfo === '/quizz/addquestion/(idQuizz}/(questionNumber}') {
                        return array (  '_controller' => 'Mooc\\QuizzBundle\\Controller\\QuizzController::addQuestionMAction',  '_route' => 'mooc_question_addM',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/quizz/passquizz')) {
                // mooc_quizz_pass
                if (preg_match('#^/quizz/passquizz/(?P<idChapter>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_quizz_pass')), array (  '_controller' => 'Mooc\\QuizzBundle\\Controller\\QuizzController::getQuizzAction',));
                }

                // mooc_quizznm_pass
                if (0 === strpos($pathinfo, '/quizz/passquizznm') && preg_match('#^/quizz/passquizznm/(?P<idChapter>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_quizznm_pass')), array (  '_controller' => 'Mooc\\QuizzBundle\\Controller\\QuizzController::getNmQuizzAction',));
                }

            }

            // mooc_certification
            if (0 === strpos($pathinfo, '/quizz/certification') && preg_match('#^/quizz/certification/(?P<note>[^/]++)/(?P<idQuizz>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_certification')), array (  '_controller' => 'Mooc\\QuizzBundle\\Controller\\CertificationController::addCertificationAction',));
            }

            // mooc_result
            if (0 === strpos($pathinfo, '/quizz/result') && preg_match('#^/quizz/result/(?P<note>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_result')), array (  '_controller' => 'Mooc\\QuizzBundle\\Controller\\CertificationController::resultAction',));
            }

            if (0 === strpos($pathinfo, '/quizz/listqu')) {
                // mooc_quizz_list
                if ($pathinfo === '/quizz/listquizz') {
                    return array (  '_controller' => 'Mooc\\QuizzBundle\\Controller\\QuizzController::listQuizzAction',  '_route' => 'mooc_quizz_list',);
                }

                // mooc_quizzcontent_list
                if (0 === strpos($pathinfo, '/quizz/listquestions') && preg_match('#^/quizz/listquestions/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_quizzcontent_list')), array (  '_controller' => 'Mooc\\QuizzBundle\\Controller\\QuizzController::listQuestionAction',));
                }

            }

            if (0 === strpos($pathinfo, '/quizz/updatequ')) {
                // mooc_quizz_update
                if (0 === strpos($pathinfo, '/quizz/updatequizz') && preg_match('#^/quizz/updatequizz/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_quizz_update')), array (  '_controller' => 'Mooc\\QuizzBundle\\Controller\\QuizzController::updateQuizzAction',));
                }

                // mooc_question_update
                if (0 === strpos($pathinfo, '/quizz/updatequestion') && preg_match('#^/quizz/updatequestion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_question_update')), array (  '_controller' => 'Mooc\\QuizzBundle\\Controller\\QuizzController::updateQuestionAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/followcourse')) {
            // followcourse
            if (rtrim($pathinfo, '/') === '/followcourse') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'followcourse');
                }

                return array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\FollowcourseController::indexAction',  '_route' => 'followcourse',);
            }

            // followcourse_show
            if (preg_match('#^/followcourse/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'followcourse_show')), array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\FollowcourseController::showAction',));
            }

            // followcourse_new
            if ($pathinfo === '/followcourse/new') {
                return array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\FollowcourseController::newAction',  '_route' => 'followcourse_new',);
            }

            // followcourse_create
            if ($pathinfo === '/followcourse/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_followcourse_create;
                }

                return array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\FollowcourseController::createAction',  '_route' => 'followcourse_create',);
            }
            not_followcourse_create:

            // followcourse_edit
            if (preg_match('#^/followcourse/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'followcourse_edit')), array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\FollowcourseController::editAction',));
            }

            // followcourse_update
            if (preg_match('#^/followcourse/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_followcourse_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'followcourse_update')), array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\FollowcourseController::updateAction',));
            }
            not_followcourse_update:

            // followcourse_delete
            if (preg_match('#^/followcourse/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_followcourse_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'followcourse_delete')), array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\FollowcourseController::deleteAction',));
            }
            not_followcourse_delete:

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/co')) {
                if (0 === strpos($pathinfo, '/courses')) {
                    // courses
                    if (rtrim($pathinfo, '/') === '/courses') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'courses');
                        }

                        return array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\CoursesController::indexAction',  '_route' => 'courses',);
                    }

                    // courses_show
                    if (preg_match('#^/courses/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'courses_show')), array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\CoursesController::showAction',));
                    }

                    // courses_new
                    if ($pathinfo === '/courses/new') {
                        return array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\CoursesController::newAction',  '_route' => 'courses_new',);
                    }

                    // courses_create
                    if ($pathinfo === '/courses/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_courses_create;
                        }

                        return array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\CoursesController::createAction',  '_route' => 'courses_create',);
                    }
                    not_courses_create:

                    // courses_edit
                    if (preg_match('#^/courses/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'courses_edit')), array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\CoursesController::editAction',));
                    }

                    // courses_Validation
                    if (preg_match('#^/courses/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'courses_Validation')), array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\CoursesController::ValidationAction',));
                    }

                    // courses_update
                    if (preg_match('#^/courses/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_courses_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'courses_update')), array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\CoursesController::updateAction',));
                    }
                    not_courses_update:

                    // courses_delete
                    if (preg_match('#^/courses/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'DELETE', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'DELETE', 'HEAD'));
                            goto not_courses_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'courses_delete')), array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\CoursesController::deleteAction',));
                    }
                    not_courses_delete:

                    // courses_follow
                    if (preg_match('#^/courses/(?P<idCourse>[^/]++)/(?P<idUser>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'DELETE', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'DELETE', 'HEAD'));
                            goto not_courses_follow;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'courses_follow')), array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\CoursesController::followCourseAction',));
                    }
                    not_courses_follow:

                }

                if (0 === strpos($pathinfo, '/commentscourse')) {
                    // commentscourse
                    if (rtrim($pathinfo, '/') === '/commentscourse') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'commentscourse');
                        }

                        return array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\CommentscourseController::indexAction',  '_route' => 'commentscourse',);
                    }

                    // commentscourse_show
                    if (preg_match('#^/commentscourse/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentscourse_show')), array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\CommentscourseController::showAction',));
                    }

                    // commentscourse_new
                    if ($pathinfo === '/commentscourse/new') {
                        return array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\CommentscourseController::newAction',  '_route' => 'commentscourse_new',);
                    }

                    // commentscourse_create
                    if ($pathinfo === '/commentscourse/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_commentscourse_create;
                        }

                        return array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\CommentscourseController::createAction',  '_route' => 'commentscourse_create',);
                    }
                    not_commentscourse_create:

                    // commentscourse_edit
                    if (preg_match('#^/commentscourse/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentscourse_edit')), array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\CommentscourseController::editAction',));
                    }

                    // commentscourse_update
                    if (preg_match('#^/commentscourse/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_commentscourse_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentscourse_update')), array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\CommentscourseController::updateAction',));
                    }
                    not_commentscourse_update:

                    // commentscourse_delete
                    if (preg_match('#^/commentscourse/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_commentscourse_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentscourse_delete')), array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\CommentscourseController::deleteAction',));
                    }
                    not_commentscourse_delete:

                }

            }

            if (0 === strpos($pathinfo, '/chapter')) {
                // chapter
                if (rtrim($pathinfo, '/') === '/chapter') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'chapter');
                    }

                    return array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\ChapterController::indexAction',  '_route' => 'chapter',);
                }

                // chapter_show
                if (preg_match('#^/chapter/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chapter_show')), array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\ChapterController::showAction',));
                }

                // chapter_new
                if (0 === strpos($pathinfo, '/chapter/new') && preg_match('#^/chapter/new/(?P<chapternumber>[^/]++)/(?P<idCourse>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chapter_new')), array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\ChapterController::newAction',));
                }

                if (0 === strpos($pathinfo, '/chapter/create')) {
                    // chapter_create
                    if (preg_match('#^/chapter/create/(?P<chapternumber>[^/]++)/(?P<idCourse>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                            goto not_chapter_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'chapter_create')), array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\ChapterController::createAction',));
                    }
                    not_chapter_create:

                    // chapter_Finishcreate
                    if (preg_match('#^/chapter/create/(?P<chapternumber>[^/]++)/(?P<idCourse>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_chapter_Finishcreate;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'chapter_Finishcreate')), array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\ChapterController::FinishcreateAction',));
                    }
                    not_chapter_Finishcreate:

                }

                // chapter_edit
                if (preg_match('#^/chapter/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chapter_edit')), array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\ChapterController::editAction',));
                }

                // chapter_update
                if (preg_match('#^/chapter/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_chapter_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chapter_update')), array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\ChapterController::updateAction',));
                }
                not_chapter_update:

                // chapter_delete
                if (preg_match('#^/chapter/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_chapter_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chapter_delete')), array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\ChapterController::deleteAction',));
                }
                not_chapter_delete:

            }

        }

        // mooc_course_Stat
        if ($pathinfo === '/Stat') {
            return array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\StatController::StatAction',  '_route' => 'mooc_course_Stat',);
        }

        // mooc_course_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mooc_course_homepage')), array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\DefaultController::indexAction',));
        }

        // MyCourses_show
        if ($pathinfo === '/MyCourses') {
            return array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\CoursesController::showMyCoursesAction',  '_route' => 'MyCourses_show',);
        }

        // newfinalChapter
        if (preg_match('#^/(?P<num_chapitre>[^/]++)/(?P<idCourse>[^/]++)/finalnew$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newfinalChapter')), array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\ChapterController::finalchapterAction',));
        }

        // CoursesByType
        if (0 === strpos($pathinfo, '/coursesbtype') && preg_match('#^/coursesbtype/(?P<type>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'CoursesByType');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'CoursesByType')), array (  '_controller' => 'Mooc\\CourseBundle\\Controller\\CoursesController::FindByTypeAction',));
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

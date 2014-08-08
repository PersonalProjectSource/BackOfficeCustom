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

        if (0 === strpos($pathinfo, '/assetic')) {
            if (0 === strpos($pathinfo, '/assetic/css/compiled/fmelfinder/main')) {
                // _assetic_6a8b946
                if ($pathinfo === '/assetic/css/compiled/fmelfinder/main.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6a8b946',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_6a8b946',);
                }

                if (0 === strpos($pathinfo, '/assetic/css/compiled/fmelfinder/main_part_1_')) {
                    // _assetic_6a8b946_0
                    if ($pathinfo === '/assetic/css/compiled/fmelfinder/main_part_1_elfinder.min_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6a8b946',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_6a8b946_0',);
                    }

                    // _assetic_6a8b946_1
                    if ($pathinfo === '/assetic/css/compiled/fmelfinder/main_part_1_jquery-ui-1.8.21.custom_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6a8b946',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_6a8b946_1',);
                    }

                    // _assetic_6a8b946_2
                    if ($pathinfo === '/assetic/css/compiled/fmelfinder/main_part_1_theme_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6a8b946',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_6a8b946_2',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main')) {
                // _assetic_7c7b115
                if ($pathinfo === '/assetic/js/compiled/fmelfinder/main.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_7c7b115',);
                }

                if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_')) {
                    if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_jquery-')) {
                        // _assetic_7c7b115_0
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_jquery-1.8.0.min_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_7c7b115_0',);
                        }

                        // _assetic_7c7b115_1
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_jquery-ui-1.8.23.custom.min_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_7c7b115_1',);
                        }

                    }

                    // _assetic_7c7b115_2
                    if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_elfinder.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_7c7b115_2',);
                    }

                    if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.')) {
                        // _assetic_7c7b115_3
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.LANG_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_7c7b115_3',);
                        }

                        // _assetic_7c7b115_4
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.ar_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_7c7b115_4',);
                        }

                        // _assetic_7c7b115_5
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.bg_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_7c7b115_5',);
                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.c')) {
                            // _assetic_7c7b115_6
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.ca_4.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_7c7b115_6',);
                            }

                            // _assetic_7c7b115_7
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.cs_5.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_7c7b115_7',);
                            }

                        }

                        // _assetic_7c7b115_8
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.de_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_7c7b115_8',);
                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.e')) {
                            // _assetic_7c7b115_9
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.el_7.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_7c7b115_9',);
                            }

                            // _assetic_7c7b115_10
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.es_8.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_7c7b115_10',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.f')) {
                            // _assetic_7c7b115_11
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.fa_9.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_7c7b115_11',);
                            }

                            // _assetic_7c7b115_12
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.fr_10.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_7c7b115_12',);
                            }

                        }

                        // _assetic_7c7b115_13
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.hu_11.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_7c7b115_13',);
                        }

                        // _assetic_7c7b115_14
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.it_12.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_7c7b115_14',);
                        }

                        // _assetic_7c7b115_15
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.jp_13.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_7c7b115_15',);
                        }

                        // _assetic_7c7b115_16
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.ko_14.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_7c7b115_16',);
                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.n')) {
                            // _assetic_7c7b115_17
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.nl_15.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_7c7b115_17',);
                            }

                            // _assetic_7c7b115_18
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.no_16.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 18,  '_format' => 'js',  '_route' => '_assetic_7c7b115_18',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.p')) {
                            // _assetic_7c7b115_19
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.pl_17.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 19,  '_format' => 'js',  '_route' => '_assetic_7c7b115_19',);
                            }

                            // _assetic_7c7b115_20
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.pt_BR_18.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 20,  '_format' => 'js',  '_route' => '_assetic_7c7b115_20',);
                            }

                        }

                        // _assetic_7c7b115_21
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.ru_19.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 21,  '_format' => 'js',  '_route' => '_assetic_7c7b115_21',);
                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.s')) {
                            // _assetic_7c7b115_22
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.sk_20.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 22,  '_format' => 'js',  '_route' => '_assetic_7c7b115_22',);
                            }

                            // _assetic_7c7b115_23
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.sl_21.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 23,  '_format' => 'js',  '_route' => '_assetic_7c7b115_23',);
                            }

                            // _assetic_7c7b115_24
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.sv_22.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 24,  '_format' => 'js',  '_route' => '_assetic_7c7b115_24',);
                            }

                        }

                        // _assetic_7c7b115_25
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.tr_23.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 25,  '_format' => 'js',  '_route' => '_assetic_7c7b115_25',);
                        }

                        // _assetic_7c7b115_26
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.vi_24.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 26,  '_format' => 'js',  '_route' => '_assetic_7c7b115_26',);
                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.zh_')) {
                            // _assetic_7c7b115_27
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.zh_CN_25.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 27,  '_format' => 'js',  '_route' => '_assetic_7c7b115_27',);
                            }

                            // _assetic_7c7b115_28
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.zh_TW_26.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7c7b115',  'pos' => 28,  '_format' => 'js',  '_route' => '_assetic_7c7b115_28',);
                            }

                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main')) {
            // _assetic_1dadbbb
            if ($pathinfo === '/bundles/fmelfinder/js/main.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_1dadbbb',);
            }

            if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_')) {
                if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_jquery-')) {
                    // _assetic_1dadbbb_0
                    if ($pathinfo === '/bundles/fmelfinder/js/main_jquery-1.8.0.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_0',);
                    }

                    // _assetic_1dadbbb_1
                    if ($pathinfo === '/bundles/fmelfinder/js/main_jquery-ui-1.8.23.custom.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_1',);
                    }

                }

                // _assetic_1dadbbb_2
                if ($pathinfo === '/bundles/fmelfinder/js/main_elfinder.min_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_2',);
                }

                if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_part_4_elfinder.')) {
                    // _assetic_1dadbbb_3
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.LANG_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_3',);
                    }

                    // _assetic_1dadbbb_4
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.ar_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_4',);
                    }

                    // _assetic_1dadbbb_5
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.bg_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_5',);
                    }

                    if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_part_4_elfinder.c')) {
                        // _assetic_1dadbbb_6
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.ca_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_6',);
                        }

                        // _assetic_1dadbbb_7
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.cs_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_7',);
                        }

                    }

                    // _assetic_1dadbbb_8
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.de_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_8',);
                    }

                    if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_part_4_elfinder.e')) {
                        // _assetic_1dadbbb_9
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.el_7.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_9',);
                        }

                        // _assetic_1dadbbb_10
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.es_8.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_10',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_part_4_elfinder.f')) {
                        // _assetic_1dadbbb_11
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.fa_9.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_11',);
                        }

                        // _assetic_1dadbbb_12
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.fr_10.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_12',);
                        }

                    }

                    // _assetic_1dadbbb_13
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.hu_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_13',);
                    }

                    // _assetic_1dadbbb_14
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.it_12.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_14',);
                    }

                    // _assetic_1dadbbb_15
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.jp_13.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_15',);
                    }

                    // _assetic_1dadbbb_16
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.ko_14.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_16',);
                    }

                    if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_part_4_elfinder.n')) {
                        // _assetic_1dadbbb_17
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.nl_15.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_17',);
                        }

                        // _assetic_1dadbbb_18
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.no_16.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 18,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_18',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_part_4_elfinder.p')) {
                        // _assetic_1dadbbb_19
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.pl_17.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 19,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_19',);
                        }

                        // _assetic_1dadbbb_20
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.pt_BR_18.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 20,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_20',);
                        }

                    }

                    // _assetic_1dadbbb_21
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.ru_19.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 21,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_21',);
                    }

                    if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_part_4_elfinder.s')) {
                        // _assetic_1dadbbb_22
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.sk_20.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 22,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_22',);
                        }

                        // _assetic_1dadbbb_23
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.sl_21.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 23,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_23',);
                        }

                        // _assetic_1dadbbb_24
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.sv_22.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 24,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_24',);
                        }

                    }

                    // _assetic_1dadbbb_25
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.tr_23.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 25,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_25',);
                    }

                    // _assetic_1dadbbb_26
                    if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.vi_24.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 26,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_26',);
                    }

                    if (0 === strpos($pathinfo, '/bundles/fmelfinder/js/main_part_4_elfinder.zh_')) {
                        // _assetic_1dadbbb_27
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.zh_CN_25.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 27,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_27',);
                        }

                        // _assetic_1dadbbb_28
                        if ($pathinfo === '/bundles/fmelfinder/js/main_part_4_elfinder.zh_TW_26.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1dadbbb',  'pos' => 28,  '_format' => 'js',  '_route' => '_assetic_1dadbbb_28',);
                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/assetic')) {
            if (0 === strpos($pathinfo, '/assetic/css/compiled/fmelfinder/main')) {
                // _assetic_607c75c
                if ($pathinfo === '/assetic/css/compiled/fmelfinder/main.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '607c75c',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_607c75c',);
                }

                if (0 === strpos($pathinfo, '/assetic/css/compiled/fmelfinder/main_part_1_')) {
                    // _assetic_607c75c_0
                    if ($pathinfo === '/assetic/css/compiled/fmelfinder/main_part_1_elfinder.min_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '607c75c',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_607c75c_0',);
                    }

                    // _assetic_607c75c_1
                    if ($pathinfo === '/assetic/css/compiled/fmelfinder/main_part_1_jquery-ui-1.8.21.custom_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '607c75c',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_607c75c_1',);
                    }

                    // _assetic_607c75c_2
                    if ($pathinfo === '/assetic/css/compiled/fmelfinder/main_part_1_theme_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '607c75c',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_607c75c_2',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main')) {
                // _assetic_43ffd91
                if ($pathinfo === '/assetic/js/compiled/fmelfinder/main.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_43ffd91',);
                }

                if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_')) {
                    if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_jquery-')) {
                        // _assetic_43ffd91_0
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_jquery-1.8.0.min_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_43ffd91_0',);
                        }

                        // _assetic_43ffd91_1
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_jquery-ui-1.8.23.custom.min_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_43ffd91_1',);
                        }

                    }

                    // _assetic_43ffd91_2
                    if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_elfinder.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_43ffd91_2',);
                    }

                    if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.')) {
                        // _assetic_43ffd91_3
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.LANG_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_43ffd91_3',);
                        }

                        // _assetic_43ffd91_4
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.ar_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_43ffd91_4',);
                        }

                        // _assetic_43ffd91_5
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.bg_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_43ffd91_5',);
                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.c')) {
                            // _assetic_43ffd91_6
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.ca_4.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_43ffd91_6',);
                            }

                            // _assetic_43ffd91_7
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.cs_5.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_43ffd91_7',);
                            }

                        }

                        // _assetic_43ffd91_8
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.de_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_43ffd91_8',);
                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.e')) {
                            // _assetic_43ffd91_9
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.el_7.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_43ffd91_9',);
                            }

                            // _assetic_43ffd91_10
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.es_8.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_43ffd91_10',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.f')) {
                            // _assetic_43ffd91_11
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.fa_9.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_43ffd91_11',);
                            }

                            // _assetic_43ffd91_12
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.fr_10.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_43ffd91_12',);
                            }

                        }

                        // _assetic_43ffd91_13
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.hu_11.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_43ffd91_13',);
                        }

                        // _assetic_43ffd91_14
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.it_12.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_43ffd91_14',);
                        }

                        // _assetic_43ffd91_15
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.jp_13.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_43ffd91_15',);
                        }

                        // _assetic_43ffd91_16
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.ko_14.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_43ffd91_16',);
                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.n')) {
                            // _assetic_43ffd91_17
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.nl_15.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_43ffd91_17',);
                            }

                            // _assetic_43ffd91_18
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.no_16.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 18,  '_format' => 'js',  '_route' => '_assetic_43ffd91_18',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.p')) {
                            // _assetic_43ffd91_19
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.pl_17.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 19,  '_format' => 'js',  '_route' => '_assetic_43ffd91_19',);
                            }

                            // _assetic_43ffd91_20
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.pt_BR_18.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 20,  '_format' => 'js',  '_route' => '_assetic_43ffd91_20',);
                            }

                        }

                        // _assetic_43ffd91_21
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.ru_19.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 21,  '_format' => 'js',  '_route' => '_assetic_43ffd91_21',);
                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.s')) {
                            // _assetic_43ffd91_22
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.sk_20.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 22,  '_format' => 'js',  '_route' => '_assetic_43ffd91_22',);
                            }

                            // _assetic_43ffd91_23
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.sl_21.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 23,  '_format' => 'js',  '_route' => '_assetic_43ffd91_23',);
                            }

                            // _assetic_43ffd91_24
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.sv_22.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 24,  '_format' => 'js',  '_route' => '_assetic_43ffd91_24',);
                            }

                        }

                        // _assetic_43ffd91_25
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.tr_23.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 25,  '_format' => 'js',  '_route' => '_assetic_43ffd91_25',);
                        }

                        // _assetic_43ffd91_26
                        if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.vi_24.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 26,  '_format' => 'js',  '_route' => '_assetic_43ffd91_26',);
                        }

                        if (0 === strpos($pathinfo, '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.zh_')) {
                            // _assetic_43ffd91_27
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.zh_CN_25.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 27,  '_format' => 'js',  '_route' => '_assetic_43ffd91_27',);
                            }

                            // _assetic_43ffd91_28
                            if ($pathinfo === '/assetic/js/compiled/fmelfinder/main_part_4_elfinder.zh_TW_26.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '43ffd91',  'pos' => 28,  '_format' => 'js',  '_route' => '_assetic_43ffd91_28',);
                            }

                        }

                    }

                }

            }

        }

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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
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

<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Associations/Default/indexAdmin.html.twig */
class __TwigTemplate_979e56cc277e2e0e17a2b038aa18cb4c9c315fc8f92417370ae168467107c9d6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Associations/Default/indexAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Associations/Default/indexAdmin.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Associations/Default/indexAdmin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

    <!--**********************************
        Content body start
    ***********************************-->
    <div class=\"content-body\">
        <div class=\"container-fluid\">
            <div class=\"row page-titles mx-0\">
                <div class=\"col-sm-6 p-md-0\">
                    <div class=\"welcome-text\">
                        <h4>Hi, welcome back!</h4>
                        <p class=\"mb-0\">Your business dashboard template</p>
                    </div>
                </div>
                <div class=\"col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">Layout</a></li>
                        <li class=\"breadcrumb-item active\"><a href=\"javascript:void(0)\">Blank</a></li>
                    </ol>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"card\">
                        <div class=\"stat-widget-one card-body\">
                            <div class=\"stat-icon d-inline-block\">
                                <i class=\"ti-money text-success border-success\"></i>
                            </div>
                            <div class=\"stat-content d-inline-block\">
                                <div class=\"stat-text\">Profit</div>
                                <div class=\"stat-digit\">1,012</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"card\">
                        <div class=\"stat-widget-one card-body\">
                            <div class=\"stat-icon d-inline-block\">
                                <i class=\"ti-user text-primary border-primary\"></i>
                            </div>
                            <div class=\"stat-content d-inline-block\">
                                <div class=\"stat-text\">Customer</div>
                                <div class=\"stat-digit\">961</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"card\">
                        <div class=\"stat-widget-one card-body\">
                            <div class=\"stat-icon d-inline-block\">
                                <i class=\"ti-layout-grid2 text-pink border-pink\"></i>
                            </div>
                            <div class=\"stat-content d-inline-block\">
                                <div class=\"stat-text\">Projects</div>
                                <div class=\"stat-digit\">770</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"card\">
                        <div class=\"stat-widget-one card-body\">
                            <div class=\"stat-icon d-inline-block\">
                                <i class=\"ti-link text-danger border-danger\"></i>
                            </div>
                            <div class=\"stat-content d-inline-block\">
                                <div class=\"stat-text\">Referral</div>
                                <div class=\"stat-digit\">2,781</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h4 class=\"card-title\">Fee Collections and Expenses</h4>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"ct-bar-chart mt-5\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"ct-pie-chart\"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 col-xl-4 col-xxl-6 col-md-6\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Timeline</h4>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"widget-timeline\">
                            <ul class=\"timeline\">
                                <li>
                                    <div class=\"timeline-badge primary\"></div>
                                    <a class=\"timeline-panel text-muted\" href=\"#\">
                                        <span>10 minutes ago</span>
                                        <h6 class=\"m-t-5\">Youtube, a video-sharing website, goes live.</h6>
                                    </a>
                                </li>

                                <li>
                                    <div class=\"timeline-badge warning\">
                                    </div>
                                    <a class=\"timeline-panel text-muted\" href=\"#\">
                                        <span>20 minutes ago</span>
                                        <h6 class=\"m-t-5\">Mashable, a news website and blog, goes live.</h6>
                                    </a>
                                </li>

                                <li>
                                    <div class=\"timeline-badge danger\">
                                    </div>
                                    <a class=\"timeline-panel text-muted\" href=\"#\">
                                        <span>30 minutes ago</span>
                                        <h6 class=\"m-t-5\">Google acquires Youtube.</h6>
                                    </a>
                                </li>

                                <li>
                                    <div class=\"timeline-badge success\">
                                    </div>
                                    <a class=\"timeline-panel text-muted\" href=\"#\">
                                        <span>15 minutes ago</span>
                                        <h6 class=\"m-t-5\">StumbleUpon is acquired by eBay. </h6>
                                    </a>
                                </li>

                                <li>
                                    <div class=\"timeline-badge warning\">
                                    </div>
                                    <a class=\"timeline-panel text-muted\" href=\"#\">
                                        <span>20 minutes ago</span>
                                        <h6 class=\"m-t-5\">Mashable, a news website and blog, goes live.</h6>
                                    </a>
                                </li>

                                <li>
                                    <div class=\"timeline-badge dark\">
                                    </div>
                                    <a class=\"timeline-panel text-muted\" href=\"#\">
                                        <span>20 minutes ago</span>
                                        <h6 class=\"m-t-5\">Mashable, a news website and blog, goes live.</h6>
                                    </a>
                                </li>

                                <li>
                                    <div class=\"timeline-badge info\">
                                    </div>
                                    <a class=\"timeline-panel text-muted\" href=\"#\">
                                        <span>30 minutes ago</span>
                                        <h6 class=\"m-t-5\">Google acquires Youtube.</h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4 col-lg-6 col-xxl-6 col-md-6\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Notice Board</h4>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"recent-comment m-t-15\">
                            <div class=\"media\">
                                <div class=\"media-left\">
                                    <a href=\"#\"><img class=\"media-object mr-3\" src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/images/avatar/4.png"), "html", null, true);
        echo "\" alt=\"...\"></a>
                                </div>
                                <div class=\"media-body\">
                                    <h4 class=\"media-heading text-primary\">john doe</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                    <p class=\"comment-date\">10 min ago</p>
                                </div>
                            </div>
                            <div class=\"media\">
                                <div class=\"media-left\">
                                    <a href=\"#\"><img class=\"media-object mr-3\" src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/images/avatar/2.png"), "html", null, true);
        echo "\" alt=\"...\"></a>
                                </div>
                                <div class=\"media-body\">
                                    <h4 class=\"media-heading text-success\">Mr. John</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                    <p class=\"comment-date\">1 hour ago</p>
                                </div>
                            </div>
                            <div class=\"media\">
                                <div class=\"media-left\">
                                    <a href=\"#\"><img class=\"media-object mr-3\" src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/images/avatar/3.png"), "html", null, true);
        echo "\" alt=\"...\"></a>
                                </div>
                                <div class=\"media-body\">
                                    <h4 class=\"media-heading text-danger\">Mr. John</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                    <div class=\"comment-date\">Yesterday</div>
                                </div>
                            </div>
                            <div class=\"media\">
                                <div class=\"media-left\">
                                    <a href=\"#\"><img class=\"media-object mr-3\" src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/images/avatar/4.png"), "html", null, true);
        echo "\" alt=\"...\"></a>
                                </div>
                                <div class=\"media-body\">
                                    <h4 class=\"media-heading text-primary\">john doe</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                    <p class=\"comment-date\">10 min ago</p>
                                </div>
                            </div>
                            <div class=\"media\">
                                <div class=\"media-left\">
                                    <a href=\"#\"><img class=\"media-object mr-3\" src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/images/avatar/2.png"), "html", null, true);
        echo "\" alt=\"...\"></a>
                                </div>
                                <div class=\"media-body\">
                                    <h4 class=\"media-heading text-success\">Mr. John</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                    <p class=\"comment-date\">1 hour ago</p>
                                </div>
                            </div>
                            <div class=\"media no-border\">
                                <div class=\"media-left\">
                                    <a href=\"#\"><img class=\"media-object mr-3\" src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/images/avatar/3.png"), "html", null, true);
        echo "\" alt=\"...\"></a>
                                </div>
                                <div class=\"media-body\">
                                    <h4 class=\"media-heading text-info\">Mr. John</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                    <div class=\"comment-date\">Yesterday</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4 col-xxl-6 col-lg-6 col-md-12 col-sm-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Todo</h4>
                    </div>
                    <div class=\"card-body px-0\">
                        <div class=\"todo-list\">
                            <div class=\"tdl-holder\">
                                <div class=\"tdl-content widget-todo2 mr-4\">
                                    <ul id=\"todo_list\">
                                        <li><label><input type=\"checkbox\"><i></i><span>Get up</span><a href='#'
                                                                                                       class=\"ti-trash\"></a></label></li>
                                        <li><label><input type=\"checkbox\" checked><i></i><span>Stand up</span><a
                                                        href='#' class=\"ti-trash\"></a></label></li>
                                        <li><label><input type=\"checkbox\"><i></i><span>Don't give up the
                                                            fight.</span><a href='#' class=\"ti-trash\"></a></label></li>
                                        <li><label><input type=\"checkbox\" checked><i></i><span>Do something
                                                            else</span><a href='#' class=\"ti-trash\"></a></label></li>
                                        <li><label><input type=\"checkbox\" checked><i></i><span>Stand up</span><a
                                                        href='#' class=\"ti-trash\"></a></label></li>
                                        <li><label><input type=\"checkbox\"><i></i><span>Don't give up the
                                                            fight.</span><a href='#' class=\"ti-trash\"></a></label></li>
                                    </ul>
                                </div>
                                <div class=\"px-4\">
                                    <input type=\"text\" class=\"tdl-new form-control\" placeholder=\"Write new item and hit 'Enter'...\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-12 col-xxl-6 col-lg-6 col-md-12\">
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"year-calendar\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>



                </div>
                <div class=\"row\">
                    <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6\">
                        <div class=\"card\">
                            <div class=\"social-graph-wrapper widget-facebook\">
                                <span class=\"s-icon\"><i class=\"fa fa-facebook\"></i></span>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-6 border-right\">
                                    <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                        <h4 class=\"m-1\"><span class=\"counter\">89</span> k</h4>
                                        <p class=\"m-0\">Friends</p>
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                        <h4 class=\"m-1\"><span class=\"counter\">119</span> k</h4>
                                        <p class=\"m-0\">Followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6\">
                        <div class=\"card\">
                            <div class=\"social-graph-wrapper widget-linkedin\">
                                <span class=\"s-icon\"><i class=\"fa fa-linkedin\"></i></span>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-6 border-right\">
                                    <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                        <h4 class=\"m-1\"><span class=\"counter\">89</span> k</h4>
                                        <p class=\"m-0\">Friends</p>
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                        <h4 class=\"m-1\"><span class=\"counter\">119</span> k</h4>
                                        <p class=\"m-0\">Followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6\">
                        <div class=\"card\">
                            <div class=\"social-graph-wrapper widget-googleplus\">
                                <span class=\"s-icon\"><i class=\"fa fa-google-plus\"></i></span>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-6 border-right\">
                                    <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                        <h4 class=\"m-1\"><span class=\"counter\">89</span> k</h4>
                                        <p class=\"m-0\">Friends</p>
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                        <h4 class=\"m-1\"><span class=\"counter\">119</span> k</h4>
                                        <p class=\"m-0\">Followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6\">
                        <div class=\"card\">
                            <div class=\"social-graph-wrapper widget-twitter\">
                                <span class=\"s-icon\"><i class=\"fa fa-twitter\"></i></span>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-6 border-right\">
                                    <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                        <h4 class=\"m-1\"><span class=\"counter\">89</span> k</h4>
                                        <p class=\"m-0\">Friends</p>
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                        <h4 class=\"m-1\"><span class=\"counter\">119</span> k</h4>
                                        <p class=\"m-0\">Followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 384
    public function block_javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 385
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "

<script src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/vendor/chartist/js/chartist.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/js/quixnav-init.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/vendor/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/vendor/pg-calendar/js/pignose.calendar.min.js"), "html", null, true);
        echo "\"></script>


<script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/js/dashboard/dashboard-2.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Associations/Default/indexAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  501 => 394,  495 => 391,  491 => 390,  486 => 388,  482 => 387,  477 => 385,  468 => 384,  307 => 233,  294 => 223,  281 => 213,  268 => 203,  255 => 193,  242 => 183,  61 => 4,  52 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{%  extends 'base2.html.twig' %}

{% block content %}


    <!--**********************************
        Content body start
    ***********************************-->
    <div class=\"content-body\">
        <div class=\"container-fluid\">
            <div class=\"row page-titles mx-0\">
                <div class=\"col-sm-6 p-md-0\">
                    <div class=\"welcome-text\">
                        <h4>Hi, welcome back!</h4>
                        <p class=\"mb-0\">Your business dashboard template</p>
                    </div>
                </div>
                <div class=\"col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">Layout</a></li>
                        <li class=\"breadcrumb-item active\"><a href=\"javascript:void(0)\">Blank</a></li>
                    </ol>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"card\">
                        <div class=\"stat-widget-one card-body\">
                            <div class=\"stat-icon d-inline-block\">
                                <i class=\"ti-money text-success border-success\"></i>
                            </div>
                            <div class=\"stat-content d-inline-block\">
                                <div class=\"stat-text\">Profit</div>
                                <div class=\"stat-digit\">1,012</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"card\">
                        <div class=\"stat-widget-one card-body\">
                            <div class=\"stat-icon d-inline-block\">
                                <i class=\"ti-user text-primary border-primary\"></i>
                            </div>
                            <div class=\"stat-content d-inline-block\">
                                <div class=\"stat-text\">Customer</div>
                                <div class=\"stat-digit\">961</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"card\">
                        <div class=\"stat-widget-one card-body\">
                            <div class=\"stat-icon d-inline-block\">
                                <i class=\"ti-layout-grid2 text-pink border-pink\"></i>
                            </div>
                            <div class=\"stat-content d-inline-block\">
                                <div class=\"stat-text\">Projects</div>
                                <div class=\"stat-digit\">770</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"card\">
                        <div class=\"stat-widget-one card-body\">
                            <div class=\"stat-icon d-inline-block\">
                                <i class=\"ti-link text-danger border-danger\"></i>
                            </div>
                            <div class=\"stat-content d-inline-block\">
                                <div class=\"stat-text\">Referral</div>
                                <div class=\"stat-digit\">2,781</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h4 class=\"card-title\">Fee Collections and Expenses</h4>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"ct-bar-chart mt-5\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"ct-pie-chart\"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6 col-xl-4 col-xxl-6 col-md-6\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Timeline</h4>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"widget-timeline\">
                            <ul class=\"timeline\">
                                <li>
                                    <div class=\"timeline-badge primary\"></div>
                                    <a class=\"timeline-panel text-muted\" href=\"#\">
                                        <span>10 minutes ago</span>
                                        <h6 class=\"m-t-5\">Youtube, a video-sharing website, goes live.</h6>
                                    </a>
                                </li>

                                <li>
                                    <div class=\"timeline-badge warning\">
                                    </div>
                                    <a class=\"timeline-panel text-muted\" href=\"#\">
                                        <span>20 minutes ago</span>
                                        <h6 class=\"m-t-5\">Mashable, a news website and blog, goes live.</h6>
                                    </a>
                                </li>

                                <li>
                                    <div class=\"timeline-badge danger\">
                                    </div>
                                    <a class=\"timeline-panel text-muted\" href=\"#\">
                                        <span>30 minutes ago</span>
                                        <h6 class=\"m-t-5\">Google acquires Youtube.</h6>
                                    </a>
                                </li>

                                <li>
                                    <div class=\"timeline-badge success\">
                                    </div>
                                    <a class=\"timeline-panel text-muted\" href=\"#\">
                                        <span>15 minutes ago</span>
                                        <h6 class=\"m-t-5\">StumbleUpon is acquired by eBay. </h6>
                                    </a>
                                </li>

                                <li>
                                    <div class=\"timeline-badge warning\">
                                    </div>
                                    <a class=\"timeline-panel text-muted\" href=\"#\">
                                        <span>20 minutes ago</span>
                                        <h6 class=\"m-t-5\">Mashable, a news website and blog, goes live.</h6>
                                    </a>
                                </li>

                                <li>
                                    <div class=\"timeline-badge dark\">
                                    </div>
                                    <a class=\"timeline-panel text-muted\" href=\"#\">
                                        <span>20 minutes ago</span>
                                        <h6 class=\"m-t-5\">Mashable, a news website and blog, goes live.</h6>
                                    </a>
                                </li>

                                <li>
                                    <div class=\"timeline-badge info\">
                                    </div>
                                    <a class=\"timeline-panel text-muted\" href=\"#\">
                                        <span>30 minutes ago</span>
                                        <h6 class=\"m-t-5\">Google acquires Youtube.</h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4 col-lg-6 col-xxl-6 col-md-6\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Notice Board</h4>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"recent-comment m-t-15\">
                            <div class=\"media\">
                                <div class=\"media-left\">
                                    <a href=\"#\"><img class=\"media-object mr-3\" src=\"{{ asset('Back/images/avatar/4.png') }}\" alt=\"...\"></a>
                                </div>
                                <div class=\"media-body\">
                                    <h4 class=\"media-heading text-primary\">john doe</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                    <p class=\"comment-date\">10 min ago</p>
                                </div>
                            </div>
                            <div class=\"media\">
                                <div class=\"media-left\">
                                    <a href=\"#\"><img class=\"media-object mr-3\" src=\"{{ asset('Back/images/avatar/2.png') }}\" alt=\"...\"></a>
                                </div>
                                <div class=\"media-body\">
                                    <h4 class=\"media-heading text-success\">Mr. John</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                    <p class=\"comment-date\">1 hour ago</p>
                                </div>
                            </div>
                            <div class=\"media\">
                                <div class=\"media-left\">
                                    <a href=\"#\"><img class=\"media-object mr-3\" src=\"{{ asset('Back/images/avatar/3.png') }}\" alt=\"...\"></a>
                                </div>
                                <div class=\"media-body\">
                                    <h4 class=\"media-heading text-danger\">Mr. John</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                    <div class=\"comment-date\">Yesterday</div>
                                </div>
                            </div>
                            <div class=\"media\">
                                <div class=\"media-left\">
                                    <a href=\"#\"><img class=\"media-object mr-3\" src=\"{{ asset('Back/images/avatar/4.png') }}\" alt=\"...\"></a>
                                </div>
                                <div class=\"media-body\">
                                    <h4 class=\"media-heading text-primary\">john doe</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                    <p class=\"comment-date\">10 min ago</p>
                                </div>
                            </div>
                            <div class=\"media\">
                                <div class=\"media-left\">
                                    <a href=\"#\"><img class=\"media-object mr-3\" src=\"{{ asset('Back/images/avatar/2.png') }}\" alt=\"...\"></a>
                                </div>
                                <div class=\"media-body\">
                                    <h4 class=\"media-heading text-success\">Mr. John</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                    <p class=\"comment-date\">1 hour ago</p>
                                </div>
                            </div>
                            <div class=\"media no-border\">
                                <div class=\"media-left\">
                                    <a href=\"#\"><img class=\"media-object mr-3\" src=\"{{ asset('Back/images/avatar/3.png') }}\" alt=\"...\"></a>
                                </div>
                                <div class=\"media-body\">
                                    <h4 class=\"media-heading text-info\">Mr. John</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                    <div class=\"comment-date\">Yesterday</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4 col-xxl-6 col-lg-6 col-md-12 col-sm-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Todo</h4>
                    </div>
                    <div class=\"card-body px-0\">
                        <div class=\"todo-list\">
                            <div class=\"tdl-holder\">
                                <div class=\"tdl-content widget-todo2 mr-4\">
                                    <ul id=\"todo_list\">
                                        <li><label><input type=\"checkbox\"><i></i><span>Get up</span><a href='#'
                                                                                                       class=\"ti-trash\"></a></label></li>
                                        <li><label><input type=\"checkbox\" checked><i></i><span>Stand up</span><a
                                                        href='#' class=\"ti-trash\"></a></label></li>
                                        <li><label><input type=\"checkbox\"><i></i><span>Don't give up the
                                                            fight.</span><a href='#' class=\"ti-trash\"></a></label></li>
                                        <li><label><input type=\"checkbox\" checked><i></i><span>Do something
                                                            else</span><a href='#' class=\"ti-trash\"></a></label></li>
                                        <li><label><input type=\"checkbox\" checked><i></i><span>Stand up</span><a
                                                        href='#' class=\"ti-trash\"></a></label></li>
                                        <li><label><input type=\"checkbox\"><i></i><span>Don't give up the
                                                            fight.</span><a href='#' class=\"ti-trash\"></a></label></li>
                                    </ul>
                                </div>
                                <div class=\"px-4\">
                                    <input type=\"text\" class=\"tdl-new form-control\" placeholder=\"Write new item and hit 'Enter'...\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-12 col-xxl-6 col-lg-6 col-md-12\">
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"year-calendar\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>



                </div>
                <div class=\"row\">
                    <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6\">
                        <div class=\"card\">
                            <div class=\"social-graph-wrapper widget-facebook\">
                                <span class=\"s-icon\"><i class=\"fa fa-facebook\"></i></span>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-6 border-right\">
                                    <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                        <h4 class=\"m-1\"><span class=\"counter\">89</span> k</h4>
                                        <p class=\"m-0\">Friends</p>
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                        <h4 class=\"m-1\"><span class=\"counter\">119</span> k</h4>
                                        <p class=\"m-0\">Followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6\">
                        <div class=\"card\">
                            <div class=\"social-graph-wrapper widget-linkedin\">
                                <span class=\"s-icon\"><i class=\"fa fa-linkedin\"></i></span>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-6 border-right\">
                                    <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                        <h4 class=\"m-1\"><span class=\"counter\">89</span> k</h4>
                                        <p class=\"m-0\">Friends</p>
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                        <h4 class=\"m-1\"><span class=\"counter\">119</span> k</h4>
                                        <p class=\"m-0\">Followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6\">
                        <div class=\"card\">
                            <div class=\"social-graph-wrapper widget-googleplus\">
                                <span class=\"s-icon\"><i class=\"fa fa-google-plus\"></i></span>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-6 border-right\">
                                    <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                        <h4 class=\"m-1\"><span class=\"counter\">89</span> k</h4>
                                        <p class=\"m-0\">Friends</p>
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                        <h4 class=\"m-1\"><span class=\"counter\">119</span> k</h4>
                                        <p class=\"m-0\">Followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6\">
                        <div class=\"card\">
                            <div class=\"social-graph-wrapper widget-twitter\">
                                <span class=\"s-icon\"><i class=\"fa fa-twitter\"></i></span>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-6 border-right\">
                                    <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                        <h4 class=\"m-1\"><span class=\"counter\">89</span> k</h4>
                                        <p class=\"m-0\">Friends</p>
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                        <h4 class=\"m-1\"><span class=\"counter\">119</span> k</h4>
                                        <p class=\"m-0\">Followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
{%  endblock %}
{%  block javascript %}
{{ parent() }}

<script src=\"{{ asset('Back/vendor/chartist/js/chartist.min.js') }}\"></script>
<script src=\"{{ asset('Back/js/quixnav-init.js') }}\"></script>

<script src=\"{{ asset('Back/vendor/moment/moment.min.js') }}\"></script>
<script src=\"{{ asset('Back/vendor/pg-calendar/js/pignose.calendar.min.js') }}\"></script>


<script src=\"{{ asset('Back/js/dashboard/dashboard-2.js') }}\"></script>

{% endblock %}
", "@Associations/Default/indexAdmin.html.twig", "C:\\wamp64\\www\\piweb\\src\\AssociationsBundle\\Resources\\views\\Default\\indexAdmin.html.twig");
    }
}

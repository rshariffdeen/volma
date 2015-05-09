<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),  4 =>   array (  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),  4 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),),
        'user_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundle\\CoreBundle\\Controller\\HomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home',    ),  ),  4 =>   array (  ),),
        'auth_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundle\\CoreBundle\\Controller\\AuthenticationController::loginUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'auth_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundle\\CoreBundle\\Controller\\AuthenticationController::logoutUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
        'user_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundle\\CoreBundle\\Controller\\AuthenticationController::registerUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register',    ),  ),  4 =>   array (  ),),
        'auth_email_verification' => array (  0 =>   array (    0 => 'verification',    1 => 'email',  ),  1 =>   array (    '_controller' => 'Bundle\\CoreBundle\\Controller\\AuthenticationController::verifyEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'email',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'verification',    ),    2 =>     array (      0 => 'text',      1 => '/activate',    ),  ),  4 =>   array (  ),),
        'auth_delete_confirmation' => array (  0 =>   array (    0 => 'verification',    1 => 'email',  ),  1 =>   array (    '_controller' => 'Bundle\\CoreBundle\\Controller\\AuthenticationController::deleteConfirmationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'email',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'verification',    ),    2 =>     array (      0 => 'text',      1 => '/delete',    ),  ),  4 =>   array (  ),),
        'news_feed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CoreBundle:News:news',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/newsfeed',    ),  ),  4 =>   array (  ),),
        'pillar' => array (  0 =>   array (    0 => 'pillarName',  ),  1 =>   array (    '_controller' => 'CoreBundle:Pillar:details',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'pillarName',    ),    1 =>     array (      0 => 'text',      1 => '/pillar',    ),  ),  4 =>   array (  ),),
        'user_activate' => array (  0 =>   array (    0 => 'userID',  ),  1 =>   array (    '_controller' => 'Bundle\\CoreBundle\\Controller\\AuthenticationController::activateUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'userID',    ),    1 =>     array (      0 => 'text',      1 => '/activate',    ),  ),  4 =>   array (  ),),
        'user_reject' => array (  0 =>   array (    0 => 'userID',  ),  1 =>   array (    '_controller' => 'Bundle\\CoreBundle\\Controller\\AuthenticationController::rejectUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'userID',    ),    1 =>     array (      0 => 'text',      1 => '/reject',    ),  ),  4 =>   array (  ),),
        'members' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CoreBundle:Member:index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/members',    ),  ),  4 =>   array (  ),),
        'comment_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundle\\CommentBundle\\Controller\\CommentCreateController::newCommentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'comment_delete' => array (  0 =>   array (    0 => 'commentId',  ),  1 =>   array (    '_controller' => 'Bundle\\CommentBundle\\Controller\\CommentDeleteController::deleteCommentAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'commentId',    ),    1 =>     array (      0 => 'text',      1 => '/deleteComment',    ),  ),  4 =>   array (  ),),
        'checkRegisterEmail' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MoraspiritNotificationBundle:Notification:index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/check',    ),  ),  4 =>   array (  ),),
        'notification_see' => array (  0 =>   array (    0 => 'notificationId',  ),  1 =>   array (    '_controller' => 'MoraspiritNotificationBundle:Notification:seen',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'notificationId',    ),    1 =>     array (      0 => 'text',      1 => '/home',    ),  ),  4 =>   array (  ),),
        'allnotification' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MoraspiritNotificationBundle:Notification:showAll',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/allnotifications',    ),  ),  4 =>   array (  ),),
        'project_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundle\\ProjectBundle\\Controller\\ProjectListController::viewListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/project/index',    ),  ),  4 =>   array (  ),),
        'project_detail' => array (  0 =>   array (    0 => 'projectId',  ),  1 =>   array (    '_controller' => 'Bundle\\ProjectBundle\\Controller\\ProjectViewController::viewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'projectId',    ),    1 =>     array (      0 => 'text',      1 => '/project/view',    ),  ),  4 =>   array (  ),),
        'project_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundle\\ProjectBundle\\Controller\\ProjectCreateController::newProjectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/project/new',    ),  ),  4 =>   array (  ),),
        'project_edit' => array (  0 =>   array (    0 => 'projectId',  ),  1 =>   array (    '_controller' => 'Bundle\\ProjectBundle\\Controller\\ProjectUpdateController::editProjectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'projectId',    ),    1 =>     array (      0 => 'text',      1 => '/project/edit',    ),  ),  4 =>   array (  ),),
        'project_delete' => array (  0 =>   array (    0 => 'projectId',  ),  1 =>   array (    '_controller' => 'Bundle\\ProjectBundle\\Controller\\ProjectDeleteController::deleteProjectAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'projectId',    ),    1 =>     array (      0 => 'text',      1 => '/project/delete',    ),  ),  4 =>   array (  ),),
        'project_complete' => array (  0 =>   array (    0 => 'projectId',  ),  1 =>   array (    '_controller' => 'Bundle\\ProjectBundle\\Controller\\ProjectUpdateController::completeAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'projectId',    ),    1 =>     array (      0 => 'text',      1 => '/project/complete',    ),  ),  4 =>   array (  ),),
        'project_detail_notification' => array (  0 =>   array (    0 => 'projectId',    1 => 'notificationId',  ),  1 =>   array (    '_controller' => 'ProjectBundle:Project:notification',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'notificationId',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'projectId',    ),    2 =>     array (      0 => 'text',      1 => '/projectdetails',    ),  ),  4 =>   array (  ),),
        'task_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundle\\TaskBundle\\Controller\\TaskListController::viewListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tasks',    ),  ),  4 =>   array (  ),),
        'task_detail' => array (  0 =>   array (    0 => 'taskId',  ),  1 =>   array (    '_controller' => 'Bundle\\TaskBundle\\Controller\\TaskViewController::viewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'taskId',    ),    1 =>     array (      0 => 'text',      1 => '/taskdetails',    ),  ),  4 =>   array (  ),),
        'task_details_notification' => array (  0 =>   array (    0 => 'taskId',    1 => 'notificationId',  ),  1 =>   array (    '_controller' => 'TaskBundle:Task:notification',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'notificationId',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'taskId',    ),    2 =>     array (      0 => 'text',      1 => '/taskdetails',    ),  ),  4 =>   array (  ),),
        'task_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundle\\TaskBundle\\Controller\\TaskCreateController::newTaskAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/newTask',    ),  ),  4 =>   array (  ),),
        'task_edit' => array (  0 =>   array (    0 => 'taskId',  ),  1 =>   array (    '_controller' => 'Bundle\\TaskBundle\\Controller\\TaskUpdateController::editTaskAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'taskId',    ),    1 =>     array (      0 => 'text',      1 => '/editTask',    ),  ),  4 =>   array (  ),),
        'task_delete' => array (  0 =>   array (    0 => 'taskId',  ),  1 =>   array (    '_controller' => 'Bundle\\TaskBundle\\Controller\\TaskDeleteController::deleteTaskAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'taskId',    ),    1 =>     array (      0 => 'text',      1 => '/deleteTask',    ),  ),  4 =>   array (  ),),
        'task_feedback' => array (  0 =>   array (    0 => 'taskId',  ),  1 =>   array (    '_controller' => 'Bundle\\TaskBundle\\Controller\\TaskUpdateController::completePageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'taskId',    ),    1 =>     array (      0 => 'text',      1 => '/feedbackTask',    ),  ),  4 =>   array (  ),),
        'task_complete' => array (  0 =>   array (    0 => 'taskId',  ),  1 =>   array (    '_controller' => 'Bundle\\TaskBundle\\Controller\\TaskUpdateController::completeTaskAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'taskId',    ),    1 =>     array (      0 => 'text',      1 => '/completeTask',    ),  ),  4 =>   array (  ),),
        'user_profile' => array (  0 =>   array (    0 => 'userId',  ),  1 =>   array (    '_controller' => 'MoraspiritUserBundle:Profile:index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'userId',    ),    1 =>     array (      0 => 'text',      1 => '/profile',    ),  ),  4 =>   array (  ),),
        'account' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MoraspiritUserBundle:Account:index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/account',    ),  ),  4 =>   array (  ),),
        'forgot_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MoraspiritUserBundle:Account:forgotPassword',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/forgotpassword',    ),  ),  4 =>   array (  ),),
        'reset_password' => array (  0 =>   array (    0 => 'userId',  ),  1 =>   array (    '_controller' => 'MoraspiritUserBundle:Account:resetPassword',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetpassword',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'userId',    ),  ),  4 =>   array (  ),),
        'profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MoraspiritUserBundle:Profile:edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/editprofile',    ),  ),  4 =>   array (  ),),
        'profile_picture' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MoraspiritUserBundle:Profile:picture',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profilepicture',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}

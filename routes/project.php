<?php

/*
 * This file is part of Jitamin.
 *
 * Copyright (C) Jitamin Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

// Project routes
'project/create'                       => 'Project/ProjectController@create',
'project/create/private'               => 'Project/ProjectController@createPrivate',
'project/store'                        => 'Project/ProjectController@store',

'project/:project_id'                  => 'Project/ProjectController@show',
'p/:project_id'                        => 'Project/ProjectController@show',
'project/:project_id/customer-filters' => 'CustomFilterController@index',
'project/:project_id/roles'            => 'Project/ProjectRoleController@show',
'project/:project_id/activities'       => 'ActivityController@project',
'project/:project_id/tags'             => 'Project/ProjectTagController@index',

// ProjectFile routes
'project/:project_id/file/upload'      => 'Project/ProjectFileController@create',
'project/:project_id/file/:file_id'    => 'FileViewerController@show',
'project/:project_id/browser/:file_id' => 'FileViewerController@browser',

// Action routes
'project/:project_id/actions' => 'ActionController@index',

// Column routes
'project/:project_id/columns' => 'ColumnController@index',

// Swimlane routes
'project/:project_id/swimlanes' => 'SwimlaneController@index',

// Category routes
'project/:project_id/categories' => 'CategoryController@index',

// Board routes
'board/:project_id'          => 'Project/Board/BoardController@show',
'b/:project_id'              => 'Project/Board/BoardController@show',
'public/board/:token'        => 'Project/Board/BoardController@readonly',
'board/:project_id/collapse' => 'Project/Board/BoardAjaxController@collapse',
'board/:project_id/expand'   => 'Project/Board/BoardAjaxController@expand',

// Overview routes
'overview/:project_id'          => 'Project/ProjectController@overview',

// Gantt routes
'gantt/:project_id'               => 'Task/TaskController@gantt',
'gantt/:project_id/sort/:sorting' => 'Task/TaskController@gantt',

// Analytics routes
'project/:project_id/analytics/tasks'                => 'AnalyticController@taskDistribution',
'project/:project_id/analytics/users'                => 'AnalyticController@userDistribution',
'project/:project_id/analytics/cfd'                  => 'AnalyticController@cfd',
'project/:project_id/analytics/burndown'             => 'AnalyticController@burndown',
'project/:project_id/analytics/average-time-column'  => 'AnalyticController@averageTimeByColumn',
'project/:project_id/analytics/lead-cycle-time'      => 'AnalyticController@leadAndCycleTime',
'project/:project_id/analytics/estimated-spent-time' => 'AnalyticController@compareHours',
'project/:project_id/analytics/time-comparison'      => 'AnalyticController@timeComparison',

// Exports
'project/:project_id/export/tasks'       => 'Project/ExportController@tasks',
'project/:project_id/export/subtasks'    => 'Project/ExportController@subtasks',
'project/:project_id/export/transitions' => 'Project/ExportController@transitions',
'project/:project_id/export/summary'     => 'Project/ExportController@summary',

// Import routes
'project/:project_id/import'                   => 'Project/ImportController@show',
'project/:project_id/import/download-template' => 'Project/ImportController@template',

];

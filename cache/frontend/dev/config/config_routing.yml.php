<?php
// auto-generated by sfRoutingConfigHandler
// date: 2012/01/04 08:48:45
$this->routes['homepage'] = unserialize('C:7:"sfRoute":1070:{a:11:{i:0;a:2:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:3:{i:0;s:9:"separator";i:1;s:1:"/";i:2;s:1:"/";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:1:"/";i:4;s:0:"";i:5;s:6:"#^/$#x";i:6;a:0:{}i:7;a:2:{s:6:"module";s:8:"projects";s:6:"action";s:5:"index";}i:8;a:0:{}i:9;s:1:"/";i:10;b:0;}}');
$this->routes['projects'] = unserialize('C:15:"sfDoctrineRoute":1511:{a:11:{i:0;a:4:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:8:"projects";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:18:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:8:"Projects";s:4:"type";s:4:"list";s:6:"method";N;s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:20:"/projects.:sf_format";i:4;s:9:"/projects";i:5;s:43:"#^/projects(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:1:{s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:8:"projects";s:6:"action";s:5:"index";s:9:"sf_format";s:4:"html";}i:8;a:3:{s:2:"id";s:3:"\\d+";s:9:"sf_method";a:2:{i:0;s:3:"get";i:1;s:4:"head";}s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['projects_new'] = unserialize('C:15:"sfDoctrineRoute":1625:{a:11:{i:0;a:6:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:8:"projects";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:3:"new";i:3;N;}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:17:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:8:"Projects";s:4:"type";s:6:"object";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:24:"/projects/new.:sf_format";i:4;s:13:"/projects/new";i:5;s:47:"#^/projects/new(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:1:{s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:8:"projects";s:6:"action";s:3:"new";s:9:"sf_format";s:4:"html";}i:8;a:3:{s:2:"id";s:3:"\\d+";s:9:"sf_method";a:2:{i:0;s:3:"get";i:1;s:4:"head";}s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['projects_create'] = unserialize('C:15:"sfDoctrineRoute":1485:{a:11:{i:0;a:4:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:8:"projects";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:17:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:8:"Projects";s:4:"type";s:6:"object";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:20:"/projects.:sf_format";i:4;s:9:"/projects";i:5;s:43:"#^/projects(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:1:{s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:8:"projects";s:6:"action";s:6:"create";s:9:"sf_format";s:4:"html";}i:8;a:3:{s:2:"id";s:3:"\\d+";s:9:"sf_method";a:1:{i:0;s:4:"post";}s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['projects_edit'] = unserialize('C:15:"sfDoctrineRoute":1801:{a:11:{i:0;a:8:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:8:"projects";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:3:":id";i:3;s:2:"id";}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:5;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:4:"edit";i:3;N;}i:6;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:7;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:18:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:8:"Projects";s:4:"type";s:6:"object";s:6:"method";N;s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:29:"/projects/:id/edit.:sf_format";i:4;s:9:"/projects";i:5;s:60:"#^/projects/(?P<id>\\d+)/edit(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:2:{s:2:"id";s:3:":id";s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:8:"projects";s:6:"action";s:4:"edit";s:9:"sf_format";s:4:"html";}i:8;a:3:{s:2:"id";s:3:"\\d+";s:9:"sf_method";a:2:{i:0;s:3:"get";i:1;s:4:"head";}s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['projects_update'] = unserialize('C:15:"sfDoctrineRoute":1661:{a:11:{i:0;a:6:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:8:"projects";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:3:":id";i:3;s:2:"id";}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:18:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:8:"Projects";s:4:"type";s:6:"object";s:6:"method";N;s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:24:"/projects/:id.:sf_format";i:4;s:9:"/projects";i:5;s:55:"#^/projects/(?P<id>\\d+)(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:2:{s:2:"id";s:3:":id";s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:8:"projects";s:6:"action";s:6:"update";s:9:"sf_format";s:4:"html";}i:8;a:3:{s:2:"id";s:3:"\\d+";s:9:"sf_method";a:1:{i:0;s:3:"put";}s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['projects_delete'] = unserialize('C:15:"sfDoctrineRoute":1664:{a:11:{i:0;a:6:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:8:"projects";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:3:":id";i:3;s:2:"id";}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:18:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:8:"Projects";s:4:"type";s:6:"object";s:6:"method";N;s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:24:"/projects/:id.:sf_format";i:4;s:9:"/projects";i:5;s:55:"#^/projects/(?P<id>\\d+)(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:2:{s:2:"id";s:3:":id";s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:8:"projects";s:6:"action";s:6:"delete";s:9:"sf_format";s:4:"html";}i:8;a:3:{s:2:"id";s:3:"\\d+";s:9:"sf_method";a:1:{i:0;s:6:"delete";}s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['projects_show'] = unserialize('C:15:"sfDoctrineRoute":1674:{a:11:{i:0;a:6:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:8:"projects";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:3:":id";i:3;s:2:"id";}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:18:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:8:"Projects";s:4:"type";s:6:"object";s:6:"method";N;s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:24:"/projects/:id.:sf_format";i:4;s:9:"/projects";i:5;s:55:"#^/projects/(?P<id>\\d+)(?:\\.(?P<sf_format>[^/\\.]+))?$#x";i:6;a:2:{s:2:"id";s:3:":id";s:9:"sf_format";s:10:":sf_format";}i:7;a:3:{s:6:"module";s:8:"projects";s:6:"action";s:4:"show";s:9:"sf_format";s:4:"html";}i:8;a:3:{s:2:"id";s:3:"\\d+";s:9:"sf_method";a:2:{i:0;s:3:"get";i:1;s:4:"head";}s:9:"sf_format";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['show_projects'] = unserialize('C:14:"sfRequestRoute":1371:{a:11:{i:0;a:4:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:8:"projects";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:3:":id";i:3;s:2:"id";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:17:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:8:"Projects";s:4:"type";s:6:"object";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:13:"/projects/:id";i:4;s:9:"/projects";i:5;s:26:"#^/projects/(?P<id>\\d+)$#x";i:6;a:1:{s:2:"id";s:3:":id";}i:7;a:2:{s:6:"module";s:8:"projects";s:6:"action";s:4:"show";}i:8;a:2:{s:2:"id";s:3:"\\d+";s:9:"sf_method";a:1:{i:0;s:3:"get";}}i:9;s:0:"";i:10;b:0;}}');
$this->routes['default_index'] = unserialize('C:7:"sfRoute":1144:{a:11:{i:0;a:2:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:7:":module";i:3;s:6:"module";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:8:"/:module";i:4;s:0:"";i:5;s:25:"#^/(?P<module>[^/\\.]+)$#x";i:6;a:1:{s:6:"module";s:7:":module";}i:7;a:1:{s:6:"action";s:5:"index";}i:8;a:1:{s:6:"module";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['default'] = unserialize('C:7:"sfRoute":1477:{a:11:{i:0;a:6:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:7:":module";i:3;s:6:"module";}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:7:":action";i:3;s:6:"action";}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:5;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:1:"*";i:3;N;}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:18:"/:module/:action/*";i:4;s:0:"";i:5;s:69:"#^/(?P<module>[^/\\.]+)/(?P<action>[^/\\.]+)(?:(?:/(?P<_star>.*))?)?$#x";i:6;a:2:{s:6:"module";s:7:":module";s:6:"action";s:7:":action";}i:7;a:0:{}i:8;a:2:{s:6:"module";s:7:"[^/\\.]+";s:6:"action";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');

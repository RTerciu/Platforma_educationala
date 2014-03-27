




<!DOCTYPE html>
<html class="  ">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
    <title>Platforma_educationala/app/views/layout/layout.blade.php at master · RTerciu/Platforma_educationala</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <meta property="fb:app_id" content="1401488693436528"/>

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="RTerciu/Platforma_educationala" name="twitter:title" /><meta content="Platforma_educationala - Jobs si search controller" name="twitter:description" /><meta content="https://avatars0.githubusercontent.com/u/3920442?s=400" name="twitter:image:src" />
<meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://avatars0.githubusercontent.com/u/3920442?s=400" property="og:image" /><meta content="RTerciu/Platforma_educationala" property="og:title" /><meta content="https://github.com/RTerciu/Platforma_educationala" property="og:url" /><meta content="Platforma_educationala - Jobs si search controller" property="og:description" />

    <link rel="assets" href="https://github.global.ssl.fastly.net/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035/">
    <link rel="xhr-socket" href="/_sockets" />

    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="52D0AE90:5FF0:59411D:5332F599" name="octolytics-dimension-request_id" /><meta content="3920442" name="octolytics-actor-id" /><meta content="RTerciu" name="octolytics-actor-login" /><meta content="00bb99a9754072ebbcedf1a74aef6b0917fbb6c9380334df38a2332e1d1c5df8" name="octolytics-actor-hash" />
    

    
    
    <link rel="icon" type="image/x-icon" href="https://github.global.ssl.fastly.net/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="/g33zz67PkopXiQkOoC/uMldsjInuUx0gxwh+mUV9Mk=" name="csrf-token" />

    <link href="https://github.global.ssl.fastly.net/assets/github-337b621337a4eb1e816f9bb51b2443666e8f9849.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://github.global.ssl.fastly.net/assets/github2-31b08fae49b89c818aa4dbc87125eefd94e57f41.css" media="all" rel="stylesheet" type="text/css" />
    


        <script crossorigin="anonymous" src="https://github.global.ssl.fastly.net/assets/frameworks-1eb4805d296158ea875ffc5fa959a11f5a3cdf13.js" type="text/javascript"></script>
        <script async="async" crossorigin="anonymous" src="https://github.global.ssl.fastly.net/assets/github-8a59025e1ac4eea1c22b37d3f9f8d135e8079caa.js" type="text/javascript"></script>
        
        
      <meta http-equiv="x-pjax-version" content="d5ec715c58cea7e7ef264520cf354059">

        <link data-pjax-transient rel='permalink' href='/RTerciu/Platforma_educationala/blob/d0f9fc3c8bf359ea8ec36a67228809881a2129e9/app/views/layout/layout.blade.php'>

  <meta name="description" content="Platforma_educationala - Jobs si search controller" />

  <meta content="3920442" name="octolytics-dimension-user_id" /><meta content="RTerciu" name="octolytics-dimension-user_login" /><meta content="17829236" name="octolytics-dimension-repository_id" /><meta content="RTerciu/Platforma_educationala" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="17829236" name="octolytics-dimension-repository_network_root_id" /><meta content="RTerciu/Platforma_educationala" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/RTerciu/Platforma_educationala/commits/master.atom" rel="alternate" title="Recent Commits to Platforma_educationala:master" type="application/atom+xml" />

  </head>


  <body class="logged_in  env-production windows vis-public page-blob">
    <a href="#start-of-content" class="accessibility-aid js-skip-to-content">Skip to content</a>
    <div class="wrapper">
      
      
      
      


      <div class="header header-logged-in true">
  <div class="container clearfix">

    <a class="header-logo-invertocat" href="https://github.com/">
  <span class="mega-octicon octicon-mark-github"></span>
</a>

    
    <a href="/notifications" aria-label="You have no unread notifications" class="notification-indicator tooltipped tooltipped-s" data-gotokey="n">
        <span class="mail-status all-read"></span>
</a>

      <div class="command-bar js-command-bar  in-repository">
          <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">

<div class="commandbar">
  <span class="message"></span>
  <input type="text" data-hotkey="/ s" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    
    data-username="RTerciu"
      data-repo="RTerciu/Platforma_educationala"
      data-branch="master"
      data-sha="f4c77365e33cbd90813ccccbccadb4f0efca21a4"
  >
  <div class="display hidden"></div>
</div>

    <input type="hidden" name="nwo" value="RTerciu/Platforma_educationala" />

    <div class="select-menu js-menu-container js-select-menu search-context-select-menu">
      <span class="minibutton select-menu-button js-menu-target" role="button" aria-haspopup="true">
        <span class="js-select-button">This repository</span>
      </span>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container" aria-hidden="true">
        <div class="select-menu-modal">

          <div class="select-menu-item js-navigation-item js-this-repository-navigation-item selected">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" class="js-search-this-repository" name="search_target" value="repository" checked="checked" />
            <div class="select-menu-item-text js-select-button-text">This repository</div>
          </div> <!-- /.select-menu-item -->

          <div class="select-menu-item js-navigation-item js-all-repositories-navigation-item">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" name="search_target" value="global" />
            <div class="select-menu-item-text js-select-button-text">All repositories</div>
          </div> <!-- /.select-menu-item -->

        </div>
      </div>
    </div>

  <span class="help tooltipped tooltipped-s" aria-label="Show command bar help">
    <span class="octicon octicon-question"></span>
  </span>


  <input type="hidden" name="ref" value="cmdform">

</form>
        <ul class="top-nav">
          <li class="explore"><a href="/explore">Explore</a></li>
            <li><a href="https://gist.github.com">Gist</a></li>
            <li><a href="/blog">Blog</a></li>
          <li><a href="https://help.github.com">Help</a></li>
        </ul>
      </div>

    


  <ul id="user-links">
    <li>
      <a href="/RTerciu" class="name">
        <img alt="RTerciu" class=" js-avatar" data-user="3920442" height="20" src="https://avatars3.githubusercontent.com/u/3920442?s=140" width="20" /> RTerciu
      </a>
    </li>

    <li class="new-menu dropdown-toggle js-menu-container">
      <a href="#" class="js-menu-target tooltipped tooltipped-s" aria-label="Create new...">
        <span class="octicon octicon-plus"></span>
        <span class="dropdown-arrow"></span>
      </a>

      <div class="new-menu-content js-menu-content">
      </div>
    </li>

    <li>
      <a href="/settings/profile" id="account_settings"
        class="tooltipped tooltipped-s"
        aria-label="Account settings ">
        <span class="octicon octicon-tools"></span>
      </a>
    </li>
    <li>
      <a class="tooltipped tooltipped-s" href="/logout" data-method="post" id="logout" aria-label="Sign out">
        <span class="octicon octicon-log-out"></span>
      </a>
    </li>

  </ul>

<div class="js-new-dropdown-contents hidden">
  

<ul class="dropdown-menu">
  <li>
    <a href="/new"><span class="octicon octicon-repo-create"></span> New repository</a>
  </li>
  <li>
    <a href="/organizations/new"><span class="octicon octicon-organization"></span> New organization</a>
  </li>


    <li class="section-title">
      <span title="RTerciu/Platforma_educationala">This repository</span>
    </li>
      <li>
        <a href="/RTerciu/Platforma_educationala/issues/new"><span class="octicon octicon-issue-opened"></span> New issue</a>
      </li>
      <li>
        <a href="/RTerciu/Platforma_educationala/settings/collaboration"><span class="octicon octicon-person-add"></span> New collaborator</a>
      </li>
</ul>

</div>


    
  </div>
</div>

      

        



      <div id="start-of-content" class="accessibility-aid"></div>
          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        

<ul class="pagehead-actions">

    <li class="subscription">
      <form accept-charset="UTF-8" action="/notifications/subscribe" class="js-social-container" data-autosubmit="true" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="/g33zz67PkopXiQkOoC/uMldsjInuUx0gxwh+mUV9Mk=" /></div>  <input id="repository_id" name="repository_id" type="hidden" value="17829236" />

    <div class="select-menu js-menu-container js-select-menu">
      <a class="social-count js-social-count" href="/RTerciu/Platforma_educationala/watchers">
        2
      </a>
      <span class="minibutton select-menu-button with-count js-menu-target" role="button" tabindex="0" aria-haspopup="true">
        <span class="js-select-button">
          <span class="octicon octicon-eye-unwatch"></span>
          Unwatch
        </span>
      </span>

      <div class="select-menu-modal-holder">
        <div class="select-menu-modal subscription-menu-modal js-menu-content" aria-hidden="true">
          <div class="select-menu-header">
            <span class="select-menu-title">Notification status</span>
            <span class="octicon octicon-remove-close js-menu-close"></span>
          </div> <!-- /.select-menu-header -->

          <div class="select-menu-list js-navigation-container" role="menu">

            <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input id="do_included" name="do" type="radio" value="included" />
                <h4>Not watching</h4>
                <span class="description">You only receive notifications for conversations in which you participate or are @mentioned.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-eye-watch"></span>
                  Watch
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

            <div class="select-menu-item js-navigation-item selected" role="menuitem" tabindex="0">
              <span class="select-menu-item-icon octicon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input checked="checked" id="do_subscribed" name="do" type="radio" value="subscribed" />
                <h4>Watching</h4>
                <span class="description">You receive notifications for all conversations in this repository.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-eye-unwatch"></span>
                  Unwatch
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

            <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input id="do_ignore" name="do" type="radio" value="ignore" />
                <h4>Ignoring</h4>
                <span class="description">You do not receive any notifications for conversations in this repository.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-mute"></span>
                  Stop ignoring
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

          </div> <!-- /.select-menu-list -->

        </div> <!-- /.select-menu-modal -->
      </div> <!-- /.select-menu-modal-holder -->
    </div> <!-- /.select-menu -->

</form>
    </li>

  <li>
  

  <div class="js-toggler-container js-social-container starring-container ">
    <a href="/RTerciu/Platforma_educationala/unstar"
      class="minibutton with-count js-toggler-target star-button starred"
      aria-label="Unstar this repository" title="Unstar RTerciu/Platforma_educationala" data-remote="true" data-method="post" rel="nofollow">
      <span class="octicon octicon-star-delete"></span><span class="text">Unstar</span>
    </a>

    <a href="/RTerciu/Platforma_educationala/star"
      class="minibutton with-count js-toggler-target star-button unstarred"
      aria-label="Star this repository" title="Star RTerciu/Platforma_educationala" data-remote="true" data-method="post" rel="nofollow">
      <span class="octicon octicon-star"></span><span class="text">Star</span>
    </a>

      <a class="social-count js-social-count" href="/RTerciu/Platforma_educationala/stargazers">
        0
      </a>
  </div>

  </li>


        <li>
          <a href="/RTerciu/Platforma_educationala/fork" class="minibutton with-count js-toggler-target fork-button lighter tooltipped-n" title="Fork your own copy of RTerciu/Platforma_educationala to your account" aria-label="Fork your own copy of RTerciu/Platforma_educationala to your account" rel="nofollow" data-method="post">
            <span class="octicon octicon-git-branch-create"></span><span class="text">Fork</span>
          </a>
          <a href="/RTerciu/Platforma_educationala/network" class="social-count">0</a>
        </li>


</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="repo-label"><span>public</span></span>
          <span class="mega-octicon octicon-repo"></span>
          <span class="author">
            <a href="/RTerciu" class="url fn" itemprop="url" rel="author"><span itemprop="title">RTerciu</span></a>
          </span>
          <span class="repohead-name-divider">/</span>
          <strong><a href="/RTerciu/Platforma_educationala" class="js-current-repository js-repo-home-link">Platforma_educationala</a></strong>

          <span class="page-context-loader">
            <img alt="Octocat-spinner-32" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">
      <div class="repository-with-sidebar repo-container new-discussion-timeline js-new-discussion-timeline  ">
        <div class="repository-sidebar clearfix">
            

<div class="sunken-menu vertical-right repo-nav js-repo-nav js-repository-container-pjax js-octicon-loaders">
  <div class="sunken-menu-contents">
    <ul class="sunken-menu-group">
      <li class="tooltipped tooltipped-w" aria-label="Code">
        <a href="/RTerciu/Platforma_educationala" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-gotokey="c" data-pjax="true" data-selected-links="repo_source repo_downloads repo_commits repo_tags repo_branches /RTerciu/Platforma_educationala">
          <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

        <li class="tooltipped tooltipped-w" aria-label="Issues">
          <a href="/RTerciu/Platforma_educationala/issues" aria-label="Issues" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-gotokey="i" data-selected-links="repo_issues /RTerciu/Platforma_educationala/issues">
            <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
            <span class='counter'>0</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>

      <li class="tooltipped tooltipped-w" aria-label="Pull Requests">
        <a href="/RTerciu/Platforma_educationala/pulls" aria-label="Pull Requests" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-gotokey="p" data-selected-links="repo_pulls /RTerciu/Platforma_educationala/pulls">
            <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
            <span class='counter'>0</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


        <li class="tooltipped tooltipped-w" aria-label="Wiki">
          <a href="/RTerciu/Platforma_educationala/wiki" aria-label="Wiki" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="repo_wiki /RTerciu/Platforma_educationala/wiki">
            <span class="octicon octicon-book"></span> <span class="full-word">Wiki</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>
    </ul>
    <div class="sunken-menu-separator"></div>
    <ul class="sunken-menu-group">

      <li class="tooltipped tooltipped-w" aria-label="Pulse">
        <a href="/RTerciu/Platforma_educationala/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="pulse /RTerciu/Platforma_educationala/pulse">
          <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Graphs">
        <a href="/RTerciu/Platforma_educationala/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="repo_graphs repo_contributors /RTerciu/Platforma_educationala/graphs">
          <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Network">
        <a href="/RTerciu/Platforma_educationala/network" aria-label="Network" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-selected-links="repo_network /RTerciu/Platforma_educationala/network">
          <span class="octicon octicon-git-branch"></span> <span class="full-word">Network</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>
    </ul>


      <div class="sunken-menu-separator"></div>
      <ul class="sunken-menu-group">
        <li class="tooltipped tooltipped-w" aria-label="Settings">
          <a href="/RTerciu/Platforma_educationala/settings"
            class="sunken-menu-item" data-pjax aria-label="Settings">
            <span class="octicon octicon-tools"></span> <span class="full-word">Settings</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
          </a>
        </li>
      </ul>
  </div>
</div>

              <div class="only-with-full-nav">
                

  

<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=push">
  <h3><strong>HTTPS</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/RTerciu/Platforma_educationala.git" readonly="readonly">

    <span aria-label="copy to clipboard" class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/RTerciu/Platforma_educationala.git" data-copied-hint="copied!"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="ssh"
  data-url="/users/set_protocol?protocol_selector=ssh&amp;protocol_type=push">
  <h3><strong>SSH</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="git@github.com:RTerciu/Platforma_educationala.git" readonly="readonly">

    <span aria-label="copy to clipboard" class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="git@github.com:RTerciu/Platforma_educationala.git" data-copied-hint="copied!"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=push">
  <h3><strong>Subversion</strong> checkout URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/RTerciu/Platforma_educationala" readonly="readonly">

    <span aria-label="copy to clipboard" class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/RTerciu/Platforma_educationala" data-copied-hint="copied!"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


<p class="clone-options">You can clone with
      <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a>,
      <a href="#" class="js-clone-selector" data-protocol="ssh">SSH</a>,
      or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <span class="help tooltipped tooltipped-n" aria-label="Get help on which URL is right for you.">
    <a href="https://help.github.com/articles/which-remote-url-should-i-use">
    <span class="octicon octicon-question"></span>
    </a>
  </span>
</p>


  <a href="github-windows://openRepo/https://github.com/RTerciu/Platforma_educationala" class="minibutton sidebar-button" title="Save RTerciu/Platforma_educationala to your computer and use it in GitHub Desktop." aria-label="Save RTerciu/Platforma_educationala to your computer and use it in GitHub Desktop.">
    <span class="octicon octicon-device-desktop"></span>
    Clone in Desktop
  </a>

                <a href="/RTerciu/Platforma_educationala/archive/master.zip"
                   class="minibutton sidebar-button"
                   aria-label="Download RTerciu/Platforma_educationala as a zip file"
                   title="Download RTerciu/Platforma_educationala as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
              </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          


<!-- blob contrib key: blob_contributors:v21:9e74043fe5fb956cb413763e2a23a0fb -->

<p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

<a href="/RTerciu/Platforma_educationala/find/master" data-pjax data-hotkey="t" class="js-show-file-finder" style="display:none">Show File Finder</a>

<div class="file-navigation">
  

<div class="select-menu js-menu-container js-select-menu" >
  <span class="minibutton select-menu-button js-menu-target" data-hotkey="w"
    data-master-branch="master"
    data-ref="master"
    role="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-remove-close js-menu-close"></span>
      </div> <!-- /.select-menu-header -->

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Find or create a branch…" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Find or create a branch…">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div><!-- /.select-menu-tabs -->
      </div><!-- /.select-menu-filters -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/RTerciu/Platforma_educationala/blob/master/app/views/layout/layout.blade.php"
                 data-name="master"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="master">master</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <form accept-charset="UTF-8" action="/RTerciu/Platforma_educationala/branches" class="js-create-branch select-menu-item select-menu-new-item-form js-navigation-item js-new-item-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="/g33zz67PkopXiQkOoC/uMldsjInuUx0gxwh+mUV9Mk=" /></div>
            <span class="octicon octicon-git-branch-create select-menu-item-icon"></span>
            <div class="select-menu-item-text">
              <h4>Create branch: <span class="js-new-item-name"></span></h4>
              <span class="description">from ‘master’</span>
            </div>
            <input type="hidden" name="name" id="name" class="js-new-item-value">
            <input type="hidden" name="branch" id="branch" value="master" />
            <input type="hidden" name="path" id="path" value="app/views/layout/layout.blade.php" />
          </form> <!-- /.select-menu-item -->

      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="breadcrumb">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/RTerciu/Platforma_educationala" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">Platforma_educationala</span></a></span></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/RTerciu/Platforma_educationala/tree/master/app" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">app</span></a></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/RTerciu/Platforma_educationala/tree/master/app/views" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">views</span></a></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/RTerciu/Platforma_educationala/tree/master/app/views/layout" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">layout</span></a></span><span class="separator"> / </span><strong class="final-path">layout.blade.php</strong> <span aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="app/views/layout/layout.blade.php" data-copied-hint="copied!"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


  <div class="commit file-history-tease">
    <img alt="RTerciu" class="main-avatar js-avatar" data-user="3920442" height="24" src="https://avatars3.githubusercontent.com/u/3920442?s=140" width="24" />
    <span class="author"><a href="/RTerciu" rel="author">RTerciu</a></span>
    <time class="js-relative-date" data-title-format="YYYY-MM-DD HH:mm:ss" datetime="2014-03-26T13:38:00+02:00" title="2014-03-26 13:38:00">March 26, 2014</time>
    <div class="commit-title">
        <a href="/RTerciu/Platforma_educationala/commit/3b63455454f466fbd8f28f05d6b0817d89eae978" class="message" data-pjax="true" title="Update layout.blade.php">Update layout.blade.php</a>
    </div>

    <div class="participation">
      <p class="quickstat"><a href="#blob_contributors_box" rel="facebox"><strong>2</strong> contributors</a></p>
          <a class="avatar tooltipped tooltipped-s" aria-label="RTerciu" href="/RTerciu/Platforma_educationala/commits/master/app/views/layout/layout.blade.php?author=RTerciu"><img alt="RTerciu" class=" js-avatar" data-user="3920442" height="20" src="https://avatars3.githubusercontent.com/u/3920442?s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="alexandrugheorghe" href="/RTerciu/Platforma_educationala/commits/master/app/views/layout/layout.blade.php?author=alexandrugheorghe"><img alt="alexandrugheorghe" class=" js-avatar" data-user="2517735" height="20" src="https://avatars1.githubusercontent.com/u/2517735?s=140" width="20" /></a>


    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list">
          <li class="facebox-user-list-item">
            <img alt="RTerciu" class=" js-avatar" data-user="3920442" height="24" src="https://avatars3.githubusercontent.com/u/3920442?s=140" width="24" />
            <a href="/RTerciu">RTerciu</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="alexandrugheorghe" class=" js-avatar" data-user="2517735" height="24" src="https://avatars1.githubusercontent.com/u/2517735?s=140" width="24" />
            <a href="/alexandrugheorghe">alexandrugheorghe</a>
          </li>
      </ul>
    </div>
  </div>

<div class="file-box">
  <div class="file">
    <div class="meta clearfix">
      <div class="info file-name">
        <span class="icon"><b class="octicon octicon-file-text"></b></span>
        <span class="mode" title="File Mode">file</span>
        <span class="meta-divider"></span>
          <span>76 lines (63 sloc)</span>
          <span class="meta-divider"></span>
        <span>2.233 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
            <a class="minibutton tooltipped tooltipped-w"
               href="github-windows://openRepo/https://github.com/RTerciu/Platforma_educationala?branch=master&amp;filepath=app%2Fviews%2Flayout%2Flayout.blade.php" aria-label="Open this file in GitHub for Windows">
                <span class="octicon octicon-device-desktop"></span> Open
            </a>
                <a class="minibutton js-update-url-with-hash"
                   href="/RTerciu/Platforma_educationala/edit/master/app/views/layout/layout.blade.php"
                   data-method="post" rel="nofollow" data-hotkey="e">Edit</a>
          <a href="/RTerciu/Platforma_educationala/raw/master/app/views/layout/layout.blade.php" class="button minibutton " id="raw-url">Raw</a>
            <a href="/RTerciu/Platforma_educationala/blame/master/app/views/layout/layout.blade.php" class="button minibutton js-update-url-with-hash">Blame</a>
          <a href="/RTerciu/Platforma_educationala/commits/master/app/views/layout/layout.blade.php" class="button minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->

            <a class="minibutton danger empty-icon"
               href="/RTerciu/Platforma_educationala/delete/master/app/views/layout/layout.blade.php"
               data-method="post" data-test-id="delete-blob-file" rel="nofollow">

          Delete
        </a>
      </div><!-- /.actions -->
    </div>
        <div class="blob-wrapper data type-php js-blob-data">
        <table class="file-code file-diff tab-size-8">
          <tr class="file-code-line">
            <td class="blob-line-nums">
              <span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>

            </td>
            <td class="blob-line-code"><div class="code-body highlight"><pre><div class='line' id='LC1'><span class="o">&lt;!</span><span class="nx">doctype</span> <span class="nx">html</span><span class="o">&gt;</span></div><div class='line' id='LC2'><span class="o">&lt;</span><span class="nx">html</span> <span class="nx">lang</span><span class="o">=</span><span class="s2">&quot;en&quot;</span><span class="o">&gt;</span></div><div class='line' id='LC3'><span class="o">&lt;</span><span class="nx">head</span><span class="o">&gt;</span></div><div class='line' id='LC4'>	<span class="o">&lt;</span><span class="nx">meta</span> <span class="nx">charset</span><span class="o">=</span><span class="s2">&quot;UTF-8&quot;</span><span class="o">&gt;</span></div><div class='line' id='LC5'>	<span class="o">&lt;</span><span class="nx">meta</span> <span class="nx">name</span><span class="o">=</span><span class="s2">&quot;viewport&quot;</span> <span class="nx">content</span><span class="o">=</span><span class="s2">&quot;width=device-width, initial-scale=1&quot;</span><span class="o">&gt;</span></div><div class='line' id='LC6'>	<span class="o">&lt;</span><span class="nx">title</span><span class="o">&gt;</span><span class="nx">Platform</span><span class="o">&lt;/</span><span class="nx">title</span><span class="o">&gt;</span></div><div class='line' id='LC7'><br/></div><div class='line' id='LC8'>	<span class="o">&lt;</span><span class="nx">script</span> <span class="nx">src</span><span class="o">=</span><span class="s2">&quot;//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js&quot;</span><span class="o">&gt;&lt;/</span><span class="nx">script</span><span class="o">&gt;</span></div><div class='line' id='LC9'>	<span class="o">&lt;</span><span class="nx">script</span> <span class="nx">type</span><span class="o">=</span><span class="s2">&quot;text/javascript&quot;</span> <span class="nx">href</span><span class="o">=</span><span class="s2">&quot;{{asset(&#39;js/bootstrap.min.js&#39;)}}&quot;</span><span class="o">&gt;&lt;/</span><span class="nx">script</span><span class="o">&gt;</span></div><div class='line' id='LC10'>	<span class="o">&lt;</span><span class="nx">script</span> <span class="nx">type</span><span class="o">=</span><span class="s2">&quot;text/javascript&quot;</span> <span class="nx">src</span><span class="o">=</span><span class="s2">&quot;{{asset(&#39;js/home_buttons.js&#39;)}}&quot;</span><span class="o">&gt;&lt;/</span><span class="nx">script</span><span class="o">&gt;</span></div><div class='line' id='LC11'>	<span class="o">&lt;</span><span class="nx">script</span> <span class="nx">src</span><span class="o">=</span><span class="s2">&quot;//tinymce.cachefly.net/4.0/tinymce.min.js&quot;</span><span class="o">&gt;&lt;/</span><span class="nx">script</span><span class="o">&gt;</span></div><div class='line' id='LC12'><br/></div><div class='line' id='LC13'><br/></div><div class='line' id='LC14'><br/></div><div class='line' id='LC15'>	<span class="o">&lt;</span><span class="nx">script</span><span class="o">&gt;</span></div><div class='line' id='LC16'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">tinymce</span><span class="o">.</span><span class="nx">init</span><span class="p">({</span><span class="nx">selector</span><span class="o">:</span><span class="s1">&#39;textarea#descriere_job&#39;</span><span class="p">});</span></div><div class='line' id='LC17'>	<span class="o">&lt;/</span><span class="nx">script</span><span class="o">&gt;</span></div><div class='line' id='LC18'><br/></div><div class='line' id='LC19'>	<span class="o">&lt;</span><span class="nb">link</span> <span class="nx">rel</span><span class="o">=</span><span class="s2">&quot;stylesheet&quot;</span> <span class="nx">href</span><span class="o">=</span><span class="s2">&quot;{{ asset(&#39;css/bootstrap.min.css&#39;)}}&quot;</span><span class="o">/&gt;</span></div><div class='line' id='LC20'>	<span class="o">&lt;</span><span class="nb">link</span> <span class="nx">rel</span><span class="o">=</span><span class="s2">&quot;stylesheet&quot;</span> <span class="nx">href</span><span class="o">=</span><span class="s2">&quot;{{ asset(&#39;css/style_home.css&#39;)}}&quot;</span> <span class="nx">type</span><span class="o">=</span><span class="s2">&quot;text/css&quot;</span> <span class="nx">media</span><span class="o">=</span><span class="s2">&quot;screen&quot;</span><span class="o">&gt;</span></div><div class='line' id='LC21'><br/></div><div class='line' id='LC22'><span class="o">&lt;/</span><span class="nx">head</span><span class="o">&gt;</span></div><div class='line' id='LC23'><span class="o">&lt;</span><span class="nx">body</span><span class="o">&gt;</span></div><div class='line' id='LC24'>	<span class="o">&lt;</span><span class="nx">div</span> <span class="nx">class</span><span class="o">=</span><span class="s2">&quot;container&quot;</span><span class="o">&gt;</span></div><div class='line' id='LC25'>		<span class="o">&lt;</span><span class="nx">nav</span> <span class="nx">class</span><span class="o">=</span><span class="s2">&quot;navbar navbar-default&quot;</span> <span class="nx">role</span><span class="o">=</span><span class="s2">&quot;navigation&quot;</span><span class="o">&gt;</span></div><div class='line' id='LC26'>			<span class="o">&lt;</span><span class="nx">div</span> <span class="nx">class</span><span class="o">=</span><span class="s2">&quot;container-fluid&quot;</span><span class="o">&gt;</span></div><div class='line' id='LC27'>				<span class="o">&lt;</span><span class="nx">div</span> <span class="nx">class</span><span class="o">=</span><span class="s2">&quot;navbar-header&quot;</span><span class="o">&gt;</span></div><div class='line' id='LC28'>					<span class="o">&lt;</span><span class="nx">a</span> <span class="nx">href</span><span class="o">=</span><span class="s2">&quot;{{URL::to(&#39;/&#39;)}}&quot;</span> <span class="nx">class</span><span class="o">=</span><span class="s2">&quot;navbar-brand&quot;</span><span class="o">&gt;</span><span class="nx">Platform</span> <span class="nx">Educationala</span><span class="o">&lt;/</span><span class="nx">a</span><span class="o">&gt;</span></div><div class='line' id='LC29'>				<span class="o">&lt;/</span><span class="nx">div</span><span class="o">&gt;</span></div><div class='line' id='LC30'>				<span class="o">&lt;</span><span class="nx">ul</span> <span class="nx">class</span><span class="o">=</span><span class="s2">&quot;nav navbar-nav&quot;</span><span class="o">&gt;</span></div><div class='line' id='LC31'>					<span class="o">&lt;</span><span class="nx">li</span><span class="o">&gt;</span></div><div class='line' id='LC32'>						<span class="o">&lt;</span><span class="nx">a</span> <span class="nx">href</span><span class="o">=</span><span class="s2">&quot;{{URL::to(&#39;/documents/create&#39;)}}&quot;</span> <span class="nx">class</span><span class="o">=</span><span class="s2">&quot;navbar-brand&quot;</span><span class="o">&gt;</span><span class="nx">Upload</span> <span class="nx">document</span><span class="o">&lt;/</span><span class="nx">a</span><span class="o">&gt;</span></div><div class='line' id='LC33'>					<span class="o">&lt;/</span><span class="nx">li</span><span class="o">&gt;</span></div><div class='line' id='LC34'><br/></div><div class='line' id='LC35'>					<span class="o">&lt;</span><span class="nx">li</span><span class="o">&gt;</span></div><div class='line' id='LC36'>						<span class="o">&lt;</span><span class="nx">a</span> <span class="nx">href</span><span class="o">=</span><span class="s2">&quot;{{URL::to(&#39;/jobs&#39;)}}&quot;</span> <span class="nx">class</span><span class="o">=</span><span class="s2">&quot;navbar-brand&quot;</span><span class="o">&gt;</span><span class="nx">Joburi</span><span class="o">&lt;/</span><span class="nx">a</span><span class="o">&gt;</span></div><div class='line' id='LC37'>					<span class="o">&lt;/</span><span class="nx">li</span><span class="o">&gt;</span></div><div class='line' id='LC38'><br/></div><div class='line' id='LC39'>					<span class="o">&lt;</span><span class="nx">li</span><span class="o">&gt;</span></div><div class='line' id='LC40'>						<span class="o">&lt;</span><span class="nx">a</span> <span class="nx">href</span><span class="o">=</span><span class="s2">&quot;#&quot;</span> <span class="nx">class</span><span class="o">=</span><span class="s2">&quot;navbar-brand&quot;</span><span class="o">&gt;</span><span class="nx">Contact</span><span class="o">&lt;/</span><span class="nx">a</span><span class="o">&gt;</span></div><div class='line' id='LC41'>					<span class="o">&lt;/</span><span class="nx">li</span><span class="o">&gt;</span></div><div class='line' id='LC42'>				<span class="o">&lt;/</span><span class="nx">ul</span><span class="o">&gt;</span></div><div class='line' id='LC43'>				<span class="o">&lt;</span><span class="nx">ul</span> <span class="nx">class</span><span class="o">=</span><span class="s2">&quot;nav navbar-nav navbar-right&quot;</span><span class="o">&gt;</span></div><div class='line' id='LC44'>					<span class="o">@</span><span class="k">if</span><span class="p">(</span><span class="nx">Auth</span><span class="o">::</span><span class="na">check</span><span class="p">())</span></div><div class='line' id='LC45'>						<span class="o">&lt;</span><span class="nx">li</span> <span class="nx">class</span><span class="o">=</span><span class="s2">&quot;dropdown&quot;</span><span class="o">&gt;</span></div><div class='line' id='LC46'><br/></div><div class='line' id='LC47'>							<span class="o">&lt;</span><span class="nx">a</span> <span class="nx">href</span><span class="o">=</span><span class="s2">&quot;javascript:$(&#39;.dropdown-menu&#39;).toggle();&quot;</span>  <span class="nx">class</span><span class="o">=</span><span class="s2">&quot;dropdown-toggle&quot;</span> <span class="nx">data</span><span class="o">-</span><span class="nx">toggle</span><span class="o">=</span><span class="s2">&quot;dropdown&quot;</span><span class="o">&gt;&lt;</span><span class="nx">img</span> <span class="nx">src</span><span class="o">=</span><span class="s2">&quot;{{URL::to(Auth::user()-&gt;avatar)}}&quot;</span> <span class="nx">class</span><span class="o">=</span><span class="s2">&quot;img-thumbnail&quot;</span> <span class="nx">width</span><span class="o">=</span><span class="s2">&quot;50&quot;</span> <span class="nx">height</span><span class="o">=</span><span class="s2">&quot;50&quot;</span><span class="o">&gt;</span><span class="p">{{</span><span class="nx">Auth</span><span class="o">::</span><span class="na">user</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">email</span><span class="p">}}</span> <span class="o">&lt;</span><span class="nx">b</span> <span class="nx">class</span><span class="o">=</span><span class="s2">&quot;caret&quot;</span><span class="o">&gt;&lt;/</span><span class="nx">b</span><span class="o">&gt;&lt;/</span><span class="nx">a</span><span class="o">&gt;</span></div><div class='line' id='LC48'><br/></div><div class='line' id='LC49'><br/></div><div class='line' id='LC50'>							<span class="o">&lt;</span><span class="nx">ul</span> <span class="nx">class</span><span class="o">=</span><span class="s2">&quot;dropdown-menu&quot;</span><span class="o">&gt;</span></div><div class='line' id='LC51'>								<span class="o">&lt;</span><span class="nx">li</span><span class="o">&gt;</span></div><div class='line' id='LC52'>									<span class="o">&lt;</span><span class="nx">a</span> <span class="nx">href</span><span class="o">=</span><span class="s2">&quot;{{URL::to(&#39;/users/&#39;.Auth::user()-&gt;username)}}&quot;</span><span class="o">&gt;</span><span class="nx">Profile</span><span class="o">&lt;/</span><span class="nx">a</span><span class="o">&gt;</span></div><div class='line' id='LC53'>								<span class="o">&lt;/</span><span class="nx">li</span><span class="o">&gt;</span></div><div class='line' id='LC54'>								<span class="o">&lt;</span><span class="nx">li</span> <span class="nx">class</span><span class="o">=</span><span class="s2">&quot;divider&quot;</span><span class="o">&gt;&lt;/</span><span class="nx">li</span><span class="o">&gt;</span></div><div class='line' id='LC55'>								<span class="o">&lt;</span><span class="nx">li</span><span class="o">&gt;</span></div><div class='line' id='LC56'>									<span class="o">&lt;</span><span class="nx">a</span> <span class="nx">href</span><span class="o">=</span><span class="s2">&quot;{{action(&#39;UsersController@SignOut&#39;)}}&quot;</span><span class="o">&gt;</span><span class="nx">Sign</span> <span class="nx">out</span><span class="o">&lt;/</span><span class="nx">a</span><span class="o">&gt;</span></div><div class='line' id='LC57'>								<span class="o">&lt;/</span><span class="nx">li</span><span class="o">&gt;</span></div><div class='line' id='LC58'>							<span class="o">&lt;/</span><span class="nx">ul</span><span class="o">&gt;</span></div><div class='line' id='LC59'>						<span class="o">&lt;/</span><span class="nx">li</span><span class="o">&gt;</span></div><div class='line' id='LC60'>					<span class="o">@</span><span class="k">else</span></div><div class='line' id='LC61'>						<span class="o">&lt;</span><span class="nx">li</span><span class="o">&gt;</span></div><div class='line' id='LC62'>							<span class="o">&lt;</span><span class="nx">a</span> <span class="nx">href</span><span class="o">=</span><span class="s2">&quot;{{action(&#39;UsersController@ShowSignUp&#39;)}}&quot;</span><span class="o">&gt;</span><span class="nx">Sign</span> <span class="nx">up</span><span class="o">&lt;/</span><span class="nx">a</span><span class="o">&gt;</span></div><div class='line' id='LC63'>						<span class="o">&lt;/</span><span class="nx">li</span><span class="o">&gt;</span></div><div class='line' id='LC64'>						<span class="o">&lt;</span><span class="nx">li</span><span class="o">&gt;</span></div><div class='line' id='LC65'>							<span class="o">&lt;</span><span class="nx">a</span> <span class="nx">href</span><span class="o">=</span><span class="s2">&quot;{{action(&#39;UsersController@ShowSignIn&#39;)}}&quot;</span><span class="o">&gt;</span><span class="nx">Sign</span> <span class="nx">in</span><span class="o">&lt;/</span><span class="nx">a</span><span class="o">&gt;</span></div><div class='line' id='LC66'>						<span class="o">&lt;/</span><span class="nx">li</span><span class="o">&gt;</span></div><div class='line' id='LC67'>					<span class="o">@</span><span class="k">endif</span></div><div class='line' id='LC68'>				<span class="o">&lt;/</span><span class="nx">ul</span><span class="o">&gt;</span></div><div class='line' id='LC69'>			<span class="o">&lt;/</span><span class="nx">div</span><span class="o">&gt;</span></div><div class='line' id='LC70'>		<span class="o">&lt;/</span><span class="nx">nav</span><span class="o">&gt;</span></div><div class='line' id='LC71'><br/></div><div class='line' id='LC72'>		<span class="o">@</span><span class="nx">yield</span><span class="p">(</span><span class="s1">&#39;content&#39;</span><span class="p">)</span></div><div class='line' id='LC73'>	<span class="o">&lt;/</span><span class="nx">div</span><span class="o">&gt;</span></div><div class='line' id='LC74'><span class="o">&lt;/</span><span class="nx">body</span><span class="o">&gt;</span></div><div class='line' id='LC75'><span class="o">&lt;/</span><span class="nx">html</span><span class="o">&gt;</span></div></pre></div></td>
          </tr>
        </table>
  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer">
    <ul class="site-footer-links right">
      <li><a href="https://status.github.com/">Status</a></li>
      <li><a href="http://developer.github.com">API</a></li>
      <li><a href="http://training.github.com">Training</a></li>
      <li><a href="http://shop.github.com">Shop</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/about">About</a></li>

    </ul>

    <a href="/">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2014 <span title="0.06885s from github-fe131-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="/site/terms">Terms</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
  </div><!-- /.site-footer -->
</div><!-- /.container -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-fullscreen-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="js-fullscreen-contents" placeholder="" data-suggester="fullscreen_suggester"></textarea>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped tooltipped-w" aria-label="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped tooltipped-w"
      aria-label="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-remove-close close js-ajax-error-dismiss"></a>
      Something went wrong with that request. Please try again.
    </div>

  </body>
</html>


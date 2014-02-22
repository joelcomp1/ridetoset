




<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>facebook-php-sdk/src/facebook.php at master · facebook/facebook-php-sdk · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <meta property="fb:app_id" content="1401488693436528"/>

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="facebook/facebook-php-sdk" name="twitter:title" /><meta content="facebook-php-sdk - Use the Facebook SDK for PHP to integrate with Facebook, help build engaging social apps, and get more users." name="twitter:description" /><meta content="https://2.gravatar.com/avatar/18a83f753fa76b3ea0d594247f4c93b1?d=https%3A%2F%2Fidenticons.github.com%2Faff495be3551563209790714027a7d38.png&amp;r=x&amp;s=400" name="twitter:image:src" />
<meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://2.gravatar.com/avatar/18a83f753fa76b3ea0d594247f4c93b1?d=https%3A%2F%2Fidenticons.github.com%2Faff495be3551563209790714027a7d38.png&amp;r=x&amp;s=400" property="og:image" /><meta content="facebook/facebook-php-sdk" property="og:title" /><meta content="https://github.com/facebook/facebook-php-sdk" property="og:url" /><meta content="facebook-php-sdk - Use the Facebook SDK for PHP to integrate with Facebook, help build engaging social apps, and get more users." property="og:description" />

    <meta name="hostname" content="github-fe119-cp1-prd.iad.github.net">
    <meta name="ruby" content="ruby 2.1.0p0-github-tcmalloc (87c9373a41) [x86_64-linux]">
    <link rel="assets" href="https://github.global.ssl.fastly.net/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035/">
    <link rel="xhr-socket" href="/_sockets" />


    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="60E7388E:0F13:805805:5308C7B0" name="octolytics-dimension-request_id" />
    

    
    
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="tNwsOmCeE4+pN26Co0MRMsOMoDRDTUbkUhZbz8tKR3I=" name="csrf-token" />

    <link href="https://github.global.ssl.fastly.net/assets/github-22cc6aa8138609ccbf0c65025e153af581662ef6.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://github.global.ssl.fastly.net/assets/github2-dd234c178c0a2e0769bab2b5c636ce8f3fc1f02a.css" media="all" rel="stylesheet" type="text/css" />
    
    


      <script crossorigin="anonymous" src="https://github.global.ssl.fastly.net/assets/frameworks-01ab94ef47d6293597922a1fab60e274e1d8f37e.js" type="text/javascript"></script>
      <script async="async" crossorigin="anonymous" src="https://github.global.ssl.fastly.net/assets/github-a8a26802e0e7283b39ee4507af78950399f2a5d1.js" type="text/javascript"></script>
      
      <meta http-equiv="x-pjax-version" content="df411d3c97b15f5ab1e253f83d14f069">

        <link data-pjax-transient rel='permalink' href='/facebook/facebook-php-sdk/blob/8e20b40868b6beb72a0d4452d2c275f48f25cbc5/src/facebook.php'>

  <meta name="description" content="facebook-php-sdk - Use the Facebook SDK for PHP to integrate with Facebook, help build engaging social apps, and get more users." />

  <meta content="69631" name="octolytics-dimension-user_id" /><meta content="facebook" name="octolytics-dimension-user_login" /><meta content="3077368" name="octolytics-dimension-repository_id" /><meta content="facebook/facebook-php-sdk" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="3077368" name="octolytics-dimension-repository_network_root_id" /><meta content="facebook/facebook-php-sdk" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/facebook/facebook-php-sdk/commits/master.atom" rel="alternate" title="Recent Commits to facebook-php-sdk:master" type="application/atom+xml" />

  </head>


  <body class="logged_out  env-production windows vis-public page-blob tipsy-tooltips">
    <div class="wrapper">
      
      
      
      


      
      <div class="header header-logged-out">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/">
      <span class="mega-octicon octicon-logo-github"></span>
    </a>

    <div class="header-actions">
        <a class="button primary" href="/join">Sign up</a>
      <a class="button signin" href="/login?return_to=%2Ffacebook%2Ffacebook-php-sdk%2Fblob%2Fmaster%2Fsrc%2Ffacebook.php">Sign in</a>
    </div>

    <div class="command-bar js-command-bar  in-repository">

      <ul class="top-nav">
          <li class="explore"><a href="/explore">Explore</a></li>
        <li class="features"><a href="/features">Features</a></li>
          <li class="enterprise"><a href="https://enterprise.github.com/">Enterprise</a></li>
          <li class="blog"><a href="/blog">Blog</a></li>
      </ul>
        <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">

<input type="text" data-hotkey="/ s" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    
    
      data-repo="facebook/facebook-php-sdk"
      data-branch="master"
      data-sha="7d426a5006b06ba75cf1013652caaa5f225a883b"
  >

    <input type="hidden" name="nwo" value="facebook/facebook-php-sdk" />

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
    </div>

  </div>
</div>




          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        

<ul class="pagehead-actions">


  <li>
    <a href="/login?return_to=%2Ffacebook%2Ffacebook-php-sdk"
    class="minibutton with-count js-toggler-target star-button tooltipped tooltipped-n"
    aria-label="You must be signed in to use this feature" rel="nofollow">
    <span class="octicon octicon-star"></span>Star
  </a>

    <a class="social-count js-social-count" href="/facebook/facebook-php-sdk/stargazers">
      3,243
    </a>

  </li>

    <li>
      <a href="/login?return_to=%2Ffacebook%2Ffacebook-php-sdk"
        class="minibutton with-count js-toggler-target fork-button tooltipped tooltipped-n"
        aria-label="You must be signed in to fork a repository" rel="nofollow">
        <span class="octicon octicon-git-branch"></span>Fork
      </a>
      <a href="/facebook/facebook-php-sdk/network" class="social-count">
        2,795
      </a>
    </li>
</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="repo-label"><span>public</span></span>
          <span class="mega-octicon octicon-repo"></span>
          <span class="author">
            <a href="/facebook" class="url fn" itemprop="url" rel="author"><span itemprop="title">facebook</span></a>
          </span>
          <span class="repohead-name-divider">/</span>
          <strong><a href="/facebook/facebook-php-sdk" class="js-current-repository js-repo-home-link">facebook-php-sdk</a></strong>

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
        <a href="/facebook/facebook-php-sdk" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-gotokey="c" data-pjax="true" data-selected-links="repo_source repo_downloads repo_commits repo_tags repo_branches /facebook/facebook-php-sdk">
          <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

        <li class="tooltipped tooltipped-w" aria-label="Issues">
          <a href="/facebook/facebook-php-sdk/issues" aria-label="Issues" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-gotokey="i" data-selected-links="repo_issues /facebook/facebook-php-sdk/issues">
            <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
            <span class='counter'>9</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>

      <li class="tooltipped tooltipped-w" aria-label="Pull Requests">
        <a href="/facebook/facebook-php-sdk/pulls" aria-label="Pull Requests" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-gotokey="p" data-selected-links="repo_pulls /facebook/facebook-php-sdk/pulls">
            <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
            <span class='counter'>0</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


    </ul>
    <div class="sunken-menu-separator"></div>
    <ul class="sunken-menu-group">

      <li class="tooltipped tooltipped-w" aria-label="Pulse">
        <a href="/facebook/facebook-php-sdk/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="pulse /facebook/facebook-php-sdk/pulse">
          <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Graphs">
        <a href="/facebook/facebook-php-sdk/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="repo_graphs repo_contributors /facebook/facebook-php-sdk/graphs">
          <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Network">
        <a href="/facebook/facebook-php-sdk/network" aria-label="Network" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-selected-links="repo_network /facebook/facebook-php-sdk/network">
          <span class="octicon octicon-git-branch"></span> <span class="full-word">Network</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>
    </ul>


  </div>
</div>

              <div class="only-with-full-nav">
                

  

<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone">
  <h3><strong>HTTPS</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/facebook/facebook-php-sdk.git" readonly="readonly">

    <span aria-label="copy to clipboard" class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/facebook/facebook-php-sdk.git" data-copied-hint="copied!"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone">
  <h3><strong>Subversion</strong> checkout URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/facebook/facebook-php-sdk" readonly="readonly">

    <span aria-label="copy to clipboard" class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/facebook/facebook-php-sdk" data-copied-hint="copied!"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


<p class="clone-options">You can clone with
      <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a>
      or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <span class="help tooltipped tooltipped-n" aria-label="Get help on which URL is right for you.">
    <a href="https://help.github.com/articles/which-remote-url-should-i-use">
    <span class="octicon octicon-question"></span>
    </a>
  </span>
</p>


  <a href="http://windows.github.com" class="minibutton sidebar-button">
    <span class="octicon octicon-device-desktop"></span>
    Clone in Desktop
  </a>

                <a href="/facebook/facebook-php-sdk/archive/master.zip"
                   class="minibutton sidebar-button"
                   title="Download this repository as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
              </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          


<!-- blob contrib key: blob_contributors:v21:8a9aee335bb3d66a345d22f3162ba775 -->

<p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

<a href="/facebook/facebook-php-sdk/find/master" data-pjax data-hotkey="t" class="js-show-file-finder" style="display:none">Show File Finder</a>

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
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
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
              <a href="/facebook/facebook-php-sdk/blob/master/src/facebook.php"
                 data-name="master"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="master">master</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/facebook/facebook-php-sdk/tree/v3.2.3/src/facebook.php"
                 data-name="v3.2.3"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v3.2.3">v3.2.3</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/facebook/facebook-php-sdk/tree/v3.2.2/src/facebook.php"
                 data-name="v3.2.2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v3.2.2">v3.2.2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/facebook/facebook-php-sdk/tree/v3.2.1/src/facebook.php"
                 data-name="v3.2.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v3.2.1">v3.2.1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/facebook/facebook-php-sdk/tree/v3.2.0/src/facebook.php"
                 data-name="v3.2.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v3.2.0">v3.2.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/facebook/facebook-php-sdk/tree/v3.1.1/src/facebook.php"
                 data-name="v3.1.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v3.1.1">v3.1.1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/facebook/facebook-php-sdk/tree/v3.1.0/src/facebook.php"
                 data-name="v3.1.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v3.1.0">v3.1.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/facebook/facebook-php-sdk/tree/v3.0.1/src/facebook.php"
                 data-name="v3.0.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v3.0.1">v3.0.1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/facebook/facebook-php-sdk/tree/v3.0.0/src/facebook.php"
                 data-name="v3.0.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v3.0.0">v3.0.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/facebook/facebook-php-sdk/tree/v2.1.2/src/facebook.php"
                 data-name="v2.1.2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v2.1.2">v2.1.2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/facebook/facebook-php-sdk/tree/v2.1.1/src/facebook.php"
                 data-name="v2.1.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v2.1.1">v2.1.1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/facebook/facebook-php-sdk/tree/v2.1.0/src/facebook.php"
                 data-name="v2.1.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v2.1.0">v2.1.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/facebook/facebook-php-sdk/tree/v2.0.7/src/facebook.php"
                 data-name="v2.0.7"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v2.0.7">v2.0.7</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/facebook/facebook-php-sdk/tree/v2.0.6/src/facebook.php"
                 data-name="v2.0.6"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v2.0.6">v2.0.6</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/facebook/facebook-php-sdk/tree/v2.0.4/src/facebook.php"
                 data-name="v2.0.4"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v2.0.4">v2.0.4</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/facebook/facebook-php-sdk/tree/v2.0.3/src/facebook.php"
                 data-name="v2.0.3"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v2.0.3">v2.0.3</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/facebook/facebook-php-sdk/tree/v2.0.2/src/facebook.php"
                 data-name="v2.0.2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v2.0.2">v2.0.2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/facebook/facebook-php-sdk/tree/v2.0.1/src/facebook.php"
                 data-name="v2.0.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v2.0.1">v2.0.1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/facebook/facebook-php-sdk/tree/v2.0.0/src/facebook.php"
                 data-name="v2.0.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v2.0.0">v2.0.0</a>
            </div> <!-- /.select-menu-item -->
        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="breadcrumb">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/facebook/facebook-php-sdk" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">facebook-php-sdk</span></a></span></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/facebook/facebook-php-sdk/tree/master/src" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">src</span></a></span><span class="separator"> / </span><strong class="final-path">facebook.php</strong> <span aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="src/facebook.php" data-copied-hint="copied!"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


  <div class="commit file-history-tease">
    <img alt="Mathieu Boillat" class="main-avatar js-avatar" data-user="4981939" height="24" src="https://2.gravatar.com/avatar/7a8dc0f9ea56ee67ad62dfca5095b5b8?d=https%3A%2F%2Fidenticons.github.com%2Fbf23630dd03ef037df02d51cd59ab130.png&amp;r=x&amp;s=140" width="24" />
    <span class="author"><a href="/ollea" rel="author">ollea</a></span>
    <time class="js-relative-date" data-title-format="YYYY-MM-DD HH:mm:ss" datetime="2014-02-21T02:19:09-08:00" title="2014-02-21 02:19:09">February 21, 2014</time>
    <div class="commit-title">
        <a href="/facebook/facebook-php-sdk/commit/ae71cdee05256c691f7507259eac1cd4a4fa4257" class="message" data-pjax="true" title="Update facebook.php">Update facebook.php</a>
    </div>

    <div class="participation">
      <p class="quickstat"><a href="#blob_contributors_box" rel="facebox"><strong>12</strong> contributors</a></p>
          <a class="avatar tooltipped tooltipped-s" aria-label="daaku" href="/facebook/facebook-php-sdk/commits/master/src/facebook.php?author=daaku"><img alt="Naitik Shah" class=" js-avatar" data-user="593" height="20" src="https://0.gravatar.com/avatar/162ba763482bf53ed1d9a4589fad393f?d=https%3A%2F%2Fidenticons.github.com%2Facc3e0404646c57502b480dc052c4fe1.png&amp;r=x&amp;s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="ptarjan" href="/facebook/facebook-php-sdk/commits/master/src/facebook.php?author=ptarjan"><img alt="Paul Tarjan" class=" js-avatar" data-user="40143" height="20" src="https://1.gravatar.com/avatar/4cd77fb0ea4d6cb5ad94f9ef61e17e9e?d=https%3A%2F%2Fidenticons.github.com%2F4ca1b8216b221669a9d9ef5c4900fda0.png&amp;r=x&amp;s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="codler" href="/facebook/facebook-php-sdk/commits/master/src/facebook.php?author=codler"><img alt="Han Lin Yap" class=" js-avatar" data-user="102052" height="20" src="https://0.gravatar.com/avatar/d400866ed03267fc211e1bdd1010ca96?d=https%3A%2F%2Fidenticons.github.com%2F9c4bb5ae42649e38328ce95c07849ed6.png&amp;r=x&amp;s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="jerrycainjr" href="/facebook/facebook-php-sdk/commits/master/src/facebook.php?author=jerrycainjr"><img alt="Jerry Cain" class=" js-avatar" data-user="133432" height="20" src="https://1.gravatar.com/avatar/1ff6e4fc5862f200d8d17bb01bc4337a?d=https%3A%2F%2Fidenticons.github.com%2Fb6d91e22825d1059f8ad3beacfa08057.png&amp;r=x&amp;s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="ollea" href="/facebook/facebook-php-sdk/commits/master/src/facebook.php?author=ollea"><img alt="Mathieu Boillat" class=" js-avatar" data-user="4981939" height="20" src="https://2.gravatar.com/avatar/7a8dc0f9ea56ee67ad62dfca5095b5b8?d=https%3A%2F%2Fidenticons.github.com%2Fbf23630dd03ef037df02d51cd59ab130.png&amp;r=x&amp;s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="scottmac" href="/facebook/facebook-php-sdk/commits/master/src/facebook.php?author=scottmac"><img alt="Scott MacVicar" class=" js-avatar" data-user="50088" height="20" src="https://0.gravatar.com/avatar/3c5a0318513620a5d04916e7deee6737?d=https%3A%2F%2Fidenticons.github.com%2F9d9b6df568499e7a2b1e4091229913f3.png&amp;r=x&amp;s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="JohnnyGoods" href="/facebook/facebook-php-sdk/commits/master/src/facebook.php?author=JohnnyGoods"><img alt="John Goodwin" class=" js-avatar" data-user="799182" height="20" src="https://0.gravatar.com/avatar/50573b29f62247127a444ab28cb4fb80?d=https%3A%2F%2Fidenticons.github.com%2F435846269d53292e91c7e66a522025b6.png&amp;r=x&amp;s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="irazasyed" href="/facebook/facebook-php-sdk/commits/master/src/facebook.php?author=irazasyed"><img alt="Syed I.R" class=" js-avatar" data-user="1915268" height="20" src="https://1.gravatar.com/avatar/fcadf2eb27503cffa3e92ad8c6ac1873?d=https%3A%2F%2Fidenticons.github.com%2Ff76f6dadec45f7e739a2400f44e77288.png&amp;r=x&amp;s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="gfosco" href="/facebook/facebook-php-sdk/commits/master/src/facebook.php?author=gfosco"><img alt="Fosco Marotto" class=" js-avatar" data-user="406732" height="20" src="https://2.gravatar.com/avatar/55ea332ef084f15ee20e95c473f7796a?d=https%3A%2F%2Fidenticons.github.com%2F7890d7dd81af361ebbff7108aec1e893.png&amp;r=x&amp;s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="scy" href="/facebook/facebook-php-sdk/commits/master/src/facebook.php?author=scy"><img alt="Tim Weber" class=" js-avatar" data-user="28629" height="20" src="https://1.gravatar.com/avatar/a88d36119d6a90de4a11147902143747?d=https%3A%2F%2Fidenticons.github.com%2F61dee0400b6103176dbc54320450c12f.png&amp;r=x&amp;s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="catclee" href="/facebook/facebook-php-sdk/commits/master/src/facebook.php?author=catclee"><img alt="Cat Lee" class=" js-avatar" data-user="146499" height="20" src="https://1.gravatar.com/avatar/30873fbde826053587df49c248bef33d?d=https%3A%2F%2Fidenticons.github.com%2F54e0a765a21feadcc9e89f5d5df6dde5.png&amp;r=x&amp;s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="arudolph" href="/facebook/facebook-php-sdk/commits/master/src/facebook.php?author=arudolph"><img alt="arudolph" class=" js-avatar" data-user="129055" height="20" src="https://2.gravatar.com/avatar/f2c540f20b55a164a4a4a723aac8c296?d=https%3A%2F%2Fidenticons.github.com%2F33d5ed4adb2aa46bd7a24accada4f3c3.png&amp;r=x&amp;s=140" width="20" /></a>


    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list">
          <li class="facebox-user-list-item">
            <img alt="Naitik Shah" class=" js-avatar" data-user="593" height="24" src="https://0.gravatar.com/avatar/162ba763482bf53ed1d9a4589fad393f?d=https%3A%2F%2Fidenticons.github.com%2Facc3e0404646c57502b480dc052c4fe1.png&amp;r=x&amp;s=140" width="24" />
            <a href="/daaku">daaku</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Paul Tarjan" class=" js-avatar" data-user="40143" height="24" src="https://1.gravatar.com/avatar/4cd77fb0ea4d6cb5ad94f9ef61e17e9e?d=https%3A%2F%2Fidenticons.github.com%2F4ca1b8216b221669a9d9ef5c4900fda0.png&amp;r=x&amp;s=140" width="24" />
            <a href="/ptarjan">ptarjan</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Han Lin Yap" class=" js-avatar" data-user="102052" height="24" src="https://0.gravatar.com/avatar/d400866ed03267fc211e1bdd1010ca96?d=https%3A%2F%2Fidenticons.github.com%2F9c4bb5ae42649e38328ce95c07849ed6.png&amp;r=x&amp;s=140" width="24" />
            <a href="/codler">codler</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Jerry Cain" class=" js-avatar" data-user="133432" height="24" src="https://1.gravatar.com/avatar/1ff6e4fc5862f200d8d17bb01bc4337a?d=https%3A%2F%2Fidenticons.github.com%2Fb6d91e22825d1059f8ad3beacfa08057.png&amp;r=x&amp;s=140" width="24" />
            <a href="/jerrycainjr">jerrycainjr</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Mathieu Boillat" class=" js-avatar" data-user="4981939" height="24" src="https://2.gravatar.com/avatar/7a8dc0f9ea56ee67ad62dfca5095b5b8?d=https%3A%2F%2Fidenticons.github.com%2Fbf23630dd03ef037df02d51cd59ab130.png&amp;r=x&amp;s=140" width="24" />
            <a href="/ollea">ollea</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Scott MacVicar" class=" js-avatar" data-user="50088" height="24" src="https://0.gravatar.com/avatar/3c5a0318513620a5d04916e7deee6737?d=https%3A%2F%2Fidenticons.github.com%2F9d9b6df568499e7a2b1e4091229913f3.png&amp;r=x&amp;s=140" width="24" />
            <a href="/scottmac">scottmac</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="John Goodwin" class=" js-avatar" data-user="799182" height="24" src="https://0.gravatar.com/avatar/50573b29f62247127a444ab28cb4fb80?d=https%3A%2F%2Fidenticons.github.com%2F435846269d53292e91c7e66a522025b6.png&amp;r=x&amp;s=140" width="24" />
            <a href="/JohnnyGoods">JohnnyGoods</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Syed I.R" class=" js-avatar" data-user="1915268" height="24" src="https://1.gravatar.com/avatar/fcadf2eb27503cffa3e92ad8c6ac1873?d=https%3A%2F%2Fidenticons.github.com%2Ff76f6dadec45f7e739a2400f44e77288.png&amp;r=x&amp;s=140" width="24" />
            <a href="/irazasyed">irazasyed</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Fosco Marotto" class=" js-avatar" data-user="406732" height="24" src="https://2.gravatar.com/avatar/55ea332ef084f15ee20e95c473f7796a?d=https%3A%2F%2Fidenticons.github.com%2F7890d7dd81af361ebbff7108aec1e893.png&amp;r=x&amp;s=140" width="24" />
            <a href="/gfosco">gfosco</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Tim Weber" class=" js-avatar" data-user="28629" height="24" src="https://1.gravatar.com/avatar/a88d36119d6a90de4a11147902143747?d=https%3A%2F%2Fidenticons.github.com%2F61dee0400b6103176dbc54320450c12f.png&amp;r=x&amp;s=140" width="24" />
            <a href="/scy">scy</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Cat Lee" class=" js-avatar" data-user="146499" height="24" src="https://1.gravatar.com/avatar/30873fbde826053587df49c248bef33d?d=https%3A%2F%2Fidenticons.github.com%2F54e0a765a21feadcc9e89f5d5df6dde5.png&amp;r=x&amp;s=140" width="24" />
            <a href="/catclee">catclee</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="arudolph" class=" js-avatar" data-user="129055" height="24" src="https://2.gravatar.com/avatar/f2c540f20b55a164a4a4a723aac8c296?d=https%3A%2F%2Fidenticons.github.com%2F33d5ed4adb2aa46bd7a24accada4f3c3.png&amp;r=x&amp;s=140" width="24" />
            <a href="/arudolph">arudolph</a>
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
          <span>229 lines (208 sloc)</span>
          <span class="meta-divider"></span>
        <span>6.534 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
            <a class="minibutton tooltipped tooltipped-w"
               href="http://windows.github.com" aria-label="Open this file in GitHub for Windows">
                <span class="octicon octicon-device-desktop"></span> Open
            </a>
              <a class="minibutton disabled tooltipped tooltipped-w" href="#"
                 aria-label="You must be signed in to make or propose changes">Edit</a>
          <a href="/facebook/facebook-php-sdk/raw/master/src/facebook.php" class="button minibutton " id="raw-url">Raw</a>
            <a href="/facebook/facebook-php-sdk/blame/master/src/facebook.php" class="button minibutton js-update-url-with-hash">Blame</a>
          <a href="/facebook/facebook-php-sdk/commits/master/src/facebook.php" class="button minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->
          <a class="minibutton danger disabled empty-icon tooltipped tooltipped-w" href="#"
             aria-label="You must be signed in to make or propose changes">
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
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>
<span id="L102" rel="#L102">102</span>
<span id="L103" rel="#L103">103</span>
<span id="L104" rel="#L104">104</span>
<span id="L105" rel="#L105">105</span>
<span id="L106" rel="#L106">106</span>
<span id="L107" rel="#L107">107</span>
<span id="L108" rel="#L108">108</span>
<span id="L109" rel="#L109">109</span>
<span id="L110" rel="#L110">110</span>
<span id="L111" rel="#L111">111</span>
<span id="L112" rel="#L112">112</span>
<span id="L113" rel="#L113">113</span>
<span id="L114" rel="#L114">114</span>
<span id="L115" rel="#L115">115</span>
<span id="L116" rel="#L116">116</span>
<span id="L117" rel="#L117">117</span>
<span id="L118" rel="#L118">118</span>
<span id="L119" rel="#L119">119</span>
<span id="L120" rel="#L120">120</span>
<span id="L121" rel="#L121">121</span>
<span id="L122" rel="#L122">122</span>
<span id="L123" rel="#L123">123</span>
<span id="L124" rel="#L124">124</span>
<span id="L125" rel="#L125">125</span>
<span id="L126" rel="#L126">126</span>
<span id="L127" rel="#L127">127</span>
<span id="L128" rel="#L128">128</span>
<span id="L129" rel="#L129">129</span>
<span id="L130" rel="#L130">130</span>
<span id="L131" rel="#L131">131</span>
<span id="L132" rel="#L132">132</span>
<span id="L133" rel="#L133">133</span>
<span id="L134" rel="#L134">134</span>
<span id="L135" rel="#L135">135</span>
<span id="L136" rel="#L136">136</span>
<span id="L137" rel="#L137">137</span>
<span id="L138" rel="#L138">138</span>
<span id="L139" rel="#L139">139</span>
<span id="L140" rel="#L140">140</span>
<span id="L141" rel="#L141">141</span>
<span id="L142" rel="#L142">142</span>
<span id="L143" rel="#L143">143</span>
<span id="L144" rel="#L144">144</span>
<span id="L145" rel="#L145">145</span>
<span id="L146" rel="#L146">146</span>
<span id="L147" rel="#L147">147</span>
<span id="L148" rel="#L148">148</span>
<span id="L149" rel="#L149">149</span>
<span id="L150" rel="#L150">150</span>
<span id="L151" rel="#L151">151</span>
<span id="L152" rel="#L152">152</span>
<span id="L153" rel="#L153">153</span>
<span id="L154" rel="#L154">154</span>
<span id="L155" rel="#L155">155</span>
<span id="L156" rel="#L156">156</span>
<span id="L157" rel="#L157">157</span>
<span id="L158" rel="#L158">158</span>
<span id="L159" rel="#L159">159</span>
<span id="L160" rel="#L160">160</span>
<span id="L161" rel="#L161">161</span>
<span id="L162" rel="#L162">162</span>
<span id="L163" rel="#L163">163</span>
<span id="L164" rel="#L164">164</span>
<span id="L165" rel="#L165">165</span>
<span id="L166" rel="#L166">166</span>
<span id="L167" rel="#L167">167</span>
<span id="L168" rel="#L168">168</span>
<span id="L169" rel="#L169">169</span>
<span id="L170" rel="#L170">170</span>
<span id="L171" rel="#L171">171</span>
<span id="L172" rel="#L172">172</span>
<span id="L173" rel="#L173">173</span>
<span id="L174" rel="#L174">174</span>
<span id="L175" rel="#L175">175</span>
<span id="L176" rel="#L176">176</span>
<span id="L177" rel="#L177">177</span>
<span id="L178" rel="#L178">178</span>
<span id="L179" rel="#L179">179</span>
<span id="L180" rel="#L180">180</span>
<span id="L181" rel="#L181">181</span>
<span id="L182" rel="#L182">182</span>
<span id="L183" rel="#L183">183</span>
<span id="L184" rel="#L184">184</span>
<span id="L185" rel="#L185">185</span>
<span id="L186" rel="#L186">186</span>
<span id="L187" rel="#L187">187</span>
<span id="L188" rel="#L188">188</span>
<span id="L189" rel="#L189">189</span>
<span id="L190" rel="#L190">190</span>
<span id="L191" rel="#L191">191</span>
<span id="L192" rel="#L192">192</span>
<span id="L193" rel="#L193">193</span>
<span id="L194" rel="#L194">194</span>
<span id="L195" rel="#L195">195</span>
<span id="L196" rel="#L196">196</span>
<span id="L197" rel="#L197">197</span>
<span id="L198" rel="#L198">198</span>
<span id="L199" rel="#L199">199</span>
<span id="L200" rel="#L200">200</span>
<span id="L201" rel="#L201">201</span>
<span id="L202" rel="#L202">202</span>
<span id="L203" rel="#L203">203</span>
<span id="L204" rel="#L204">204</span>
<span id="L205" rel="#L205">205</span>
<span id="L206" rel="#L206">206</span>
<span id="L207" rel="#L207">207</span>
<span id="L208" rel="#L208">208</span>
<span id="L209" rel="#L209">209</span>
<span id="L210" rel="#L210">210</span>
<span id="L211" rel="#L211">211</span>
<span id="L212" rel="#L212">212</span>
<span id="L213" rel="#L213">213</span>
<span id="L214" rel="#L214">214</span>
<span id="L215" rel="#L215">215</span>
<span id="L216" rel="#L216">216</span>
<span id="L217" rel="#L217">217</span>
<span id="L218" rel="#L218">218</span>
<span id="L219" rel="#L219">219</span>
<span id="L220" rel="#L220">220</span>
<span id="L221" rel="#L221">221</span>
<span id="L222" rel="#L222">222</span>
<span id="L223" rel="#L223">223</span>
<span id="L224" rel="#L224">224</span>
<span id="L225" rel="#L225">225</span>
<span id="L226" rel="#L226">226</span>
<span id="L227" rel="#L227">227</span>
<span id="L228" rel="#L228">228</span>

            </td>
            <td class="blob-line-code"><div class="code-body highlight"><pre><div class='line' id='LC1'><span class="o">&lt;?</span><span class="nx">php</span></div><div class='line' id='LC2'><span class="sd">/**</span></div><div class='line' id='LC3'><span class="sd"> * Copyright 2011 Facebook, Inc.</span></div><div class='line' id='LC4'><span class="sd"> *</span></div><div class='line' id='LC5'><span class="sd"> * Licensed under the Apache License, Version 2.0 (the &quot;License&quot;); you may</span></div><div class='line' id='LC6'><span class="sd"> * not use this file except in compliance with the License. You may obtain</span></div><div class='line' id='LC7'><span class="sd"> * a copy of the License at</span></div><div class='line' id='LC8'><span class="sd"> *</span></div><div class='line' id='LC9'><span class="sd"> *     http://www.apache.org/licenses/LICENSE-2.0</span></div><div class='line' id='LC10'><span class="sd"> *</span></div><div class='line' id='LC11'><span class="sd"> * Unless required by applicable law or agreed to in writing, software</span></div><div class='line' id='LC12'><span class="sd"> * distributed under the License is distributed on an &quot;AS IS&quot; BASIS, WITHOUT</span></div><div class='line' id='LC13'><span class="sd"> * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the</span></div><div class='line' id='LC14'><span class="sd"> * License for the specific language governing permissions and limitations</span></div><div class='line' id='LC15'><span class="sd"> * under the License.</span></div><div class='line' id='LC16'><span class="sd"> */</span></div><div class='line' id='LC17'><br/></div><div class='line' id='LC18'><span class="k">require_once</span> <span class="s2">&quot;base_facebook.php&quot;</span><span class="p">;</span></div><div class='line' id='LC19'><br/></div><div class='line' id='LC20'><span class="sd">/**</span></div><div class='line' id='LC21'><span class="sd"> * Extends the BaseFacebook class with the intent of using</span></div><div class='line' id='LC22'><span class="sd"> * PHP sessions to store user ids and access tokens.</span></div><div class='line' id='LC23'><span class="sd"> */</span></div><div class='line' id='LC24'><span class="k">class</span> <span class="nc">Facebook</span> <span class="k">extends</span> <span class="nx">BaseFacebook</span></div><div class='line' id='LC25'><span class="p">{</span></div><div class='line' id='LC26'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC27'><span class="sd">   * Cookie prefix</span></div><div class='line' id='LC28'><span class="sd">   */</span></div><div class='line' id='LC29'>&nbsp;&nbsp;<span class="k">const</span> <span class="no">FBSS_COOKIE_NAME</span> <span class="o">=</span> <span class="s1">&#39;fbss&#39;</span><span class="p">;</span></div><div class='line' id='LC30'><br/></div><div class='line' id='LC31'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC32'><span class="sd">   * We can set this to a high number because the main session</span></div><div class='line' id='LC33'><span class="sd">   * expiration will trump this.</span></div><div class='line' id='LC34'><span class="sd">   */</span></div><div class='line' id='LC35'>&nbsp;&nbsp;<span class="k">const</span> <span class="no">FBSS_COOKIE_EXPIRE</span> <span class="o">=</span> <span class="mi">31556926</span><span class="p">;</span> <span class="c1">// 1 year</span></div><div class='line' id='LC36'><br/></div><div class='line' id='LC37'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC38'><span class="sd">   * Stores the shared session ID if one is set.</span></div><div class='line' id='LC39'><span class="sd">   *</span></div><div class='line' id='LC40'><span class="sd">   * @var string</span></div><div class='line' id='LC41'><span class="sd">   */</span></div><div class='line' id='LC42'>&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$sharedSessionID</span><span class="p">;</span></div><div class='line' id='LC43'><br/></div><div class='line' id='LC44'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC45'><span class="sd">   * Identical to the parent constructor, except that</span></div><div class='line' id='LC46'><span class="sd">   * we start a PHP session to store the user ID and</span></div><div class='line' id='LC47'><span class="sd">   * access token if during the course of execution</span></div><div class='line' id='LC48'><span class="sd">   * we discover them.</span></div><div class='line' id='LC49'><span class="sd">   *</span></div><div class='line' id='LC50'><span class="sd">   * @param array $config the application configuration. Additionally</span></div><div class='line' id='LC51'><span class="sd">   * accepts &quot;sharedSession&quot; as a boolean to turn on a secondary</span></div><div class='line' id='LC52'><span class="sd">   * cookie for environments with a shared session (that is, your app</span></div><div class='line' id='LC53'><span class="sd">   * shares the domain with other apps).</span></div><div class='line' id='LC54'><span class="sd">   *</span></div><div class='line' id='LC55'><span class="sd">   * @see BaseFacebook::__construct</span></div><div class='line' id='LC56'><span class="sd">   */</span></div><div class='line' id='LC57'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">__construct</span><span class="p">(</span><span class="nv">$config</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC58'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">((</span><span class="nb">function_exists</span><span class="p">(</span><span class="s1">&#39;session_status&#39;</span><span class="p">)</span> </div><div class='line' id='LC59'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">&amp;&amp;</span> <span class="nx">session_status</span><span class="p">()</span> <span class="o">!==</span> <span class="nx">PHP_SESSION_ACTIVE</span><span class="p">)</span> <span class="o">||</span> <span class="o">!</span><span class="nb">session_id</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC60'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">session_start</span><span class="p">();</span></div><div class='line' id='LC61'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC62'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">parent</span><span class="o">::</span><span class="na">__construct</span><span class="p">(</span><span class="nv">$config</span><span class="p">);</span></div><div class='line' id='LC63'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$config</span><span class="p">[</span><span class="s1">&#39;sharedSession&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC64'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">initSharedSession</span><span class="p">();</span></div><div class='line' id='LC65'><br/></div><div class='line' id='LC66'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// re-load the persisted state, since parent</span></div><div class='line' id='LC67'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// attempted to read out of non-shared cookie</span></div><div class='line' id='LC68'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$state</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getPersistentData</span><span class="p">(</span><span class="s1">&#39;state&#39;</span><span class="p">);</span></div><div class='line' id='LC69'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$state</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC70'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">state</span> <span class="o">=</span> <span class="nv">$state</span><span class="p">;</span></div><div class='line' id='LC71'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC72'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">state</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC73'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC74'><br/></div><div class='line' id='LC75'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC76'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC77'><br/></div><div class='line' id='LC78'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC79'><span class="sd">   * Supported keys for persistent data</span></div><div class='line' id='LC80'><span class="sd">   *</span></div><div class='line' id='LC81'><span class="sd">   * @var array</span></div><div class='line' id='LC82'><span class="sd">   */</span></div><div class='line' id='LC83'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">static</span> <span class="nv">$kSupportedKeys</span> <span class="o">=</span></div><div class='line' id='LC84'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">array</span><span class="p">(</span><span class="s1">&#39;state&#39;</span><span class="p">,</span> <span class="s1">&#39;code&#39;</span><span class="p">,</span> <span class="s1">&#39;access_token&#39;</span><span class="p">,</span> <span class="s1">&#39;user_id&#39;</span><span class="p">);</span></div><div class='line' id='LC85'><br/></div><div class='line' id='LC86'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC87'><span class="sd">   * Initiates Shared Session</span></div><div class='line' id='LC88'><span class="sd">   */</span></div><div class='line' id='LC89'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">initSharedSession</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC90'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$cookie_name</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getSharedSessionCookieName</span><span class="p">();</span></div><div class='line' id='LC91'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$_COOKIE</span><span class="p">[</span><span class="nv">$cookie_name</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC92'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$data</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">parseSignedRequest</span><span class="p">(</span><span class="nv">$_COOKIE</span><span class="p">[</span><span class="nv">$cookie_name</span><span class="p">]);</span></div><div class='line' id='LC93'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$data</span> <span class="o">&amp;&amp;</span> <span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$data</span><span class="p">[</span><span class="s1">&#39;domain&#39;</span><span class="p">])</span> <span class="o">&amp;&amp;</span></div><div class='line' id='LC94'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">self</span><span class="o">::</span><span class="na">isAllowedDomain</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getHttpHost</span><span class="p">(),</span> <span class="nv">$data</span><span class="p">[</span><span class="s1">&#39;domain&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC95'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// good case</span></div><div class='line' id='LC96'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sharedSessionID</span> <span class="o">=</span> <span class="nv">$data</span><span class="p">[</span><span class="s1">&#39;id&#39;</span><span class="p">];</span></div><div class='line' id='LC97'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span><span class="p">;</span></div><div class='line' id='LC98'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC99'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// ignoring potentially unreachable data</span></div><div class='line' id='LC100'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC101'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// evil/corrupt/missing case</span></div><div class='line' id='LC102'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$base_domain</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getBaseDomain</span><span class="p">();</span></div><div class='line' id='LC103'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sharedSessionID</span> <span class="o">=</span> <span class="nb">md5</span><span class="p">(</span><span class="nb">uniqid</span><span class="p">(</span><span class="nx">mt_rand</span><span class="p">(),</span> <span class="k">true</span><span class="p">));</span></div><div class='line' id='LC104'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$cookie_value</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">makeSignedRequest</span><span class="p">(</span></div><div class='line' id='LC105'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">array</span><span class="p">(</span></div><div class='line' id='LC106'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;domain&#39;</span> <span class="o">=&gt;</span> <span class="nv">$base_domain</span><span class="p">,</span></div><div class='line' id='LC107'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;id&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sharedSessionID</span><span class="p">,</span></div><div class='line' id='LC108'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">)</span></div><div class='line' id='LC109'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC110'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$_COOKIE</span><span class="p">[</span><span class="nv">$cookie_name</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$cookie_value</span><span class="p">;</span></div><div class='line' id='LC111'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nx">headers_sent</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC112'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$expire</span> <span class="o">=</span> <span class="nb">time</span><span class="p">()</span> <span class="o">+</span> <span class="nx">self</span><span class="o">::</span><span class="na">FBSS_COOKIE_EXPIRE</span><span class="p">;</span></div><div class='line' id='LC113'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">setcookie</span><span class="p">(</span><span class="nv">$cookie_name</span><span class="p">,</span> <span class="nv">$cookie_value</span><span class="p">,</span> <span class="nv">$expire</span><span class="p">,</span> <span class="s1">&#39;/&#39;</span><span class="p">,</span> <span class="s1">&#39;.&#39;</span><span class="o">.</span><span class="nv">$base_domain</span><span class="p">);</span></div><div class='line' id='LC114'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC115'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// @codeCoverageIgnoreStart</span></div><div class='line' id='LC116'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">self</span><span class="o">::</span><span class="na">errorLog</span><span class="p">(</span></div><div class='line' id='LC117'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;Shared session ID cookie could not be set! You must ensure you &#39;</span><span class="o">.</span></div><div class='line' id='LC118'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;create the Facebook instance before headers have been sent. This &#39;</span><span class="o">.</span></div><div class='line' id='LC119'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;will cause authentication issues after the first request.&#39;</span></div><div class='line' id='LC120'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC121'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// @codeCoverageIgnoreEnd</span></div><div class='line' id='LC122'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC123'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC124'><br/></div><div class='line' id='LC125'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC126'><span class="sd">   * Provides the implementations of the inherited abstract</span></div><div class='line' id='LC127'><span class="sd">   * methods. The implementation uses PHP sessions to maintain</span></div><div class='line' id='LC128'><span class="sd">   * a store for authorization codes, user ids, CSRF states, and</span></div><div class='line' id='LC129'><span class="sd">   * access tokens.</span></div><div class='line' id='LC130'><span class="sd">   */</span></div><div class='line' id='LC131'><br/></div><div class='line' id='LC132'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC133'><span class="sd">   * {@inheritdoc}</span></div><div class='line' id='LC134'><span class="sd">   *</span></div><div class='line' id='LC135'><span class="sd">   * @see BaseFacebook::setPersistentData()</span></div><div class='line' id='LC136'><span class="sd">   */</span></div><div class='line' id='LC137'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">setPersistentData</span><span class="p">(</span><span class="nv">$key</span><span class="p">,</span> <span class="nv">$value</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC138'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">in_array</span><span class="p">(</span><span class="nv">$key</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="nv">$kSupportedKeys</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC139'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">self</span><span class="o">::</span><span class="na">errorLog</span><span class="p">(</span><span class="s1">&#39;Unsupported key passed to setPersistentData.&#39;</span><span class="p">);</span></div><div class='line' id='LC140'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span><span class="p">;</span></div><div class='line' id='LC141'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC142'><br/></div><div class='line' id='LC143'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$session_var_name</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">constructSessionVariableName</span><span class="p">(</span><span class="nv">$key</span><span class="p">);</span></div><div class='line' id='LC144'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$_SESSION</span><span class="p">[</span><span class="nv">$session_var_name</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$value</span><span class="p">;</span></div><div class='line' id='LC145'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC146'><br/></div><div class='line' id='LC147'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC148'><span class="sd">   * {@inheritdoc}</span></div><div class='line' id='LC149'><span class="sd">   *</span></div><div class='line' id='LC150'><span class="sd">   * @see BaseFacebook::getPersistentData()</span></div><div class='line' id='LC151'><span class="sd">   */</span></div><div class='line' id='LC152'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">getPersistentData</span><span class="p">(</span><span class="nv">$key</span><span class="p">,</span> <span class="nv">$default</span> <span class="o">=</span> <span class="k">false</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC153'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">in_array</span><span class="p">(</span><span class="nv">$key</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="nv">$kSupportedKeys</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC154'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">self</span><span class="o">::</span><span class="na">errorLog</span><span class="p">(</span><span class="s1">&#39;Unsupported key passed to getPersistentData.&#39;</span><span class="p">);</span></div><div class='line' id='LC155'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$default</span><span class="p">;</span></div><div class='line' id='LC156'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC157'><br/></div><div class='line' id='LC158'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$session_var_name</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">constructSessionVariableName</span><span class="p">(</span><span class="nv">$key</span><span class="p">);</span></div><div class='line' id='LC159'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nb">isset</span><span class="p">(</span><span class="nv">$_SESSION</span><span class="p">[</span><span class="nv">$session_var_name</span><span class="p">])</span> <span class="o">?</span></div><div class='line' id='LC160'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$_SESSION</span><span class="p">[</span><span class="nv">$session_var_name</span><span class="p">]</span> <span class="o">:</span> <span class="nv">$default</span><span class="p">;</span></div><div class='line' id='LC161'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC162'><br/></div><div class='line' id='LC163'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC164'><span class="sd">   * {@inheritdoc}</span></div><div class='line' id='LC165'><span class="sd">   *</span></div><div class='line' id='LC166'><span class="sd">   * @see BaseFacebook::clearPersistentData()</span></div><div class='line' id='LC167'><span class="sd">   */</span></div><div class='line' id='LC168'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">clearPersistentData</span><span class="p">(</span><span class="nv">$key</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC169'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">in_array</span><span class="p">(</span><span class="nv">$key</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="nv">$kSupportedKeys</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC170'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">self</span><span class="o">::</span><span class="na">errorLog</span><span class="p">(</span><span class="s1">&#39;Unsupported key passed to clearPersistentData.&#39;</span><span class="p">);</span></div><div class='line' id='LC171'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span><span class="p">;</span></div><div class='line' id='LC172'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC173'><br/></div><div class='line' id='LC174'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$session_var_name</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">constructSessionVariableName</span><span class="p">(</span><span class="nv">$key</span><span class="p">);</span></div><div class='line' id='LC175'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$_SESSION</span><span class="p">[</span><span class="nv">$session_var_name</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC176'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">unset</span><span class="p">(</span><span class="nv">$_SESSION</span><span class="p">[</span><span class="nv">$session_var_name</span><span class="p">]);</span></div><div class='line' id='LC177'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC178'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC179'><br/></div><div class='line' id='LC180'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC181'><span class="sd">   * {@inheritdoc}</span></div><div class='line' id='LC182'><span class="sd">   *</span></div><div class='line' id='LC183'><span class="sd">   * @see BaseFacebook::clearAllPersistentData()</span></div><div class='line' id='LC184'><span class="sd">   */</span></div><div class='line' id='LC185'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">clearAllPersistentData</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC186'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="nv">$kSupportedKeys</span> <span class="k">as</span> <span class="nv">$key</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC187'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">clearPersistentData</span><span class="p">(</span><span class="nv">$key</span><span class="p">);</span></div><div class='line' id='LC188'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC189'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sharedSessionID</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC190'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">deleteSharedSessionCookie</span><span class="p">();</span></div><div class='line' id='LC191'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC192'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC193'><br/></div><div class='line' id='LC194'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC195'><span class="sd">   * Deletes Shared session cookie</span></div><div class='line' id='LC196'><span class="sd">   */</span></div><div class='line' id='LC197'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">deleteSharedSessionCookie</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC198'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$cookie_name</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getSharedSessionCookieName</span><span class="p">();</span></div><div class='line' id='LC199'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">unset</span><span class="p">(</span><span class="nv">$_COOKIE</span><span class="p">[</span><span class="nv">$cookie_name</span><span class="p">]);</span></div><div class='line' id='LC200'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$base_domain</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getBaseDomain</span><span class="p">();</span></div><div class='line' id='LC201'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">setcookie</span><span class="p">(</span><span class="nv">$cookie_name</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="mi">1</span><span class="p">,</span> <span class="s1">&#39;/&#39;</span><span class="p">,</span> <span class="s1">&#39;.&#39;</span><span class="o">.</span><span class="nv">$base_domain</span><span class="p">);</span></div><div class='line' id='LC202'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC203'><br/></div><div class='line' id='LC204'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC205'><span class="sd">   * Returns the Shared session cookie name</span></div><div class='line' id='LC206'><span class="sd">   *</span></div><div class='line' id='LC207'><span class="sd">   * @return string The Shared session cookie name</span></div><div class='line' id='LC208'><span class="sd">   */</span></div><div class='line' id='LC209'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">getSharedSessionCookieName</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC210'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nx">self</span><span class="o">::</span><span class="na">FBSS_COOKIE_NAME</span> <span class="o">.</span> <span class="s1">&#39;_&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getAppId</span><span class="p">();</span></div><div class='line' id='LC211'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC212'><br/></div><div class='line' id='LC213'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC214'><span class="sd">   * Constructs and returns the name of the session key.</span></div><div class='line' id='LC215'><span class="sd">   *</span></div><div class='line' id='LC216'><span class="sd">   * @see setPersistentData()</span></div><div class='line' id='LC217'><span class="sd">   * @param string $key The key for which the session variable name to construct.</span></div><div class='line' id='LC218'><span class="sd">   *</span></div><div class='line' id='LC219'><span class="sd">   * @return string The name of the session key.</span></div><div class='line' id='LC220'><span class="sd">   */</span></div><div class='line' id='LC221'>&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">constructSessionVariableName</span><span class="p">(</span><span class="nv">$key</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC222'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$parts</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;fb&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getAppId</span><span class="p">(),</span> <span class="nv">$key</span><span class="p">);</span></div><div class='line' id='LC223'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sharedSessionID</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC224'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">array_unshift</span><span class="p">(</span><span class="nv">$parts</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sharedSessionID</span><span class="p">);</span></div><div class='line' id='LC225'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC226'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nb">implode</span><span class="p">(</span><span class="s1">&#39;_&#39;</span><span class="p">,</span> <span class="nv">$parts</span><span class="p">);</span></div><div class='line' id='LC227'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC228'><span class="p">}</span></div></pre></div></td>
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
      <li>&copy; 2014 <span title="0.02455s from github-fe119-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
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


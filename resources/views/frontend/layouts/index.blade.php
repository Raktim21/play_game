<!doctype html>
<html class="no-js" lang="">

<head>
    @include('frontend.includes.header')
</head>

<body>

  <div class="container-fluid top">
      <div class="left">
          <h1><a href="member/UserHome.html"><img src="{{ asset('frontend_assets/img/logoa139.png?v=0.01') }}"></a></h1>
          <div id="searchWrap" class="search-wrap" style="">
            <div>
                <input id="searchInputMob" class="search-input" type="text" onkeyup="searchEventLogout()" placeholder="Search Events">
                <button id="searchClearMob" class="search-clear" onclick="clearSearch()" style="display:none;"></button>
            </div>
            <div id="searchResultMob" class="suggestion-wrap" style="display:none;">
              <ul id="searchListMob">

              </ul>
            </div>
          </div>
      </div>
      <!-- top right  -->
      <form name="loginForm" onsubmit="return validateForm()" action="https://masti247.com/member/Account/Loggedin;jsessionid=AF4B73DF109F617408457745695EF9C4" method="post" accept-charset="utf-8" autocomplete="off">
          <div class="right right-signup">
              <i class="fa fa-user"></i>
              <input type="text" class="input" placeholder="Username" name="userid">
              <input type="text" class="input" id="addressBox" style="display:none;" placeholder="ip" name="adminId">
              <input type="password" class="input" placeholder="Password" name="password">

              <span id="loginBoxAuthenticateImage">
                  <canvas id="canvas" style="width:64px;height:auto;position:absolute;top:27px;margin-left:82px;color:#000;font-weight:bold;"  width="100" height="40"></canvas></span>
              <input type="text" class="input" placeholder="Validation" name="code">

              <button type="submit" class="login">Login
                  <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </button>
              <br>
              <span class="error" style="position:absolute;margin-left:20px;background:none;color:#d0021b" id="dheaderError"></span>
              <!-- top right end  -->
          </div>
      </form>
  </div>
  

  @include('frontend.includes.nav')


  @yield('content')

  


  @include('frontend.includes.footer')
  @include('frontend.includes.script')

    
</body>

</html>

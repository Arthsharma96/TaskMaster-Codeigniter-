// logout_on_back.js

(function() {
  // If the user presses the back button, redirect to logout
  window.onpopstate = function(event) {
      window.location.href = base_url + 'user/logout';
  };

  // Push the current state to the history stack
  window.history.pushState(null, null, window.location.href);
})();

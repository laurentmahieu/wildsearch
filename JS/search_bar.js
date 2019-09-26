

$(document).on('ready', function() {
  
  $('.field').on('focus', function() {
    $('body').addClass('is-focus');
  });
  
  $('.field').on('blur', function() {
    $('body').removeClass('is-focus is-type');
  });
  
  $('.field').on('keydown', function(event) {
    $('body').addClass('is-type');
    if((event.which === 8) && $(this).val() === '') {
      $('body').removeClass('is-type');
    }
  });
  
});



  (function(w,d,t,u,n,s,e){w['SwiftypeObject']=n;w[n]=w[n]||function(){
  (w[n].q=w[n].q||[]).push(arguments);};s=d.createElement(t);
  e=d.getElementsByTagName(t)[0];s.async=1;s.src=u;e.parentNode.insertBefore(s,e);
  })(window,document,'script','//s.swiftypecdn.com/install/v2/st.js','_st');
  
  _st('install','Jswz-feqcz7aUw5GY2xD','2.0.0');

  